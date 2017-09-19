<?php

use amintado\slider\models\base\SlideComposer;
use kartik\file\FileInput;
use kartik\tabs\TabsX;
use yii\web\AssetBundle;
use yii\widgets\ActiveForm;

/**
 * @var $model SlideComposer
 * @var $form ActiveForm
 * @var $asset AssetBundle
 */

echo TabsX::widget([
    'position' => TabsX::POS_RIGHT,
    'items' =>
        [
            [
                'label' => 'تصویر',
                'content' => $this->render('_form_page',
                    [
                        'form' => $form,
                        'model' => $model
                    ]
                )
            ],
            [
                'label' => 'تنظیمات',
                'content' => $this->render('_form_settings',
                [
                    'asset' => $asset
                ]
                )
            ],
            [
                'label' => 'لایه ها',
                'content' => $this->render('_form_layers')
            ]

        ],

    'itemOptions' =>
        [
            'style' => 'min-height:300px;'
        ]
]);


?>