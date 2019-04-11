<?php

/* @var $this yii\web\View */
/* @var $data string */
/* @var $product app\models\Product*/
?>

<h1>Test24</h1>
<p><?= $data?></p>
<p><?= $product->name?></p>
<?= \yii\widgets\DetailView::widget(["model" => $product]) ?>