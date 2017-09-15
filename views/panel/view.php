<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model amintado\slider\models\base\SlideComposer */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('atslider', 'Slide Composers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="slide-composer-view">

    <div class="row">
        <div class="col-sm-8">
            <h2><?= Yii::t('atslider', 'Slide Composer').' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-4" style="margin-top: 15px">
            <?= Html::a(Yii::t('atslider', 'Save As New'), ['save-as-new', 'id' => $model->id], ['class' => 'btn btn-info']) ?>            
            <?= Html::a(Yii::t('atslider', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a(Yii::t('atslider', 'Delete'), ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => Yii::t('atslider', 'Are you sure you want to delete this item?'),
                    'method' => 'post',
                ],
            ])
            ?>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'visible' => false],
        'name',
        'description:ntext',
        'hash_id',
        'position',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
    
    <div class="row">
<?php
if($providerSlideComposerSlide->totalCount){
    $gridColumnSlideComposerSlide = [
        ['class' => 'yii\grid\SerialColumn'],
            ['attribute' => 'id', 'visible' => false],
            'cssID',
            'css_class',
            'css_style:ntext',
            'data_ls:ntext',
                        'bg',
            'hash_id',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerSlideComposerSlide,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-taban-slide-composer-slide']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode(Yii::t('atslider', 'Slide Composer Slide')),
        ],
        'export' => false,
        'columns' => $gridColumnSlideComposerSlide
    ]);
}
?>

    </div>
</div>
