<?php

use amintado\slider\assets\AmintadoLayerSliderAsset;
use amintado\slider\assets\BootstrapToggleAsset;
use amintado\slider\assets\ColorPickerAsset;
use kartik\widgets\FileInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model amintado\slider\models\base\SlideComposer */
/* @var $form yii\widgets\ActiveForm */

\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos' => \yii\web\View::POS_END,
    'viewParams' => [
        'class' => 'SlideComposerSlide',
        'relID' => 'slide-composer-slide',
        'value' => \yii\helpers\Json::encode($model->slideComposerSlides),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
$asset=AmintadoLayerSliderAsset::register($this);
BootstrapToggleAsset::register($this);
ColorPickerAsset::register($this);
?>

<div class="slide-composer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>
    <div class="row">
        <div class="col-md-12">
            <div style="background: rgba(138,138,138,0.43);margin-top: 20px;margin-bottom: 20px;padding: 20px;width: 100%;height: 80px">
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="اسلایدر" aria-describedby="basic-addon2"
                           name="SlideComposer[name]">
                </div>
                <div class="col-md-2">
                    <div class="input-group">
                        <span class="input-group-addon" style="background-color: rgb(230,230,230)">طول</span>
                        <input type="text" class="form-control" aria-label="طول" name="SlideComposer[height]"
                               value="100">
                        <span class="input-group-addon">%</span>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="input-group">
                        <span class="input-group-addon" style="background-color: rgb(230,230,230)">عرض</span>
                        <input type="text" class="form-control" aria-label="عرض" name="SlideComposer[width]"
                               value="100">
                        <span class="input-group-addon">%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">تنظیمات پنل اسلاید</h3>
    </div>
    <div class="panel-body">
        <?= $this->render('composer/settings') ?>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">اسلاید ها</h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-tabs">
                    <li role="presentation" class="active"><a href="#">اسلاید</a></li>
                    <li role="presentation"><a href="#">Profile</a></li>
                    <li role="presentation"><a href="#">Messages</a></li>
                </ul>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <?= $this->render('slide/_slide_tab', ['form' => $form, 'model' => $model,'asset'=>$asset]) ?>
            </div>
        </div>

    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">خط زمان</h3>
            </div>
            <div class="panel-body">
                <?= $this->render('editor/timeline') ?>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <?php if (Yii::$app->controller->action->id != 'save-as-new'): ?>
                <?= Html::submitButton($model->isNewRecord ? Yii::t('atslider', 'Create') : Yii::t('atslider', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            <?php endif; ?>
            <?php if (Yii::$app->controller->action->id != 'create'): ?>
                <?= Html::submitButton(Yii::t('atslider', 'Save As New'), ['class' => 'btn btn-info', 'value' => '1', 'name' => '_asnew']) ?>
            <?php endif; ?>
            <?= Html::a(Yii::t('app', 'Cancel'), Yii::$app->request->referrer, ['class' => 'btn btn-danger']) ?>
        </div>
    </div>


</div>


<?php ActiveForm::end(); ?>

</div>
