<?php

/*
 * Flat Theme for hiqdev/yii2-thememanager
 *
 * @link      https://github.com/hiqdev/yii2-theme-flat
 * @package   yii2-theme-flat
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\themes\flat;

use yii\web\AssetBundle;
use yii\web\View;

class IEFixAsset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@hiqdev/themes/flat/assets';

    public $js = [
        'js/html5shiv.js',
        'js/respond.min.js',
    ];

    public $jsOptions = [
        'condition' => 'lte IE9',
        'position' => View::POS_HEAD,
    ];
}
