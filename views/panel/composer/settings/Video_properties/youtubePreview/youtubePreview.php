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
    'header' => 'youtubePreview',
    'content' => 'The preview image quaility for YouTube videos. Note, some videos do not have HD previews, and you may need to choose a lower quaility.',
    'id' => 'youtubePreview'
]);

?>
<div class="input-group input-group-sm">
    <span class="input-group-addon" id="sizing-addon3">تصویر کیفیت ویدیو</span>
    <?=
    Select2::widget(
        [
            'name' => 'youtubePreview',
            'data' =>
                [
                    'maxresdefault.jpg' => 'بهترین کیفیت',
                    'hqdefault.jpg' => 'کیفیت بالا',
                    'mqdefault.jpg' => 'کیفیت معمولی',
                    'default.jpg' => 'کیفیت پیش فرض ویدیو'
                ]
        ]
    )
    ?>
</div>
<a href="#" class="btn" onclick="$('#settings_modal_help_youtubePreview').modal('show');">
                          <span class="glyphicon glyphicon-question-sign" aria-hidden="true">
  
                          </span>
</a>
   
   
 