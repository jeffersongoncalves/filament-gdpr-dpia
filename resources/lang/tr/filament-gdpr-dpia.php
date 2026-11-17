<?php

return [
    'resource' => [
        'label' => 'Etki değerlendirmesi',
        'plural_label' => 'Etki değerlendirmeleri (VKED)',
    ],

    'fields' => [
        'title' => 'Başlık',
        'processing_activity' => 'İşleme faaliyeti',
        'description' => 'İşlemenin tanımı',
        'necessity' => 'Gereklilik ve orantılılık',
        'risks' => 'Riskler',
        'risk_title' => 'Risk',
        'threat' => 'Tehdit (LINDDUN)',
        'likelihood' => 'Olasılık',
        'impact' => 'Etki',
        'measures' => 'Önlemler, güvenceler ve azaltma mekanizmaları',
        'residual_likelihood' => 'Önlemlerden sonra olasılık',
        'residual_impact' => 'Önlemlerden sonra etki',
        'dpo_opinion' => 'Veri koruma görevlisinin görüşü (md. 35(2))',
        'status' => 'Durum',
        'inherent_risk' => 'En yüksek risk',
        'residual_risk' => 'En yüksek kalıntı risk',
        'next_review_at' => 'Sonraki inceleme',
        'prior_consultation' => 'Ön danışma (md. 36)',
        'approved_by' => 'Onaylayan',
    ],

    'help' => [
        'description' => 'İşleme faaliyetlerinin ve amaçlarının sistematik açıklaması (md. 35(7)(a)).',
        'necessity' => 'İşlemenin amaçlar bakımından neden gerekli ve orantılı olduğu (md. 35(7)(b)).',
        'risks' => 'Risk seviyesi = olasılık x etki: 1-2 düşük, 3-4 orta, 6-9 yüksek. Önlem sonrası puanlar yoksa kalıntı risk doğal risktir.',
        'candidates' => 'Özel nitelikli veya cezai veri içeren ve henüz etki değerlendirmesi olmayan işleme faaliyetleri (md. 35(3)(b)).',
        'no_candidates' => 'Bu işleme faaliyetlerinin hepsinin değerlendirmesi var.',
    ],

    'scale' => [
        '1' => '1 - Düşük',
        '2' => '2 - Orta',
        '3' => '3 - Yüksek',
    ],

    'levels' => [
        'low' => 'Düşük',
        'medium' => 'Orta',
        'high' => 'Yüksek',
    ],

    'threats' => [
        'linking' => 'Bağlantılama',
        'identifying' => 'Tanımlama',
        'non_repudiation' => 'İnkâr edilemezlik',
        'detecting' => 'Tespit',
        'data_disclosure' => 'Verilerin ifşası',
        'unawareness' => 'Habersizlik',
        'non_compliance' => 'Uyumsuzluk',
    ],

    'statuses' => [
        'draft' => 'Taslak',
        'approved' => 'Onaylandı',
        'review_due' => 'İnceleme zamanı geldi',
    ],

    'reasons' => [
        'special_categories' => 'özel nitelikli veriler (md. 9)',
        'criminal_data' => 'cezai veriler (md. 10)',
    ],

    'actions' => [
        'approve' => 'Onayla',
        'export' => 'Dışa aktar (JSON)',
        'candidates' => 'Eksik değerlendirmeler',
        'close' => 'Kapat',
    ],

    'notifications' => [
        'approved' => 'Etki değerlendirmesi onaylandı',
        'no_risks' => 'Onaylamadan önce en az bir riski değerlendirin.',
    ],
];
