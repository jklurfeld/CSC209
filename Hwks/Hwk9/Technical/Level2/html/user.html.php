<?php
session_start();
?>

<html>
<body>

<?php
include "../php/functions.php";
verifyUser();

echo "<h1>Welcome User ". $_SESSION["userIndex"]. "</h1>";
?>
<a href="logout.html.php"><button>Logout</button></a>

</body>
</html>