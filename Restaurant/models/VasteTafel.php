<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vaste_tafel".
 *
 * @property int $id
 * @property int $vrij
 */
class VasteTafel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vaste_tafel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['vrij'], 'required'],
            [['vrij'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'vrij' => 'Vrij',
        ];
    }
}
