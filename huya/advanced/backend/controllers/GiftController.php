<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\Gift;
use yii\web\UploadedFile;
class GiftController extends Controller
{
	public $enableCsrfValidation = false;

	//礼物添加
	public function actionGift_add(){
		$gift = new Gift();
		if($_POST)
		{
			//接收图片的信息值
            $image = UploadedFile::getInstanceByName('gift_img');
            //可以打印看看
            //上传目录，进行命名
            $dir='../web/upload/';
            //这个文件要创建到web的目录下
            //文件的绝对路径
            $name = 'upload/'.$image->name;
            //保存文件函数，在手册上有，将图片保存到本地
            $status = $image->saveAs($name,true);
            //这个打印出来的是1！！
            //进行判断,保存本地失败，输出3
            if ($status) {
               $gift->gift_img= $name;

            }
			$data = yii::$app->request->post();
			$gift->getAdd($data);
			return $this->redirect('index.php?r=gift/gift_show');
		}
		else
		{
			return $this->render('gift_add');
		}
		
	}

	//分类展示
	public function actionGift_show(){
		$gift = new Gift();
		$data = $gift->show_all();
		return $this->render('gift_show',['data'=>$data]);
	}

	//分类删除
	public function actionGift_del(){
		$gift = new Gift();
		$id = yii::$app->request->get('id');
		$res= $gift->Del_one($id);
		if($res)
		{
			echo "<script>alert('删除成功');location.href='http://www.myhuya.com/yii/advanced/backend/web/index.php?r=gift/gift_show'</script>";
		}
		else
		{
			echo "<script>alert('删除失败');location.href='http://www.myhuya.com/yii/advanced/backend/web/index.php?r=gift/gift_show'</script>";
		}
	}

	//分类修改
	public function actionGift_upd(){
		$gift = new Gift();
		$id = yii::$app->request->get('id');
		$data = $gift->show_one('gift_id='.$id);
		return $this->render('gift_upd',['data'=>$data]);
	}
	public function actionGift_upds(){
		$gift = new Gift();
		$data = yii::$app->request->post();
		$res = $gift->getSave($data['gift_id'],$data);
		if($res)
		{
			echo "<script>alert('修改成功');location.href='http://www.myhuya.com/yii/advanced/backend/web/index.php?r=gift/gift_show'</script>";
		}
		else
		{
			echo "<script>alert('修改失败');location.href='http://www.myhuya.com/yii/advanced/backend/web/index.php?r=gift/gift_upd'</script>";
		}
	}
}