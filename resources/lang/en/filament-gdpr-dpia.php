<?php

return [
    'resource' => [
        'label' => 'Impact assessment',
        'plural_label' => 'Impact assessments (DPIA)',
    ],

    'fields' => [
        'title' => 'Title',
        'processing_activity' => 'Processing activity',
        'description' => 'Description of the processing',
        'necessity' => 'Necessity and proportionality',
        'risks' => 'Risks',
        'risk_title' => 'Risk',
        'threat' => 'Threat (LINDDUN)',
        'likelihood' => 'Likelihood',
        'impact' => 'Impact',
        'measures' => 'Measures, safeguards and mitigation mechanisms',
        'residual_likelihood' => 'Likelihood after measures',
        'residual_impact' => 'Impact after measures',
        'dpo_opinion' => 'Data protection officer\'s advice (Art. 35(2))',
        'status' => 'Status',
        'inherent_risk' => 'Highest risk',
        'residual_risk' => 'Highest residual risk',
        'next_review_at' => 'Next review',
        'prior_consultation' => 'Prior consultation (Art. 36)',
        'approved_by' => 'Approved by',
    ],

    'help' => [
        'description' => 'A systematic description of the processing operations and their purposes (Art. 35(7)(a)).',
        'necessity' => 'Why the processing is necessary and proportionate to the purposes (Art. 35(7)(b)).',
        'risks' => 'Risk level = likelihood x impact: 1-2 low, 3-4 medium, 6-9 high. Without the after-measures scores, the residual risk is the inherent one.',
        'candidates' => 'Processing activities with special category or criminal data (Art. 35(3)(b)) and no impact assessment yet.',
        'no_candidates' => 'Every such processing activity has an assessment.',
    ],

    'scale' => [
        1 => '1 - Low',
        2 => '2 - Medium',
        3 => '3 - High',
    ],

    'levels' => [
        'low' => 'Low',
        'medium' => 'Medium',
        'high' => 'High',
    ],

    'threats' => [
        'linking' => 'Linking',
        'identifying' => 'Identifying',
        'non_repudiation' => 'Non-repudiation',
        'detecting' => 'Detecting',
        'data_disclosure' => 'Data disclosure',
        'unawareness' => 'Unawareness',
        'non_compliance' => 'Non-compliance',
    ],

    'statuses' => [
        'draft' => 'Draft',
        'approved' => 'Approved',
        'review_due' => 'Review due',
    ],

    'reasons' => [
        'special_categories' => 'special categories (Art. 9)',
        'criminal_data' => 'criminal data (Art. 10)',
    ],

    'actions' => [
        'approve' => 'Approve',
        'export' => 'Export (JSON)',
        'candidates' => 'Missing assessments',
        'close' => 'Close',
    ],

    'notifications' => [
        'approved' => 'Impact assessment approved',
        'no_risks' => 'Assess at least one risk before approving.',
    ],
];
