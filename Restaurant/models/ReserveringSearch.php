<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Reservering;

/**
 * ReserveringSearch represents the model behind the search form of `app\models\Reservering`.
 */
class ReserveringSearch extends Reservering
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'telefoon_nummer', 'aantal_personen'], 'integer'],
            [['voornaam', 'achternaam', 'email', 'datum', 'tijdstip'], 'safe'],
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
        $query = Reservering::find();

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
            'telefoon_nummer' => $this->telefoon_nummer,
            'aantal_personen' => $this->aantal_personen,
            'datum' => $this->datum,
            'tijdstip' => $this->tijdstip,
        ]);

        $query->andFilterWhere(['like', 'voornaam', $this->voornaam])
            ->andFilterWhere(['like', 'achternaam', $this->achternaam])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
