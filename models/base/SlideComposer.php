<?php

namespace amintado\slider\models\base;

use Yii;

/**
 * This is the base model class for table "{{%slide_composer}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $hash_id
 * @property string $position
 *
 * @property \amintado\slider\models\SlideComposerSlide[] $slides
 */
class SlideComposer extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'slideComposerSlides'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['description'], 'string'],
            [['name', 'hash_id', 'position'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%slide_composer}}';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('atslider', 'ID'),
            'name' => Yii::t('atslider', 'Name'),
            'description' => Yii::t('atslider', 'Description'),
            'hash_id' => Yii::t('atslider', 'Hash ID'),
            'position' => Yii::t('atslider', 'Position'),
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSlides()
    {
        return $this->hasMany(\amintado\slider\models\SlideComposerSlide::className(), ['composerID' => 'id']);
    }
    

   
}
