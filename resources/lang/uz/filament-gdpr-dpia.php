<?php

return [
    'resource' => [
        'label' => 'Ta\'sirni baholash',
        'plural_label' => 'Ta\'sirni baholash (DPIA)',
    ],

    'fields' => [
        'title' => 'Sarlavha',
        'processing_activity' => 'Ishlov berish faoliyati',
        'description' => 'Ishlov berish tavsifi',
        'necessity' => 'Zaruriyat va mutanosiblik',
        'risks' => 'Xavflar',
        'risk_title' => 'Xavf',
        'threat' => 'Tahdid (LINDDUN)',
        'likelihood' => 'Ehtimollik',
        'impact' => 'Ta\'sir',
        'measures' => 'Choralar, kafolatlar va yumshatish mexanizmlari',
        'residual_likelihood' => 'Choralardan keyingi ehtimollik',
        'residual_impact' => 'Choralardan keyingi ta\'sir',
        'dpo_opinion' => 'Ma\'lumotlarni himoya qilish bo\'yicha mas\'ulning maslahati (35(2)-modda)',
        'status' => 'Holat',
        'inherent_risk' => 'Eng yuqori xavf',
        'residual_risk' => 'Eng yuqori qoldiq xavf',
        'next_review_at' => 'Keyingi tekshiruv',
        'prior_consultation' => 'Oldindan maslahatlashuv (36-modda)',
        'approved_by' => 'Tasdiqlagan',
    ],

    'help' => [
        'description' => 'Qayta ishlash operatsiyalari va ularning maqsadlarining tizimli tavsifi (35(7)(a)-modda).',
        'necessity' => 'Qayta ishlash maqsadlar uchun nima sababdan zarur va mutanosib (35(7)(b)-modda).',
        'risks' => 'Xavf darajasi = ehtimollik x ta\'sir: 1-2 past, 3-4 o\'rta, 6-9 yuqori. Choralardan keyingi baholar bo\'lmasa, qoldiq xavf dastlabki xavfga teng.',
        'candidates' => 'Maxsus toifali yoki jinoiy ma\'lumotlarga ega va hali ta\'sir baholanmagan qayta ishlash faoliyatlari (35(3)(b)-modda).',
        'no_candidates' => 'Bunday faoliyatlarning barchasida baholash bor.',
    ],

    'scale' => [
        '1' => '1 - Past',
        '2' => '2 - O\'rta',
        '3' => '3 - Yuqori',
    ],

    'levels' => [
        'low' => 'Past',
        'medium' => 'O\'rta',
        'high' => 'Yuqori',
    ],

    'threats' => [
        'linking' => 'Bog\'lash',
        'identifying' => 'Identifikatsiya',
        'non_repudiation' => 'Rad etib bo\'lmaslik',
        'detecting' => 'Aniqlash',
        'data_disclosure' => 'Ma\'lumotlarni oshkor qilish',
        'unawareness' => 'Xabarsizlik',
        'non_compliance' => 'Nomuvofiqlik',
    ],

    'statuses' => [
        'draft' => 'Qoralama',
        'approved' => 'Tasdiqlangan',
        'review_due' => 'Tekshiruv vaqti keldi',
    ],

    'reasons' => [
        'special_categories' => 'maxsus toifalar (9-modda)',
        'criminal_data' => 'jinoiy ma\'lumotlar (10-modda)',
    ],

    'actions' => [
        'approve' => 'Tasdiqlash',
        'export' => 'Eksport (JSON)',
        'candidates' => 'Yetishmayotgan baholashlar',
        'close' => 'Yopish',
    ],

    'notifications' => [
        'approved' => 'Ta\'sirni baholash tasdiqlandi',
        'no_risks' => 'Tasdiqlashdan oldin kamida bitta xavfni baholang.',
    ],
];
