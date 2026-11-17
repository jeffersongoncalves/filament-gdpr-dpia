<?php

return [
    'resource' => [
        'label' => 'Ocena skutków',
        'plural_label' => 'Oceny skutków (DPIA)',
    ],

    'fields' => [
        'title' => 'Tytuł',
        'processing_activity' => 'Czynność przetwarzania',
        'description' => 'Opis przetwarzania',
        'necessity' => 'Niezbędność i proporcjonalność',
        'risks' => 'Ryzyka',
        'risk_title' => 'Ryzyko',
        'threat' => 'Zagrożenie (LINDDUN)',
        'likelihood' => 'Prawdopodobieństwo',
        'impact' => 'Wpływ',
        'measures' => 'Środki, zabezpieczenia i mechanizmy ograniczania',
        'residual_likelihood' => 'Prawdopodobieństwo po środkach',
        'residual_impact' => 'Wpływ po środkach',
        'dpo_opinion' => 'Opinia inspektora ochrony danych (art. 35 ust. 2)',
        'status' => 'Status',
        'inherent_risk' => 'Najwyższe ryzyko',
        'residual_risk' => 'Najwyższe ryzyko szczątkowe',
        'next_review_at' => 'Następny przegląd',
        'prior_consultation' => 'Uprzednie konsultacje (art. 36)',
        'approved_by' => 'Zatwierdził',
    ],

    'help' => [
        'description' => 'Systematyczny opis operacji przetwarzania i ich celów (art. 35 ust. 7 lit. a).',
        'necessity' => 'Dlaczego przetwarzanie jest niezbędne i proporcjonalne do celów (art. 35 ust. 7 lit. b).',
        'risks' => 'Poziom ryzyka = prawdopodobieństwo x wpływ: 1-2 niskie, 3-4 średnie, 6-9 wysokie. Bez ocen po środkach ryzyko szczątkowe równa się ryzyku inherentnemu.',
        'candidates' => 'Czynności przetwarzania szczególnych kategorii lub danych o wyrokach (art. 35 ust. 3 lit. b) bez oceny skutków.',
        'no_candidates' => 'Każda taka czynność przetwarzania ma ocenę.',
    ],

    'scale' => [
        '1' => '1 - Niskie',
        '2' => '2 - Średnie',
        '3' => '3 - Wysokie',
    ],

    'levels' => [
        'low' => 'Niskie',
        'medium' => 'Średnie',
        'high' => 'Wysokie',
    ],

    'threats' => [
        'linking' => 'Powiązanie',
        'identifying' => 'Identyfikacja',
        'non_repudiation' => 'Niezaprzeczalność',
        'detecting' => 'Wykrywanie',
        'data_disclosure' => 'Ujawnienie danych',
        'unawareness' => 'Nieświadomość',
        'non_compliance' => 'Niezgodność',
    ],

    'statuses' => [
        'draft' => 'Szkic',
        'approved' => 'Zatwierdzona',
        'review_due' => 'Wymagany przegląd',
    ],

    'reasons' => [
        'special_categories' => 'szczególne kategorie (art. 9)',
        'criminal_data' => 'dane o wyrokach skazujących (art. 10)',
    ],

    'actions' => [
        'approve' => 'Zatwierdź',
        'export' => 'Eksportuj (JSON)',
        'candidates' => 'Brakujące oceny',
        'close' => 'Zamknij',
    ],

    'notifications' => [
        'approved' => 'Ocena skutków zatwierdzona',
        'no_risks' => 'Przed zatwierdzeniem oceń co najmniej jedno ryzyko.',
    ],
];
