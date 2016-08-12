<?php

namespace hiqdev\themes\flat;

use Yii;

/**
 * Class Theme
 */
class FlatTheme extends \hiqdev\thememanager\Theme
{
    public $label = 'Flat';

    public $assets = [
        \hiqdev\themes\flat\FlatAsset::class,
    ];
}
