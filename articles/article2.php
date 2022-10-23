<?php
    define("IMG_DIR", "../img/blog/");
    
    function getImage($name) {
        if (strpos($_SERVER["HTTP_ACCEPT"], "image/avif") !== false)
            return $name . ".avif";
        elseif (strpos($_SERVER['HTTP_ACCEPT'], 'image/webp') !== false)
            return $name . ".wepb";
        else
            return $name . ".jpg";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <?php include("../modules/header.php"); ?>

    <main>
        <h1>Y quéa</h1>
        <div class="images">
            <img src="<?= getImage(IMG_DIR . 'img-7') ?>" alt="Pont">
            <img src="<?= getImage(IMG_DIR . 'img-8') ?>" alt="Fleuve">
            <img src="<?= getImage(IMG_DIR . 'img-9') ?>" alt="Pont">
            <img src="<?= getImage(IMG_DIR . 'img-10') ?>" alt="Coeur">
            <img src="<?= getImage(IMG_DIR . 'img-11') ?>" alt="Status">
            <img src="<?= getImage(IMG_DIR . 'img-12') ?>" alt="Stop">
        </div>
    </main>

    <?php include("../modules/footer.php"); ?>

</body>
</html>