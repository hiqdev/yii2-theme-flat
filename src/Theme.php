<?php

namespace hiqdev\themes\flat;

use Yii;

/**
 * Theme class.
 */
class Theme extends \hiqdev\thememanager\Theme
{
    public $label = 'Flat';

    public $assets = [
        Asset::class,
    ];
}
