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

        $test = \Yii::$app->test->getProp();

        return $this->render('index', [
            'product' => $product,
            'test' => $test,
        ]);
    }
}
