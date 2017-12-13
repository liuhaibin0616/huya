<?php 
namespace backend\controllers;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\Liveroom;
use app\models\User;

class LiveroomController extends Controller
{
	public $enableCsrfValidation = false;

	public function actionAdd(){
		if($_POST){
			$Liveroom = new Liveroom;
			$data = Yii::$app->request->post();
			//print_r($data);die;
			$Liveroom->liveroom_name=$data['liveroom_name'];
			$Liveroom->liveroom_desc=$data['liveroom_desc'];
			$Liveroom->liveroom_start=$data['liveroom_start'];
			$Liveroom->liveroom_stop=$data['liveroom_stop'];
			$Liveroom->liveroom_man=$data['liveroom_man'];
			$Liveroom->liveroom_num=$data['liveroom_num'];
			$res = $Liveroom->save();
			if($res){
				return $this->render('show');
			}
		}else{
			$user = new User;
		$sql  = "SELECT user_name FROM user";
	   	$data = Yii::$app->db->createCommand($sql)->queryAll();
	   	return $this->render('add',['data'=>$data]);
		}
		
	}
	public function actionShow(){
		echo 1;die;
	}
}
?>