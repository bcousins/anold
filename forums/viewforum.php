<?php
/*
	Asperger's Network
	Ben Cousins
	2012
	COMMUNITY VIEWFORUM PAGE
*/
	session_start();
//Assign the PageTitle Variable and Get the DataBase and Header files
$pagetitle ='View Forum';
require '../inc/config.php';
require '../inc/checks.php';
include '../tmp/header.php';
echo '  <span class=gensmall>
            </span>
            <span class=nav>&raquo; <a href="./" class=nav>Asperger\'s Network</a> &raquo; <a href="./f.htm" class=nav>Forums Index</a> &raquo;  View Forum</span><br><br>';
//If the forum is Private Enquiries: 
if($_GET["f"] == 11){
	echo '<b>What to use Private Enquiries for</b>
	<br><p>Private Enquiries was created to allow a bit of privacy between users and Mods/Admins. Users may have various issues with other members.<br>
	These should not - If at all - Hit private enquiries. </p>
	<b>So what can I use Private Enquiries for? </b>
		<ul>
			<li>Moderation Queries</li>
			<li>Reporting Messages/Spammers</li>
			<li>Asking Questions about the site</li>
		</ul>
	<b>DO NOT use Private Enquiries for:</b>
		<ul>
			<li>User Complaints</li>
			<li>Moderator Complaints</li>
			<li>Requesting that a large number/all your posts be removed (We won\'t do this - See <a href="/w-a2.htm">Here</a>)</li>
		</ul>
	';
}
//Othewise - It's a normal forum.
else{
if($gid >= '1'){
echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="f-newt'.$_GET['f'].'.htm">New Thread</a><br>';
}
$sqltitle = mysql_query("SELECT `name` from `f-forums` WHERE `id` = '{$_GET["f"]}'") or die(mysql_error());
while($row = mysql_fetch_array($sqltitle)){
echo '<br><div class="cat-fhead">View Forum  - '.$row["name"]. '</div>';
}
echo '<center><table class="forumposts"> <tbody>';
echo '<tr><th class="u-tlinks">Topic Name</th>';
$sqlthread = mysql_query("SELECT * from `f-topics` WHERE `f_id` = '{$_GET["f"]}' ORDER BY `time` DESC") or die(mysql_error());
while($rowt = mysql_fetch_assoc($sqlthread)){
		if($rowt['deleted'] == 1){
	echo '<tr><td class="u-tlinks"><h3><a href="f-del-t'.$rowt["id"];
	echo '.htm">'.$rowt["title"].'</a></h3></td>';
	echo '<td class="u-post-content">';
	echo 'This thread has been <b>Deleted</b> - Reason:&nbsp;'.$rowt['del-reason'].'';
	echo '</td></tr>';
		}
		else{
	echo '<tr><td class="u-tlinks"><h3><a href="f-t'.$rowt["id"];
	echo '.htm">'.$rowt["title"].'</a></h3></td>';
	echo '<td class="u-post-content">';
	echo 'System Under Test, Please do not board';
	echo '</td></tr>';
		}
}
echo '</tbody> </table></center>';
}
//And in closing...
include '../tmp/footer.php';
?>
