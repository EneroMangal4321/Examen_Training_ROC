<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\bestelling */
/* @var $form yii\widgets\ActiveForm */
?>
<?php $geleverd = [1=>'Nee', 2=>'Ja']?>

<div class="bestelling-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'gerecht_id')->dropDownList(ArrayHelper::map(menu::find()->select(['naam','type','prijs'])->all(), 'id', 'naam')); ?>

    <?= $form->field($model, 'drank_id')->textInput() ?>

    <?= $form->field($model, 'tafel_id')->textInput() ?>

    <?= $form->field($model, 'afgeleverd')->dropDownList($geleverd) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
