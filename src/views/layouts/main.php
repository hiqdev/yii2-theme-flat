<?php

/**
 * Theme main layout.
 *
 * @var \yii\web\View $this View
 * @var string $content Content
 */

use hiqdev\themes\flat\widgets\Alert;
use hiqdev\themes\flat\widgets\Menu;
use yii\widgets\Breadcrumbs;

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <?= $this->render('//layouts/head') ?>
</head>
<body>
<?php $this->beginBody() ?>

<header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only"><?= Yii::t('hiqdev/themes/flat', 'Toggle navigation') ?></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= Yii::$app->homeUrl ?>"><?= Yii::$app->name ?></a>
        </div>
        <div class="collapse navbar-collapse">
            <?= Yii::$app->get('menuManager')->render('main', [
                'class'   => Menu::class,
                'options' => ['class' => 'nav navbar-nav navbar-right'],
            ]) ?>
        </div>
    </div>
</header>

<?php if (!isset($this->params['noTitle'])) : ?>
    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1><?= $this->title ?></h1>
                    <?php if (isset($this->params['subtitle'])) : ?>
                        <p><?= $this->params['subtitle'] ?></p>
                    <?php endif ?>
                </div>
                <div class="col-sm-6">
                    <?= Breadcrumbs::widget([
                        'options' => ['class' => 'breadcrumb pull-right'],
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : []
                    ]) ?>
                </div>
            </div>
        </div>
    </section><!--/#title-->
<?php endif ?>

<?= Alert::widget() ?>

<?php if (Yii::$app->themeManager->isHomePage()) : ?>
    <?= $content ?>
<?php else: ?>
    <section id="<?= isset($this->params['contentId']) ? $this->params['contentId'] : 'content' ?>" class="container">
        <?= $content ?>
    </section>
<?php endif ?>

<footer id="footer" class="midnight-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                &copy; <?= date('Y') ?> <?= Yii::$app->params['orgName'] ?>. <?= Yii::t('hiqdev/themes/flat', 'All Rights Reserved') ?>.
            </div>
            <div class="col-sm-6">
                <?= Yii::$app->get('menuManager')->render('main', [
                    'class'   => Menu::class,
                    'options' => ['class' => 'navbar-right'],
                ]) ?>
            </div>
        </div>
    </div>
</footer><!--/#footer-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
