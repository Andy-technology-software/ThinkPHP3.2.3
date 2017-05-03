<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>test10系统变量</title>
</head>
<body>
$Think.server.path:<?php echo ($_SERVER['PATH']); ?><br/>
<?php echo ($_GET['id']); ?>
</body>
</html>