<?php
require_once 'classes/Character.php';

$character = new Character();
$characters = $character->getAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Epiko ng Ilianon: Agyu</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Link to Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Press Start 2P', cursive;
        }
        .developer {
            text-align: center;
            margin: 20px 0;
        }
        .developer img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
        }
        .developer h3 {
            margin-top: 10px;
        }
        .developer p {
            margin-top: 5px;
        }
        .container{
            padding-top: 100px;
        }
    </style>
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Epiko ng Ilianon</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link mr-3" href="index.php">Home</a> <!-- Added mr-3 class for right margin -->
            </li>
            <li class="nav-item">
                <a class="nav-link mr-3" href="characters.php">Characters</a> <!-- Added mr-3 class for right margin -->
            </li>
            <li class="nav-item">
                <a class="nav-link mr-3" href="settings.php">Setting</a> <!-- Added mr-3 class for right margin -->
            </li>
            <li class="nav-item">
                <a class="nav-link mr-3" href="dialogs.php">Dialog</a> <!-- Added mr-3 class for right margin -->
            </li>
            <li class="nav-item">
                <a class="nav-link mr-3" href="assets.php">Asset</a> <!-- Added mr-3 class for right margin -->
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="about.php">About</a>
            </li>
        </ul>
    </div>
</nav>
</header>

<div class="container mt-5">
    <h1 class="text-center">About the Developers</h1>
    <div class="row">
        <div class="col-md-4 developer">
            <img src="assets/images/background.gif" alt="Developer 1">
            <h3>Juan Dela Cruz</h3>
            <p>Lead Developer</p>
        </div>
        <div class="col-md-4 developer">
            <img src="assets/images/background.gif" alt="Developer 2">
            <h3>Maria Clara</h3>
            <p>Front-end Developer</p>
        </div>
        <div class="col-md-4 developer">
            <img src="assets/images/background.gif" alt="Developer 3">
            <h3>Jose Rizal</h3>
            <p>Back-end Developer</p>
        </div>
    </div>
</div>

<footer class="text-center mt-5">
    <p>&copy; 2024 Epiko ng Ilianon: Agyu</p>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
