<?php
/**
 * @var $this View
 */

use amintado\slider\Assets\AmintadoLayerSliderAssets;
use amintado\slider\models\base\SlideComposer;
use amintado\slider\models\base\SlideComposerSlide;
use amintado\slider\models\base\SlideComposerSlideLayer;
use yii\web\BadRequestHttpException;
use yii\web\View;

AmintadoLayerSliderAssets::register($this);
$this->registerJs("
$(document).ready(function(){
 
        // Calling LayerSlider on the target element
        $('#layerslider').layerSlider({
 
           autoStart: true,
            firstLayer: 2,
            skin: 'borderlesslight',
            skinsPath: '/static/layerslider/skins/'
 
            // Please make sure that you didn't forget to add a comma to the line endings
            // except the last line!
        });
    });
", View::POS_END);
/**
 * @var $model SlideComposer
 */
if (!empty($model)) {
    echo '<div id="layerslider" style="width: 800px; height: 400px;">';
    if (!empty($model->slides)) {
        foreach ($model->slides as $slideKey => $slide) {
            /**
             * @var $slide SlideComposerSlide
             */
            echo '<div class="ls-slide  ';
            //---------------- Css Class -------------------
            if (!empty($slide->css_class)) {
                echo str_replace(';', ' ', $slide->css_class) . '" ';
            } else {
                echo '" ';
            }


            //---------------- Data LS -------------------
            if (!empty($slide->data_ls)) {
                echo 'data-ls="' . str_replace(';', ' ', $slide->data_ls) . '" ';
            }


            //---------------- Css ID -------------------
            if (!empty($slide->cssID)) {
                echo 'id="' . $slide->cssID . '" ';
            }

            if (!empty($slide->css_style)) {
                echo 'style="' . $slide->css_style . ' " ';
            }

            echo '>';


            if (!empty($slide->layers)) {
                foreach ($slide->layers as $LayerKey => $layer) {
                    /**
                     * @var $layer SlideComposerSlideLayer
                     */
                    if (empty($layer->html_tag)) {
                        throw new BadRequestHttpException('HTML TAG Is Null In Layer');
                    }
                    echo '<';
                    echo $layer->html_tag . '  ';
                    echo $layer->settings;


                    if (!empty($layer->html_class)) {
                        echo str_replace(';', ' ', $layer->html_class) . ' ls-bg " ';
                    } else {
                        echo 'class="ls-bg" ';
                    }


                    //---------------- Data LS -------------------
                    if (!empty($layer->data_ls)) {
                        echo 'data-ls="' . str_replace(';', ' ', $layer->data_ls) . '" ';
                    }


                    //---------------- Css ID -------------------
                    if (!empty($layer->classID)) {
                        echo 'id="' . $layer->classID . '" ';
                    }

                    if (!empty($layer->html_style)) {
                        echo 'style="' . $layer->html_style . ' " ';
                    }


                    echo '>';

                    if (!empty($layer->between_tag)) {
                        echo $layer->between_tag;
                        if (!empty($layer->end_tag)){
                            echo $layer->end_tag;
                        }
                    }
                }
            }
            ?>


            <?php
            echo '</div>';
        }
    }
    echo '</div>';
}
?>

<!-- The contents on your slider will be here -->


<!-- slide contents goes here -->

<img src="" class="ls-bg" alt="Slide background">





