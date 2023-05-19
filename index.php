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
    <link rel="stylesheet" href="CSS/flex.css">
    <title>MMOPack.org</title>
</head>
<body>
<main>
    <header>
        <div class="flex">
            <ul>
                <li  class="menu"> <a href="/">Accueil</a></li>
                <?php if(isset($_SESSION['user'])): ?>
                    <li  class="menu"> <a href="deconnexion">Déconnexion</a></li>
                    <li  class="menu"><a href="profil">Page profil</a></li>                            
                <?php else : ?>
                    <li  class="menu"> <a href="inscription">Inscription</a></li>
                    <li><a href="connexion">Connexion</a></li>
                <?php endif ?>
            </ul>
            <p>
                <input type="search" placeholder="Rechercher" name="search" id="searchbar"/>
                <button id="loupe" type="submit" class="icone-loupe"></button>
            </p>
        </div>
    </header>
        <?php
            require_once "Templates/Packs/pageAccueil.php";
            require_once "Controller/packsController.php";
            require_once "Controller/usersController.php";
        ?>
</main>
</body>
</html>