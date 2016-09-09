<?php

/**
 * Head layout.
 */
use yii\helpers\Html;
use yii\helpers\Url;

?>
<title><?= Html::encode($this->title) ?></title>
<?= Html::csrfMetaTags() ?>
<?php

$this->head();

Yii::$app->get('themeManager')->registerAssets();

$this->registerMetaTag(
    [
        'charset' => Yii::$app->charset,
    ]
);
$this->registerMetaTag(
    [
        'name' => 'viewport',
        'content' => 'width=device-width, initial-scale=1.0',
    ]
);
$this->registerLinkTag(
    [
        'rel' => 'canonical',
        'href' => Url::canonical(),
    ]
);
$this->registerLinkTag(
    [
        'rel' => 'shortcut icon',
        'href' => Yii::$app->assetManager->publish('@hiqdev/themes/flat/assets/images/ico/favicon.ico')[1],
    ]
);
$this->registerLinkTag(
    [
        'rel' => 'apple-touch-icon-precomposed',
        'size' => '144x144',
        'href' => Yii::$app->assetManager->publish('@hiqdev/themes/flat/assets/images/ico/apple-touch-icon-144-precomposed.png')[1],
    ]
);
$this->registerLinkTag(
    [
        'rel' => 'apple-touch-icon-precomposed',
        'size' => '114x114',
        'href' => Yii::$app->assetManager->publish('@hiqdev/themes/flat/assets/images/ico/apple-touch-icon-114-precomposed.png')[1],
    ]
);
$this->registerLinkTag(
    [
        'rel' => 'apple-touch-icon-precomposed',
        'size' => '72X72',
        'href' => Yii::$app->assetManager->publish('@hiqdev/themes/flat/assets/images/ico/apple-touch-icon-72-precomposed.png')[1],
    ]
);
$this->registerLinkTag(
    [
        'rel' => 'apple-touch-icon-precomposed',
        'href' => Yii::$app->assetManager->publish('@hiqdev/themes/flat/assets/images/ico/apple-touch-icon-57-precomposed.png')[1],
    ]
);
