<?php

return [
    'resource' => [
        'label' => '影響評価',
        'plural_label' => '影響評価（DPIA）',
    ],

    'fields' => [
        'title' => 'タイトル',
        'processing_activity' => '処理活動',
        'description' => '処理の説明',
        'necessity' => '必要性と比例性',
        'risks' => 'リスク',
        'risk_title' => 'リスク',
        'threat' => '脅威（LINDDUN）',
        'likelihood' => '発生可能性',
        'impact' => '影響度',
        'measures' => '対策・保護措置・軽減策',
        'residual_likelihood' => '対策後の発生可能性',
        'residual_impact' => '対策後の影響度',
        'dpo_opinion' => 'データ保護責任者の助言（第35条第2項）',
        'status' => 'ステータス',
        'inherent_risk' => '最大のリスク',
        'residual_risk' => '最大の残存リスク',
        'next_review_at' => '次回レビュー',
        'prior_consultation' => '事前協議（第36条）',
        'approved_by' => '承認者',
    ],

    'help' => [
        'description' => '処理業務とその目的の体系的な説明（第35条第7項(a)）。',
        'necessity' => '処理が目的に照らして必要かつ比例的である理由（第35条第7項(b)）。',
        'risks' => 'リスクレベル = 発生可能性 x 影響度：1-2 低、3-4 中、6-9 高。対策後の評価がない場合、残存リスクは固有リスクと同じです。',
        'candidates' => '特別な種類または犯罪データを含み、まだ影響評価がない処理活動（第35条第3項(b)）。',
        'no_candidates' => '該当する処理活動はすべて評価済みです。',
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
        'linking' => 'リンク付け',
        'identifying' => '識別',
        'non_repudiation' => '否認防止',
        'detecting' => '検知',
        'data_disclosure' => 'データの開示',
        'unawareness' => '認識の欠如',
        'non_compliance' => '非遵守',
    ],

    'statuses' => [
        'draft' => '下書き',
        'approved' => '承認済み',
        'review_due' => 'レビュー期限',
    ],

    'reasons' => [
        'special_categories' => '特別な種類（第9条）',
        'criminal_data' => '犯罪データ（第10条）',
    ],

    'actions' => [
        'approve' => '承認',
        'export' => 'エクスポート（JSON）',
        'candidates' => '不足している評価',
        'close' => '閉じる',
    ],

    'notifications' => [
        'approved' => '影響評価を承認しました',
        'no_risks' => '承認する前に少なくとも1つのリスクを評価してください。',
    ],
];
