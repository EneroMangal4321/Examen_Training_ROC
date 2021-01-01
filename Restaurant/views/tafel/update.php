<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tafel */

$this->title = 'Update Tafel: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tafels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tafel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
