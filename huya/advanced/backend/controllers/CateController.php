<?php
namespace backend\controllers;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\Category;
class CateController extends Controller
{
	public $enableCsrfValidation = false;


	//分类添加
	public function actionCate_add(){
		$cate = new Category();
		if($_POST)
		{
			$data = yii::$app->request->post();
			$cate->getAdd($data);
			return $this->redirect('index.php?r=cate/cate_show');
		}
		else
		{												
			
			$data = $cate->show_all('parent_id = 0');
			return $this->render('cate_add',['data'=>$data]);
		}
		
	}

	//分类展示
	public function actionCate_show(){
		$cate = new Category();
		$data = $cate->show_all();
		$arr = $cate->getList($data);
		return $this->render('cate_show',['arr'=>$arr]);
	}

	//分类删除
	public function actionCate_del(){
		$cate = new Category();
		$id = yii::$app->request->get('id');
		$res= $cate->Del_one($id);
		if($res)
		{
			echo "<script>alert('删除成功');location.href='http://www.myhuya.com/yii/advanced/backend/web/index.php?r=cate/cate_show'</script>";
		}
		else
		{
			echo "<script>alert('删除失败');location.href='http://www.myhuya.com/yii/advanced/backend/web/index.php?r=cate/cate_show'</script>";
		}
	}

	//分类修改
	public function actionCate_upd(){
		$cate = new Category();
		$id = yii::$app->request->get('id');
		$arr = $cate->show_one('cate_id='.$id);
		// var_dump($arr);die;
		$data = $cate->show_all('parent_id = 0');
		return $this->render('cate_upd',['data'=>$data,'arr'=>$arr]);
	}
	public function actionCate_upds(){
		$cate = new Category();
		$data = yii::$app->request->post();
		$res = $cate->getSave($data['cate_id'],$data);
		if($res)
		{
			echo "<script>alert('修改成功');location.href='http://www.myhuya.com/yii/advanced/backend/web/index.php?r=cate/cate_show'</script>";
		}
		else
		{
			echo "<script>alert('修改失败');location.href='http://www.myhuya.com/yii/advanced/backend/web/index.php?r=cate/cate_upd'</script>";
		}
	}

}