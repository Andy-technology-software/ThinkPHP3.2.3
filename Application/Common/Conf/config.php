<?php
return array(
	//'配置项'=>'配置值'

	// 模板常量
	'TMPL_PARSE_STRING' => array(
			// 后台静态资源存放位置
			'__ADMIN__' => __ROOT__.'/Public/Admin'
		),

	'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'db_oa',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'sp_',    // 数据库表前缀

    SHOW_PAGE_TRACE			=> true,
);