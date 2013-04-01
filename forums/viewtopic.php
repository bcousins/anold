<?php
/*
	Asperger's Network
	Ben Cousins
	2012
	COMMUNITY VIEWTOPIC PAGE
*/
	session_start();
//Assign the PageTitle Variable and Get the DataBase and Header files
$pagetitle = 'View Topic';
require '../inc/config.php';
require '../inc/checks.php';
require '../scripts/nbbc.php';
include '../tmp/header.php';
echo '  <span class=gensmall>
            </span>
            <span class=nav>&raquo; <a href="./" class=nav>Asperger\'s Network</a> &raquo; <a href="./f.htm" class=nav>Forums Index</a> &raquo;  View Topic</span><br><br>';
if($gid >5){
echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo 'Mod Tools: <a href="m-move-'.$_GET['t'].'.htm">Move Thread</a> - <a href="m-lock-'.$_GET['t'].'.htm">Lock Thread</a> - <a href="m-delete-'.$_GET['t'].'.htm">Delete Thread</a>';
}
$sqltopic = mysql_query("SELECT * from `f-topics` WHERE `id` = '{$_GET["t"]}'");
while($rowf = mysql_fetch_assoc($sqltopic)){
echo '<div class="cat-fhead">View Topic - '.stripslashes($rowf["title"]). '</div>';
}
echo '<center><table class="forumposts"><tbody>'; 

$sqltcontent = mysql_query("SELECT * from `f-posts` WHERE `t_id` = '{$_GET["t"]}' ORDER BY `id`");
while($rowt = mysql_fetch_assoc($sqltcontent)){
	//If hidden
	if($rowt['hidden'] == 1){
		echo '<tr><td class="u-details">';
		$usr = mysql_query("SELECT * from `members` WHERE `id` = '{$rowt["poster_id"]}'") or die(mysql_error());
		while($udetails = mysql_fetch_assoc($usr)){
		echo $udetails['username'];
		echo '</td>';
	echo '<td class="u-post-content" colspan="2">';
	echo '<i>This post has been hidden by a Moderator: ';
	echo $rowt["reason"];
	echo '</i>&nbsp;&nbsp;';

	if($gid >5){
		echo '<a href="f-unhide-'.$rowt['id'].'.htm" target="_new">Unhide Post</a></td></tr>';
	}
}
	}
	else{
		//if _NOT_ hidden
	echo '<tr><td class="u-details"><a name="'.$rowt["id"].'"></a>';
		$usr = mysql_query("SELECT * from `members` WHERE `id` = '{$rowt["poster_id"]}'") or die(mysql_error());
		while($udetails = mysql_fetch_assoc($usr)){
		echo '<b>'.$udetails['username'].'</b>';
		echo '<br>';
		if($udetails['quip'] !== 'NULL'){
		echo $udetails['quip'];
		echo '<br>';}
		echo '<em>'.$udetails['status'].'</em>';
		echo '</td>';
			echo '<td class="u-post-content">';
			$content = stripslashes($rowt["content"]);
			$bbcode = new BBCode;
    		print $bbcode->Parse($content);
			echo '</td>';
				echo '<td class="u-plinks">';
					if(isset($username)){
				echo '<a href="f-r'.$rowt['id'];
				echo '.htm">Reply to Post</a>';
				//if($rowt['poster_id'] === $uid){ echo '<a href="f-e'.$rowt['id'].'.htm">Edit Post</a>'; }
				echo '<br><a href="f-rpt-'.$rowt['id'];
				echo '.htm">Report</a> - <a href="#'.$rowt['id'];
				echo '">Permalink</a>';
					if($gid >5){
				echo '<br><a href="f-hide-'.$rowt['id'].'.htm" target="_new">Hide Post</a>';
					}
				echo '<br>';
				echo 'Posted:&nbsp;'.$rowt['timestamp'].'</td>';
}
}

	echo '</tr>';
}
}
echo '</tbody> </table></center>';
//And in closing...
include '../tmp/footer.php';
?>