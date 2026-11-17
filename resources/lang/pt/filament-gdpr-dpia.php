<?php

return [
    'resource' => [
        'label' => 'Avaliação de impacto',
        'plural_label' => 'Avaliações de impacto (AIPD)',
    ],

    'fields' => [
        'title' => 'Título',
        'processing_activity' => 'Atividade de tratamento',
        'description' => 'Descrição do tratamento',
        'necessity' => 'Necessidade e proporcionalidade',
        'risks' => 'Riscos',
        'risk_title' => 'Risco',
        'threat' => 'Ameaça (LINDDUN)',
        'likelihood' => 'Probabilidade',
        'impact' => 'Impacto',
        'measures' => 'Medidas, salvaguardas e mecanismos de mitigação',
        'residual_likelihood' => 'Probabilidade após as medidas',
        'residual_impact' => 'Impacto após as medidas',
        'dpo_opinion' => 'Parecer do encarregado da proteção de dados (art. 35.º, n.º 2)',
        'status' => 'Estado',
        'inherent_risk' => 'Risco mais alto',
        'residual_risk' => 'Risco residual mais alto',
        'next_review_at' => 'Próxima revisão',
        'prior_consultation' => 'Consulta prévia (art. 36.º)',
        'approved_by' => 'Aprovado por',
    ],

    'help' => [
        'description' => 'Uma descrição sistemática das operações de tratamento e das suas finalidades (art. 35.º, n.º 7, al. a)).',
        'necessity' => 'Porque é que o tratamento é necessário e proporcional às finalidades (art. 35.º, n.º 7, al. b)).',
        'risks' => 'Nível de risco = probabilidade x impacto: 1-2 baixo, 3-4 médio, 6-9 alto. Sem as notas após as medidas, o risco residual é o inerente.',
        'candidates' => 'Atividades de tratamento com dados de categoria especial ou penais (art. 35.º, n.º 3, al. b)) ainda sem avaliação de impacto.',
        'no_candidates' => 'Todas essas atividades de tratamento têm avaliação.',
    ],

    'scale' => [
        '1' => '1 - Baixa',
        '2' => '2 - Média',
        '3' => '3 - Alta',
    ],

    'levels' => [
        'low' => 'Baixo',
        'medium' => 'Médio',
        'high' => 'Alto',
    ],

    'threats' => [
        'linking' => 'Ligação',
        'identifying' => 'Identificação',
        'non_repudiation' => 'Não repúdio',
        'detecting' => 'Deteção',
        'data_disclosure' => 'Divulgação de dados',
        'unawareness' => 'Desconhecimento',
        'non_compliance' => 'Não conformidade',
    ],

    'statuses' => [
        'draft' => 'Rascunho',
        'approved' => 'Aprovada',
        'review_due' => 'Revisão em falta',
    ],

    'reasons' => [
        'special_categories' => 'categorias especiais (art. 9.º)',
        'criminal_data' => 'dados penais (art. 10.º)',
    ],

    'actions' => [
        'approve' => 'Aprovar',
        'export' => 'Exportar (JSON)',
        'candidates' => 'Avaliações em falta',
        'close' => 'Fechar',
    ],

    'notifications' => [
        'approved' => 'Avaliação de impacto aprovada',
        'no_risks' => 'Avalie pelo menos um risco antes de aprovar.',
    ],
];
