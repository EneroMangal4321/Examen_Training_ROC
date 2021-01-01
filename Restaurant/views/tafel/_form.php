<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tafel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tafel-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'reservering_id')->textInput() ?>

    <?= $form->field($model, 'bestelling_id')->textInput() ?>

    <?= $form->field($model, 'bon_id')->textInput() ?>

    <?= $form->field($model, 'aantal_plekken')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
