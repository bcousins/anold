<?php
/*
	Asperger's Network Community
	NEWTHREAD
	Ben Cousins
	2012
	Hope it's right this time.
*/
session_start();
//Get config script...
require '../inc/config.php';
require '../inc/checks.php';
//Assign Pagetitle, and get Header:
$pagetitle = 'New Thread';
include '../tmp/header.php';
echo '  <span class=gensmall>
            </span>
            <span class=nav>&raquo; <a href="./" class=nav>Asperger\'s Network</a> &raquo; <a href="./f.htm" class=nav>Forums Index</a> &raquo;  Create a new thread</span><br><br>';

echo '<br><font size="+3"><center>Asperger\'s Network - Create a New Thread</center></font><br>';
if(!$_POST){ 
$sqltitle = mysql_query("SELECT `name` from `f-forums` WHERE `id` = '{$_GET["f"]}'") or die(mysql_error());
while($row = mysql_fetch_array($sqltitle)){
echo '<br><div class="cat-fhead">New Thread in Forum: '.$row["name"]. '</div>';
}
 ?>
 <center><table class="forumposts"><tbody><?php echo '<form method="post" action="">';?>
 			<tr><td class="u-details">New Thread Title</td><td class="u-post-content"><input type="text" name="title" id="title" /></td></tr>
            <tr><td class="u-details">Post Content</td><td class="u-post-content"><textarea name="content" cols="130" rows="20"></textarea></td></tr>
            <tr><td class="u-details"><input type="submit" value="Post Thread" /></td><td class="u-post-content"></td></tr></form>
            </tbody></table></center>
<?php
}
else{
//Get the stuff from the form...
	$title = mysql_real_escape_string($_POST['title']);
	$content = mysql_real_escape_string($_POST['content']);

mysql_query("INSERT INTO `f-topics` (f_id, title, poster_id)
VALUES ('".$_GET["f"]."', '{$title}', '".$uid."')") or die(mysql_error());

$gettitle = mysql_query("SELECT * from `f-topics` WHERE `title` = '{$title}' LIMIT 1") or die(mysql_error());
while($rowfid = mysql_fetch_assoc($gettitle)){
mysql_query("INSERT INTO `f-posts` (t_id, content, poster_id)
VALUES ('".$rowfid["id"]."', '".nl2br($content)."', '{$uid}')") or die(mysql_error());

echo '<br><br><br><br><center><a href="f-t'.$rowfid["id"].'.htm">View your new topic</a>';
}
}
//And in closing
include '../tmp/footer.php';
?>