<?php
/*******************************************************************************
 * Copyright (c) 2017.
 * this file created in printing-office project
 * framework: Yii2
 * license: GPL V3 2017 - 2025
 * Author:amintado@gmail.com
 * Company:shahrmap.ir
 * Official GitHub Page: https://github.com/amintado/printing-office
 * All rights reserved.
 ******************************************************************************/

/**
 * Created by PhpStorm.
 * User: amin__000
 * Date: 9/19/2017
 * Time: 3:41 AM
 */

namespace amintado\slider\assets;


use yii\web\AssetBundle;

class BootstrapToggleAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap-toggle';
    public $js = [
        'js/bootstrap-toggle.min.js'
    ];
    public $css = [
        'css/bootstrap-toggle.min.css'
    ];
}