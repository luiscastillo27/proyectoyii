<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Vuelos;

/* @var $this yii\web\View */
/* @var $model app\models\Reservaciones */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reservaciones-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idVuelo')->dropDownList(ArrayHelper::map(Vuelos::find()->all(), 'id', ['Origen']), ['prompt' => 'Selecciona un vuelo']) ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'correo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
