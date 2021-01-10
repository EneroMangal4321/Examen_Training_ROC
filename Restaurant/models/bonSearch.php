<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\bon;

/**
 * bonSearch represents the model behind the search form of `app\models\bon`.
 */
class bonSearch extends bon
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'tafel_id', 'reservering_id', 'bestelling_id'], 'integer'],
            [['totaalprijs'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = bon::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'tafel_id' => $this->tafel_id,
            'reservering_id' => $this->reservering_id,
            'bestelling_id' => $this->bestelling_id,
            'totaalprijs' => $this->totaalprijs,
        ]);

        return $dataProvider;
    }
}
