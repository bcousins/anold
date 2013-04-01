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

echo '<center><font size="+2">Edit My Account</font></center><br><br>';
if(!$_POST){
$userinfo = mysql_query("SELECT * from `members` where `username` = '{$_SESSION["username"]}'") or die(mysql_error());
while($row = mysql_fetch_assoc($userinfo)){
echo '<center><form method="post" action="">';
echo '<table border="0" width="75%" class="userprofile">
	<tr>';
echo '	<th>Username</th><td>'.$row['username'].'</td>
	</tr>
	<tr>
		<th>E-Mail Address</th><td><input type="text" value="'.$row['email'].'"></td>
	</tr>
	<tr>
		<th>Amusing Quip</th><td><input type="text" value="'.$row['quip'].'">
	</tr>';
echo '<tr>
		<th><input type="submit" value="Update Profile"></th>
	</tr>';
echo '</table>
</form></center>';
}
}
else{
	echo 'Must code this <a href="javascript.go(-1)">Return to form</a>';
}
//And in closing...
include '../tmp/footer.php';
?>