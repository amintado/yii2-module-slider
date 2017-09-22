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
                <?= $this->render('YourLogo_properties/yourLogo/yourLogo') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?= $this->render('YourLogo_properties/yourLogoLink/yourLogoLink') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?= $this->render('YourLogo_properties/yourLogoStyle/yourLogoStyle') ?>
            </div>
        </div>
         <div class="row">
                    <div class="col-md-6">
                        <?= $this->render('YourLogo_properties/yourLogoTarget/yourLogoTarget') ?>
                    </div>
                </div>


    </div>
</div>
