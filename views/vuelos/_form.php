<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Vuelos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vuelos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Origen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Destino')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Salida')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Aribo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
