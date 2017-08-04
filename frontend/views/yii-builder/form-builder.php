<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use kartik\widgets\ActiveForm;
use kartik\builder\Form;

$form = ActiveForm::begin();
echo Form::widget([
    'model' => $model,
    'form' => $form,
    'columns' => 2,
    'attributes' => [
        'username' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter username...']],
        'password' => ['type' => Form::INPUT_PASSWORD, 'options' => ['placeholder' => 'Enter password...']],
        'rememberMe' => ['type' => Form::INPUT_CHECKBOX],
    ]
]);
ActiveForm::end();
?>

