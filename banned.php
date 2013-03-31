<?php
/*
	Asperger's Network
	Ben Cousins
	2012
	You've been banned biatch!
*/
session_start();
//Assign the PageTitle Variable and Get the DataBase and Header files
$pagetitle = 'You\'ve been banned';
require './inc/config.php';
include './tmp/header.php';

echo '  <span class=gensmall>
            </span>
            <span class=nav>&raquo; <a href="./" class=nav>Asperger\'s Network</a> &raquo; You are banned</span><br><br>';
?>
<center><font size="+2">You've been banned</font></center>
<p>Congratulations, <?=$username?>, You've been banned from Asperger's Network. This could be because:
	<ul>
		<li>You're a spammer</li>
		<li>You have posted something illegal, and/or in severe breach of the rules you probably didn't read</li>
		<li>You have a warning level of 100%</li>
		<li>Your IP has been blacklisted on the server</li>
		<li>You have another account</li>
	</ul>
</p>
<p>Thank you for choosing Asperger's Network.</p>
<?php
//And in closing...
include '../tmp/footer.php';
?>