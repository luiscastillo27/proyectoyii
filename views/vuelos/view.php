<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Vuelos */

$this->title = $model->id;
//$this->params['breadcrumbs'][] = ['label' => 'Vuelos', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vuelos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Esta seguro que deseas eliminar el vuelo?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'Origen',
            'Destino',
            'Salida',
            'Aribo',
            'tipo',
        ],
    ]) ?>

</div>
