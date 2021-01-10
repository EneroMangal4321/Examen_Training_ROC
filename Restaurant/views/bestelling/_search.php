<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\bestellingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bestelling-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'gerecht_id') ?>

    <?= $form->field($model, 'drank_id') ?>

    <?= $form->field($model, 'tafel_id') ?>

    <?= $form->field($model, 'afgeleverd') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
