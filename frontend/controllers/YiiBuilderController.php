<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\controllers;
use yii\web\Controller;
use frontend\models\SignupForm;

/**
 * Description of YiiBuilderController
 *
 * @author Administrator
 */
class YiiBuilderController extends Controller{
    
    public function actionFormBuilder(){
        $model=new SignupForm();
        return $this->renderPartial('form-builder',['model'=>$model])
    }
}
