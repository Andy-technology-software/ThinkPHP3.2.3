<?php
namespace Admin\Controller;
use Think\Controller;
class PublicController extends Controller {
	public function login() {
		$this -> display();
		// 模板内容获取
		// $str = $this -> fetch();
		// dump($str);

		// display()前两步操作  实际是fetch实现的
		// echo $str;
	}
}