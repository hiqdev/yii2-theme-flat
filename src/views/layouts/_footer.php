<?php

use hiqdev\themes\flat\widgets\Menu;

?>
<footer id="footer" class="midnight-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                &copy; <?= Yii::$app->themeManager->widget('CopyrightYears') ?> <?= Yii::$app->themeManager->widget('OrganizationLink') ?>.
                <?= Yii::t('hiqdev/themes/flat', 'All rights reserved.') ?>
            </div>
            <div class="col-sm-6">
                <?= Yii::$app->get('menuManager')->render('main', [
                    'class' => Menu::class,
                    'options' => ['class' => 'navbar-right'],
                ]) ?>
            </div>
        </div>
    </div>
</footer>
