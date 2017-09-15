<?php

namespace amintado\slider\models\base;

use Yii;

/**
 * This is the base model class for table "{{%slide_composer_slide}}".
 *
 * @property integer $id
 * @property string $cssID
 * @property string $css_class
 * @property string $css_style
 * @property string $data_ls
 * @property integer $composerID
 * @property string $bg
 * @property string $hash_id
 *
 * @property \amintado\slider\models\SlideComposer $composer
 * @property \amintado\slider\models\SlideComposerSlideLayer[] $layers
 */
class SlideComposerSlide extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'composer',
            'slideComposerSlideLayers'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['css_style', 'data_ls'], 'string'],
            [['composerID'], 'integer'],
            [['cssID', 'hash_id'], 'string', 'max' => 32],
            [['css_class', 'bg'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%slide_composer_slide}}';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('atslider', 'ID'),
            'cssID' => Yii::t('atslider', 'Css ID'),
            'css_class' => Yii::t('atslider', 'Css Class'),
            'css_style' => Yii::t('atslider', 'Css Style'),
            'data_ls' => Yii::t('atslider', 'Data Ls'),
            'composerID' => Yii::t('atslider', 'Composer ID'),
            'bg' => Yii::t('atslider', 'Bg'),
            'hash_id' => Yii::t('atslider', 'Hash ID'),
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComposer()
    {
        return $this->hasOne(\amintado\slider\models\SlideComposer::className(), ['id' => 'composerID']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLayers()
    {
        return $this->hasMany(\amintado\slider\models\SlideComposerSlideLayer::className(), ['slideID' => 'id']);
    }
    


}
