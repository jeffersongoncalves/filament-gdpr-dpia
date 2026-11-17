<?php

return [
    'resource' => [
        'label' => 'Folgenabschätzung',
        'plural_label' => 'Folgenabschätzungen (DSFA)',
    ],

    'fields' => [
        'title' => 'Titel',
        'processing_activity' => 'Verarbeitungstätigkeit',
        'description' => 'Beschreibung der Verarbeitung',
        'necessity' => 'Notwendigkeit und Verhältnismäßigkeit',
        'risks' => 'Risiken',
        'risk_title' => 'Risiko',
        'threat' => 'Bedrohung (LINDDUN)',
        'likelihood' => 'Eintrittswahrscheinlichkeit',
        'impact' => 'Auswirkung',
        'measures' => 'Maßnahmen, Garantien und Abhilfemechanismen',
        'residual_likelihood' => 'Wahrscheinlichkeit nach Maßnahmen',
        'residual_impact' => 'Auswirkung nach Maßnahmen',
        'dpo_opinion' => 'Rat des Datenschutzbeauftragten (Art. 35 Abs. 2)',
        'status' => 'Status',
        'inherent_risk' => 'Höchstes Risiko',
        'residual_risk' => 'Höchstes Restrisiko',
        'next_review_at' => 'Nächste Prüfung',
        'prior_consultation' => 'Vorherige Konsultation (Art. 36)',
        'approved_by' => 'Genehmigt von',
    ],

    'help' => [
        'description' => 'Eine systematische Beschreibung der Verarbeitungsvorgänge und ihrer Zwecke (Art. 35 Abs. 7 lit. a).',
        'necessity' => 'Warum die Verarbeitung für die Zwecke notwendig und verhältnismäßig ist (Art. 35 Abs. 7 lit. b).',
        'risks' => 'Risikostufe = Wahrscheinlichkeit x Auswirkung: 1-2 niedrig, 3-4 mittel, 6-9 hoch. Ohne Werte nach Maßnahmen entspricht das Restrisiko dem inhärenten Risiko.',
        'candidates' => 'Verarbeitungstätigkeiten mit besonderen Kategorien oder strafrechtlichen Daten (Art. 35 Abs. 3 lit. b) ohne Folgenabschätzung.',
        'no_candidates' => 'Für jede dieser Verarbeitungstätigkeiten gibt es eine Abschätzung.',
    ],

    'scale' => [
        '1' => '1 - Niedrig',
        '2' => '2 - Mittel',
        '3' => '3 - Hoch',
    ],

    'levels' => [
        'low' => 'Niedrig',
        'medium' => 'Mittel',
        'high' => 'Hoch',
    ],

    'threats' => [
        'linking' => 'Verknüpfung',
        'identifying' => 'Identifizierung',
        'non_repudiation' => 'Nichtabstreitbarkeit',
        'detecting' => 'Erkennung',
        'data_disclosure' => 'Offenlegung von Daten',
        'unawareness' => 'Unkenntnis',
        'non_compliance' => 'Nichteinhaltung',
    ],

    'statuses' => [
        'draft' => 'Entwurf',
        'approved' => 'Genehmigt',
        'review_due' => 'Prüfung fällig',
    ],

    'reasons' => [
        'special_categories' => 'besondere Kategorien (Art. 9)',
        'criminal_data' => 'strafrechtliche Daten (Art. 10)',
    ],

    'actions' => [
        'approve' => 'Genehmigen',
        'export' => 'Exportieren (JSON)',
        'candidates' => 'Fehlende Abschätzungen',
        'close' => 'Schließen',
    ],

    'notifications' => [
        'approved' => 'Folgenabschätzung genehmigt',
        'no_risks' => 'Bewerten Sie vor der Genehmigung mindestens ein Risiko.',
    ],
];
