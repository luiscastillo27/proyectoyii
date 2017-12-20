<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VuelosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vuelos';
$loginyes = Yii::$app->user->isGuest;
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vuelos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    

    <?php  if($loginyes == 1){ ?>

        <?php foreach($model as $row): ?>
            <div class="inicio-content izquierda min tress">
                <div class="contenedor-body">
                    <h3>Numero de vuelo: <?= $row->id ?> </h3>
                    <h3>Origen: <?= $row->Origen ?> </h3>
                    <h3>Destino: <?= $row->Destino ?> </h3>
                    <h3>Salida: <?= $row->Salida ?> </h3>
                    <h3>Arribo: <?= $row->Aribo ?> </h3>
                    <h3>Tipo de vuelo: <strong><?= $row->tipo ?></strong> </h3>
                </div>
            </div>
        <?php endforeach ?>
        
    <?php  }  else { ?>

        <p>
            <?= Html::a('Create Vuelos', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id',
                'Origen',
                'Destino',
                'Salida',
                'Aribo',
                'tipo',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>

    <?php } ?>
</div>