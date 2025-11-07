<html>
    <head>
        <?php include "../php/functions.php"; ?>
        <script src="../js/myLib.js"></script>
        <link rel="stylesheet" href="../css/styles.css">
    </head>
    <body>
        <?php 
        $users = fileToArray();
        createTable($users);
        ?>
    </body>

</html>