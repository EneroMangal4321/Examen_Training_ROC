<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "menu_type".
 *
 * @property int $id
 * @property string $naam
 * @property string $bestemming
 */
class MenuType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'naam', 'bestemming'], 'required'],
            [['id'], 'integer'],
            [['naam', 'bestemming'], 'string', 'max' => 50],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'naam' => 'Naam',
            'bestemming' => 'Bestemming',
        ];
    }
}
