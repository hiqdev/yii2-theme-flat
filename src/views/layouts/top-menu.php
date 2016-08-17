<?php

/**
 * Top menu view.
 *
 * @var \yii\web\View $this View
 */

use hiqdev\themes\flat\widgets\Menu;

echo Menu::widget(
    [
        'options' => [
            'class' => isset($footer) ? 'pull-right' : 'nav navbar-nav navbar-right'
        ],
        'items' => [
            [
                'label' => Yii::t('hiqdev/themes/flat', 'Blogs'),
                'url' => ['/blogs/default/index']
            ],
            [
                'label' => Yii::t('hiqdev/themes/flat', 'Contacts'),
                'url' => ['/site/contacts']
            ],
            [
                'label' => Yii::t('hiqdev/themes/flat', 'Sign In'),
                'url' => ['/site/login'],
                'visible' => Yii::$app->user->isGuest
            ],
            [
                'label' => Yii::t('hiqdev/themes/flat', 'Sign Up'),
                'url' => ['/site/signup'],
                'visible' => Yii::$app->user->isGuest
            ],
            [
                'label' => Yii::t('hiqdev/themes/flat', 'Settings'),
                'url' => '#',
                'template' => '<a href="{url}" class="dropdown-toggle" data-toggle="dropdown">{label} <i class="icon-angle-down"></i></a>',
                'visible' => !Yii::$app->user->isGuest,
                'items' => [
                    [
                        'label' => Yii::t('hiqdev/themes/flat', 'Edit profile'),
                        'url' => ['/users/user/update']
                    ],
                    [
                        'label' => Yii::t('hiqdev/themes/flat', 'Change email'),
                        'url' => ['/users/user/email']
                    ],
                    [
                        'label' => Yii::t('hiqdev/themes/flat', 'Change password'),
                        'url' => ['/users/user/password']
                    ]
                ]
            ],
            [
                'label' => Yii::t('hiqdev/themes/flat', 'Sign Out'),
                'url' => ['/site/logout'],
                'visible' => !Yii::$app->user->isGuest
            ]
        ]
    ]
);
