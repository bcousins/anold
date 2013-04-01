<?php
/*
  Asperger's Network
  Created from RP2
  Copyright © 2013
  Ben Cousins
  script: /inc/config.php
*/
mysql_connect('localhost','root','1-60Room');
mysql_select_db('an');

//And assign the constant variables...

$cVariable = mysql_query("SELECT * FROM `members` WHERE `username` = '{$_SESSION["username"]}'");
while ($uVariable = mysql_fetch_assoc($cVariable)){
        $username       = $uVariable['username'];
        $uid            = $uVariable['id'];
        $gid            = $uVariable['groupid'];
        $banned         = $uVariable['banned'];
}

//header("Location: /noob.php");
?>
