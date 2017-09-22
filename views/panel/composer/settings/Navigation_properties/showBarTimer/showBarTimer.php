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
    'header' => 'showBarTimer',
    'content' => 'Show the bar timer to indicate slideshow progression. (Not working under IE7 and 8.)',
    'id'=>'showBarTimer'
]);

?>
<div class="input-group input-group-sm">
  <span class="input-group-addon" >نمایش تایمر اسلاید</span>


    <input checked data-toggle="toggle" name="showBarTimer" data-style="ios" type="checkbox"
           id="showBarTimer-input" placeholder="">
</div>
 <a href="#" class="btn" onclick="$('#settings_modal_help_showBarTimer').modal('show');" >
                         <span class="glyphicon glyphicon-question-sign" aria-hidden="true">
 
                         </span>
                     </a>
  
  
