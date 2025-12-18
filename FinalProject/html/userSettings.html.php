<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
    <head>
        <link rel=stylesheet href="../Resources/bootstrap/css/bootstrap.min.css">
        <script src="../Resources/jquery/jquery-3.7.1.min.js"></script>
        <script src="../Resources/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../js/myLib.js"></script>
        <?php
        include "../php/functions.php";
        ?>
    </head>
<body>

<?php include "navBar.html.php"; ?>

<div class="container-fluid mt-3">
    <?php
    if (isset($_GET["success"])){
        if ($_GET["success"] == "true"){
            echo "<div class='alert alert-success alert-dismissable'><button type='button' class='btn-close' data-bs-dismiss='alert'></button>User info successfully changed.</div>";
        }
        else{
            echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='btn-close' data-bs-dismiss='alert'></button>Username already exists. Please choose a different username.</div>";
        }
    }
    ?>
    <h6> Change username and/or password </h6>
    <form action="../php/scripts/changeUser.php" method="post">
        <div class='form-group'>
            <label for='newUsername'>Username:</label>
            <input type="text" class='form-control' name="newUsername" placeholder="Enter new username">
        </div>
        <div class='form-group'>
            <label for='pwd'>Password:</label>
            <input type="password" class='form-control' name="pwd" placeholder="Enter new password">
        </div>
        <br>
        <input type='hidden' name='username' value='<?php echo $_SESSION['username'] ?>'>
        <button type="submit" class='btn btn-primary'>Submit</button>
    </form>
</div>

</body>
</html>