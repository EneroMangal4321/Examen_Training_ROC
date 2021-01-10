<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\tafelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tafels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tafel-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tafel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'vaste_tafel_id',
            'reservering_id',
            'bestelling_id',
            'bon_id',
            //'aantal_plekken',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
