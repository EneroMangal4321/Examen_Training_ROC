<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ReserveringSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reserveringen';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="navbar">
    <a class="active" href="/site/index">Home</a>
    <a href="/menu/index">Menu</a>
    <a href="/tafel/index">Tafel</a>
    <a href="/bestelling/index">Bestelling</a>
    <a href="#about"><i>Andere pagina's toevoegen</i></a>
</div>
<div class="reservering-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Reservering', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute'=>'id',
                'label'=>'ID',
                'contentOptions'=> ['style' => 'width:25px; white-space: normal;'],
                'format'=> 'raw'
            ],
            [
                'attribute'=>'voornaam',
                'label'=>'Voornaam',
                'contentOptions'=> ['style' => 'width:200px; white-space: normal;'],
                'format'=> 'raw'
            ],
            [
                'attribute'=>'achternaam',
                'label'=>'Achternaam',
                'contentOptions'=> ['style' => 'width:200px; white-space: normal;'],
                'format'=> 'raw'
            ],
            'email:email',
            [
                'attribute'=>'telefoon_nummer',
                'label'=>'Telefoon',
                'contentOptions'=> ['style' => 'width:100px; white-space: normal;'],
                'format'=> 'raw'
            ],
            [
                'attribute'=>'aantal_personen',
                'label'=>'Personen',
                'contentOptions'=> ['style' => 'width:50px; white-space: normal;'],
                'format'=> 'raw'
            ],
            [
                'attribute'=>'datum',
                'label'=>'Datum',
                'contentOptions'=> ['style' => 'width:100px; white-space: normal;'],
                'format'=> 'raw'
            ],
            [
                'attribute'=>'tijdstip',
                'label'=>'Tijdstip',
                'contentOptions'=> ['style' => 'width:100px; white-space: normal;'],
                'format'=> 'raw'
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
