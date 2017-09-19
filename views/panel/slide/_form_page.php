<?php

use amintado\slider\models\base\SlideComposer;
use kartik\widgets\FileInput;

/**
 * @var $model SlideComposer
 */
?>
<div class="col-md-4">
    <?=
     $form->field($model, 'images[]')->widget(FileInput::classname(), [
        'options' =>
            [
                'accept' => 'image/*',
                'multiple' => false,

//            'name' => 'images[]',
                'enctype' => 'multipart/form-data'
            ],
        'pluginOptions' => [
            'showCaption' => false,
            'showRemove' => false,
            'showUpload' => false,
            'browseClass' => 'btn btn-success btn-block',
            'browseIcon' => '<i class="glyphicon glyphicon-camera"></i> ',
            'browseLabel' =>  'انتخاب عکس اسلاید'
        ],


    ]);
    ?>
</div>
