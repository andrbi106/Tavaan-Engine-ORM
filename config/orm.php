<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | Orm Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور orm — همهٔ کلیدهای مستندشده در `docs/03-engines/orm.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/orm.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('ORM_DEFAULT', 'default'),

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('ORM_PREFIX', 'orm:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('ORM_LOG_CHANNEL', 'orm'),
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];