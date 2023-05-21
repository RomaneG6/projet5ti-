<?php

$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/index.php' || $uri === '/'){
    $packs = selectAllPack($pdo);
    require_once "Templates/Packs/pageAccueil.php";
}elseif ($uri === '/createPack') {
    if(isset($_POST["btnEnvoi"])){
        createPack($pdo);
        $packId = $pdo->lastInsertId();
        for ($i=0; $i < count($_POST["options"]); $i++) {
            $mmorpgId = $_POST["options"][$i];
            ajouterOptionPack($pdo, $packId, $mmorpgId);
        }
        $_SESSION['flashMessage'] = "Votre pack a bien été ajouté";
        $_SESSION['flashColor'] = "success";
        header("location :/mesPacks");   
    }
    $options = selectAllOptionsMmorpg($pdo);
    require_once "Templates/Packs/editOrCreatePack.php";
}elseif ($uri === "/mesPacks") {
    //$packs = selectMyPacks($pdo);
    require_once "Templates/Packs/PageAccueil.php";  
}elseif (isset($_GET["packId"]) && $uri === "/voirPack?packId=" . $_GET["packId"]) {
    $pack = selectOnePack($pdo);
    $options = selectOptionsPack($pdo);
    require_once "Templates/Packs/voirPack.php";
}elseif (isset($_GET["packId"]) && $uri === "/deletePack?packId=" . $_GET["packId"]) {
    deleteOptionPack($pdo);
    deleteOnePack($pdo);
    heder("location;/mesPacks");
}elseif (isset($_GET["packId"]) && $uri === "/updatePack?packId=" . $_GET["packId"]) {
    if(isset($_POST["btnEnvoi"])){
        updatePack($pdo);
        deleteOptionPack($pdo);
        for ($i=0; $i < count($_POST["options"]); $i++) {
            $mmorpgId = $_POST["options"][$i];
            ajouterOptionPack($pdo, $packId, $mmorpgId);
        }
        $_SESSION['flashMessage'] = "Votre pack a bien été modifié";
        $_SESSION['flashColor'] = "modify";
        header("location :/mesPacks");   
    }
    $pack = selectOnePack($pdo);
    $OptionsMmorpg = selectOptionsPack($pdo);
    $options = selectAllOptionsMmorpg($pdo);
    require_once "Templates/Packs/editOrCreatePack.php";
}