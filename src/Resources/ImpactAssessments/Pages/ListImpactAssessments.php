<?php

namespace JeffersonGoncalves\Filament\GdprDpia\Resources\ImpactAssessments\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use JeffersonGoncalves\Filament\GdprDpia\Resources\ImpactAssessments\ImpactAssessmentActions;
use JeffersonGoncalves\Filament\GdprDpia\Resources\ImpactAssessments\ImpactAssessmentResource;

class ListImpactAssessments extends ListRecords
{
    protected static string $resource = ImpactAssessmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ImpactAssessmentActions::candidates(),
            CreateAction::make(),
        ];
    }
}
