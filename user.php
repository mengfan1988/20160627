<?php
include('./DB.class.php');
$res=M('content')->query();
?>
<html>
	<head>
		<title>新闻</title>
	</head>
	<body>
		<table border='1' rules='all'>
			<tr>
				<td>编号</td>
				<td>姓名</td>
				<td>内容</td>
				<td>时间</td>
			</tr>
			<?php foreach($res as $v){ ?>
			<tr>
				<td><?php echo $v['id']; ?></td>
				<td><?php echo $v['uname']; ?></td>
				<td><?php echo substr($v['content'],0,30); ?></td>   <!--截取10个汉字，utf8三个字节一个汉字-->
				<td><?php echo $v['cltime']; ?></td>
			</tr>
			<?php } ?>
		
		</table>
	
	
	</body>

</html>