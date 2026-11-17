<?php

return [
    'resource' => [
        'label' => '影响评估',
        'plural_label' => '影响评估（DPIA）',
    ],

    'fields' => [
        'title' => '标题',
        'processing_activity' => '处理活动',
        'description' => '处理说明',
        'necessity' => '必要性与相称性',
        'risks' => '风险',
        'risk_title' => '风险',
        'threat' => '威胁（LINDDUN）',
        'likelihood' => '可能性',
        'impact' => '影响',
        'measures' => '措施、保障和缓解机制',
        'residual_likelihood' => '采取措施后的可能性',
        'residual_impact' => '采取措施后的影响',
        'dpo_opinion' => '数据保护官的意见（第35(2)条）',
        'status' => '状态',
        'inherent_risk' => '最高风险',
        'residual_risk' => '最高剩余风险',
        'next_review_at' => '下次审查',
        'prior_consultation' => '事先咨询（第36条）',
        'approved_by' => '批准人',
    ],

    'help' => [
        'description' => '对处理操作及其目的的系统性描述（第35(7)(a)条）。',
        'necessity' => '处理为何对目的而言是必要且相称的（第35(7)(b)条）。',
        'risks' => '风险等级 = 可能性 x 影响：1-2 低，3-4 中，6-9 高。没有措施后评分时，剩余风险等于固有风险。',
        'candidates' => '包含特殊类别或刑事数据（第35(3)(b)条）且尚无影响评估的处理活动。',
        'no_candidates' => '所有此类处理活动都已有评估。',
    ],

    'scale' => [
        '1' => '1 - 低',
        '2' => '2 - 中',
        '3' => '3 - 高',
    ],

    'levels' => [
        'low' => '低',
        'medium' => '中',
        'high' => '高',
    ],

    'threats' => [
        'linking' => '关联',
        'identifying' => '识别',
        'non_repudiation' => '不可否认',
        'detecting' => '检测',
        'data_disclosure' => '数据泄露',
        'unawareness' => '不知情',
        'non_compliance' => '不合规',
    ],

    'statuses' => [
        'draft' => '草稿',
        'approved' => '已批准',
        'review_due' => '需要审查',
    ],

    'reasons' => [
        'special_categories' => '特殊类别（第9条）',
        'criminal_data' => '刑事数据（第10条）',
    ],

    'actions' => [
        'approve' => '批准',
        'export' => '导出（JSON）',
        'candidates' => '缺少的评估',
        'close' => '关闭',
    ],

    'notifications' => [
        'approved' => '影响评估已批准',
        'no_risks' => '批准前请至少评估一项风险。',
    ],
];
