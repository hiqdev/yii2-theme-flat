<?php

use hiqdev\themes\flat\widgets\Menu;

?>
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
                'class' => Menu::class,
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
                    <?= Yii::$app->themeManager->widget([
                        'class' => 'Breadcrumbs',
                        'options' => ['class' => 'breadcrumb pull-right'],
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]) ?>
                </div>
            </div>
        </div>
    </section>
<?php endif ?>
