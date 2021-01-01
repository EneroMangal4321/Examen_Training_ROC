<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reservering".
 *
 * @property int $id
 * @property string $voornaam
 * @property string $achternaam
 * @property string $email
 * @property int $telefoon_nummer
 * @property int $aantal_personen
 * @property string $datum
 * @property string $tijdstip
 */
class Reservering extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reservering';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['voornaam', 'achternaam', 'email', 'telefoon_nummer', 'aantal_personen', 'datum', 'tijdstip'], 'required'],
            [['telefoon_nummer', 'aantal_personen'], 'integer'],
            [['datum', 'tijdstip'], 'safe'],
            [['voornaam', 'achternaam'], 'string', 'max' => 50],
            [['email'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'voornaam' => 'Voornaam',
            'achternaam' => 'Achternaam',
            'email' => 'Email',
            'telefoon_nummer' => 'Telefoon Nummer',
            'aantal_personen' => 'Aantal Personen',
            'datum' => 'Datum',
            'tijdstip' => 'Tijdstip',
        ];
    }
}
