<?php
require_once 'classes/Dialog.php';
$dialog = new Dialog();

// Get all settings
$dialogs = $dialog->getAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dialouge - Epiko ng Ilianon: Agyu</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Link to Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <style>
        main {
            margin-top: 90px;
        }

        .dialogue-item {
            margin-bottom: 30px;
            padding: 20px;
            background-color: #f8f9fa; 
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
        }

        .dialogue-item img {
            max-width: 100%;
            height: auto;
            margin-bottom: 15px;
        }

        .dialogue-item h3 {
            font-size: 20px; 
            margin-bottom: 10px;
            color: #007bff; 
        }

        .dialogue-item p {
            font-size: 14px; 
            margin-bottom: 0;
        }
        body{
            background-image: url(assets/images/background.gif);
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Epiko ng Ilianon</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                    <li class="nav-item active">
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

    <main>
    <h2 class="title-char">Dialogue</h2>
        <div class="container">
            
            <div class="row">
                <?php foreach ($dialogs as $dialog): ?>
                    <div class="col-md-4">
                        <div class="dialogue-item">
                            <img src="assets/images/<?php echo $dialog['pics']; ?>" alt="<?php echo $dialog['pics']; ?>">
                            <h3><?php echo $dialog['names']; ?></h3>
                            <p><?php echo $dialog['script']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Epiko ng Ilianon: Agyu</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
