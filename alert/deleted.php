<!doctype html>
<html lang="en">
<head>
	<title>Thread Deleted | Asperger's Network</title>
<style type="text/css">
body{
	background:#00f;
	font-family:arial, helvetica, sans-serif;
}
h1{
	color:#fff;
	text-align: center;
}
p{
	color:#fff;
	text-align:center;
}
p a, p a:visited{
	color:#fff;
}
p a:hover{
	color:#fff;
	text-decoration:none;
}
</style>
</head>
<body><br><br><br><br>
	<h1>This thread has been deleted</h1>
	<p>Reason: 
		<?php
		mysql_connect('fang.aspergersnetwork.com','root','1-60Room');
		mysql_select_db('an');
		$reason = mysql_query("SELECT * from `f-topics` WHERE `id` = '{$_GET["t"]}'") or die(mysql_error());
		while($rowd = mysql_fetch_assoc($reason)){
		echo $rowd['del-reason'];
	}
		 ?>
		</p>
		<p><a href="javascript:history.go(-1)">Return to Forum last visited</a></p>
</body>
</html>