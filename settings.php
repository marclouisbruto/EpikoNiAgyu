<?php
require_once 'classes/Setting.php';
$setting = new Setting();
$settings = $setting->getAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings - Epiko ng Ilianon: Agyu</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <style>
        .slick-slide {
            transition: transform 0.3s ease;
            overflow: hidden;
            transform-origin: center center;
        }
        .slick-slide:hover {
            transform: scale(1.05);
        }
        .carousel img {
            max-width: 100%;
            height: auto;
            margin: 0 auto;
            display: block;
        }
        .carousel ul {
            padding: 30px;
        }
        .carousel li {
            list-style: none;
            text-align: center;
            margin: 0 10px;
            padding: 10px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
        }
        body {
            background-image: url(assets/images/background.gif);
            height: calc(100vh - 56px);
            background-repeat: no-repeat;
            background-size: cover;
            overflow-x: hidden;
        }
        main {
            padding-top: 100px;
        }
        .carousel h3,
        .carousel p {
            color: black;
            margin: 10px 0;
        }
        .carousel p {
            font-size: 12px; 
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
            <li class="nav-item ">
                <a class="nav-link mr-3" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mr-3" href="characters.php">Characters</a>
            </li>
            <li class="nav-item active">
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
<main>
<h2 class="title-char">Settings</h2>
    <div class="carousel">
        <ul>
            <?php foreach ($settings as $setting): ?>
                <li>
                    <h3><?php echo $setting['location']; ?></h3>
                    <p>Plot: <?php echo $setting['plot']; ?></p>
                    <p>Location: <?php echo $setting['location']; ?></p>
                    <img src="assets/images/<?php echo $setting['map_image']; ?>" alt="<?php echo $setting['map_image']; ?>">
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</main>
<footer>
    <p>&copy; 2024 Epiko ng Ilianon: Agyu</p>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.carousel ul').slick({
            infinite: false,
            slidesToShow: 3,
            slidesToScroll: 3, 
            
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 2,
                        infinite: true,
                        
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 414,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });
</script>
</body>
</html>
