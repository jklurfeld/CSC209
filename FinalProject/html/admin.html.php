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

        <div class="container-fluid mt-3">
        <h4>Manage Users</h3>
        <button class='btn btn-primary' onclick="refresh()">Refresh</button>
        <br><br>
        <div id="tableDiv">
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
        <input class='btn btn-primary' type="submit">
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
                <h5 class="modal-title">Edit Post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body" id="modalBody">
                <!-- <form action="../php/scripts/editPost.php" method="post">
                    <div class='form-group'>
                    <label for="videoLink"><b>Video Link</b></label>
                    <input class='form-control' type="text" name="videoLink" required>
                    </div>
                    <div class='form-group'>
                    <label for="date"><b>Date</b></label>
                    <input class='form-control' type="date" name="date" required>
                    </div>
                    <div class='form-group'>
                    <label for="title"><b>Title</b></label>
                    <input class='form-control'type="text" name="title" required>
                    </div>
                    <div class='form-group'>
                    <label for="description"><b>Description</b></label>
                    <input class='form-control' type="text" name="description" required>
                    </div>
                    <button type="submit" class='btn btn-primary'>Submit</button>
                </form> -->
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                Close
                </button>
            </div>

            </div>
        </div>
        </div>
    </div>
    </body>

</html>