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
    'header' => 'lazyLoad',
    'content' => 'Loads images only when needed to save bandwidth and server resouces. Relies on the preload feature.',
    'id' => 'lazyLoad'
]);

?>
<div class="input-group input-group-sm">
  <span class="input-group-addon" id="sizing-addon3" >بارگذاری بهینه</span>
    <input checked data-toggle="toggle" name="lazyLoad" data-style="ios" type="checkbox"
           id="lazyLoadinput">
</div>
 <a href="#" class="btn" onclick="$('#settings_modal_help_lazyLoad').modal('show');" >
                         <span class="glyphicon glyphicon-question-sign" aria-hidden="true">

                         </span>
                     </a>


