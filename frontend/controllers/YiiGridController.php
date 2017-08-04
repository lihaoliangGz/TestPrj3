<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\controllers;
use yii\web\Controller;
use frontend\models\SignupForm;
use yii\data\ArrayDataProvider;
use yii\data\Sort;
use yii\db\Query;

/**
 * Description of YiiGridController
 *
 * @author Administrator
 */
class YiiGridController extends Controller{
    
    public function  actionIndex(){
        $sort=new Sort([
             'attributes' => [
                'code' => [
                    'asc' => ['code' => SORT_ASC],
                    'desc' => ['code' => SORT_DESC],
                    'default' => SORT_DESC,
                    //'label' => Inflector::camel2words('age'),
                    'label' => "CODE",
                ],
                'name',
            ],
        ]);
        
        $dataProvider = new ActiveDataProvider([
            'query' => (new Query())->from('country'),
            'pagination' => [
                'pageSize' => 3,
            ],
            'sort' => $sort,
        ]);

        //$model=new SignupForm();
        return $this->render('index', ['dataProvider'=> $dataProvider]);
    }
}
