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

    <main>
        <h2>Characters</h2>
        <ul>
            <?php
            foreach ($assets as $asset):
                if ($asset['type'] == "Image") {
                    ?>
                    <li>
                        <h3><?php echo $asset['name']; ?></h3>
                        <img src="assets/images/<?php echo $asset['name']; ?>" alt="<?php echo $asset['name']; ?>">
                    </li>
                <?php
                } else { ?>
                    <li>
                        <h3><?php echo $asset['name']; ?></h3>
                        <audio src="assets/audio/<?php echo $asset['name']; ?>" controls></audio>
                    </li>
                <?php }
            endforeach; ?>
        </ul>
    </main>

    <footer>
        <p>&copy; 2024 Epiko ng Ilianon: Agyu</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>