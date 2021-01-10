<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

use app\models\VasteTafel;
use app\models\Reservering;

/* @var $this yii\web\View */
/* @var $model app\models\tafel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tafel-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'vaste_tafel_id')->dropDownList(ArrayHelper::map(VasteTafel::find()->all(), 'id', 'naam')); ?>

    <?= $form->field($model, 'reservering_id')->dropDownList(ArrayHelper::map(Reservering::find()->all(), 'id', 'achternaam')); ?>

    <?= $form->field($model, 'bon_id')->dropDownList(ArrayHelper::map(Reservering::find()->all(), 'id', 'achternaam')); ?>

    <?= $form->field($model, 'aantal_plekken')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
