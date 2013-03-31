<?php
/*
  Asperger's Network Community
  LOGIN PAGE
  Ben Cousins
  2012
  Hope it's right this time.
*/

session_start();
include_once "./inc/config.php";
include './tmp/header.php';
if(isset($_POST)){
$username= mysql_real_escape_string($_POST['username']);
$password = sha1($_POST['password']);
if($username == NULL OR $password == NULL){
$final_report.="Please complete all the fields below..";
}else{
$check_user_data = mysql_query("SELECT * FROM `members` WHERE `username` = '$username'") or die(mysql_error());
if(mysql_num_rows($check_user_data) == 0){
$final_report.="This username does not exist..";
}else{
$get_user_data = mysql_fetch_array($check_user_data);
if($get_user_data['password'] == $password){
$start_idsess = $_SESSION['username'] = "".$get_user_data['username']."";
$start_passsess = $_SESSION['password'] = "".$get_user_data['password']."";
$final_report.="You are about to be logged in, please wait a few moments.. <meta http-equiv='Refresh' content='2; URL=index.php'/>";
}}}}
?> 

<form action="" method="post"> 
<table width="312" align="center"> 
<? echo "<tr><td colspan='2'>".$final_report."</td></tr><tr>";?>
  <tr> 
    <td width="120">Username:</td> 
    <td width="180"><input type="text" name="username" size="30" maxlength="25"></td> 
  </tr> 
  <tr> 
    <td>Password:</td> 
    <td><input type="password" name="password" size="30" maxlength="25"></td> 
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="login" value="Login" /></td>
  </tr> 
</table> 

</form>
<?php
include './tmp/footer.php';
?>
