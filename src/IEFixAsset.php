<?php

namespace hiqdev\themes\flat;

use yii\web\AssetBundle;
use yii\web\View;

class IEFixAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@hiqdev/themes/flat/assets';

    public $js = [
        'js/html5shiv.js',
        'js/respond.min.js',
    ];

    public $jsOptions = [
        'condition' => 'lte IE9',
        'position' => View::POS_HEAD
    ];
}
