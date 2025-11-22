<html>
    <head>
        <?php include "../php/functions.php"; ?>
        <script src="../js/myLib.js"></script>
        <link rel="stylesheet" href="../css/modal.css">
    </head>
    <body>
        <button onclick="refresh()">Refresh</button>
        <div id="tableDiv">
        <?php 
        $users = fileToArray();
        createTable($users);
        ?>
        </div>

        <div id="editDiv" class="modal">
        <form class='modal-content animate' action='../php/editUser.php' method='post'>
        <span onclick="document.getElementById('editDiv').style.display='none'" class="close" title="Close Moda">&times;</span>
        <div class="container">
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter New Username" name="username">
        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter New Passwor" name="password">
        <button type="submit">Submit</button>
        </div>
        </form>
        </div>

        
    </body>

</html>