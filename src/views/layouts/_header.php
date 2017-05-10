<?php

use hiqdev\thememanager\menus\AbstractNavbarMenu;

use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

?>
<header class="navbar" role="banner">
    <?php NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top wet-asphalt',
        ],
    ]) ?>
        <?= AbstractNavbarMenu::widget([], [
            'encodeLabels' => false,
            'options' => [
                'tag' => false,
            ],
            'itemOptions' => [
                'tag' => false,
            ],
        ]) ?>
    <?php NavBar::end() ?>
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
                        'class' => 'Breadcrumbs',
                        'options' => ['class' => 'breadcrumb pull-right'],
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]) ?>
                </div>
            </div>
        </div>
    </section>
<?php endif ?>
