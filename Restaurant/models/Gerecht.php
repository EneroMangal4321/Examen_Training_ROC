<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gerecht".
 *
 * @property int $id
 * @property int $menu_id
 * @property int $bestelling_id
 *
 * @property Menu $menu
 */
class Gerecht extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gerecht';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['menu_id', 'bestelling_id'], 'required'],
            [['menu_id', 'bestelling_id'], 'integer'],
            [['menu_id'], 'exist', 'skipOnError' => true, 'targetClass' => Menu::className(), 'targetAttribute' => ['menu_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'menu_id' => 'Menu ID',
            'bestelling_id' => 'Bestelling ID',
        ];
    }

    /**
     * Gets query for [[Menu]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMenu()
    {
        return $this->hasOne(Menu::className(), ['id' => 'menu_id']);
    }

    public function getBestelling()
    {
        return $this->hasOne(Bestelling::className(),['id' => 'bestelling_id']);
    }
}
