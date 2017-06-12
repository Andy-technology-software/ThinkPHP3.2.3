<?php
namespace Admin\Controller;
use Think\Controller;
class DeptController extends Controller{
	public function add() {
		if (IS_POST) {
			// 处理表单
			$model = D('Dept');
			// $post = I('post.');
			// $result = $model -> add($post);

			//数据对象方式创建
			$data = $model -> create();
			if (!$data) {
				//验证失败
				$this -> error($model -> getError());
				exit;
			}
			$result = $model -> add();
			if ($result) {
				// 添加成功
				$this -> success('添加成功',U('showList'),3);
			}else {
				//添加失败
				$this -> error('添加失败');
			}
		}else{
			// 查询定级部门
			$model = M('Dept');
			$data = $model -> where('pid = 0') -> select();
			$this -> assign('data',$data);
			$this -> display();
		}
	}

	public function showList() {
		$model = M('Dept');

		$data = $model -> select();

		$this -> assign('data',$data);

		$this -> display();
	}
}