<html>
    <head>
        <?php include "../php/functions.php"; ?>
        <script src="../js/myLib.js"></script>
        <link rel="stylesheet" href="../css/myStyles.css">
    </head>
    <body>
        <button onclick="refresh()">Refresh</button>
        <div id="tableDiv">
        <?php 
        $users = fileToArray();
        createTable($users);
        ?>
        </div>
    </body>

</html>