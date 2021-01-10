<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bestelling".
 *
 * @property int $id
 * @property int $gerecht_id
 * @property int $drank_id
 * @property int $tafel_id
 * @property int $afgeleverd
 */
class Bestelling extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bestelling';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tafel_id', 'afgeleverd'], 'required'],
            [['gerecht_id', 'drank_id', 'tafel_id'], 'integer'],
            [['afgeleverd'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'gerecht_id' => 'Gerecht ID',
            'drank_id' => 'Drank ID',
            'tafel_id' => 'Tafel ID',
            'afgeleverd' => 'Afgeleverd',
        ];
    }

    public function getGerecht()
    {
        // echo "hallo";
        // echo $this->hasOne(bestelling::className(), ['gerecht_id'=>'']);
        return $this->hasMany(menu::className(), ['naam'=>'gerecht_id']);
    }

    public function getMenuItems()
    {
        return $this->hasMany(menu::find()->all(),['naam']);
    }

    public function getTafelNummer()
    {
        return $this->hasOne(vaste_tafel::find()->all(), ['id', 'naam']);
    }
    
}
