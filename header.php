<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

    <?php if (PAGE == 'pressa'): ?>
        <title>Пресса о нас</title>

    <?php elseif (PAGE == 'partners'): ?>
        <title>Партнерам</title>

    <?php elseif (PAGE == 'about'): ?>
        <title>О сервисе</title>

    <?php else: ?>
        <title>GoLamaGo - сервис быстрой доставки</title>

        <link rel="stylesheet" href="vendor/fullPage.js-master/dist/jquery.fullpage.min.css">
        <link rel="stylesheet" href="vendor/animatecss/animate.min.css">
        <link rel="stylesheet" href="vendor/slick-master/slick/slick.css">
        <link rel="stylesheet" href="vendor/slick-master/slick/slick-theme.css">
    <?php endif; ?>

    <link rel="stylesheet" href="vendor/fontawesome-free-5.0.9/web-fonts-with-css/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
