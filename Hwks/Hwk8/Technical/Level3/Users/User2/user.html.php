<html>
    <head>
        <?php 
            include "../../php/functions.php"; 
            $path = dirname(realpath("user.html.php"));
            $nr = extractFolderNumber($path);
        ?>
        <script src="../../js/myLib.js"></script>
    <body>
        <h1>Welcome</h1>

        <form action="../../htmlPhp/logout.html.php" method="GET" id="logoutForm">
            <input type="hidden" name="index" value=<?php echo $nr ?>>
            <input type="hidden" name="time" id="timeLoggedIn">
        </form>
        <button type="submit" form="logoutForm" value="Logout">Logout</button>

        <script>
            var mins = timeLoggedIn();
            var timeInput = document.getElementById("timeLoggedIn");
            timeInput.value = mins;
        </script>
</html>