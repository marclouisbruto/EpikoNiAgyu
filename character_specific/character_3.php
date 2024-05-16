<?php
require_once '../classes/Character.php';

$character = new Character(3);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Characters - Epiko ng Ilianon: Agyu</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Link to Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <style>
         body {
            background-image: url(../assets/images/background.gif);
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
                        <a class="nav-link mr-3" href="../index.php">Home</a> <!-- Added mr-3 class for right margin -->
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link mr-3" href="../characters.php">Characters</a>
                        <!-- Added mr-3 class for right margin -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-3" href="../settings.php">Setting</a>
                        <!-- Added mr-3 class for right margin -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-3" href="../dialogs.php">Dialog</a>
                        <!-- Added mr-3 class for right margin -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-3" href="../assets.php">Asset</a>
                        <!-- Added mr-3 class for right margin -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../about.php">About</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <section class="indi-char">
    <main>
        <h2 class="title-char">Characters</h2>
        <div class="char-card">
            <div class="sub-indi-card">
                <div class="indi-card">
                    <?php
                    if ($character->getId()) {
                        echo 'Character Image: <img src="../assets/images/' . $character->getImage() . '"><br><br>';
                        echo "Name: " . $character->getName() . "<br><br>";
                        echo "Description: " . $character->getDescription() . "<br>";
                    } else {
                        echo "Character not found.";
                    }
                    ?>
                </div>
            </div>
        </div>
        
    </main>

    <footer>
        <p>&copy; 2024 Epiko ng Ilianon: Agyu</p>
    </footer>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>