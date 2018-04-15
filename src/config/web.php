<?php
/**
 * Flat Theme for Yii2 projects
 *
 * @link      https://github.com/hiqdev/yii2-theme-flat
 * @package   yii2-theme-flat
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2018, HiQDev (http://hiqdev.com/)
 */

return [
    'components' => [
        'themeManager' => [
            'flat' => [
                'class' => \hiqdev\themes\flat\Theme::class,
            ],
        ],
        'i18n' => [
            'translations' => [
                'hiqdev:themes:flat' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    'basePath' => '@hiqdev/themes/flat/messages',
                ],
            ],
        ],
    ],
];
