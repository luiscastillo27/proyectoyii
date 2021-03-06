<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Reservaciones */

$this->title = $model->id;
//$this->params['breadcrumbs'][] = ['label' => 'Reservaciones', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reservaciones-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Esta seguro que desea eliminar esta reservacion?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'idVuelo',
            'nombre',
            'telefono',
            'correo',
        ],
    ]) ?>

</div>
