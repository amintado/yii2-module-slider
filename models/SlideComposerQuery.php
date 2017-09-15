<?php

namespace amintado\slider\models;

/**
 * This is the ActiveQuery class for [[TabanSlideComposer]].
 *
 * @see TabanSlideComposer
 */
class SlideComposerQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return TabanSlideComposer[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return TabanSlideComposer|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
