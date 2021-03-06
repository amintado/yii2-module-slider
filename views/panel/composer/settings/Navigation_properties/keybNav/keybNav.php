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
    'header' => 'keybNav',
    'content' => 'You can navigate through slides with the left and right arrow keys.',
    'id'=>'keybNav'
]);

?>
<div class="input-group input-group-sm">
  <span class="input-group-addon" >keybNav</span>


    <input checked data-toggle="toggle" name="keybNav" data-style="ios" type="checkbox"
           id="keybNav-input" placeholder="">
</div>
 <a href="#" class="btn" onclick="$('#settings_modal_help_keybNav').modal('show');" >
                         <span class="glyphicon glyphicon-question-sign" aria-hidden="true">
 
                         </span>
                     </a>
  
  
