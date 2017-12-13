<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

use app\models\Admin;

class LoginController extends Controller
{
	public $enableCsrfValidation = false;
	public $layout = false;
	public function actionRegister()
	{	
		if($_POST)
		{
			$admin = new Admin();
			$data = yii::$app->request->post();
			$admin->getAdd($data);
			return $this->redirect('index.php?r=login/login');
		}
		else
		{
			return $this->render('register');
		}	
	}
	public function actionLogin()
	{	
		$admin = new Admin();

		if($_POST)
		{	
			yii::$app->session['admin_name'] = $_POST['admin_name'];
			return $this->redirect('index.php?r=huya/index');
		}
		else
		{	
			return $this->render('login');
		}
		
	}

}