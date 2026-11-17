<?php

return [
    'resource' => [
        'label' => 'Analyse d\'impact',
        'plural_label' => 'Analyses d\'impact (AIPD)',
    ],

    'fields' => [
        'title' => 'Titre',
        'processing_activity' => 'Activité de traitement',
        'description' => 'Description du traitement',
        'necessity' => 'Nécessité et proportionnalité',
        'risks' => 'Risques',
        'risk_title' => 'Risque',
        'threat' => 'Menace (LINDDUN)',
        'likelihood' => 'Vraisemblance',
        'impact' => 'Impact',
        'measures' => 'Mesures, garanties et mécanismes d\'atténuation',
        'residual_likelihood' => 'Vraisemblance après mesures',
        'residual_impact' => 'Impact après mesures',
        'dpo_opinion' => 'Avis du délégué à la protection des données (art. 35(2))',
        'status' => 'Statut',
        'inherent_risk' => 'Risque le plus élevé',
        'residual_risk' => 'Risque résiduel le plus élevé',
        'next_review_at' => 'Prochaine revue',
        'prior_consultation' => 'Consultation préalable (art. 36)',
        'approved_by' => 'Approuvé par',
    ],

    'help' => [
        'description' => 'Une description systématique des opérations de traitement et de leurs finalités (art. 35(7)(a)).',
        'necessity' => 'Pourquoi le traitement est nécessaire et proportionné aux finalités (art. 35(7)(b)).',
        'risks' => 'Niveau de risque = vraisemblance x impact : 1-2 faible, 3-4 moyen, 6-9 élevé. Sans notes après mesures, le risque résiduel est le risque initial.',
        'candidates' => 'Activités de traitement comportant des données sensibles ou pénales (art. 35(3)(b)) sans analyse d\'impact pour l\'instant.',
        'no_candidates' => 'Chacune de ces activités a une analyse.',
    ],

    'scale' => [
        '1' => '1 - Faible',
        '2' => '2 - Moyen',
        '3' => '3 - Élevé',
    ],

    'levels' => [
        'low' => 'Faible',
        'medium' => 'Moyen',
        'high' => 'Élevé',
    ],

    'threats' => [
        'linking' => 'Mise en relation',
        'identifying' => 'Identification',
        'non_repudiation' => 'Non-répudiation',
        'detecting' => 'Détection',
        'data_disclosure' => 'Divulgation de données',
        'unawareness' => 'Méconnaissance',
        'non_compliance' => 'Non-conformité',
    ],

    'statuses' => [
        'draft' => 'Brouillon',
        'approved' => 'Approuvée',
        'review_due' => 'Revue à faire',
    ],

    'reasons' => [
        'special_categories' => 'catégories particulières (art. 9)',
        'criminal_data' => 'données pénales (art. 10)',
    ],

    'actions' => [
        'approve' => 'Approuver',
        'export' => 'Exporter (JSON)',
        'candidates' => 'Analyses manquantes',
        'close' => 'Fermer',
    ],

    'notifications' => [
        'approved' => 'Analyse d\'impact approuvée',
        'no_risks' => 'Évaluez au moins un risque avant d\'approuver.',
    ],
];
