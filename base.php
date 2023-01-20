<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Spotify - Web Player</title>

    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/structure.css">
</head>
<body>
    <div class="container">
        <?php require_once(__DIR__ . '/header.php'); ?>
        <?php require_once(__DIR__ . '/asside.php'); ?>
    </div>
    <main class="container col">
        <?php require_once(__DIR__ . '/playlists.php'); ?>
        <?php require_once(__DIR__ . '/programs.php'); 
        showPrograms('Seus programas');
        showPrograms('Tocados recentemente');
        ?>
        <?php require_once(__DIR__ . '/footer.php'); ?>
    </main>
    <?php require_once(__DIR__ . '/music-nav.php'); ?>

    <script src="js/range-input.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="js/popper.js"></script>
    <script src="js/dropdown.js"></script>
</body>
</html>