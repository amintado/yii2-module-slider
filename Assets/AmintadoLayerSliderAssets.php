<?php
/**
 * Created by PhpStorm.
 * User: amin__000
 * Date: 9/12/2017
 * Time: 12:48 PM
 */

namespace amintado\slider\Assets;


use yii\web\AssetBundle;

class AmintadoLayerSliderAssets extends AssetBundle
{
public $sourcePath='@vendor/amintado/yii2-module-slider';
public $js=
    [

        'js/greensock.js',
        'js/layerslider.transitions.js',
        'js/layerslider.kreaturamedia.jquery.js',

    ];
public $css=
    [
        'css/layerslider.css',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}