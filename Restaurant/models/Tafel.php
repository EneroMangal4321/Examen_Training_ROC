<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tafel".
 *
 * @property int $id
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
            [['reservering_id', 'bestelling_id', 'bon_id', 'aantal_plekken'], 'required'],
            [['reservering_id', 'bestelling_id', 'bon_id', 'aantal_plekken'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'reservering_id' => 'Reservering ID',
            'bestelling_id' => 'Bestelling ID',
            'bon_id' => 'Bon ID',
            'aantal_plekken' => 'Aantal Plekken',
        ];
    }
}
