<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>视图中使用函数2-5</title>
</head>
<body>
<?php echo (date('Y-m-d H:i:s',$time)); ?><hr>
<?php echo (strtoupper(substr($temStr,0,5))); ?>
</body>
</html>