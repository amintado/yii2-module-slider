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
     'header' => 'layersContainer',
     'content' => 'Creates an invisible inner container with the given dimension in pixels to hold and center your layers.',
     'id' => 'layersContainer'
 ]);
 
 ?>
 <div class="input-group input-group-sm">
   <span class="input-group-addon" id="sizing-addon3" >عرض پنل لایه ها</span>
   <input type="text" class="form-control"  name="layersContainer" placeholder="false" aria-describedby="sizing-addon3">
 </div>
  <a href="#" class="btn" onclick="$('#settings_modal_help_layersContainer').modal('show');" >
                          <span class="glyphicon glyphicon-question-sign" aria-hidden="true">
  
                          </span>
                      </a>
   
   
 