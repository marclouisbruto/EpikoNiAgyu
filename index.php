<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Epiko ng Ilianon: Agyu</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Link to Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <style>
        .contain {
            height: calc(120vh - 56px);
            display: flex;
            justify-content: center;
            align-items: center;
        }
        main {
            max-width: 80%;
            text-align: center; 
        }
        h1 {
            color: #ffffff; 
            text-shadow: 
            -1px -1px 0 #000,  
            1px -1px 0 #000,
            -1px 1px 0 #000,
            1px 1px 0 #000,
            -2px -2px 0 #000,
            2px -2px 0 #000,
            -2px 2px 0 #000,
            2px 2px 0 #000;
        }
        h4, p {
            color: #000; 
            text-shadow: 
            -1px -1px 0 #ffffff,  
            1px -1px 0 #ffffff,
            -1px 1px 0 #ffffff,
            1px 1px 0 #ffffff,
            -2px -2px 0 #ffffff,
            2px -2px 0 #ffffff,
            -2px 2px 0 #ffffff,
            2px 2px 0 #ffffff;
        }
        p {
            font-size: 1.2rem; 
        }
        body {
            background-image: url(assets/images/background.gif);
            background-repeat: no-repeat;
            background-size: cover;
        }
        .layout {
            max-width: 100%;
            height: 300px;
            margin-top: 30px;
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
            <li class="nav-item active">
                <a class="nav-link mr-3" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mr-3" href="characters.php">Characters</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mr-3" href="settings.php">Setting</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mr-3" href="dialogs.php">Dialog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mr-3" href="assets.php">Asset</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
        </ul>
    </div>
</nav>
</header>
    
    <div class="contain">
        <main>
            <h4>Welcome to the documentation of <br> <br></h4><h1>EPIKO NG ILIANON: AGYU</h1><br>
            <p>Explore the characters, settings, dialogs, and more from the game.</p>
            <img src="assets/images/layout.png" alt="Layout Image" class="layout">
        </main>
    </div>
    
    <footer>
        <p>&copy; 2024 Epiko ng Ilianon: Agyu</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
