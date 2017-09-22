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
    'header' => 'twoWaySlideshow',
    'content' => 'Slideshow can go backwards if someone switch to a previous slide.',
    'id'=>'twoWaySlideshow'
]);

?>
<div class="input-group input-group-sm">
  <span class="input-group-addon" >twoWaySlideshow</span>


    <input checked data-toggle="toggle" name="twoWaySlideshow" data-style="ios" type="checkbox"
           id="twoWaySlideshow-input" placeholder="">
</div>
 <a href="#" class="btn" onclick="$('#settings_modal_help_twoWaySlideshow').modal('show');" >
                         <span class="glyphicon glyphicon-question-sign" aria-hidden="true">
 
                         </span>
                     </a>
  
  
