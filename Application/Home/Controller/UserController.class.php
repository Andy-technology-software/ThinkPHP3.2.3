<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
	public function test() {
		// phpinfo();
		echo $_GET['id'];
	}
}