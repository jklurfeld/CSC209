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
        <?php
            include "../php/functions.php";
        ?>
    </head>

    <?php 
    $path = "../json/past/*.json";
    $pastPerformances = glob($path);
    ?>

    <body>
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Logo</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">Upcoming Performances</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Past Performances</a>
                <ul class="dropdown-menu">
                <?php
                for ($i = 0; $i < count($pastPerformances); $i++){
                  echo "<li><a class='dropdown-item' href='pastPerformance.html.php?a=" . basename($pastPerformances[$i]) . "'> ". basename($pastPerformances[$i], ".json") . "</a></li>";
                }
                ?>
              </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">User</a>
                <ul class="dropdown-menu">
                  <?php 
                  if (isset($_SESSION["verified"])){
                    echo "<li><a class='dropdown-item' href='../php/scripts/logout.php'>Logout</a></li>";
                  }
                  else {
                    echo "<li><a class='dropdown-item' href='login.html.php'>Login</a></li>";
                  }
                  ?>
                </ul>
              </li>
              <?php 
              if (isset($_SESSION["verified"]) && $_SESSION["username"] == "admin"){
                echo "<li class='nav-item'><a class='nav-link' href='admin.html.php'>Admin Page</a></li>";
              }
              ?>
            </ul>
          </div>
        </div>
      </nav>
      <?php

        $file = $_GET["a"];
        $filePath = "../json/past/" . $file;
        $arr = fileToArray($filePath);

        // var_dump($arr);

        echo "<div class='container'>";
        echo "<h1>". $arr["title"] . "</h1>";
        // echo "<iframe width='420' height='315' src=". $arr["videoLink"] ."</iframe>"
        echo "<p>". $arr["date"] . "</p>";
        echo "<p>". $arr["description"] . "</p>";
        echo "</div>";
      ?>
    </body>
</html>