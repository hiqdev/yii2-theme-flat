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

use yii\bootstrap\BootstrapAsset;
use yii\bootstrap\BootstrapPluginAsset;
use yii\web\AssetBundle;

/**
 * Theme main asset bundle.
 */
class Asset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@hiqdev/themes/flat/assets';

    /**
     * {@inheritdoc}
     */
    public $css = [
        'css/font-awesome.min.css',
        'css/prettyPhoto.css',
        'css/animate.css',
        'css/main.css',
        'css/custom.css',
    ];

    public $js = [
        'js/jquery.prettyPhoto.js',
        'main.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        IEFixAsset::class,
        BootstrapAsset::class,
        BootstrapPluginAsset::class,
    ];
}
