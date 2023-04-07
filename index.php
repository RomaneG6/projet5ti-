<?php
    session_start();
    require_once "Config/connexionDb.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/base.css">
    <title>Metsar</title>
</head>
<body>
    <header>
        <ul class="flex space-evenly">
            <li class="menu"><a href="/">Home</a></li>
            <li class="menu"><a href="/">Films</a></li>
            <li class="menu"><a href="/">Séries</a></li>
            <li class="menu"><a href="/">Anime</a></li>
            <input id="searchbar" onkeyup="search_stream()" type="text"
        name="search" placeholder="Rechercher...">
            <li  class="menu"> <?php if(isset($_SESSION['user'])): ?>
                                        <a href="deconnexion">Déconnexion</a>
                                        <?php else : ?>
                                        <a href="connexion">Connexion</a></li>
                                        <?php endif ?>
            <li  class="menu"><a href="/profil">Page profil</a></li>                            
        </ul>
    </header>
    <main>
        <div class ="av1">
            <a href="avatar1" ><img src="img/avatar1Pic.png"/></a>
        </div>
        <h1>Avatar</h1>
        <p>sciences-fiction</p>
        <h2>Synopsis</h2>
        <p>https://youtu.be/MJ3Up7By5cw</p>
        <?php
            require_once "Controller/streamsController.php";
            require_once "Controller/usersController.php";
        ?>
    </main>
</body>
</html>