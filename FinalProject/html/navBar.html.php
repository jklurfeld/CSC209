<head> 
    <link rel=stylesheet href="../css/animation.css">
    <script src="../js/logo.js"></script>
</head>

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
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center" href="home.html.php"><canvas id="logoCanvas" width="40" height="40" class="me-2"></canvas>Home</a>
        </li>
    </ul>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link d-flex align-items-center"" href="#">Upcoming Performances</a>
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
    </ul>
        <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
        <?php if (isset($_SESSION["verified"])){
            echo "<a class='nav-link dropdown-toggle' href='#' role='button' data-bs-toggle='dropdown'>Welcome, ". $_SESSION['username'] ."</a>";
        }
        else{
            echo "<a class='nav-link dropdown-toggle' href='#' role='button' data-bs-toggle='dropdown'>User</a>";
        }
        ?>
        <ul class="dropdown-menu dropdown-menu-end">
            <?php 
            if (isset($_SESSION["verified"])){
                if ($_SESSION["username"] != "admin"){
                    echo "<li><a class='dropdown-item' href='userSettings.html.php'>Settings</a></li>";
                }
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

<script>
    drawNote();
    start();
</script>