<?php
namespace Admin\Model;

use Think\Model;

class DeptModel extends Model{
	protected $_validate        =   array(
			array('name','require','部门名称不能为空'),
			array('name','','部门已存在',0,'unique'),
			array('sort','number','排序必须是数字'),
		);
}