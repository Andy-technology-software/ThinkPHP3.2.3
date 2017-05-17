<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>循环遍历2-9</title>
</head>
<body>
一维数组：<br>
<?php if(is_array($array1)): $i = 0; $__LIST__ = $array1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i; echo ($vol); ?> --<?php endforeach; endif; else: echo "" ;endif; ?>

<hr>

<?php if(is_array($array1)): foreach($array1 as $key=>$for): echo ($for); ?> --<?php endforeach; endif; ?>

<hr>
二维数组：<br>
<?php if(is_array($array2)): $i = 0; $__LIST__ = $array2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i; if(is_array($vol)): $i = 0; $__LIST__ = $vol;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; echo ($v); ?> ------<?php endforeach; endif; else: echo "" ;endif; ?>
	<br><?php endforeach; endif; else: echo "" ;endif; ?>
<hr>
<?php if(is_array($array2)): foreach($array2 as $key=>$for): if(is_array($for)): foreach($for as $key=>$f): echo ($f); ?> ---<?php endforeach; endif; ?>
	<br><?php endforeach; endif; ?>
<hr>

<?php if(is_array($array2)): $i = 0; $__LIST__ = $array2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i; echo ($vol[0]); ?> -- <?php echo ($vol[1]); ?> -- <?php echo ($vol[2]); ?> <br><?php endforeach; endif; else: echo "" ;endif; ?>
<hr>
</body>
</html>