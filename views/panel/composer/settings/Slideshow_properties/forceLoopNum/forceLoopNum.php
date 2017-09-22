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
    'header' => 'forceLoopNum',
    'content' => 'The slider will always stop at the given number of loops, even if someone restarts slideshow.',
    'id'=>'forceLoopNum'
]);

?>
<div class="input-group input-group-sm">
  <span class="input-group-addon" >تاکید اکید به تعداد تکرار</span>


    <input checked data-toggle="toggle" name="forceLoopNum" data-style="ios" type="checkbox"
           id="forceLoopNum-input" placeholder="">
</div>
 <a href="#" class="btn" onclick="$('#settings_modal_help_forceLoopNum').modal('show');" >
                         <span class="glyphicon glyphicon-question-sign" aria-hidden="true">
 
                         </span>
                     </a>
  
  
