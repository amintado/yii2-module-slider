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

use kartik\tabs\TabsX;
use yii\web\View;

/**
 * @var $this View
 */


?>
<!----------- Load Settings Tab ---------->
<div class="container">
    <?= TabsX::widget(
        [
            'id' => 'settings_tab',
            'position' => TabsX::POS_ABOVE,
            'items' =>
                [
                    [
                        'label' => 'خصوصیات طرح',
                        'content' => $this->render('settings/Layout_properties')

                    ],
                    [
                        'label' => 'خواص نمایش اسلاید',
                        'content' => $this->render('settings/Slideshow_properties')
                    ],
                    [
                        'label' => 'خصوصیات ظاهری',
                        'content' => $this->render('settings/Appearance_properties')
                    ],
                    [
                        'label' => 'خصوصیات ناوبری',
                        'content' => $this->render('settings/Navigation_properties')
                    ],
                    [
                        'label' => 'خصوصیت های ویدیو',
                        'content' => $this->render('settings/Video_properties')

                    ],
                    [
                        'label' => 'خصوصیات پیش بارگذاری تصویر',
                        'content' => $this->render('settings/Image_preload_properties')

                    ],
                    [
                        'label' => 'ویژگی های لوگو شما',
                        'content' => $this->render('settings/YourLogo_properties')
                    ]
                ]
        ]
    ) ?>
</div>
<!----------- End Settings Tab ---------->
