<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tafel;

/**
 * TafelSearch represents the model behind the search form of `app\models\Tafel`.
 */
class TafelSearch extends Tafel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'reservering_id', 'bestelling_id', 'bon_id', 'aantal_plekken'], 'integer'],
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
        $query = Tafel::find();

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
            'reservering_id' => $this->reservering_id,
            'bestelling_id' => $this->bestelling_id,
            'bon_id' => $this->bon_id,
            'aantal_plekken' => $this->aantal_plekken,
        ]);

        return $dataProvider;
    }
}
