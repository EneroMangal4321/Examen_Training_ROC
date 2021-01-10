<?php

namespace app\models;

use Yii;
use app\models\Menu;
use app\models\VasteTafel;

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

    #koppelling van bestelling naar de koppeltabel gerecht
    public function getGerecht()
    {
        // echo "hallo";
        // echo $this->hasOne(bestelling::className(), ['gerecht_id'=>'']);
        return $this->hasMany(Gerecht::className(), ['bestelling_id'=>'id']);
    }

    #koppelling van bestelling naar de tabel menu
    public function getMenuItems()
    {
        return $this->hasOne(Menu::className(), ['id' => 'gerecht_id']);
    }

    #koppelling van bestelling naar de tabel menu om alleen de dranken op te halen
    public function getDrankItems()
    {
        return $this->hasMany(MenuType::className(), ['id', 'drank_id']);
    }

    #koppelling van bestelling naar de tabel vaste_tafel om de naar op te halen
    public function getTafelNaam()
    {
        return $this->hasOne(VasteTafel::className(), ['id'=> 'tafel_id']);
    }

    #koppelling van bestellingen naar de tabel geleverd die kijkt of iets ja of nee als waarde heeft
    public function getLevering()
    {
        return $this->hasOne(Geleverd::className(), ['id'=> 'afgeleverd']);
    }
    
}
