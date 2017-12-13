<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\User;
class UserController extends Controller
{

	public $enableCsrfValidation = false;

	public function actionUser_add(){
		if($_POST)
		{
			$data = yii::$app->request->post();
			$user= new User;         
			$user->user_name =$data['user_name'];  
			$user->user_pwd =$data['user_pwd'];
			$user->save();
			return $this->redirect('index.php?r=add/add_show');
		}
		else
		{
			return $this->render('user_add');
		}
		
	}

	//分类展示
	public function actionUser_show(){
		$sql  = "SELECT * FROM user";
	   	$data = Yii::$app->db->createCommand($sql)->queryAll();
        //print_r($data);die;
        return $this->render('user_show',['list'=>$data]);
	}

	public function actionUser_update(){
		$user = new User;
		$id = Yii::$app->request->get('id');
		$sql = "SELECT * FROM user WHERE user_id = '$id'";
		$data = Yii::$app->db->createCommand($sql)->queryAll();
		print_r($data);die;
		
		
	}

	public function actionUser_aaa(){
		return $this->render('user_aaa');
	}

}