<?php
session_start();
?>

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
        <?php include "navBar.html.php"; ?>

        <h4>Manage Users</h3>
        <button onclick="refresh()">Refresh</button>
        <div id="tableDiv" class="container">
        <?php 
        $users = fileToArray("../json/users.json");
        createTable($users);
        ?>
        </div>
        <br>
        <h4>Create a new past performance post</h4>
        <form action="../php/scripts/createPastPerformance.php" method="post">
        Video Link: <input type="text" name="videoLink"><br>
        Date: <input type="date" name="date"><br>
        Title: <input type="text" name="title"><br>
        Description: <textarea type="text" name="description" rows="5" cols ="40"></textarea><br>
        <input type="submit">
        </form>

        <h4>Past Performances</h4>
        <div id="ppDiv">
        <?php
        $path = "../json/past/*.json";
        $pastPerformances = glob($path);
        createTablePerformances($pastPerformances);
        ?>
        </div>

        <div class="modal fade" id="myModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Modal Header</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body" id="modalBody">
                <form action="../php/scripts/editPost.php" method="post">
                    <label for="videoLink"><b>Video Link</b></label>
                    <input type="text" name="videoLink" required>
                    <br>
                    <label for="date"><b>Date</b></label>
                    <input type="date" name="date" required>
                    <br>
                    <label for="title"><b>Title</b></label>
                    <input type="text" name="title" required>
                    <br>
                    <label for="description"><b>Description</b></label>
                    <input type="text" name="description" required>
                    <br>
                    <button type="submit">Submit</button>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                Close
                </button>
            </div>

            </div>
        </div>
        </div>

    </body>

</html>