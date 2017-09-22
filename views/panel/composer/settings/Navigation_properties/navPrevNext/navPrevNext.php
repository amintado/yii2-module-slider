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
    'header' => 'navPrevNext',
    'content' => 'Disabling this option will hide the Prev and Next buttons. ',
    'id'=>'navPrevNext'
]);

?>
<div class="input-group input-group-sm">
  <span class="input-group-addon" >مخفی کردن کلید های ناوبری</span>


    <input checked data-toggle="toggle" name="navPrevNext" data-style="ios" type="checkbox"
           id="navPrevNext-input" placeholder="">
</div>
 <a href="#" class="btn" onclick="$('#settings_modal_help_navPrevNext').modal('show');" >
                         <span class="glyphicon glyphicon-question-sign" aria-hidden="true">
 
                         </span>
                     </a>
  
  

