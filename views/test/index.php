<?php

/* @var $this yii\web\View */
/* @var $product app\models\Product*/
/* @var $test app\models\Product*/
?>

<h1><?= $test?></h1>
<p><?= $product->name?></p>
<?= \yii\widgets\DetailView::widget(["model" => $product]) ?>