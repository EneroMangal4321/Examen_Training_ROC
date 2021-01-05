<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MenuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Index';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="navbar">
    <a class="active" href="/site/index">Home</a>
    <a href="/reservering/index">Reserveringen</a>
    <a href="/tafel/index">Tafel</a>
    <a href="#about"><i>Andere pagina's toevoegen</i></a>
</div>
<div class="menu-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Menu', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?php $menuSoorten = [1=>'Drank', 2=>'Voorgerecht', 3=>'Hoofdgerecht', 4=>'Dessert', 5=>'Specials']?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'naam',
            [
                'attribute'=> 'type',
                'filter'=> $menuSoorten
            ],
            [
                'attribute'=> 'prijs',
                'label'=> 'Prijs per item',
                'contentOptions'=> ['style' => 'width:200px; white-space: normal;'],
                'format'=> 'raw',
                'value' => function ($model) {return '&euro;' . $model->prijs/100;}
            ],
            [
                'attribute'=> 'bestemming',
                'label'=> 'Bestemming',
                'contentOptions'=> ['style' => 'width:200px; white-space: normal;'],
                'format'=> 'raw',
                'value' => function ($model) {return $model->menuType->bestemming;}
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
