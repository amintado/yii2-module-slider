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
use amintado\slider\widgets\SliderSettingsHelpWidget;

echo SliderSettingsHelpWidget::widget([
    'header' => 'imgPreload',
    'content' => 'Preloads images used in the next slides for seamless animations.',
    'id' => 'imgPreload'
]);

?>
<div class="input-group input-group-sm">
  <span class="input-group-addon" id="sizing-addon3" >تصویر بارگذاری</span>


    <input checked data-toggle="toggle" name="imgPreload" data-style="ios" type="checkbox"
           id="togglehideOnMobile">
</div>
 <a href="#" class="btn" onclick="$('#settings_modal_help_imgPreload').modal('show');" >
                         <span class="glyphicon glyphicon-question-sign" aria-hidden="true">

                         </span>
                     </a>


