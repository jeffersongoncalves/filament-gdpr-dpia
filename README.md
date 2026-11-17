<div class="filament-hidden">

![Filament GDPR DPIA](https://raw.githubusercontent.com/jeffersongoncalves/filament-gdpr-dpia/3.x/art/jeffersongoncalves-filament-gdpr-dpia.png)

</div>

# Filament GDPR DPIA

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-gdpr-dpia.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-gdpr-dpia)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-gdpr-dpia/tests.yml?branch=3.x&label=tests&style=flat-square)](https://github.com/jeffersongoncalves/filament-gdpr-dpia/actions?query=workflow%3Atests+branch%3A3.x)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-gdpr-dpia/fix-php-code-style-issues.yml?branch=3.x&label=code%20style&style=flat-square)](https://github.com/jeffersongoncalves/filament-gdpr-dpia/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3A3.x)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-gdpr-dpia.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-gdpr-dpia)
[![License](https://img.shields.io/packagist/l/jeffersongoncalves/filament-gdpr-dpia.svg?style=flat-square)](LICENSE.md)

Write the data protection impact assessments (DPIA, GDPR Art. 35) of [laravel-gdpr-dpia](https://github.com/jeffersongoncalves/laravel-gdpr-dpia) in your Filament panel.

## Features

- Assessments linked to a processing activity from [laravel-gdpr-records](https://github.com/jeffersongoncalves/laravel-gdpr-records), with the description of the processing, its necessity and proportionality, and the DPO's opinion.
- Risks in a repeater. Each one has an optional LINDDUN threat, a likelihood and an impact from 1 to 3, the measures taken, and the scores after those measures.
- The table shows the highest inherent risk and the highest residual risk (low, medium or high), the status and the next review.
- **Approve:** asks for the approver's name and schedules the next review. Editing an approved assessment sends it back to draft.
- **Missing assessments:** lists the processing activities with special category (Art. 9) or criminal (Art. 10) data and no assessment yet (Art. 35(3)(b)).
- **Prior consultation:** a column flags assessments whose highest residual risk is still high, so you consult the supervisory authority first (Art. 36).
- **Export (JSON)** for each assessment.
- 19 languages.

## Compatibility

| Plugin Version                                                           | Filament |
|--------------------------------------------------------------------------|----------|
| [1.x](https://github.com/jeffersongoncalves/filament-gdpr-dpia/tree/1.x) | 3.x      |
| [2.x](https://github.com/jeffersongoncalves/filament-gdpr-dpia/tree/2.x) | 4.x      |
| [3.x](https://github.com/jeffersongoncalves/filament-gdpr-dpia/tree/3.x) | 5.x      |

## Installation

You can install the package via composer:

```bash
composer require jeffersongoncalves/filament-gdpr-dpia:"^3.0"
php artisan vendor:publish --tag="gdpr-records-migrations"   # if not published yet
php artisan vendor:publish --tag="gdpr-dpia-migrations"
php artisan migrate
```

## Usage

```php
use JeffersonGoncalves\Filament\GdprDpia\GdprDpiaPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            GdprDpiaPlugin::make()
                ->navigationGroup('GDPR')             // default: no group
                ->navigationSort(7)
                ->navigationIcon('heroicon-o-shield-exclamation')
                ->slug('impact-assessments'),
        ]);
}
```

All fluent methods are optional. Pair it with [filament-gdpr-records](https://github.com/jeffersongoncalves/filament-gdpr-records) to maintain the processing activities in the same panel.

> The resource has no authorization of its own: register it only on panels whose users write the assessments, or add a policy for `JeffersonGoncalves\GdprDpia\Models\ImpactAssessment`.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Jefferson Gonçalves](https://github.com/jeffersongoncalves)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
