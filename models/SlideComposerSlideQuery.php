<?php

namespace amintado\slider\models;

/**
 * This is the ActiveQuery class for [[TabanSlideComposerSlide]].
 *
 * @see TabanSlideComposerSlide
 */
class SlideComposerSlideQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return TabanSlideComposerSlide[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return TabanSlideComposerSlide|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
