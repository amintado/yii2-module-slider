<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model amintado\slider\models\base\SlideComposer */

$this->title = Yii::t('atslider', 'Create Slide Composer');
$this->params['breadcrumbs'][] = ['label' => Yii::t('atslider', 'Slide Composers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="slide-composer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
