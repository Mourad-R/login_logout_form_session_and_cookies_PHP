<?php
ini_set('session.cookie_lifetime', 30*60); // 30 minutes
session_start();
if(!session_is_registered(myusername)){
header("online");
}

echo 'Login successful'
?>

<html>
<body>
<p>Login Successful</p>
<p>Bravo <?php echo $_SESSION['prenom']; ?> tu est connecter</p>
</body>
</html>