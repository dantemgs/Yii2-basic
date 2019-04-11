<?php

namespace app\controllers;

use app\models\Product;
use yii\web\Controller;

class TestController extends Controller
{

    public function actionIndex()
    {
        $product = new Product();
        $product->id = '42';
        $product->name = 'смысл';
        $product->category = 'число';
        $product->price = 'бесценно';


        return $this->render('index', [
            'data' => 'Чего-то там',
            'product' => $product
        ]);
    }
}
