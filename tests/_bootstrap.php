<?php
/**
 * Flat Theme for Yii2 projects
 *
 * @link      https://github.com/hiqdev/yii2-theme-flat
 * @package   yii2-theme-flat
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2018, HiQDev (http://hiqdev.com/)
 */
error_reporting(E_ALL & ~E_NOTICE);

$bootstrap = __DIR__ . '/../src/_bootstrap.php';

require_once file_exists($bootstrap) ? $bootstrap : __DIR__ . '/../vendor/autoload.php';
