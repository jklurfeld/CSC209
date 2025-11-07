<html>
    <head>
        <?php include "functions.php"; ?>
        <script src="myLib.js"></script>
    </head>
    <body>
        <?php 
        $users = fileToArray();
        //var_dump($users);
        createTable($users);
        ?>
    </body>

</html>