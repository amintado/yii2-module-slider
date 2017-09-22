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
use kartik\widgets\Select2;

echo SliderSettingsHelpWidget::widget([
    'header' => 'thumbnailNavigation',
    'content' => 'Type of the thumbnail navigation. Note, that \'hover\' setting needs navButtons property set to true!',
    'id'=>'thumbnailNavigation'
]);

?>
<div class="input-group input-group-sm">
  <span class="input-group-addon" >شیوه ی پیمایش تصاویر بندانگشتی</span>


   <?= Select2::widget(
       [
           'name' => 'thumbnailNavigation',
           'data' =>
           [
               'disabled'=>'خاموش',
               'hover'=>'نمایش با هاور ماوس',
               'always'=>'همیشه روشن'
           ]
       ]
   ) ?>
</div>
 <a href="#" class="btn" onclick="$('#settings_modal_help_thumbnailNavigation').modal('show');" >
                         <span class="glyphicon glyphicon-question-sign" aria-hidden="true">
 
                         </span>
                     </a>
  
  
