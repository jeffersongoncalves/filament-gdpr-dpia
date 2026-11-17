<?php

return [
    'resource' => [
        'label' => 'ارزیابی اثر',
        'plural_label' => 'ارزیابی‌های اثر (DPIA)',
    ],

    'fields' => [
        'title' => 'عنوان',
        'processing_activity' => 'فعالیت پردازش',
        'description' => 'شرح پردازش',
        'necessity' => 'ضرورت و تناسب',
        'risks' => 'ریسک‌ها',
        'risk_title' => 'ریسک',
        'threat' => 'تهدید (LINDDUN)',
        'likelihood' => 'احتمال',
        'impact' => 'اثر',
        'measures' => 'اقدامات، تضمین‌ها و سازوکارهای کاهش',
        'residual_likelihood' => 'احتمال پس از اقدامات',
        'residual_impact' => 'اثر پس از اقدامات',
        'dpo_opinion' => 'نظر مسئول حفاظت از داده (ماده 35(2))',
        'status' => 'وضعیت',
        'inherent_risk' => 'بیشترین ریسک',
        'residual_risk' => 'بیشترین ریسک باقی‌مانده',
        'next_review_at' => 'بازبینی بعدی',
        'prior_consultation' => 'مشاوره پیشین (ماده 36)',
        'approved_by' => 'تأییدکننده',
    ],

    'help' => [
        'description' => 'توصیفی نظام‌مند از عملیات پردازش و اهداف آن (ماده 35(7)(الف)).',
        'necessity' => 'چرا پردازش برای اهداف ضروری و متناسب است (ماده 35(7)(ب)).',
        'risks' => 'سطح ریسک = احتمال × اثر: ۱-۲ کم، ۳-۴ متوسط، ۶-۹ زیاد. بدون امتیازهای پس از اقدامات، ریسک باقی‌مانده همان ریسک ذاتی است.',
        'candidates' => 'فعالیت‌های پردازشی دارای داده‌های دسته ویژه یا کیفری (ماده 35(3)(ب)) که هنوز ارزیابی اثر ندارند.',
        'no_candidates' => 'همه این فعالیت‌ها ارزیابی دارند.',
    ],

    'scale' => [
        '1' => '۱ - کم',
        '2' => '۲ - متوسط',
        '3' => '۳ - زیاد',
    ],

    'levels' => [
        'low' => 'کم',
        'medium' => 'متوسط',
        'high' => 'زیاد',
    ],

    'threats' => [
        'linking' => 'پیوند دادن',
        'identifying' => 'شناسایی',
        'non_repudiation' => 'عدم انکار',
        'detecting' => 'آشکارسازی',
        'data_disclosure' => 'افشای داده',
        'unawareness' => 'ناآگاهی',
        'non_compliance' => 'عدم انطباق',
    ],

    'statuses' => [
        'draft' => 'پیش‌نویس',
        'approved' => 'تأییدشده',
        'review_due' => 'زمان بازبینی رسیده',
    ],

    'reasons' => [
        'special_categories' => 'دسته‌های ویژه (ماده 9)',
        'criminal_data' => 'داده‌های کیفری (ماده 10)',
    ],

    'actions' => [
        'approve' => 'تأیید',
        'export' => 'خروجی (JSON)',
        'candidates' => 'ارزیابی‌های ناموجود',
        'close' => 'بستن',
    ],

    'notifications' => [
        'approved' => 'ارزیابی اثر تأیید شد',
        'no_risks' => 'پیش از تأیید دست‌کم یک ریسک را ارزیابی کنید.',
    ],
];
