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
    'header' => 'responsive',
    'content' => 'Responsive mode provides optimal viewing experience across a wide range of devices (from desktop to mobile) by adapting and scaling your sliders for the viewing environment.',
    'id'=>'responsive'
]);

?>
<div class="input-group input-group-sm">
  <span class="input-group-addon" id="sizing-addon3" >واکنش گرایی</span>


    <input checked data-toggle="toggle" name="responsive" data-style="ios" type="checkbox"
           id="responsive-input">
</div>
 <a href="#" class="btn" onclick="$('#settings_modal_help_responsive').modal('show');" >
                         <span class="glyphicon glyphicon-question-sign" aria-hidden="true">
 
                         </span>
                     </a>
  
  
