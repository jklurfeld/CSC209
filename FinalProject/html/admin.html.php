<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel=stylesheet href="../Resources/bootstrap/css/bootstrap.min.css">
        <script src="../Resources/jquery/jquery-3.7.1.min.js"></script>
        <script src="../Resources/bootstrap/js/bootstrap.bundle.min.js"></script>
        <?php include "../php/functions.php"; ?>
        <script src="../js/myLib.js"></script>
    </head>
    <body>
        <button onclick="refresh()">Refresh</button>
        <div id="tableDiv" class="container">
        <?php 
        $users = fileToArray("../json/users.json");
        createTable($users);
        ?>
        </div>
        <br>
        <h2>Create a new past performance post</h2>
        <form action="../php/scripts/createPastPerformance.php" method="post">
        Video Link: <input type="text" name="videoLink"><br>
        Date: <input type="date" name="date"><br>
        Title: <input type="text" name="title"><br>
        Description: <input type="text" name="description"><br>
        <input type="submit">
        </form>

        <h2>Past Performances</h2>
        <?php
        $path = "../json/past/*.json";
        $pastPerformances = glob($path);

        echo "<table>";

        echo "<tr>";
        echo "<th>title</th>";
        echo "<th>date</th>";
        echo "<th>Delete</th>";
        echo "<th>Edit</th>";
        echo "</tr>";
        
        for ($i = 1; $i < count($users);$i++){
            echo "<tr>";
            echo "<td>{$users[$i]['username']}</td>";
            echo "<td>{$users[$i]['password']}</td>";
            echo "<td><button type='button' onclick=\"deleteUser($i)\">Delete User</button></td>";
            echo "<td><button type='button' onclick=\"editUser($i)\">Edit User</button></td>";
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </body>

</html>