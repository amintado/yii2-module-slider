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
    'header' => 'pauseOnHover',
    'content' => 'Slideshow will temporally pause when someone moves the mouse cursor over the slider.',
    'id'=>'pauseOnHover'
]);

?>
<div class="input-group input-group-sm">
  <span class="input-group-addon" >توقف اسلاید با هاور</span>


    <input checked data-toggle="toggle" name="pauseOnHover" data-style="ios" type="checkbox"
           id="pauseOnHover-input" placeholder="">
</div>
 <a href="#" class="btn" onclick="$('#settings_modal_help_pauseOnHover').modal('show');" >
                         <span class="glyphicon glyphicon-question-sign" aria-hidden="true">
 
                         </span>
                     </a>
  
  
