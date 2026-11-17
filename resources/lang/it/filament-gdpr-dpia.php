<?php

return [
    'resource' => [
        'label' => 'Valutazione d\'impatto',
        'plural_label' => 'Valutazioni d\'impatto (DPIA)',
    ],

    'fields' => [
        'title' => 'Titolo',
        'processing_activity' => 'Attività di trattamento',
        'description' => 'Descrizione del trattamento',
        'necessity' => 'Necessità e proporzionalità',
        'risks' => 'Rischi',
        'risk_title' => 'Rischio',
        'threat' => 'Minaccia (LINDDUN)',
        'likelihood' => 'Probabilità',
        'impact' => 'Impatto',
        'measures' => 'Misure, garanzie e meccanismi di mitigazione',
        'residual_likelihood' => 'Probabilità dopo le misure',
        'residual_impact' => 'Impatto dopo le misure',
        'dpo_opinion' => 'Parere del responsabile della protezione dei dati (art. 35(2))',
        'status' => 'Stato',
        'inherent_risk' => 'Rischio più alto',
        'residual_risk' => 'Rischio residuo più alto',
        'next_review_at' => 'Prossima revisione',
        'prior_consultation' => 'Consultazione preventiva (art. 36)',
        'approved_by' => 'Approvato da',
    ],

    'help' => [
        'description' => 'Una descrizione sistematica dei trattamenti e delle loro finalità (art. 35(7)(a)).',
        'necessity' => 'Perché il trattamento è necessario e proporzionato alle finalità (art. 35(7)(b)).',
        'risks' => 'Livello di rischio = probabilità x impatto: 1-2 basso, 3-4 medio, 6-9 alto. Senza i valori dopo le misure, il rischio residuo è quello inerente.',
        'candidates' => 'Attività di trattamento con dati particolari o giudiziari (art. 35(3)(b)) ancora senza valutazione d\'impatto.',
        'no_candidates' => 'Ognuna di queste attività ha una valutazione.',
    ],

    'scale' => [
        '1' => '1 - Bassa',
        '2' => '2 - Media',
        '3' => '3 - Alta',
    ],

    'levels' => [
        'low' => 'Basso',
        'medium' => 'Medio',
        'high' => 'Alto',
    ],

    'threats' => [
        'linking' => 'Collegamento',
        'identifying' => 'Identificazione',
        'non_repudiation' => 'Non ripudio',
        'detecting' => 'Rilevamento',
        'data_disclosure' => 'Divulgazione dei dati',
        'unawareness' => 'Inconsapevolezza',
        'non_compliance' => 'Non conformità',
    ],

    'statuses' => [
        'draft' => 'Bozza',
        'approved' => 'Approvata',
        'review_due' => 'Revisione da fare',
    ],

    'reasons' => [
        'special_categories' => 'categorie particolari (art. 9)',
        'criminal_data' => 'dati giudiziari (art. 10)',
    ],

    'actions' => [
        'approve' => 'Approva',
        'export' => 'Esporta (JSON)',
        'candidates' => 'Valutazioni mancanti',
        'close' => 'Chiudi',
    ],

    'notifications' => [
        'approved' => 'Valutazione d\'impatto approvata',
        'no_risks' => 'Valuta almeno un rischio prima di approvare.',
    ],
];
