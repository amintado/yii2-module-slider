<?php

use yii\web\View;

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

/**
 * @var $this View
 */
?>
<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-6">
                <?= $this->render('Slideshow_properties/animateFirstSlide/animateFirstSlide') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?= $this->render('Slideshow_properties/autoStart/autoStart') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?= $this->render('Slideshow_properties/firstSlide/firstSlide') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?= $this->render('Slideshow_properties/forceLoopNum/forceLoopNum') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?= $this->render('Slideshow_properties/loops/loops') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?= $this->render('Slideshow_properties/pauseOnHover/pauseOnHover') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?= $this->render('Slideshow_properties/randomSlideshow/randomSlideshow') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?= $this->render('Slideshow_properties/sliderFadeInDuration/sliderFadeInDuration') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?= $this->render('Slideshow_properties/startInViewport/startInViewport') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?= $this->render('Slideshow_properties/twoWaySlideshow/twoWaySlideshow') ?>
            </div>
        </div>


    </div>
</div>
