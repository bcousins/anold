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
echo '<form method="post" action="">';
echo '<br><br><br><br><center><h1>Asperger\'s Network - Move A Thread</h1>';
echo '<br><br><p align="center">Why are you hiding this post</p><br>';
echo '<center><input type="text" name="hide-reason" id="hide-reason" placeholder="Hide Reason"><br><input type="submit" value="Hide Post">';
echo '</form>';
include '../../tmp/footer.php';
}
else{
	$reason = $_POST['hide-reason'];

	mysql_query("UPDATE `f-posts` SET `hidden`=1, `reason`='{$reason}' WHERE `id`='{$_GET["p"]}'") or die(mysql_error());

echo '<br><br><br><br><center><h1>Asperger\'s Network - Hide a post</h1><br><p align="center">Post Hidden Successfully - You can now close this tab</p>';
}
?>