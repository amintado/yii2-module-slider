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
     'header' => 'hideOver',
     'content' => 'Hides the slider over the given value of browser width in pixel.',
     'id' => 'hideOver'
 ]);
 
 ?>
 <div class="input-group input-group-sm">
   <span class="input-group-addon" id="sizing-addon3" >مخفی شدن اسلایدر</span>
   <input type="text" class="form-control"  name="hideOver" placeholder="100000" aria-describedby="sizing-addon3">
 </div>
  <a href="#" class="btn" onclick="$('#settings_modal_help_hideOver').modal('show');" >
                          <span class="glyphicon glyphicon-question-sign" aria-hidden="true">
  
                          </span>
                      </a>
   
   
 
