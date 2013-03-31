<?php
/*
  Asperger's Network
  Created from RP2
  Copyright © 2013
  Ben Cousins
  script: /wiki/article.php
*/
  session_start();
  require '../inc/config.php';
  $pagetitle = 'View Wiki Article';
require '../scripts/nbbc.php';
include '../tmp/header.php';
echo '  <span class=gensmall>
            </span>
            <span class=nav>&raquo; <a href="./" class=nav>Asperger\'s Network</a> &raquo; <a href="./w.htm" class=nav>Wiki Index</a> &raquo;  Wiki Article</span><br><br>';
if($gid >5){
echo '<a href="w-m'.$_GET["a"].'.htm">Modify This Article</a>';
}
$sqlwiki = mysql_query("SELECT * from `wiki` WHERE `id` = '{$_GET["a"]}'");
while($row = mysql_fetch_assoc($sqlwiki)){
echo '<center><font size="+2">'.stripslashes($row["title"]).'</font></center>';
$content = stripslashes($row["content"]);
$bbcode = new BBCode;
print $bbcode->Parse($content);
}
//And in closing...
include '../tmp/footer.php';
?>