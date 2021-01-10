<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tafel".
 *
 * @property int $id
 * @property int $vaste_tafel_id
 * @property int $reservering_id
 * @property int $bestelling_id
 * @property int $bon_id
 * @property int $aantal_plekken
 */
class Tafel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tafel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['vaste_tafel_id', 'reservering_id', 'bon_id', 'aantal_plekken'], 'required'],
            [['vaste_tafel_id', 'reservering_id', 'bestelling_id', 'bon_id', 'aantal_plekken'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'vaste_tafel_id' => 'Vaste Tafel ID',
            'reservering_id' => 'Reservering ID',
            'bestelling_id' => 'Bestelling ID',
            'bon_id' => 'Bon ID',
            'aantal_plekken' => 'Aantal Plekken',
        ];
    }

    #koppelling aan vaste tafels tabel om te kunnen kiezen welke tafel
    public function getVasteTafels()
    {
        return $this->hasOne(VasteTafel::className(), ['id' => 'vaste_tafel_id']);
    }

    #koppelling aan tabel reserveringen om een reservering aan een tafel te koppelen
    public function getReservering()
    {
        return $this->hasOne(Reservering::className(), ['id' => 'reservering_id']);
    }

    #koppelling aan tabel bestellingen om de bestellingen per tafel te kunnen zien
    public function getBestelling()
    {
        return $this->hasOne(Bestelling::className(), ['tafel_id' => 'vaste_tafel_id']);
    }
}
