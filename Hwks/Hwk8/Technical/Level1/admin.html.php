<html>
    <head>
        <?php include "php/functions.php"; ?>
        <script src="js/myLib.js"></script>
    </head>
    <body>
        <?php 
        $users = fileToArray();
        createTable($users);
        ?>
    </body>

</html>