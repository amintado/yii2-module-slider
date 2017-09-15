<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model amintado\slider\models\\SlideComposerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-slide-composer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'placeholder' => 'Name']) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'hash_id')->textInput(['maxlength' => true, 'placeholder' => 'Hash']) ?>

    <?= $form->field($model, 'position')->textInput(['maxlength' => true, 'placeholder' => 'Position']) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('atslider', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('atslider', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
