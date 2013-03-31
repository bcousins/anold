<?php
/*
	Asperger's Network
	Ben Cousins
	2012
	ModCP POST REPORTS
*/
session_start();
//Assign the PageTitle Variable and Get the DataBase and Header files
$pagetitle = 'Post Reports | Moderator Control Panel';
require '../inc/config.php';
if($gid < 4){
	header("Location:login.php");
}
include '../tmp/header.php';

echo '<span class=nav>&raquo; <a href="./" class=nav>Asperger\'s Network</a> &raquo; <a href="/mcp.htm" class=nav>Club Mod</a> &raquo Post Reports</span><br><br>';

//And in closing...
include '../tmp/footer.php';
?>