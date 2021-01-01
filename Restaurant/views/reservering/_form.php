<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Reservering */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reservering-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'voornaam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'achternaam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefoon_nummer')->textInput() ?>

    <?= $form->field($model, 'aantal_personen')->textInput() ?>

    <?= $form->field($model, 'datum')->textInput() ?>

    <?= $form->field($model, 'tijdstip')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
