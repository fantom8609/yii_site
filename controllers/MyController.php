<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;
use \yii\web\Controller;
/**
 * Description of MyController
 *
 * @author Умбакано
 */
class MyController extends Controller{
    public function actionIndex($id = null) {
        $hi = "hello,Den";
        $massiv = array('Den', 'Oleg', 'Kostya');
        return $this->render('index',['hello' => $hi, 'names' => $massiv, 'id' => $id]);
    }
    
    
}

