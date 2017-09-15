<?php

namespace amintado\slider\models\base;

use Yii;

/**
 * This is the base model class for table "{{%slide_composer_slide_layer}}".
 *
 * @property integer $id
 * @property string $html_tag
 * @property string $data_ls
 * @property integer $slideID
 * @property string $html_style
 * @property string $html_class
 * @property string $classID
 * @property string $hash_id
 * @property string $settings
 * @property string $between_tag
 * @property string $end_tag
 *
 * @property \amintado\slider\models\SlideComposerSlide $slide
 */
class SlideComposerSlideLayer extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'slide'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['html_tag'], 'required'],
            [['data_ls', 'html_style'], 'string'],
            [['slideID'], 'integer'],
            [['html_tag', 'classID', 'hash_id'], 'string', 'max' => 32],
            [['html_class','settings','between_tag','end_tag'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%slide_composer_slide_layer}}';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('atslider', 'ID'),
            'html_tag' => Yii::t('atslider', 'Html Tag'),
            'data_ls' => Yii::t('atslider', 'Data Ls'),
            'slideID' => Yii::t('atslider', 'Slide ID'),
            'html_style' => Yii::t('atslider', 'Html Style'),
            'html_class' => Yii::t('atslider', 'Html Class'),
            'classID' => Yii::t('atslider', 'Class ID'),
            'hash_id' => Yii::t('atslider', 'Hash ID'),
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSlide()
    {
        return $this->hasOne(\amintado\slider\models\SlideComposerSlide::className(), ['id' => 'slideID']);
    }
    


}
