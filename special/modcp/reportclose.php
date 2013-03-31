<?php
/*
	Asperger's Network - Mark III
	Ben Cousins
	2012
	Hope it's right this time.
	MODCP Report Center
*/
session_start();
//Get config script...
require '/an/config.php';
/*if($gid <5){
	header("Location:/f.htm");
}*/
//Assign Pagetitle, and get Header:
$pagetitle = 'Asperger\'s Network Report Center';
include '../../tmp/header.php';
echo '<br><br><br><br><h1>Asperger\'s Network Report Center</h1>';

echo '<br><br><br><br><p align="center">Report Closed Successfully <a href="javascript:history.go(-2)">Return to Forum Index</a></p>';
}
 
//And in closing...
include '../../tmp/footer.php';
?>