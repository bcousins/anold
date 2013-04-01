<?php
/*
	Asperger's Network
	Ben Cousins
	2012
	COMMUNITY reply to post PAGE
*/
	session_start();
//Assign the PageTitle Variable and Get the DataBase and Header files
$pagetitle = 'Reply to Topic';
require '../inc/config.php';
require '../inc/checks.php';
include '../tmp/header.php';
echo '  <span class=gensmall>
            </span>
            <span class=nav>&raquo; <a href="./" class=nav>Asperger\'s Network</a> &raquo; <a href="./f.htm" class=nav>Forums Index</a> &raquo;  Reply to Topic</span><br><br>';
if(!$_POST){
echo '<br><br><br><br>';
echo '<div class="cat-fhead">Reply to Topic</div>';
echo '<center><table class="forumposts"><tbody>'; 
$sqltcontent = mysql_query("SELECT * from `f-posts` /*ORDER BY `pid`*/ WHERE `id` = '{$_GET["p"]}'");
while($rowt = mysql_fetch_assoc($sqltcontent)){
	echo '<tr><a name="p'.$rowt['id'].'"><td class="u-details">';
	$usr = mysql_query("SELECT * from `members` WHERE `id` = '{$rowt["poster_id"]}'") or die(mysql_error());
		while($udetails = mysql_fetch_assoc($usr)){
		echo $udetails['username'];
	}
	echo ' wrote:<br>';
	echo '</td>';
	echo '<td class="u-post-content">';
	echo $rowt["content"];
	echo '</td></tr>';
	echo '<tr><td class="u-post-content" colspan="2"><button onmousedown="pastequote();" onmouseup="doPreview();" type="button">Quote Highlighted</button></td></tr>';
}
echo '</tbody></table></center><br>';
echo '<form method="post" action="f-r'.$_GET['p'].'.htm">';
?>
        <p align="center">     
                <textarea name="content" cols="151" rows="20"></textarea>
                <input type="submit" value="Post this" />
        </p>
</form>
<?php
echo '<script src="/js/freply.js"></script>';
}
else{
	if(!$username){
		echo '<br><br><br><br><p>Want to, Maybe, Log in to do that? Hover over the "Asperger\'s Network" to Log In!';
	}
 
$content = mysql_real_escape_string($_POST['content']);

$gettitle = mysql_query("SELECT * from `f-posts` WHERE `id` = '{$_GET["p"]}' LIMIT 1") or die(mysql_error());
while($rowfid = mysql_fetch_assoc($gettitle)){
mysql_query("INSERT INTO `f-posts` (t_id, content, poster_id)
VALUES ('{$rowfid['t_id']}', '".nl2br($content)."', '{$uid}')") or die(mysql_error());
mysql_query("UPDATE `f-topics` set time=now() where `id` = '{$rowfid['t_id']}'") or die(mysql_error());
echo '<br><br><br><br>Post Submitted Successfully - <a href="javascript:history.go(-2)">Return to Thread</a>';
}
}
//And in closing...
include '../tmp/footer.php';
?>