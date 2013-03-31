<?php
/*
	Asperger's Network
	Ben Cousins
	2012
	COMMUNITY INDEX PAGE
*/
session_start();
//Assign the PageTitle Variable and Get the DataBase and Header files
$pagetitle = 'Forums Index';
require '../inc/config.php';
require '../inc/checks.php';
include '../tmp/header.php';

echo '  <span class=gensmall>
            </span>
            <span class=nav>&raquo; <a href="./" class=nav>Asperger\'s Network</a> &raquo; Forums Index</span><br><br>';
echo '<div id="forums">';
//Query the DB for Categories ($sqlcat), forums ($sqlfrm), Recent Posts - And much, much, much more.
$sqlcat1 = mysql_query('SELECT * FROM  `f-cat` WHERE `id` = 1') or die(mysql_error());
$sqlforum1 = mysql_query('SELECT * FROM  `f-forums` WHERE `cat_id` = 1 ORDER BY `id`') or die(mysql_error());
//Prepare the div (??)
while($row = mysql_fetch_array($sqlcat1))
  {
	echo '<div class="cat">';
  	echo $row['name'];
  	echo '</div>';
  }
  //Prepare Table
  echo '<center><table border="0" class="forums"> <tbody>';
while($rowf = mysql_fetch_array($sqlforum1))
	{
		echo '<tr><td class="f-link"><h3><a href="f-f'.$rowf["id"];
		echo '.htm">'.$rowf["name"].'</a></h3></td>';
		echo '<td class="forumrecent">';
		$sqlrecentposts = mysql_query("SELECT * FROM `f-topics` where `f_id` = '{$rowf["id"]}' && `deleted` = 0 ORDER BY `time` DESC LIMIT 3") or die(mysql_error());
			while($rowrecent = mysql_fetch_array($sqlrecentposts)){
				if($rowrecent['deleted'] == 1){
			echo '<a href="f-del-t'.$rowrecent['id'].'.htm">'.$rowrecent['title'];
			echo '</a><br>';
				}
				else{
			echo '<a href="f-t'.$rowrecent['id'].'.htm">'.$rowrecent['title'];
			echo '</a><br>';
				}
			}

		echo '</td></tr>';
	}
	//End the Table
	echo '</tbody> </table></center><br><br>';

//Query the DB for Categories ($sqlcat), forums ($sqlfrm), Recent Posts - And much, much, much more.
$sqlcat1 = mysql_query('SELECT * FROM  `f-cat` WHERE `id` = 2') or die(mysql_error());
$sqlforum1 = mysql_query('SELECT * FROM  `f-forums` WHERE `cat_id` = 2 ORDER BY `id`') or die(mysql_error());
//Prepare the div (??)
while($row = mysql_fetch_array($sqlcat1))
  {
	echo '<div class="cat">';
  	echo $row['name'];
  	echo '</div>';
  }
  //Prepare Table
  echo '<center><table border="0" class="forums"> <tbody>';
while($rowf = mysql_fetch_array($sqlforum1))
	{
		echo '<tr><td class="f-link"><h3><a href="f-f'.$rowf["id"];
		echo '.htm">'.$rowf["name"].'</a></h3></td>';
		echo '<td class="forumrecent">';
		$sqlrecentposts = mysql_query("SELECT * FROM `f-topics` where `f_id` = '{$rowf["id"]}' && `deleted` = 0 ORDER BY `time` DESC LIMIT 3") or die(mysql_error());
			while($rowrecent = mysql_fetch_array($sqlrecentposts)){
			if($rowrecent['deleted'] == 1){
			echo '<a href="f-del-t'.$rowrecent['id'].'.htm">'.$rowrecent['title'];
			echo '</a><br>';
				}
				else{
			echo '<a href="f-t'.$rowrecent['id'].'.htm">'.$rowrecent['title'];
			echo '</a><br>';
				}

			}		echo '</td></tr>';
	}
	//End the Table
	echo '</tbody> </table></center><br><br>';

//Query the DB for Categories ($sqlcat), forums ($sqlfrm), Recent Posts - And much, much, much more.
$sqlcat1 = mysql_query('SELECT * FROM  `f-cat` WHERE `id` = 3') or die(mysql_error());
$sqlforum1 = mysql_query('SELECT * FROM  `f-forums` WHERE `cat_id` = 3 ORDER BY `id`') or die(mysql_error());
//Prepare the div (??)
while($row = mysql_fetch_array($sqlcat1))
  {
	echo '<div class="cat">';
  	echo $row['name'];
  	echo '</div>';
  }
  //Prepare Table
  echo '<center><table border="0" class="forums"> <tbody>';
while($rowf = mysql_fetch_array($sqlforum1))
	{
		echo '<tr><td class="f-link"><h3><a href="f-f'.$rowf["id"];
		echo '.htm">'.$rowf["name"].'</a></h3></td>';
		echo '<td class="forumrecent">';
		$sqlrecentposts = mysql_query("SELECT * FROM `f-topics` where `f_id` = '{$rowf["id"]}' && `deleted` = 0 ORDER BY `time` DESC LIMIT 3") or die(mysql_error());
			while($rowrecent = mysql_fetch_array($sqlrecentposts)){
			if($rowrecent['deleted'] == 1){
			echo '<a href="f-del-t'.$rowrecent['id'].'.htm">'.$rowrecent['title'];
			echo '</a><br>';
				}
				else{
			echo '<a href="f-t'.$rowrecent['id'].'.htm">'.$rowrecent['title'];
			echo '</a><br>';
				}

			}
		echo '</td></tr>';
	}
	//End the Table
	echo '</tbody> </table></center><br><br>';
	
//Query the DB for Categories ($sqlcat), forums ($sqlfrm), Recent Posts - And much, much, much more.
$sqlcat1 = mysql_query('SELECT * FROM  `f-cat` WHERE `id` = 4') or die(mysql_error());
$sqlforum1 = mysql_query('SELECT * FROM  `f-forums` WHERE `cat_id` = 4 ORDER BY `id`') or die(mysql_error());
//Prepare the div (??)
while($row = mysql_fetch_array($sqlcat1))
  {
	echo '<div class="cat">';
  	echo $row['name'];
  	echo '</div>';
  }
  //Prepare Table
  echo '<center><table border="0" class="forums"> <tbody>';
while($rowf = mysql_fetch_array($sqlforum1))
	{
		echo '<tr><td class="f-link"><h3><a href="f-f'.$rowf["id"];
		echo '.htm">'.$rowf["name"].'</a></h3></td>';
		echo '<td class="forumrecent">';
		$sqlrecentposts = mysql_query("SELECT * FROM `f-topics` where `f_id` = '{$rowf["id"]}' && `deleted` = 0 ORDER BY `time` DESC LIMIT 3") or die(mysql_error());
			while($rowrecent = mysql_fetch_array($sqlrecentposts)){
			if($rowrecent['deleted'] == 1){
			echo '<a href="f-del-t'.$rowrecent['id'].'.htm">'.$rowrecent['title'];
			echo '</a><br>';
				}
				else{
			echo '<a href="f-t'.$rowrecent['id'].'.htm">'.$rowrecent['title'];
			echo '</a><br>';
				}

			}
		echo '</td></tr>';
	}
	//End the Table
	echo '</tbody> </table></center>';
	if($gid >= 3){
	echo '<br><br>';
	//Query the DB for Categories ($sqlcat), forums ($sqlfrm), Recent Posts - And much, much, much more.
$sqlcat1 = mysql_query('SELECT * FROM  `f-cat` WHERE `id` = 5') or die(mysql_error());
$sqlforum1 = mysql_query('SELECT * FROM  `f-forums` WHERE `cat_id` = 5 ORDER BY `id`') or die(mysql_error());
//Prepare the div (??)
if($gid < $row['permission']){

}
else{
while($row = mysql_fetch_array($sqlcat1))
  {
	echo '<div class="cat">';
  	echo $row['name'];
  	echo '</div>';
  }
  //Prepare Table
  echo '<center><table border="0" class="forums"> <tbody>';
while($rowf = mysql_fetch_array($sqlforum1))
	{
		if($gid < $rowf['permission']){
		}
		else{
		echo '<tr><td class="f-link"><h3><a href="f-f'.$rowf["id"];
		echo '.htm">'.$rowf["name"].'</a></h3></td>';
		echo '<td class="forumrecent">';
		$sqlrecentposts = mysql_query("SELECT * FROM `f-topics` where `f_id` = '{$rowf["id"]}' && `deleted` = 0 ORDER BY `time` DESC LIMIT 3") or die(mysql_error());
			while($rowrecent = mysql_fetch_array($sqlrecentposts)){
			if($rowrecent['deleted'] == 1){
			echo '<a href="f-del-t'.$rowrecent['id'].'.htm">'.$rowrecent['title'];
			echo '</a><br>';
				}
				else{
			echo '<a href="f-t'.$rowrecent['id'].'.htm">'.$rowrecent['title'];
			echo '</a><br>';
				}

			}
		echo '</td></tr>';
		}
	}
	//End the Table
	echo '</tbody> </table></center>';
}
}
echo '</div>';
//And in closing...
include '../tmp/footer.php';
?>