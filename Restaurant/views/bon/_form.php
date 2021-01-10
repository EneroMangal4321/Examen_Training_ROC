<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\bon */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bon-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tafel_id')->textInput() ?>

    <?= $form->field($model, 'reservering_id')->textInput() ?>

    <?= $form->field($model, 'bestelling_id')->textInput() ?>

    <?= $form->field($model, 'totaalprijs')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
