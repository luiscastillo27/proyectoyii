<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Reservaciones */

$this->title = 'Create Reservaciones';
//$this->params['breadcrumbs'][] = ['label' => 'Reservaciones', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reservaciones-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
