<?php
namespace Admin\Controller;
use Think\Controller;
class AppController extends Controller {
	// app登录接口
	public function where() {
		$model = M('Dept');
		$data = $model -> where('name = "皮卡丘"') -> find();
		if($data){
	      returnApiSuccess('成功',$data);
	    }else{
	      returnApiError( '什么也没查到(+_+)！');
	    }
	}
}