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
    'header' => 'animateFirstSlide',
    'content' => 'Disabling this option will result a static starting slide for the fisrt time on page load.',
    'id'=>'animateFirstSlide'
]);

?>
<div class="input-group input-group-sm">
  <span class="input-group-addon" >انیمیشن اولین اسلاید</span>


    <input checked data-toggle="toggle" name="animateFirstSlide" data-style="ios" type="checkbox"
           id="animateFirstSlide-input" placeholder="">
</div>
 <a href="#" class="btn" onclick="$('#settings_modal_help_animateFirstSlide').modal('show');" >
                         <span class="glyphicon glyphicon-question-sign" aria-hidden="true">
 
                         </span>
                     </a>
  
  
