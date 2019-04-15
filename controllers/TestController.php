<?php

namespace app\controllers;

use app\models\Product;
use yii\helpers\VarDumper;
use yii\web\Controller;

class TestController extends Controller
{

    public function actionIndex()
    {
        $product = new Product();

        $product->id = '42';
        $product->name = '  <b>смы сл<b>  ';
        $product->price = 'бесценно';
        $product->created_at = time();

//        $test = \Yii::$app->test->getProp();

        $product->validate();

        return VarDumper::dumpAsString($product->getAttributes(), 5, true);

        return $this->render('index', [
            'product' => $product,
            'test' => $test,
        ]);
    }
}
