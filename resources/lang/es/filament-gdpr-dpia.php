<?php

return [
    'resource' => [
        'label' => 'Evaluación de impacto',
        'plural_label' => 'Evaluaciones de impacto (EIPD)',
    ],

    'fields' => [
        'title' => 'Título',
        'processing_activity' => 'Actividad de tratamiento',
        'description' => 'Descripción del tratamiento',
        'necessity' => 'Necesidad y proporcionalidad',
        'risks' => 'Riesgos',
        'risk_title' => 'Riesgo',
        'threat' => 'Amenaza (LINDDUN)',
        'likelihood' => 'Probabilidad',
        'impact' => 'Impacto',
        'measures' => 'Medidas, salvaguardas y mecanismos de mitigación',
        'residual_likelihood' => 'Probabilidad tras las medidas',
        'residual_impact' => 'Impacto tras las medidas',
        'dpo_opinion' => 'Asesoramiento del delegado de protección de datos (art. 35(2))',
        'status' => 'Estado',
        'inherent_risk' => 'Riesgo más alto',
        'residual_risk' => 'Riesgo residual más alto',
        'next_review_at' => 'Próxima revisión',
        'prior_consultation' => 'Consulta previa (art. 36)',
        'approved_by' => 'Aprobado por',
    ],

    'help' => [
        'description' => 'Una descripción sistemática de las operaciones de tratamiento y sus fines (art. 35(7)(a)).',
        'necessity' => 'Por qué el tratamiento es necesario y proporcionado respecto de los fines (art. 35(7)(b)).',
        'risks' => 'Nivel de riesgo = probabilidad x impacto: 1-2 bajo, 3-4 medio, 6-9 alto. Sin las notas tras las medidas, el riesgo residual es el inherente.',
        'candidates' => 'Actividades de tratamiento con datos de categoría especial o penales (art. 35(3)(b)) que aún no tienen evaluación de impacto.',
        'no_candidates' => 'Todas esas actividades de tratamiento tienen evaluación.',
    ],

    'scale' => [
        '1' => '1 - Baja',
        '2' => '2 - Media',
        '3' => '3 - Alta',
    ],

    'levels' => [
        'low' => 'Bajo',
        'medium' => 'Medio',
        'high' => 'Alto',
    ],

    'threats' => [
        'linking' => 'Vinculación',
        'identifying' => 'Identificación',
        'non_repudiation' => 'No repudio',
        'detecting' => 'Detección',
        'data_disclosure' => 'Divulgación de datos',
        'unawareness' => 'Desconocimiento',
        'non_compliance' => 'Incumplimiento',
    ],

    'statuses' => [
        'draft' => 'Borrador',
        'approved' => 'Aprobada',
        'review_due' => 'Revisión pendiente',
    ],

    'reasons' => [
        'special_categories' => 'categorías especiales (art. 9)',
        'criminal_data' => 'datos penales (art. 10)',
    ],

    'actions' => [
        'approve' => 'Aprobar',
        'export' => 'Exportar (JSON)',
        'candidates' => 'Evaluaciones faltantes',
        'close' => 'Cerrar',
    ],

    'notifications' => [
        'approved' => 'Evaluación de impacto aprobada',
        'no_risks' => 'Evalúe al menos un riesgo antes de aprobar.',
    ],
];
