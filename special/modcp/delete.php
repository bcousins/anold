<?php
/*
	Asperger's Network
	Ben Cousins
	2012
	Move Topic Moderation Page - SPECIAL PERMISSIONS
*/
	session_start();
require '../../inc/config.php';
if($gid < 5){
	header("Location:/f.htm");
}
include '../../tmp/header.php';
if(!$_POST){
	echo '
	<br><br><br><br>
	<h1>Delete a thread - Asperger\'s Network</h1>
	<form method="post" action="">
	<center>Reason for deleting this thread
	<br>
	<input type="text" name="reason" placeholder="reason"><br>
	<input type="submit" value="delete thread">
	</form>
	';
}
else{
	$reason = mysql_real_escape_string($_POST['reason']);

	mysql_query("UPDATE `f-topics`
SET `deleted`=1, `del-reason`='{$reason}'
WHERE `id`='{$_GET["t"]}'") or die(mysql_error());
echo '<br><br><br><br><center><h1>Asperger\'s Network - Delete A Thread</h1><br><p align="center">Thread Deleted Successfully <a href="./f.htm">Return to Forum Index</a></p>';
}

include '../../tmp/footer.php';
?>