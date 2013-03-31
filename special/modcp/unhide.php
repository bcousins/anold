<?php
/*
	Asperger's Network
	Ben Cousins
	2012
	COMMUNITY UNHIDE POST PAGE - SPECIAL PERMISSIONS
*/
	session_start();
require '../../inc/config.php';
if($gid < 5){
	header("Location:/f.htm");
}
include '../../tmp/header.php';

	mysql_query("UPDATE `f-posts` SET `hidden`=0, `reason`='' WHERE `id`='{$_GET["p"]}'") or die(mysql_error());

echo '<br><br><br><br><center><h1>Asperger\'s Network - Hide a post</h1><br><p align="center">Post un-hidden Successfully - You can now close this tab</p>';

include '../../tmp/footer.php';
?>