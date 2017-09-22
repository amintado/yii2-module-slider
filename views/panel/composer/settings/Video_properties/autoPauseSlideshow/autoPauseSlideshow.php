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
    'header' => 'autoPauseSlideshow',
    'content' => 'The slideshow can temporally paused while videos are plaing. You can choose to permanently stop the pause until manual restarting.',
    'id'=>'autoPauseSlideshow'
]);

?>
<div class="input-group input-group-sm">
  <span class="input-group-addon" >توقف اسلاید حین پخش ویدیو</span>


    <input checked data-toggle="toggle" name="autoPauseSlideshow" data-style="ios" type="checkbox"
           id="autoPauseSlideshow-input" placeholder="">
</div>
 <a href="#" class="btn" onclick="$('#settings_modal_help_autoPauseSlideshow').modal('show');" >
                         <span class="glyphicon glyphicon-question-sign" aria-hidden="true">
 
                         </span>
                     </a>
  
  
