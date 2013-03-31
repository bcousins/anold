<?php
/*
	Asperger's Network - Mark III
	Ben Cousins
	2012
	Hope it's right this time.
	MODCP Report Center
*/
session_start();
//Get config script...
require '../../config.php';
if($gid <5){
	header("Location:/f.htm");
}
//Assign Pagetitle, and get Header:
$pagetitle = 'Asperger\'s Network Report Center';
include '../../tmp/header.php';
echo '<br><br><br><br><h1>Asperger\'s Network Report Center</h1>';

//Query the DB for Categories ($sqlcat), forums ($sqlfrm), Recent Posts - And much, much, much more.
$openreports = mysql_query('SELECT * FROM  `reports` WHERE `closed` = 0') or die(mysql_error());
	echo '<br><div class="cathead"><h1 class="catname">Active Reports</h1></div>';
  //Prepare Table
  echo '<center><table> <tbody>';
  		echo '<tr>';
		echo '<td class="reportid">Report ID</td>';
		echo '<td class="reportpost">Reported Post</td>';
		echo '<td class="reportjust">Justification</td>';
		echo '<td class="reportcomments">Comments</td>';
		echo '<td class="reportaction">Take Action</td>';
		echo '</tr>';
		while($row = mysql_fetch_array($openreports))
{
  		echo '<tr>';
		echo '<td class="reportid">';
		echo $row['id'];
		echo '</td>';
		echo '<td class="reportpost">';
		echo $row['postID'];
		echo '</td>';
		echo '<td class="reportjust">';
		echo $row['justification'];
		echo '</td>';
		echo '<td class="reportcomments">';
		echo $row['comments'];
		echo '</td>';
		echo '<td class="reportaction"><a href="m-rpt-close-';
		echo $row['id'];
		echo '.htm">Close Report</a></td>';

		echo '</tr>';
}
	//End the Table
	echo '</tbody> </table></center>';


//Query the DB for Categories ($sqlcat), forums ($sqlfrm), Recent Posts - And much, much, much more.
$closedreports = mysql_query('SELECT * FROM  `reports` WHERE `closed` = 1') or die(mysql_error());
	echo '<br><div class="cathead"><h1 class="catname">Closed Reports</h1></div>';
  //Prepare Table
  echo '<center><table> <tbody>';
  		echo '<tr>';
		echo '<td class="reportid">Report ID</td>';
		echo '<td class="reportpost">Reported Post</td>';
		echo '<td class="reportjust">Justification</td>';
		echo '<td class="reportcomments">Comments</td>';
		echo '<td class="reportaction">Closed by</td>';
		echo '</tr>';
		while($row = mysql_fetch_array($openreports))
{
  		echo '<tr>';
		echo '<td class="reportid">';
		echo $row['id'];
		echo '</td>';
		echo '<td class="reportpost">';
		echo $row['postID'];
		echo '</td>';
		echo '<td class="reportjust">';
		echo $row['justification'];
		echo '</td>';
		echo '<td class="reportcomments">';
		echo $row['comments'];
		echo '</td>';
		echo '<td class="reportaction">';
		echo $row['moderator'];
		echo '</td>';

		echo '</tr>';
}
	//End the Table
	echo '</tbody> </table></center>';


//And in closing...
include '../../tmp/footer.php';
?>