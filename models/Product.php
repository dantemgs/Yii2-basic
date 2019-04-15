<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $name
 * @property string $price
 * @property int $created_at
 */
class Product extends \yii\db\ActiveRecord
{
    const SCENARIO_CREATE = 'create';
    const SCENARIO_UPDATE = 'update';

    public function scenarios(){
        return [
            self::SCENARIO_DEFAULT => ['name'],
            self::SCENARIO_CREATE => ['name'],
            self::SCENARIO_UPDATE => ['!name'],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'price', 'created_at'], 'required'],
            [['created_at', 'price'], 'integer'],
            [['price'], 'number', 'max' => 1000, 'min' => 0],
            [['name'], 'string', 'max' => 20],
            [['name'], 'filter', 'filter' => 'trim'],
            [['name'], 'filter', 'filter' => function($value){
            return strip_tags($value);
            }],
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
            'price' => 'Price',
            'created_at' => 'Created At',
        ];
    }
}
