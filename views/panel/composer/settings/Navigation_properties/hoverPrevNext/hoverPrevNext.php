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
    'header' => 'hoverPrevNext',
    'content' => 'Show the buttons only when someone moves the mouse cursor over the slider. This option depends on the previous setting.',
    'id'=>'hoverPrevNext'
]);

?>
<div class="input-group input-group-sm">
  <span class="input-group-addon" >فعال سازی حالت هاوِر</span>


    <input checked data-toggle="toggle" name="hoverPrevNext" data-style="ios" type="checkbox"
           id="hoverPrevNext-input" placeholder="">
</div>
 <a href="#" class="btn" onclick="$('#settings_modal_help_hoverPrevNext').modal('show');" >
                         <span class="glyphicon glyphicon-question-sign" aria-hidden="true">
 
                         </span>
                     </a>
  
  
