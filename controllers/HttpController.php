<?php
namespace app\controllers;
use yii\web\Controller;

class HttpController extends Controller{
	public function behaviors(){
		echo '1';
	}
	public function actionIndex(){
		return $this->renderPartial('index');
		// var_dump(get_class_methods($this));
	}
}