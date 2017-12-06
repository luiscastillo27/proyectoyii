<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Vuelos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vuelos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php $origen = array('Cancún' => 'Cancún', 
                          'Vallarta' => 'Vallarta',   
                          'Japon' => 'Japon',    
                          'Alemania' => 'Alemania',
                          'Monterrey' => 'Monterrey',
                          'Guadalajara' => 'Guadalajara',
                          'Aguascalientes' => 'Aguascalientes',
                          'USA' => 'USA',
                          'Francia' => 'Francia',
                          'México' => 'México' ); ?>

    <?php $destino = array('Cancún' => 'Cancún', 
                          'Vallarta' => 'Vallarta',   
                          'Japon' => 'Japon',    
                          'Alemania' => 'Alemania',
                          'Monterrey' => 'Monterrey',
                          'Guadalajara' => 'Guadalajara',
                          'Aguascalientes' => 'Aguascalientes',
                          'USA' => 'USA',
                          'Francia' => 'Francia',
                          'México' => 'México' ); ?>

    <?= $form->field($model, 'Origen')->dropDownList([ $origen ]) ?>

    <?= $form->field($model, 'Destino')->dropDownList([ $destino ]) ?>

    <?= $form->field($model, 'Salida')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Aribo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo')->dropDownList([ 'Redondo' => 'Redondo', 'Sencillo' => 'Sencillo', ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Gurdar vuelo' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
