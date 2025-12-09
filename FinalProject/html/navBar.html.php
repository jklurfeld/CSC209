<?php 
    $path = "../json/past/*.json";
    $pastPerformances = glob($path);
    $titles = [];
    for ($i = 0; $i < count($pastPerformances); $i++){
        $contents = fileToArray($pastPerformances[$i]);
        $titles[] = $contents["title"];
    }
?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<div class="container-fluid">
    <a class="navbar-brand" href="home.html.php">Logo</a>
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
            echo "<li><a class='dropdown-item' href='pastPerformance.html.php?a=" . basename($pastPerformances[$i]) . "'> ". $titles[$i] . "</a></li>";
            }
            ?>
        </ul>
        </li>
        <?php 
        if (isset($_SESSION["verified"]) && $_SESSION["username"] == "admin"){
        echo "<li class='nav-item'><a class='nav-link' href='admin.html.php'>Admin Page</a></li>";
        }
        ?>
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
    </ul>
    </div>
</div>
</nav>