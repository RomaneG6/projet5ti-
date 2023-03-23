<?php

require_once "Model/userModel.php";

$uri = $_SERVER['REQUEST_URI'];

if($uri === "/inscription"){
    if(isset($_POST["btnEnvoi"])){
        $messageErrorLogin = verifData();
        if (!isset($messageErrorLogin)) {
            createUser($pdo);
            header('location:/connexion');
        }
    }
    require_once "Templates/Users/editProfil.php";
}
elseif ($uri === "/connexion") {
    if(isset($_POST["btnEnvoi"])){
        ChercherUser($pdo);
        header('location:/');
    }
    require_once "Templates/Users/connexion.php";
}elseif ($uri === "/deconnexion") {
    session_destroy();
    header('location:/');
}elseif ($uri === "/profil") {
    require_once "Templates/Users/profil.php";
}


function verifData(){
    foreach ($_POST as $key => $value) {
        if (empty($value)) {
            $messageErrorLogin[$key] = "Votre " . $key . " est vide";
        }
    }
    return $messageErrorLogin;
}