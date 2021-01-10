<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bon".
 *
 * @property int $id
 * @property int $tafel_id
 * @property int $reservering_id
 * @property int $bestelling_id
 * @property float $totaalprijs
 */
class Bon extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bon';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tafel_id', 'reservering_id', 'bestelling_id', 'totaalprijs'], 'required'],
            [['tafel_id', 'reservering_id', 'bestelling_id'], 'integer'],
            [['totaalprijs'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tafel_id' => 'Tafel ID',
            'reservering_id' => 'Reservering ID',
            'bestelling_id' => 'Bestelling ID',
            'totaalprijs' => 'Totaalprijs',
        ];
    }
}
