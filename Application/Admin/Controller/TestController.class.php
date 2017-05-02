<?php
namespace Admin\Controller;
use Think\Controller;
class TestController extends Controller {
	public function test() {
		// echo "测试方法";
		// 定义变量名
		$var = date('Y-m-d H:i:s',time());
		// 变量传递
		$this -> assign('var',$var);
		// 展示模板
		$this -> display();
	}

	//总结U方法 URL组装  U('[分组名/控制器名/]方法名'，array('参数名' => 参数值))
	public function test1() {
		echo U('index');
		// 展示模板
		$this -> display('test');
	}

	public function test2() {
		echo U('Index/index');
		$this -> display('Demo/test1');
	}

	public function test3() {
		echo U('Index/index',array('id' => 100));
	}

	// 页面跳转
	public function test4() {
		$this -> success('操作成功',U('test'),2);
	}

	public function test5() {
		$this -> error('你人品有问题',U('test1'),2);
	}

	public function test6() {
		$this -> display();
	}
}
