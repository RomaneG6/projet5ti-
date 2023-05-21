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
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <title>MMOPack.org</title>
</head>
<body>
<main>
    <header>
        <ul class="flex">
            <li> <a href="/">Accueil</a></li>
            <?php if(isset($_SESSION['user'])): ?>
                <li> <a href="deconnexion">Déconnexion</a></li>
                <li><a href="profil">Page profil</a></li>                            
            <?php else : ?>
                <li> <a href="inscription">Inscription</a></li>
                <li><a href="connexion">Connexion</a></li>
            <?php endif ?>
            <p>
                <input type="search" placeholder="Rechercher" name="search" id="searchbar"/>
                <button id="loupe" type="submit" class="icone-loupe"></button>
            </p>
        </ul>
    </header>
    <div class="fond">
        <?php
            require_once "Templates/Packs/pageAccueil.php";
            require_once "Controller/packsController.php";
            require_once "Controller/usersController.php";
        ?>
    </div>
</main>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" scrossorigin="anonymous"></script>
    
    <script>
    $(document).ready(function() {
        $('#mmorpg-select').select2();
    });
    </script>
</body>
</html>