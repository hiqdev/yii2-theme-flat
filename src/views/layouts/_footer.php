<?php

use hiqdev\thememanager\menus\AbstractFooterMenu;
use hiqdev\thememanager\widgets\CopyrightYears;
use hiqdev\thememanager\widgets\OrganizationLink;
use hiqdev\themes\flat\widgets\Menu;

?>
<footer id="footer" class="midnight-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                &copy; <?= CopyrightYears::widget() ?>. <?= OrganizationLink::widget() ?>
                <?= Yii::t('hiqdev:themes:flat', 'All rights reserved.') ?>
            </div>
            <div class="col-sm-6">
                <?= AbstractFooterMenu::widget([], [
                    'class' => Menu::class,
                    'options' => ['class' => 'navbar-right'],
                ]) ?>
            </div>
        </div>
    </div>
</footer>
