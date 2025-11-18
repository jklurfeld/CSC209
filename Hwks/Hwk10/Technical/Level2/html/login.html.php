<?php
session_start();
?>

<!DOCTYPE HTML>
<html>  
<body>

<?php
$_SESSION["verified"] = false;
?>

<form action="user.html.php" method="get">
Username: <input type="text" name="username"><br>
Password: <input type="text" name="password"><br>
<input type="submit">
</form>

</body>
</html>