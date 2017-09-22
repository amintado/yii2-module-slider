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
    'header' => 'randomSlideshow',
    'content' => 'If true, LayerSlider will change to a random slide. Please note that \'loops\' feature won\'t work with randomSlideshow!.',
    'id'=>'randomSlideshow'
]);

?>
<div class="input-group input-group-sm">
  <span class="input-group-addon" >اسلاید تصادفی</span>


    <input checked data-toggle="toggle" name="randomSlideshow" data-style="ios" type="checkbox"
           id="randomSlideshow-input" placeholder="">
</div>
 <a href="#" class="btn" onclick="$('#settings_modal_help_randomSlideshow').modal('show');" >
                         <span class="glyphicon glyphicon-question-sign" aria-hidden="true">
 
                         </span>
                     </a>
  
  
