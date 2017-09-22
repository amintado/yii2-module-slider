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
    'header' => 'autoPlayVideos',
    'content' => 'Videos (and HTML5 audios) will be automatically started on the active slide.',
    'id'=>'autoPlayVideos'
]);

?>
<div class="input-group input-group-sm">
  <span class="input-group-addon" >پخش خودکار ویدیو</span>


    <input checked data-toggle="toggle" name="autoPlayVideos" data-style="ios" type="checkbox"
           id="autoPlayVideos-input" placeholder="">
</div>
 <a href="#" class="btn" onclick="$('#settings_modal_help_autoPlayVideos').modal('show');" >
                         <span class="glyphicon glyphicon-question-sign" aria-hidden="true">
 
                         </span>
                     </a>
  
  
