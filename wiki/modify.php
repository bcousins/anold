<?php
/*
  Asperger's Network
  Created from RP2
  Copyright © 2013
  Ben Cousins
  script: /wiki/modify.php
*/
  session_start();
  require '../inc/config.php';
  $pagetitle = 'Modify Article';
require '../scripts/nbbc.php';
include '../tmp/header.php';
echo '  <span class=gensmall>
            </span>
            <span class=nav>&raquo; <a href="./" class=nav>Asperger\'s Network</a> &raquo; <a href="./w.htm" class=nav>Wiki Index</a> &raquo;  Modify Article</span><br><br>';
if(!$_POST){
  echo '<form method="post" action="">';
$sqlwiki = mysql_query("SELECT * from `wiki` WHERE `id` = '{$_GET["a"]}'");
while($row = mysql_fetch_assoc($sqlwiki)){
    echo '<center><table class="forumposts"><tbody>'; 
    echo '<tr><td class="u-details">';
    echo 'Title';
    echo '</td>';
    echo '<td class="u-post-content" colspan="2">';
    echo '<input type="text" name="title" value="'.$row['title'].'" disabled>';
    echo '</td>';
    echo '</tr>';
    echo '<tr><td class="u-details">';
    echo 'Content';
    echo '</td>';
    echo '<td class="u-post-content" colspan="2">';
    echo '<textarea rows="40" cols="120" name="content">'.stripslashes($row["content"]).'</textarea>';
    echo '</td>';
    echo '</tr>';
    echo '<tr><td class="u-details">';
    echo '<input type="submit" value="Update Article">';
    echo '</td>';
    echo '<td class="u-post-content" colspan="2">';
    echo '';
    echo '</td>';
    echo '</tr>';

echo '</form></tbody> </table></center>';
    } 
  }else{
    $content = mysql_real_escape_string($_POST['content']);
    $artnumber = $_GET["a"];
mysql_query("UPDATE `wiki`
SET content='".nl2br($content)."' WHERE id='".$_GET["a"]."'");

echo '<p>Updated Data Successfully. <a href="w-a'.$_GET["a"].'.htm">View Article</a>';
  
}
//And in closing...
include '../tmp/footer.php';
?>