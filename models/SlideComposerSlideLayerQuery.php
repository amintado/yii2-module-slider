<?php

namespace amintado\slider\models;

/**
 * This is the ActiveQuery class for [[TabanSlideComposerSlideLayer]].
 *
 * @see TabanSlideComposerSlideLayer
 */
class SlideComposerSlideLayerQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return TabanSlideComposerSlideLayer[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return TabanSlideComposerSlideLayer|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
