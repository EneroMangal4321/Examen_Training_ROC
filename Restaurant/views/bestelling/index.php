<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Menu;
use app\models\VasteTafel;

/* @var $this yii\web\View */
/* @var $searchModel app\models\bestellingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bestelling';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php $geleverd = [1=>'Nee', 2=>'Ja']?>

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
            [
                'attribute'=> 'gerecht_id',
                'value'=> function ($model) {return $model->menuItems->naam;}
            ],
            [
                'attribute'=> 'drank_id',
            ],
            [
                'attribute'=> 'tafel_id',
                'value'=> function ($model) {return $model->tafelNaam->naam;}
            ],
            [
                'attribute'=> 'afgeleverd',
                'value'=> function ($model) {return $model->levering->status;}
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
