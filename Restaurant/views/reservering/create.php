<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Reservering */

$this->title = 'Create Reservering';
$this->params['breadcrumbs'][] = ['label' => 'Reserveringen', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reservering-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
