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
     'header' => 'firstSlide',
     'content' => 'The slider will start with the specified slide.',
     'id' => 'firstSlide'
 ]);
 
 ?>
 <div class="input-group input-group-sm">
   <span class="input-group-addon" id="sizing-addon3" >اسلاید اول</span>
   <?=
   Select2::widget(
       [
           'name' => 'firstSlide',
           'data' =>
           [
               'random'=>'تصادفی'
           ]
       ]
   )
   ?>
 </div>
  <a href="#" class="btn" onclick="$('#settings_modal_help_firstSlide').modal('show');" >
                          <span class="glyphicon glyphicon-question-sign" aria-hidden="true">
  
                          </span>
                      </a>
   
   
 