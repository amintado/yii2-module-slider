<?php
/**
 * Created by PhpStorm.
 * User: amin__000
 * Date: 9/12/2017
 * Time: 12:58 PM
 */

namespace amintado\slider\widgets;


use amintado\slider\models\base\SlideComposer;
use yii\base\Widget;

class SliderWidget extends Widget
{
    public $position='frontend';
public function init()
{
    parent::init(); // TODO: Change the autogenerated stub
}
public function run()
{
    parent::run(); // TODO: Change the autogenerated stub
    $model=SlideComposer::find()->where(['position'=>$this->position])->one();

    return $this->render('@vendor/amintado/yii2-module-slider/views/widget/slide.php',
        [
            'model'=> $model
        ]);
}
}