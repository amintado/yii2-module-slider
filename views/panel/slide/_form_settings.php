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

use amintado\slider\assets\AmintadoLayerSliderAsset;
use yii\web\AssetBundle;
use yii\web\View;

/**
 * @var $this View
 * @var $asset AssetBundle
 */
?>
    <style>

        .toggle.ios, .toggle-on.ios, .toggle-off.ios {
            border-radius: 20px;
        }

        .toggle.ios .toggle-handle {
            border-radius: 20px;
        }

    </style>
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <div class="col-md-6">
                    <label for="toggleresponsive">واکنش گرا</label>
                </div>
                <div class="col-md-6">
                    <input checked data-toggle="toggle" name="responsive" data-style="ios" type="checkbox"
                           id="toggleresponsive">

                <a href="#" class="btn" onclick="$('#mobilehide_help').modal('show');">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true">

                        </span>
                </a>
                <?= $this->render('help/mobile_hide', ['id' => 'mobilehide_help']) ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="col-md-6">
                    <label for="togglerlayersContainer">وسط چین کردن لایه ها</label>

                </div>
                <div class="col-md-6">
                    <input checked data-toggle="toggle" name="layersContainer" data-style="ios" type="checkbox"
                           id="togglerlayersContainer">
                    <a href="#" class="btn" onclick="$('#mobilehide_help').modal('show');">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true">

                        </span>
                    </a>
                    <?= $this->render('help/mobile_hide', ['id' => 'mobilehide_help']) ?>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="col-md-6">
                    <label for="togglehideOnMobile">غیر فعال در تلفن همراه</label>

                </div>
                <div class="col-md-6">
                    <input checked data-toggle="toggle" name="hideOnMobile" data-style="ios" type="checkbox"
                           id="togglehideOnMobile">
                    <a href="#" class="btn" onclick="$('#mobilehide_help').modal('show');">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true">

                        </span>
                    </a>
                    <?= $this->render('help/mobile_hide', ['id' => 'mobilehide_help']) ?>

                </div>

            </div>

        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="col-md-6">
                    <label for="toggleslidedelay">تاخیر انیمیشن</label>

                </div>
                <div class="col-md-3">
                    <input name="slidedelay" class="form-control" type=""
                           id="toggleslidedelay">
                    <a href="#" class="btn" onclick="$('#delayslide_help').modal('show');">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true">

                        </span>
                    </a>
                    <?= $this->render('help/slidedelay', ['id' => 'delayslide_help']) ?>
                </div>

            </div>

        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="col-md-6">
                    <label for="toggletransition2d">پیمایش اسلاید 2بعدی</label>

                </div>
                <div class="col-md-6">
                    <input data-toggle="toggle" name="transition2d" data-offstyle="danger" data-onstyle="success" data-style="ios" type="checkbox"
                           id="toggletransition2d">
                    <a href="#" class="btn" onclick="$('#3dtransition_help').modal('show');">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true">

                        </span>
                    </a>
                    <?= $this->render('help/transition3d', ['id' => '3dtransition_help']) ?>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="col-md-6">
                    <label for="toggletransition3d">پیمایش اسلاید سه بعدی</label>

                </div>
                <div class="col-md-6">
                    <input data-toggle="toggle" name="transition3d" data-offstyle="danger"  data-onstyle="success" data-style="ios" type="checkbox"
                           id="toggletransition3d">
                    <a href="#" class="btn" onclick="$('#2dtransition_help').modal('show');">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true">

                        </span>
                    </a>
                    <?= $this->render('help/transition2d', ['id' => '2dtransition_help']) ?>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="col-md-6">
                    <label for="toggletransition3d">لینک به صفحه دیگر</label>

                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="sizing-addon3">Link</span>
                        <input type="text" class="form-control" placeholder="http://example.com" aria-describedby="sizing-addon3">
                    </div>
                </div>
            </div>

        </div>
        
        <!----------- animation panels ---------->
        <div class="row" id="3dTransitions" style="display: none">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">انیمیشن های 3 بعدی</h3>
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <?= $this->render('transitions/3d') ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" id="2dTransitions" style="display: none">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">انیمیشن های 2 بعدی</h3>
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <?= $this->render('transitions/2d') ?>
                    </div>
                </div>
            </div>
        </div>
        <!----------- End Animation Panels ---------->
    </div>
<?php

$imgURL=$asset->baseUrl;
$js = <<<JS
var assetUrl='$imgURL';
$(document).ready(function(){

									// Calling LayerSlider on the target element with adding custom slider options
									// $('#layerslider').layerSlider({
									// 	autoStart: false,
									// 	firstLayer: 2,
									// 	skin: 'borderlesslight',
									// 	skinsPath: '/static/layerslider/skins/'
                                    //
									// 	// Please make sure that you didn't forget to add a comma to the line endings
									// 	// except the last line!
									// });
									
									// Get transition index
									
		
        });
    $("#toggletransition3d").change(function() {
    
       $('#3dTransitions').toggle();
    
    });
    $("#toggletransition2d").change(function() {
    
       $('#2dTransitions').toggle();
    
});
    
JS;
$this->registerJs($js,View::POS_END);

?>