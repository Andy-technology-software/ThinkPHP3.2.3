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

	public function test7() {
		$this -> display();
	}

	// 变量输出（一维数组）
	public function test8() {
		$array = array('西游记','葫芦娃','铁臂阿童木');
		
		// 二维数组
		$array2 = array(
				array('沙和尚','孙猴子'),
				array('武僧','西门庆'),
				array('薛宝钗','林黛玉')
			);
		$this -> assign('array',$array2);
		$this -> display();
	}

	// 变量分配（对象）
	public function test9() {
		// 实例化对象
		$stu = new Student();
		// 给类属性赋值
		$stu -> id = 100;
		$stu -> name = '马冬梅';
		$stu -> sex = '女';
		// dump($stu);
		$this -> assign('stu',$stu);
		$this -> display();
	}

	// 系统变量
	public function test10() {
		$this -> display();
	}
}











