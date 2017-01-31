<?php
require("config.php");
ini_set('session.cookie_lifetime', 30*60); // 30 minutes

// On démarre la session AVANT d'écrire du code HTML
session_start();

setcookie('username', 'Mourad', time() + 365*24*3600, null, null, false, true);

// On s'amuse à créer quelques variables de session dans $_SESSION
$_SESSION['prenom'] = 'Mourad';
$_SESSION['nom'] = 'REDJAH';
$_SESSION['age'] = 32;

// $error=''; // Variable To Store Error Message
// if (isset($_POST['submit'])) {
// if (empty($_POST['username']) || empty($_POST['password'])) {
// $error = "Username or Password is invalid";
// }
   // $username=$_POST['username'];
   // $password=$_POST['password'];
     
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Login</title>
    </head>
    <body>

<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="checklogin.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3"><strong>Member Login </strong></td>
</tr>
<tr>
<td width="78">Username</td>
<td width="6">:</td>
<td width="294"><input name="myusername" type="text" id="myusername"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="mypassword" type="text" id="mypassword"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Login"></td>
</tr>
</table>
</td>
</form>
</tr>
</table

</body>
</html>