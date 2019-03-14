<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Garage Menu</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<div class="page-header">
    <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welkom bij het Garage Menu.</h1>
</div>

<div class="nav1">
<h2>Klant</h2>
<ul>
    <li><a href="gar-create-klant.php">Create</a></li>
    <li><a href="gar-read-klant.php">Read</a></li>
    <li><a href="gar-search-klant.php">Zoeken op id</a></li>
    <li><a href="gar-update-klant.php">Update</a></li>
    <li><a href="gar-delete-klant.php">Delete</a></li>
</ul>
</div>

<div class="nav2">
    <h2>Auto</h2>
<ul>
    <li><a href="gar-create-auto.php">Create</a></li>
    <li><a href="gar-read-auto.php">Read</a></li>
    <li><a href="gar-search-auto.php">Zoeken op kenteken</a></li>
    <li><a href="gar-update-auto.php">Update</a></li>
    <li><a href="gar-delete-auto.php">Delete</a></li>
</ul>
</div>

<p>
    <a href="reset-password.php" class="btn btn-warning">Reset Je Wachtwoord</a>
    <a href="logout.php" class="btn btn-danger">Afmelden Bij Uw Account</a>
</p>
</body>
</html>