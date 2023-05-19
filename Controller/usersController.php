<?php

require_once "Model/userModel.php";

$uri = $_SERVER['REQUEST_URI'];

if ($uri === "/connexion") {
    if(isset($_POST["btnEnvoi"])){
        connectUser($pdo);
        header('location:/');
    }
    require_once "Templates/Users/connexion.php";
}elseif ($uri === "/deconnexion") {
    session_destroy();      
    header('location:/');
}elseif ($uri === "/profil") {
    require_once "Templates/Users/profil.php";
}elseif ($uri === "/updateProfil") {
        if(isset($_POST["btnEnvoi"])){
            $messageError = verifData();
            if (!$messageError) {
                updateUser($pdo);
                updateSession($pdo); 
                header("location:/profil");
            }
        }
    require_once "Templates/Users/InscriptionOrEditProfil.php";
}elseif ($uri === "/deleteProfil") {
    deleteUser($pdo);
    session_destroy();
    header("location:/");
} elseif($uri === "/inscription"){
    if(isset($_POST["btnEnvoi"])){
        $messageError = verifData();
        if (!$messageError) {
            createUser($pdo);
            header('location:/connexion');
        }
    }
    require_once "Templates/Users/InscriptionOrEditProfil.php";




}


function verifData(){
    foreach ($_POST as $key => $value) {
        if (empty(str_replace(' ', '', $value))) {
            $messageError[$key] = "Votre " . $key . " est vide";
        }
    }
    if (isset($messageError)) {
        return $messageError;
    }
    else {
        return false;
    }
}