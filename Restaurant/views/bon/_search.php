<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\bonSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bon-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tafel_id') ?>

    <?= $form->field($model, 'reservering_id') ?>

    <?= $form->field($model, 'bestelling_id') ?>

    <?= $form->field($model, 'totaalprijs') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
