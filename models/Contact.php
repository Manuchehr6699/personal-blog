<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property string $country
 * @property string $city
 * @property string $address
 * @property string $phone_number
 * @property int $status
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country', 'city', 'address'], 'required'],
            [['status'], 'integer'],
            [['country', 'city', 'address', 'phone_number'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'country' => 'Country',
            'city' => 'City',
            'address' => 'Address',
            'phone_number' => 'Phone Number',
            'status' => 'Status',
        ];
    }
}
