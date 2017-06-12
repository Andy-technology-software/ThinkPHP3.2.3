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

	public function captcha() {
		// 配置
		$cfg = array(
			'fontSize'  =>  12,              // 验证码字体大小(px)
	        'useCurve'  =>  false,            // 是否画混淆曲线
	        'useNoise'  =>  false,            // 是否添加杂点	
	        'imageH'    =>  38,               // 验证码图片高度
	        'imageW'    =>  90,               // 验证码图片宽度
	        'length'    =>  4,               // 验证码位数
	        // 'fontttf'   =>  '',              // 验证码字体，不设置随机获取
			);
		//实例化验证码类
		$verify = new Think\Verify($cfg);
		// 输出验证码
		$verify -> entry();
	}

	public function loginToIndex() {
		$post = I('post.');
		dump($post);
		$this -> success('登录成功',U('Index/index'),3);
	}
}	