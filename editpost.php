<?php
/*
	Asperger's Network Community
	EDIT POST
	Ben Cousins
	2012
	Hope it's right this time.
*/
session_start();
//Get config script...
require '../inc/config.php';
//Assign Pagetitle, and get Header:
$pagetitle = 'Edit Post';
include '../tmp/header.php';
echo '  <span class=gensmall>
            </span>
            <span class=nav>&raquo; <a href="./" class=nav>Asperger\'s Network</a> &raquo; <a href="./f.htm" class=nav>Forums Index</a> &raquo;  Create a new thread</span><br><br>';

echo '<br><font size="+3"><center>Asperger\'s Network - Edit a post</center></font><br>';
if(!$_POST){ 
echo '<center><table class="forumposts"><tbody>'; 
$sqltcontent = mysql_query("SELECT * from `f-posts` WHERE `id` = '{$_GET["p"]}'") or die(mysql_error());
while($row = mysql_fetch_assoc($sqltcontent)){
?>
        <p align="center">     
                <textarea name="content" cols="151" rows="20"><?php echo $row['content']; ?></textarea>
                <input type="submit" value="Post this" />
        </p>
</form>
<?php
}
else{
	$content = mysql_real_escape_string($_POST['content']);

mysql_query("UPDATE `f-posts` SET content=".$content." WHERE `id` = '{$_GET['p']}'")

echo '<br><br><br><br><center><a href="javascript:history.go(-2)">Return to Thread</a>';
}
}
//And in closing
include '../tmp/footer.php';
?>