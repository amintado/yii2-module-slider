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
    'header' => 'showCircleTimer',
    'content' => 'Use circle timer to indicate slideshow progression.',
    'id'=>'showCircleTimer'
]);

?>
<div class="input-group input-group-sm">
  <span class="input-group-addon" >تایمر اسلایدر دایره ای</span>


    <input checked data-toggle="toggle" name="showCircleTimer" data-style="ios" type="checkbox"
           id="showCircleTimer-input" placeholder="">
</div>
 <a href="#" class="btn" onclick="$('#settings_modal_help_showCircleTimer').modal('show');" >
                         <span class="glyphicon glyphicon-question-sign" aria-hidden="true">
 
                         </span>
                     </a>
  
  
