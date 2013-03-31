<?php
/*
  Asperger's Network Wiki
  NEWARTICLE
  Ben Cousins
  2012
  Hope it's right this time.
*/
session_start();
//Get config script...
require '../inc/config.php';
require '../inc/checks.php';
//Assign Pagetitle, and get Header:
$pagetitle = 'New Wiki Article';
include '../tmp/header.php';
echo '  <span class=gensmall>
            </span>
            <span class=nav>&raquo; <a href="./" class=nav>Asperger\'s Network</a> &raquo; <a href="./w.htm" class=nav>Wiki Index</a> &raquo;  Create a new Article</span><br><br>';

if(!$_POST){ 
echo '<br><div class="cat-fhead">New Wiki Article</div>';
 ?>
 <center>
  <table class="forumposts">
    <tbody>
      <?php echo '<form method="post" action="">';?>
        <tr>
          <td class="u-details">New Article Title</td><td class="u-post-content"><input type="text" name="title" id="title" /></td>
        </tr>
        <tr>
          <td class="u-details">Article Content</td><td class="u-post-content"><textarea name="content" cols="130" rows="20"></textarea></td>
        </tr>
        <tr>
          <td class="u-details"><input type="submit" value="Post new article" /></td><td class="u-post-content"></td>
        </tr>
      </form>
    </tbody>
  </table>
</center>
<?php
}
else{
//Get the stuff from the form...
  $title = mysql_real_escape_string($_POST['title']);
  $content = mysql_real_escape_string($_POST['content']);

mysql_query("INSERT INTO `wiki` (title, content)
VALUES ('".nl2br($title)."}', '".nl2br($content)."')") or die(mysql_error());



echo '<br><p>Posted Successfully. <a href="/w.htm">Return to the Wiki Index</a>';

}
//And in closing
include '../tmp/footer.php';
?>