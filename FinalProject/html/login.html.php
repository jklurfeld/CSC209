<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
    <head>
        <link rel=stylesheet href="../Resources/bootstrap/css/bootstrap.min.css">
        <script src="../Resources/jquery/jquery-3.7.1.min.js"></script>
        <script src="../Resources/bootstrap/js/bootstrap.bundle.min.js"></script>
        <?php
        include "../php/functions.php";
        ?>
    </head>
<body>

<?php include "navBar.html.php"; ?>
<div class="container-fluid m-3">
  <h3>Login</h3>
  <?php
    if (isset($_GET["success"])){
      if ($_GET["success"] == "true"){
        echo "<div class='alert alert-success alert-dismissable'><button type='button' class='btn-close' data-bs-dismiss='alert'></button>User successfully registered.</div>";
      }
      else{
        echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='btn-close' data-bs-dismiss='alert'></button>Incorrect username or password</div>";
      }
    }
  ?>

<form action="../php/scripts/verifyUser.php" method="get">
  <div class='form-group'>
    <label for='username'>Username:</label>
    <input class='form-control' type="text" name="username" placeholder="Enter Username" required>
  </div>
  <div class='form-group'>
    <label for='password'>Password:</label>
    <input class='form-control' type="password" name="password" placeholder="Enter Password" required>
  </div>
  <br>
<button type="submit" class='btn btn-primary'>Submit</button>
</form>

<br>
<button class='btn btn-secondary' data-bs-toggle='modal' data-bs-target='#id01'>Register New User</button>

  <div id="id01" class="modal fade" tabindex="-1" aria-hidden="true">
    <div class='modal-dialog'>
      <div class='modal-content'>
        <div class="modal-header">
          <h5 class="modal-title">Edit Post</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class='modal-body'>
          <form class="modal-content animate" action="../php/scripts/registerUser.php" method="post">

            <div class="form-group">
              <label for="username">Username:</label>
              <input type="text" class="form-control" placeholder="Enter Username" name="username" required>
            </div>
            <div class='form-group'>
              <label for="psw">Password:</label>
              <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
            </div>
            <button class='btn btn-primary' type="submit">Register</button>
          </form>
        <div>
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