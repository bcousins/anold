<?php
/*
	Asperger's Network
	Ben Cousins
	2012
	MODIFY ACCOUNT PAGE
*/
	session_start();
//Assign the PageTitle Variable and Get the DataBase and Header files
$pagetitle ='My Account';
require '../inc/config.php';
include '../tmp/header.php';
echo '  <span class=gensmall>
            </span>
            <span class=nav>&raquo; <a href="/" class=nav>Asperger\'s Network</a> &raquo;  Edit My Account</span><br><br>';

echo '<center><font size="+3">Edit My Account</font></center><br><br>';
$userinfo = mysql_query("SELECT * from `members` where `id` = '{$_SESSION["username"]}'");
while($row = mysql_fetch_assoc($userinfo)){

}

//And in closing...
include '../tmp/footer.php';
?>