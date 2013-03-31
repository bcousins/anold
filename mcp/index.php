<?php
/*
	Asperger's Network
	Ben Cousins
	2012
	ModCP INDEX
*/
session_start();
//Assign the PageTitle Variable and Get the DataBase and Header files
$pagetitle = 'Moderator Control Panel';
require '../inc/config.php';
if($gid < 4){
	header("Location:login.php");
}
include '../tmp/header.php';

echo '<span class=nav>&raquo; <a href="./" class=nav>Asperger\'s Network</a> &raquo; Club Mod</span><br><br>';

//And in closing...
include '../tmp/footer.php';
?>