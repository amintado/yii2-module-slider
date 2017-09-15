<div class="form-group" id="add-slide-composer-slide">
<?php
use kartik\grid\GridView;
use kartik\builder\TabularForm;
use yii\data\ArrayDataProvider;
use yii\helpers\Html;
use yii\widgets\Pjax;

$dataProvider = new ArrayDataProvider([
    'allModels' => $row,
    'pagination' => [
        'pageSize' => -1
    ]
]);
echo TabularForm::widget([
    'dataProvider' => $dataProvider,
    'formName' => 'SlideComposerSlide',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        "id" => ['type' => TabularForm::INPUT_HIDDEN, 'columnOptions' => ['hidden'=>true]],
        'cssID' => ['type' => TabularForm::INPUT_TEXT],
        'css_class' => ['type' => TabularForm::INPUT_TEXT],
        'css_style' => ['type' => TabularForm::INPUT_TEXTAREA],
        'data_ls' => ['type' => TabularForm::INPUT_TEXTAREA],
        'bg' => ['type' => TabularForm::INPUT_TEXT],
        'hash_id' => ['type' => TabularForm::INPUT_TEXT],
        'del' => [
            'type' => 'raw',
            'label' => '',
            'value' => function($model, $key) {
                return
                    Html::hiddenInput('Children[' . $key . '][id]', (!empty($model['id'])) ? $model['id'] : "") .
                    Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  Yii::t('atslider', 'Delete'), 'onClick' => 'delRowSlideComposerSlide(' . $key . '); return false;', 'id' => 'slide-composer-slide-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => false,
            'type' => GridView::TYPE_DEFAULT,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . Yii::t('atslider', 'Add Taban Slide Composer Slide'), ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowSlideComposerSlide()']),
        ]
    ]
]);
echo  "    </div>\n\n";
?>

