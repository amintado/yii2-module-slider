<?php
/**
 * Created by PhpStorm.
 * User: amin__000
 * Date: 9/12/2017
 * Time: 12:48 PM
 */

namespace amintado\slider\assets;


use yii\web\AssetBundle;

class AmintadoLayerSliderAsset extends AssetBundle
{
    public $sourcePath = '@vendor/amintado/yii2-module-slider/assets';
    public $js =
        [

            'layerslider/syntaxhighlighter/scripts/shCore.js',
            'layerslider/syntaxhighlighter/scripts/shBrushJScript.js',
            'layerslider/syntaxhighlighter/scripts/shBrushXml.js',
            'layerslider/syntaxhighlighter/scripts/shBrushCss.js',

            'layerslider/js/greensock.js',
            'layerslider/js/layerslider.transitions.js',
            'layerslider/js/layerslider.kreaturamedia.jquery.js',
            'layerslider/js/layerslider.transition.gallery.js',
            'layerslider/syntaxhighlighter/scripts/doc.js',


//        'nextend/dist/nextend-backend.min.js',
//        'nextend/dist/nextend-frontend.min.js',
//        'nextend/dist/nextend-webfontloader.min.js',
//        'nextend/dist/system-backend.min.js',
//        'nextend/dist/system-litebox.min.js',
//        'nextend/core/ui/jquery-ui.nextend.js',
//        'nextend/core/ui/jquery-ui.nextendNormalSizing.js',
//        'nextend/core/ui/jquery-ui.nextendNormalResizable.js',
//        'nextend/core/ui/jquery-ui.nextendNormalSpacing.js',
//        'nextend/core/ui/jquery-ui.Canvas.js',
//        'nextend/core/ui/jquery-ui.Canvas-item.js',
//        'nextend/core/ui/jquery-ui.columns.js',
//        'nextend/core/ui/jquery-ui.layer-list.js',
//        'nextend/core/ui/jquery-ui.layer-list-item.js',
//
//        'nextend/core/njQuery.js',

        ];
    public $css =
        [

//        'nextend/dist/nextend-backend.min.css',
            'layerslider/css/layerslider.css'
        ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}