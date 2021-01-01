<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tafel */

$this->title = 'Create Tafel';
$this->params['breadcrumbs'][] = ['label' => 'Tafels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tafel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
