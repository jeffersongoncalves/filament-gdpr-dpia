<?php

return [
    'resource' => [
        'label' => 'Təsirin qiymətləndirilməsi',
        'plural_label' => 'Təsir qiymətləndirmələri (DPIA)',
    ],

    'fields' => [
        'title' => 'Başlıq',
        'processing_activity' => 'Emal fəaliyyəti',
        'description' => 'Emalın təsviri',
        'necessity' => 'Zərurət və mütənasiblik',
        'risks' => 'Risklər',
        'risk_title' => 'Risk',
        'threat' => 'Təhlükə (LINDDUN)',
        'likelihood' => 'Ehtimal',
        'impact' => 'Təsir',
        'measures' => 'Tədbirlər, təminatlar və azaltma mexanizmləri',
        'residual_likelihood' => 'Tədbirlərdən sonra ehtimal',
        'residual_impact' => 'Tədbirlərdən sonra təsir',
        'dpo_opinion' => 'Məlumatların mühafizəsi üzrə məsul şəxsin rəyi (maddə 35(2))',
        'status' => 'Status',
        'inherent_risk' => 'Ən yüksək risk',
        'residual_risk' => 'Ən yüksək qalıq risk',
        'next_review_at' => 'Növbəti yoxlama',
        'prior_consultation' => 'İlkin məsləhətləşmə (maddə 36)',
        'approved_by' => 'Təsdiq edən',
    ],

    'help' => [
        'description' => 'Emal əməliyyatlarının və onların məqsədlərinin sistemli təsviri (maddə 35(7)(a)).',
        'necessity' => 'Emal niyə məqsədlər üçün zəruri və mütənasibdir (maddə 35(7)(b)).',
        'risks' => 'Risk səviyyəsi = ehtimal x təsir: 1-2 aşağı, 3-4 orta, 6-9 yüksək. Tədbirlərdən sonrakı qiymət olmadıqda qalıq risk ilkin riskə bərabərdir.',
        'candidates' => 'Xüsusi kateqoriyalı və ya cinayət məlumatları olan və hələ təsir qiymətləndirməsi olmayan emal fəaliyyətləri (maddə 35(3)(b)).',
        'no_candidates' => 'Belə fəaliyyətlərin hamısının qiymətləndirməsi var.',
    ],

    'scale' => [
        '1' => '1 - Aşağı',
        '2' => '2 - Orta',
        '3' => '3 - Yüksək',
    ],

    'levels' => [
        'low' => 'Aşağı',
        'medium' => 'Orta',
        'high' => 'Yüksək',
    ],

    'threats' => [
        'linking' => 'Əlaqələndirmə',
        'identifying' => 'İdentifikasiya',
        'non_repudiation' => 'İnkar edilməzlik',
        'detecting' => 'Aşkarlama',
        'data_disclosure' => 'Məlumatların ifşası',
        'unawareness' => 'Xəbərsizlik',
        'non_compliance' => 'Uyğunsuzluq',
    ],

    'statuses' => [
        'draft' => 'Qaralama',
        'approved' => 'Təsdiqlənib',
        'review_due' => 'Yoxlama vaxtı çatıb',
    ],

    'reasons' => [
        'special_categories' => 'xüsusi kateqoriyalar (maddə 9)',
        'criminal_data' => 'cinayət məlumatları (maddə 10)',
    ],

    'actions' => [
        'approve' => 'Təsdiq et',
        'export' => 'İxrac (JSON)',
        'candidates' => 'Çatışmayan qiymətləndirmələr',
        'close' => 'Bağla',
    ],

    'notifications' => [
        'approved' => 'Təsirin qiymətləndirilməsi təsdiqləndi',
        'no_risks' => 'Təsdiqdən əvvəl ən azı bir riski qiymətləndirin.',
    ],
];
