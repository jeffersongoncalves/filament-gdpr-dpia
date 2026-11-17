<?php

return [
    'resource' => [
        'label' => 'Relatório de impacto',
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
        'dpo_opinion' => 'Parecer do encarregado da proteção de dados (art. 35(2))',
        'status' => 'Situação',
        'inherent_risk' => 'Maior risco',
        'residual_risk' => 'Maior risco residual',
        'next_review_at' => 'Próxima revisão',
        'prior_consultation' => 'Consulta prévia (art. 36)',
        'approved_by' => 'Aprovado por',
    ],

    'help' => [
        'description' => 'Uma descrição sistemática das operações de tratamento e de suas finalidades (art. 35(7)(a)).',
        'necessity' => 'Por que o tratamento é necessário e proporcional às finalidades (art. 35(7)(b)).',
        'risks' => 'Nível de risco = probabilidade x impacto: 1-2 baixo, 3-4 médio, 6-9 alto. Sem as notas após as medidas, o risco residual é o inerente.',
        'candidates' => 'Atividades de tratamento com dados de categoria especial ou criminais (art. 35(3)(b)) e ainda sem avaliação de impacto.',
        'no_candidates' => 'Todas essas atividades de tratamento têm relatório.',
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
        'linking' => 'Vinculação',
        'identifying' => 'Identificação',
        'non_repudiation' => 'Não repúdio',
        'detecting' => 'Detecção',
        'data_disclosure' => 'Divulgação de dados',
        'unawareness' => 'Desconhecimento do titular',
        'non_compliance' => 'Não conformidade',
    ],

    'statuses' => [
        'draft' => 'Rascunho',
        'approved' => 'Aprovado',
        'review_due' => 'Revisão pendente',
    ],

    'reasons' => [
        'special_categories' => 'categorias especiais (art. 9)',
        'criminal_data' => 'dados criminais (art. 10)',
    ],

    'actions' => [
        'approve' => 'Aprovar',
        'export' => 'Exportar (JSON)',
        'candidates' => 'Relatórios faltando',
        'close' => 'Fechar',
    ],

    'notifications' => [
        'approved' => 'Relatório de impacto aprovado',
        'no_risks' => 'Avalie ao menos um risco antes de aprovar.',
    ],
];
