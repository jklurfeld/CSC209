<html>
    <head>
        <?php include "../php/functions.php"; ?>
        <script src="../js/myLib.js"></script>
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