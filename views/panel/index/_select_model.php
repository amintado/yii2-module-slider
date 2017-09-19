<?php
/**
 * @var $this View
 */
use amintado\slider\Assets\AmintadoLayerSliderAsset;
use yii\web\View;

$asset = AmintadoLayerSliderAsset::register($this);

?>
<style>
    .n2-modal-radio-option.n2-active {
        cursor: default;
        background-position: 0 -80px;
    }

    .n2-modal-radio-option {
        width: 112px;
        height: 70px;
        display: inline-block;
        margin: 0 35px 50px;
        cursor: pointer;
        background-position: 0 0;
        text-align: center;
    }

</style>

<div class="row select-slide" style="margin-top: 20px;display: none">
    <div class="row">
        <div class="col-md-4 col-md-4">
            <div>
                <div class="col-md-6">

                    <a href="<?= Yii::$app->urlManager->createUrl([$this->context->module->id.'/panel/create','mode'=>'default']) ?>">
                        <div class="n2-modal-radio-option " data-key="default"
                             style="background-image: url(<?= $asset->baseUrl . '/assets/img/icons/default.png' ?>)">
                            <p></p>
                            <div class="n2-h4" style="margin-top: 80px">پیشفرض</div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="<?= Yii::$app->urlManager->createUrl([$this->context->module->id.'/panel/create','mode'=>'fullwidth']) ?>">
                        <div class="n2-modal-radio-option " data-key="fullwidth"
                             style="background-image: url(<?= $asset->baseUrl . '/assets/img/icons/fullwidth.png' ?>)">
                            <p></p>
                            <div class="n2-h4" style="margin-top: 80px">عرض کامل</div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
    ]


</div>