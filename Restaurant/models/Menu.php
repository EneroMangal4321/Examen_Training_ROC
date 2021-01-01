<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property int $id
 * @property string $naam
 * @property int $type
 * @property int $prijs
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['naam', 'type', 'prijs'], 'required'],
            [['type', 'prijs'], 'integer'],
            [['naam'], 'string', 'max' => 100],
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
            'type' => 'Type',
            'prijs' => 'Prijs',
        ];
    }
    public function getMenuType()
    {
        return $this->hasOne(MenuType::className(), ['id' => 'type']);
    }
}
