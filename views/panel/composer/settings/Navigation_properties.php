<?php
/*******************************************************************************
 * Copyright (c) 2017.
 * this file created in printing-office project
 * framework: Yii2
 * license: GPL V3 2017 - 2025
 * Author:amintado@gmail.com
 * Company:shahrmap.ir
 * Official GitHub Page: https://github.com/amintado/printing-office
 * All rights reserved.
 ******************************************************************************/

use yii\web\View;

/**
 * @var $this View
 */
?>
<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-6">
                <?= $this->render('Navigation_properties/navPrevNext/navPrevNext') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?= $this->render('Navigation_properties/navStartStop/navStartStop')?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?= $this->render('Navigation_properties/navButtons/navButtons') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?= $this->render('Navigation_properties/hoverPrevNext/hoverPrevNext') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?= $this->render('Navigation_properties/hoverBottomNav/hoverBottomNav') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?= $this->render('Navigation_properties/keybNav/keybNav') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?= $this->render('Navigation_properties/touchNav/touchNav') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?= $this->render('Navigation_properties/showBarTimer/showBarTimer') ?>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-6">
                <?= $this->render('Navigation_properties/showCircleTimer/showCircleTimer') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
            <?= $this->render('Navigation_properties/thumbnailNavigation/thumbnailNavigation') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?= $this->render('Navigation_properties/tnContainerWidth/tnContainerWidth') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?= $this->render('Navigation_properties/tnWidth/tnWidth') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?= $this->render('Navigation_properties/tnHeight/tnHeight') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?= $this->render('Navigation_properties/tnActiveOpacity/tnActiveOpacity') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?= $this->render('Navigation_properties/tnInactiveOpacity/tnInactiveOpacity') ?>
            </div>
        </div>




    </div>
</div>
