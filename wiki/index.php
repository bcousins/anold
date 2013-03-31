<?php
/*
  Asperger's Network
  Created from RP2
  Copyright © 2013
  Ben Cousins
  script: /wiki/index.php
*/
  session_start();
  require '../inc/config.php';
  $pagetitle = 'Welcome to';
  include '../tmp/header.php';
?>
            <span class=gensmall>
            </span>
            <span class=nav>&raquo; <a href="./" class=nav>Asperger's Network</a> &raquo; Wiki Index</span>
<center><font size="+2">Asperger's Network Wiki</font></center>
<p>What is the Wiki?</p>
<p>The Asperger's Network Wiki is a collaboration pf various recourses that have been added by staff members (and, eventually users) of AN for the
  general public. There's also some forum articles, regarding the forums on the whole. or in part.<p>
<br>
<p>Wiki Articles</p>
<ul>
  <li><a href="w-a1.htm">Forum FAQ's</a> - The father of all FAQ.</li>
  <li><a href="w-a2.htm">Moderation FAQ's</a> - How we moderate here.</li>
  <li><a href="w-a4.htm">What is Asperger's?</a></li>
    <?php
    include '../tmp/footer.php';
    ?>