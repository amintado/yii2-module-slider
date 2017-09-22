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

/**
 * @var $this View
 */

use amintado\slider\widgets\SliderSettingsHelpWidget;
use yii\web\View;

echo SliderSettingsHelpWidget::widget([
    'header' => 'globalBGColor',
    'content' => 'Global background color of the slider. Slides with non-transparent background will cover this one. You can use all CSS methods such as HEX or RGB(A) values.',
    'id' => 'globalBGColor'
]);
?>


<style>
    .colorpicker-color {
        //width: 200px;
    }
    .colorpicker-2x{
        right: 0 !important;
        left: auto !important;

    }
    .colorpicker-2x .colorpicker-saturation {
        width: 200px;
        height: 200px;
    }

    .colorpicker-2x .colorpicker-hue, .colorpicker-2x .colorpicker-alpha {
        width: 30px;
        height: 200px;
    }

    .colorpicker-2x .colorpicker-color, .colorpicker-2x .colorpicker-color div {
        height: 30px;
    } </style>

<div id="cp3" class="input-group colorpicker-component">
    <span class="input-group-addon" id="sizing-addon3">رنگ پشت اسلایدرها</span>
    <input type="text" value="#00AABB" class="form-control"/>

    <span class="input-group-addon">
        <i>

        </i>
    </span>
</div>
<a href="#" class="btn" onclick="$('#settings_modal_help_globalBGColor').modal('show');">
                         <span class="glyphicon glyphicon-question-sign" aria-hidden="true">

                         </span>
</a>
<?php
$js = <<< JS
$(function () {
        $('#cp3').colorpicker({ customClass: 'colorpicker-2x', sliders: { saturation: { maxLeft: 200, maxTop: 200 }, hue: { maxTop: 200 }, alpha: { maxTop: 200 } } });
        });
JS;
$this->registerJs($js, View::POS_END);
?>

