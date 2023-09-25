<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contact_profiles".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone_number
 * @property string|null $address
 */
class ContactProfile extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact_profiles';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone_number'], 'required'],
            [['address'], 'string', 'max' => 255],
            [['name', 'email', 'phone_number'], 'string', 'max' => 255],
            ['phone_number', 'match', 'pattern' => '/^\+\d{1,3} \(\d{1,3}\) \d{4,}$/'],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'phone_number' => 'Phone Number',
            'address' => 'Address',
        ];
    }
}
