<?php
ini_set('session.cookie_lifetime', 30*60); // 30 minutes
session_start(); // On démarre la session AVANT toute chose

// if( !isset($_SESSION['myusername']) ){
// header("location:login.php");
// }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Connected</title>
</head>
<body>
	<p>Bravo <?php echo $_SESSION['prenom']; ?> tu est connecter</p>
	<a href="login.php"><input type="button" value="Logout"></a>
</body>
</html>