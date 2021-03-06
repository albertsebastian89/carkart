<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\grid\DataColumn;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="car-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php 
    echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
    
                [
                'attribute'=>'image',
                'value'=>function($data) 
                {
                 return Yii::$app->request->BaseUrl . '/uploads/' . $data['carid'] . '.jpg' ;
                },
                'format'=>['image',['width'=>'35%', 'height'=>'35%']],
                ],
    
            'Car Name',
            'Brand',
            'Fuel',
            'price',
            'max seat',
             'Style',
             'Addon',
             
        ],
    ]); ?>
</div>
