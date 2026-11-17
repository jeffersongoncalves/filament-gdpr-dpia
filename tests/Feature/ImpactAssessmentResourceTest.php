<?php

use JeffersonGoncalves\Filament\GdprDpia\GdprDpiaPlugin;
use JeffersonGoncalves\Filament\GdprDpia\Resources\ImpactAssessments\ImpactAssessmentActions;
use JeffersonGoncalves\Filament\GdprDpia\Resources\ImpactAssessments\ImpactAssessmentResource;
use JeffersonGoncalves\Filament\GdprDpia\Resources\ImpactAssessments\Pages\CreateImpactAssessment;
use JeffersonGoncalves\Filament\GdprDpia\Resources\ImpactAssessments\Pages\EditImpactAssessment;
use JeffersonGoncalves\Filament\GdprDpia\Resources\ImpactAssessments\Pages\ListImpactAssessments;
use JeffersonGoncalves\Filament\GdprDpia\Tests\Fixtures\TestUser;
use JeffersonGoncalves\Gdpr\Enums\LegalBasis;
use JeffersonGoncalves\GdprDpia\Enums\AssessmentStatus;
use JeffersonGoncalves\GdprDpia\Enums\RiskLevel;
use JeffersonGoncalves\GdprDpia\Models\ImpactAssessment;
use JeffersonGoncalves\GdprRecords\Models\ProcessingActivity;
use Livewire\Livewire;

beforeEach(function () {
    $this->actingAs(TestUser::create(['name' => 'Anna Schmidt', 'email' => 'dpo@example.com']));
});

function risky(): ImpactAssessment
{
    return ImpactAssessment::create([
        'title' => 'Fraud scoring',
        'risks' => [['title' => 'Wrong denial', 'threat' => 'unawareness', 'likelihood' => 2, 'impact' => 3, 'residual_likelihood' => 1, 'residual_impact' => 3]],
    ]);
}

it('creates an assessment linked to a processing activity, with scored risks', function () {
    $activity = ProcessingActivity::create(['name' => 'Fraud scoring', 'purpose' => 'Prevent fraud']);

    Livewire::test(CreateImpactAssessment::class)
        ->fillForm([
            'title' => 'Fraud scoring',
            'processing_activity_id' => $activity->getKey(),
            'necessity' => 'Only payment metadata',
            'risks' => [['title' => 'Wrong denial', 'threat' => 'unawareness', 'likelihood' => '2', 'impact' => '3', 'residual_likelihood' => '1', 'residual_impact' => '3']],
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    $dpia = ImpactAssessment::sole();

    expect($dpia->processingActivity->is($activity))->toBeTrue()
        ->and($dpia->highestRisk(residual: false))->toBe(RiskLevel::High)
        ->and($dpia->highestRisk())->toBe(RiskLevel::Medium);
});

it('lists assessments with their risk levels', function () {
    $dpia = risky();

    Livewire::test(ListImpactAssessments::class)
        ->assertCanSeeTableRecords([$dpia])
        ->assertSee('High')
        ->assertSee('Medium')
        ->assertSee('Draft');
});

it('approves with the approver name', function () {
    $dpia = risky();

    Livewire::test(EditImpactAssessment::class, ['record' => $dpia->getKey()])
        ->callAction('approve', ['approved_by' => 'Anna Schmidt (DPO)'])
        ->assertHasNoActionErrors();

    expect($dpia->fresh())
        ->status->toBe(AssessmentStatus::Approved)
        ->approved_by->toBe('Anna Schmidt (DPO)')
        ->next_review_at->not->toBeNull();
});

it('refuses to approve without risks', function () {
    $dpia = ImpactAssessment::create(['title' => 'Empty']);

    Livewire::test(EditImpactAssessment::class, ['record' => $dpia->getKey()])
        ->callAction('approve', ['approved_by' => 'DPO']);

    expect($dpia->fresh()->status)->toBe(AssessmentStatus::Draft);
});

it('exports one assessment as JSON', function () {
    $dpia = risky();

    Livewire::test(EditImpactAssessment::class, ['record' => $dpia->getKey()])
        ->callAction('export')
        ->assertFileDownloaded('dpia-'.$dpia->getKey().'.json');
});

it('shows the processing activities that still need an assessment', function () {
    ProcessingActivity::create(['name' => 'Telehealth', 'purpose' => 'Appointments', 'legal_basis' => LegalBasis::Consent, 'models' => [TestUser::class]]);

    Livewire::test(ListImpactAssessments::class)->assertActionVisible('candidates');

    expect((string) ImpactAssessmentActions::candidates()->getModalContent())
        ->toContain('Telehealth')
        ->toContain('special categories (Art. 9)');
});

it('flags assessments that need prior consultation', function () {
    $dpia = ImpactAssessment::create(['title' => 'Biometric access', 'risks' => [
        ['title' => 'Template leak', 'likelihood' => 3, 'impact' => 3],
    ]]);

    Livewire::test(ListImpactAssessments::class)
        ->assertCanSeeTableRecords([$dpia])
        ->assertTableColumnStateSet('prior_consultation', true, $dpia);
});

it('applies the fluent plugin options', function () {
    GdprDpiaPlugin::get()->navigationGroup('GDPR')->slug('dpia');

    expect(ImpactAssessmentResource::getNavigationGroup())->toBe('GDPR')
        ->and(ImpactAssessmentResource::getSlug())->toBe('dpia');
});
