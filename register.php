<?php
/*
  Asperger's Network Community
  REGISTER PAGE
  Ben Cousins
  2012
  Hope it's right this time.
*/

session_start();
include_once './inc/config.php';
include './tmp/header.php';
if(!$_POST){ 
echo '<center><form action="" method="post"> 
<table width="375" align="center"> 
<tr><td colspan=\'2\'><b>Register</b></td></tr><tr>
  <tr> 
    <td>Username:</td> 
    <td><input type="text" name="username" size="30" maxlength="25"></td> 
  </tr> 
  <tr> 
    <td>Password:</td> 
    <td><input type="password" name="password" size="30" maxlength="25"></td> 
  </tr>
  <tr> 
    <td>Confirm Password:</td> 
    <td><input type="password" name="password1" size="30" maxlength="25"></td> 
  </tr>
  <tr> 
    <td>E-Mail:</td> 
    <td><input type="text" name="email" size="30"></td> 
  </tr>
    <tr> 
    <td>Human Verification:</td> 
    <td><input type="text" name="verify" size="30" value="Remove all this text"></td> 
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="login" value="Login" /></td>
  </tr> 
</table> 
</form>
</center>';
}
else{
  $username   =   mysql_real_escape_string($_POST['username'];
  $password   =   sha1($_POST['password']);
  $password1  =   sha1($_POST['password1']);
  $email      =   $_POST['email'];
  $ip         =   $_SERVER['REMOTE_ADDR'];

  if($password === $password1){
  mysql_query("INSERT INTO `members` (username, password, email, ip, groupid)
VALUES ('{$username}', '{$password}', '{$email}', '{$ip}', '1')") or die(mysql_error());
  echo '<center><h3>Asperger\'s Network Registration Successful</h3>
      <p>Your Registration was successful.</p>
      <p>Please take the time to read the <a href="/w-a1.htm">Forum FAQ</a> for a guide as to what can and can\'t be used to post</p>
      <p>Go ahead and <a href="./login.php">Log In</a></p>
  </center>';
  }
  else{
    echo '<p>Your Password was Incorrectly confirmed, Please <a href="javascript:history.go(-1)">Go back and try again</a>';
  }
}
include './tmp/footer.php';

?>