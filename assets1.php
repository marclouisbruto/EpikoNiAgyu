<?php
require_once 'classes/GameAsset.php';

$asset = new GameAsset();
$assets = $asset->getAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assets - Epiko ng Ilianon: Agyu</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Link to Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <style>
            body {
                background-image: url(assets/images/background.gif);
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;
                font-family: 'Press Start 2P', cursive;
                color: #fff;
                margin: 0;
                padding: 0;
                display: flex;
                flex-direction: column;
                min-height: 100vh;
            }
            header {
            margin-bottom: 20px;
        }

        .navbar-brand {
            font-size: 1.5em;
            font-weight: bold;
        }
        
        main {
            margin-top: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 50px;
            color: #fff;
        }
        .card {
            background: rgba(255, 255, 255, 0.8);
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }

        .card audio {
            width: 100%;
            margin-top: 10px;
        }
        
        .center-text {
            font-size: 1.2em;
            color: #fff;
            background-color: #333; /* Example background color */
            padding: 10px; /* Optional: Add padding for better visual appearance */
            border-radius: 5px; /* Optional: Add border radius for rounded corners */
        }

        /* Center the text */
        .text-center {
            text-align: center;
            margin-bottom: 20px;
        }
        
        @media (max-width: 768px) {
            .center-text {
                font-size: 1em;
            }
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
            <li class="nav-item active">
                <a class="nav-link mr-3" href="assets.php">Asset</a> 
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
        </ul>
    </div>
</nav>
</header>
<main class="container">
        <h2>Assets</h2>
        <div class="text-center">
            <div class="center-text">Characters/ Audio / Generate Image</div>
        </div>
        <div class="row">
            <?php foreach ($assets as $asset): ?>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card h-100">
                        <h3><?php echo $asset['name']; ?></h3>
                        <?php if ($asset['type'] == "Image"): ?>
                            <img src="assets/images/<?php echo $asset['name']; ?>" alt="<?php echo $asset['name']; ?>">
                        <?php elseif ($asset['type'] == "Audio"): ?>
                            <audio src="assets/audio/<?php echo $asset['name']; ?>" controls></audio>
                        <?php else: ?>
                            <div class="center-text"><?php echo $asset['type']; ?></div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        
    </main>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>