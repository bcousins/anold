<?php
/*
	Asperger's Network
	Ben Cousins
	©
	2012
	REPORT POST COMMUNITY
*/
	session_start();
//Assign the PageTitle Variable and Get the DataBase and Header files
$pagetitle = 'Report a post - Asperger\'s Network';
require '../inc/config.php';
require '../inc/checks.php';
include '../tmp/header.php';
echo '  <span class=gensmall>
            </span>
            <span class=nav>&raquo; <a href="./" class=nav>Asperger\'s Network</a> &raquo; <a href="./f.htm" class=nav>Forums Index</a> &raquo;  Report Post</span><br><br>';
            echo '<center><font size="+3">Report A Post</font></center>';

//And in closing...
include '../tmp/footer.php';
?>