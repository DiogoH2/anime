<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header class="container-fluid cabecalho">
        <div class="logo row">
            <a href="./index.php">
                <img src="../img/LogoT.png" alt="logo" height="160px" width="160px">
            </a>
        </div>
        <button class="menu-toggle" onclick="toggle()">
            <i class="fa fa-lg fa-bars"></i>
        </button>
        <section class="nav-slide" id="nav-slide">
            <ul>
                <li><a href="./manga.php">Mangas</a></li>
                <li><a href="./dorama.php">Doramas</a></li>
                <li><a href="./cadastro.php">Cadastro</a></li>
            </ul>
        </section>
        <nav class="menu col-sm-8 col-md-8 col-lg-8">
            <div>
                <a href="./manga.php">Mangas</a>
                <a href="./dorama.php">Doramas</a>
                <a href="./cadastro.php">Cadastro</a>
            </div>
        </nav>
        <aside class="autenticacao col-sm-1 col-md-1 col-lg-1">
            <i class="uil uil-moon change-theme" id="theme-button"></i>
        </aside>
    </header>
    <script src="../js/dark.js"></script>
    <script src="../js/toggle.js"></script>
</body>
</html>