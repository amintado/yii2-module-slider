<?php

namespace amintado\slider;
use Yii;
use yii\helpers\ArrayHelper;

/**
 * slide module definition class
 */
class module extends \yii\base\Module
{
    public $ActionsRbac=
    [
        'default'=>false
    ];
    public $UploadPath='@common/upload';

    public $DownloadURL='';
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'amintado\slider\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->initI18N();
        parent::init();

        // custom initialization code goes here
    }
    /**
     * TranslationTrait manages methods for all translations used in Krajee extensions
     *
     * @property array $i18n
     *
     * @author Kartik Visweswaran <kartikv2@gmail.com>
     * @since 1.8.8
     * Yii i18n messages configuration for generating translations
     * source : https://github.com/kartik-v/yii2-krajee-base/blob/master/TranslationTrait.php
     * Edited by : Yohanes Candrajaya <moo.tensai@gmail.com>
     *
     *
     * @return void
     */
    public function initI18N()
    {
        $reflector = new \ReflectionClass(get_class($this));
        $dir = dirname($reflector->getFileName());

        Yii::setAlias("@atslider", $dir);
        $config = [
            'class' => 'yii\i18n\PhpMessageSource',
            'basePath' => "@atslider/messages",
            'forceTranslation' => true
        ];
        $globalConfig = ArrayHelper::getValue(Yii::$app->i18n->translations, "atslider*", []);
        if (!empty($globalConfig)) {
            $config = array_merge($config, is_array($globalConfig) ? $globalConfig : (array)$globalConfig);
        }
        Yii::$app->i18n->translations["atslider*"] = $config;
    }
}