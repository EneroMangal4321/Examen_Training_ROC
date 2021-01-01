<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ReserveringSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reservering-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'voornaam') ?>

    <?= $form->field($model, 'achternaam') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'telefoon_nummer') ?>

    <?php // echo $form->field($model, 'aantal_personen') ?>

    <?php // echo $form->field($model, 'datum') ?>

    <?php // echo $form->field($model, 'tijdstip') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
