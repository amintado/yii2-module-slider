<?php

namespace amintado\slider\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use amintado\slider\models\base\SlideComposer;

/**
 * amintado\slider\models\\SlideComposerSearch represents the model behind the search form about `amintado\slider\models\base\SlideComposer`.
 */
 class SlideComposerSearch extends SlideComposer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name', 'description', 'hash_id', 'position'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = SlideComposer::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'hash_id', $this->hash_id])
            ->andFilterWhere(['like', 'position', $this->position]);

        return $dataProvider;
    }
}
