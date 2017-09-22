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

echo  SliderSettingsHelpWidget::widget([
    'header' => 'skin',
    'content' => 'You can change the skin of the slider. The \'noskin\' skin is a border- and buttonless skin. Your custom skins will appear in the list when you create their folders as well.',
    'id' => 'skin'
]);
?>
<div class="input-group input-group-sm">
    <span class="input-group-addon" id="sizing-addon3">زیباساز</span>
    <input type="text" class="form-control" name="skin" placeholder="v5" aria-describedby="sizing-addon3">
</div>
<a href="#" class="btn" onclick="$('#settings_modal_help_skin').modal('show');">
                         <span class="glyphicon glyphicon-question-sign" aria-hidden="true">

                         </span>
</a>


