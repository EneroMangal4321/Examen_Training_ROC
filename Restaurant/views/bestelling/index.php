<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\bestellingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bestelling';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="navbar">
    <a class="active" href="/site/index">Home</a>
    <a href="/menu/index">Menu</a>
    <a href="/tafel/index">Tafel</a>
    <a href="/reservering/index">Reserveringen</a>
    <a href="#about"><i>Andere pagina's toevoegen</i></a>
</div>
<div class="bestelling-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bestelling', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'gerecht_id',
            'drank_id',
            'tafel_id',
            'afgeleverd',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
