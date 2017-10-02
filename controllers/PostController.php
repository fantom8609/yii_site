<?php
namespace app\controllers;
//use app\controllers\MyController;
use Yii;
/**
 * Description of PostController
 *
 * @author Умбакано
 */
class PostController extends MyController {
    public function actionIndex() {
            return $this->render('index');

    }
}
