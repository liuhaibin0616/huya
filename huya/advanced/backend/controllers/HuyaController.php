<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
class HuyaController extends Controller
{
	public $enableCsrfValidation = false;
	public function actionIndex()
	{	
		$admin_name = yii::$app->session['admin_name'];
		return $this->render('index');
	}
}