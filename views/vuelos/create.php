<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Vuelos */

$this->title = 'Nuevo vuelo';
//$this->params['breadcrumbs'][] = ['label' => 'Vuelos', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vuelos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<div class="vuelos-text">
    Se podran crear nuevos vuelos, colocando la cuidad de origen,
    la cuidad de destino, la hora de salida, la hora de llegada y determinar si
    es un viaje recondo o sencillo.
</div>