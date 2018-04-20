{config_load file='smarty_main.conf'}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{block "title"}Portfolio{/block}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="Cardio is a free one page template made exclusively for Codrops by Luka Cvetinovic"/>
    <meta name="keywords" content="html template, css, free, one page, gym, fitness, web design"/>
    <!-- Favicons (created with http://realfavicongenerator.net/)-->
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
    <link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="img/favicons/manifest.json">
    <link rel="shortcut icon" href="img/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#00a8ff">
    <meta name="msapplication-config" content="img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Normalize -->
    <link rel="stylesheet" type="text/css" href="/src/styles/normalize.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="/src/styles/bootstrap.css">
    <!-- Owl -->
    <link rel="stylesheet" type="text/css" href="/src/styles/owl.css">
    <!-- Animstyles.css -->
    <link rel="stylesheet" type="text/css" href="/src/styles/animate.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="/src/fonts/font-awesome-4.1.0/css/font-awesome.min.css">
    <!-- Elegant Icons -->
    <link rel="stylesheet" type="text/css" href="/src/fonts/eleganticons/et-icons.css">
    <!-- Main style -->
    <link rel="stylesheet" type="text/css" href="/src/styles/cardio.css">

    <!-- CUSTOM STYLES -->
    <link rel="stylesheet" href="/src/styles/app.css">
</head>
<style>
    body {
        background-color: #403D72;
    }
</style>
<body>
<div class="preloader">
    <img src="/src/images/loader.gif" alt="Preloader image">
</div>
<!-- HEADER -->
{include file="partials/header.tpl"}

<!-- CONTENT -->
{block "content"}Content{/block}


<!-- FOOTER -->
{include file="partials/footer.tpl"}

<!-- Libraries scripts -->
<script src="/src/scripts/jquery-1.11.1.min.js"></script>
<script src="/src/scripts/owl.carousel.min.js"></script>
<script src="/src/scripts/bootstrap.min.js"></script>
<script src="/src/scripts/wow.min.js"></script>
<script src="/src/scripts/typewriter.js"></script>
<script src="/src/scripts/jquery.onepagenav.js"></script>
<script src="/src/scripts/main.js"></script>

<!-- CUSTOM SCRIPTS -->
    <script src="/src/scripts/app.js"></script>
</body>
</html>