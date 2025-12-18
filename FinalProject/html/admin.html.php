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

        <div class="container-fluid m-3">
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
        <h4>Create a new post</h4>
        <form action="../php/scripts/createPost.php" method="post" enctype="multipart/form-data">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="performanceType" id="upRadio" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="true" aria-controls="collapseExample" value="upcoming" checked>
            <label class="form-check-label" for="upRadio">
                Upcoming Performance
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="performanceType" id="ppRadio" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="collapseExample" value="past">
            <label class="form-check-label" for="ppRadio">
                Past Performance
            </label>
        </div>
        <div class='collapse multi-collapse' id='videoLink'>
            <div class='form-group'>
                <label for='videoLink'>Video Link:</label>
                <textarea type="text" name="videoLink" rows='5' cols='40'></textarea>
            </div>
        </div>
        <div class='collapse multi-collapse show' id='image'>
            <div class='form-group'>
                <label for='fileToUpload'>Image:</label>
                <input type="file" id="fileToUpload" name="fileToUpload">
            </div>
            <div class='form-group'>
                <label for='time'>Time:</label>
                <input type="time" id="time" name="time">
            </div>
            <div class='form-group'>
                <label for='location'>Location:</label>
                <input type="text" id="location" name="location">
            </div>
        </div>
        <div class='form-group'>
            <label for='date'>Date:</label>
            <input type="date" name="date">
        </div>
        <div class='form-group'>
            <label for='title'>Title:</label>
            <input type="text" name="title">
        </div>
        <div class='form-group'>
            <label for='description'>Description:</label>
            <textarea type="text" name="description" rows='5' cols='40'></textarea>
        </div>
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
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>

            </div>
        </div>
        </div>
    </div>
    </body>

</html>