<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Username;
use App\Http\Requests;
use Sensitive;
use Illuminate\Support\Facades\Redis;

class HuyaController extends Controller
{

public function index(){
    //开启摄像头
    return view('huya/index');

}
public function show(){
   //查看摄像头
    return view('huya/show');
    
}


	/*public function __construct(){
		$this->ablout = new Username;
	}
    public function getAbout(){
    	return view('home/index');
    }
    public function add(){
    	$data = Input::get();
        $interference = ['&', '*'];
        $filename = 'D:\phpStudy\WWW\9\laravel-master\vendor\yankewei\laravel-sensitive\demo\words.txt'; //每个敏感词独占一行
        Sensitive::interference($interference); //添加干扰因子
        Sensitive::addwords($filename); //需要过滤的敏感词
       
        $words = Sensitive::filter($data['username']);
    $data['username'] = $words;


    	$aa = $this->ablout->add($data);
    	if($aa){
    		return redirect('show');
    	}else{
    		echo "添加失败";
    	}
    }
    public function show(){
    	$data = $this->ablout->show();

    	if($data){
    		return view('home/show',['data'=>$data]);
    	}else{
    		echo '查找数据失败';
    	}
    }
    public function delete(){
    	$data = Input::get();
    	$id = $data['id'];

    	$a = $this->ablout->del($id);
    	$data = $this->ablout->show();
    	if($a){	

    		return view('home/show',['data'=>$data]);
    	}else{
    		echo "删除失败";
    	}
    }
    public function update(){
    	$data = Input::get();
    	$id = $data['id'];

    	$data = $this->ablout->updata($id);
    	if($data){
    		return view('home/updata',['data'=>$data]);
    	}else{
    		echo '修改数据失败1';
    	}
    }	
    public function updates(){

    	$data = Input::get();
    	$arr = $this->ablout->updates($data);
    	$data = $this->ablout->show();
    	if($arr){
    		return view('home/show',['data'=>$data]);
    	}else{
    		echo 2;
    	}
    }*/
    
}
