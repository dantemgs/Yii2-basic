<?php

namespace app\models;

use yii\base\Model;

/**
 * Product is the model behind product.
 */
class Product extends Model
{
    public $id;
    public $name;
    public $category;
    public $price;
}
