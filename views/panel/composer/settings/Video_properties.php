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
                <?= $this->render('Video_properties/autoPlayVideos/autoPlayVideos') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <?= $this->render('Video_properties/autoPauseSlideshow/autoPauseSlideshow') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <?= $this->render('Video_properties/youtubePreview/youtubePreview') ?>
            </div>
        </div>


    </div>
</div>
