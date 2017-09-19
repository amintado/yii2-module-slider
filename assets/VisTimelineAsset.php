<?php
/**
 * Created by PhpStorm.
 * User: amin__000
 * Date: 9/18/2017
 * Time: 5:40 PM
 */

namespace amintado\slider\assets;


use yii\web\AssetBundle;

class VisTimelineAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/vis/dist';
    public $js =
        [
            'vis.js',
            'vis-graph3d.min.js',
            'vis-network.min.js',
            'vis-timeline-graph2d.min.js'
        ];
    public $css = [
        'vis.css',
        'vis-network.min.css',
        'vis-timeline-graph2d.min.css',
        'vis-graph3d.min.css'
    ];
}