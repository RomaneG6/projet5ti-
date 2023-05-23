<?php

function selectAllPack($pdo){
    try{
        $query = "select * from pack";  
        $selectPack = $pdo->prepare($query);
        $selectPack->execute();
        $packs = $selectPack->fetchAll();
        return $packs;
    }catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}

function selectMyPacks($pdo){
    try{
        $query = 'select * from pack where userId = :userId ';  
        $selectPack = $pdo->prepare($query);
        $selectPack->execute([
            'userId' => $_SESSION["user"]->userId
        ]);
        $packs = $selectPack->fetchAll();
        return $packs;
    }catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}

function selectOnePack($pdo){
    try{
        $query = 'select * from pack where packId = :packId ';  
        $selectPack = $pdo->prepare($query);
        $selectPack->execute([
            'userId' => $$_GET["packId"]
        ]);
        $pack = $selectPack->fetchAll();
        return $pack;
    }catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}

function selectOptionsPack($pdo){
    try{
        $query = 'select * from mmorpg where mmorpgId in (select mmorpgId from option_pack where packId = :packId';  
        $selectoptions = $pdo->prepare($query);
        $selectoptions->execute([
            'packId' => $_GET["packId"]
        ]);
        $options = $selectoptions->fetchAll();
        return $options;
    }catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}

function createPack($pdo){
    try{
        $query = 'insert into pack (packNom, packMmorpg, packGenre, packCat, packPrix, packImage, userId, catId) values (:packNom, :packMmorpg, :packGenre, :packCat, :packPrix, :packImage, :userId, :catId)';  
        $selectPack = $pdo->prepare($query);
        $selectPack->execute([
            'packNom' => htmlentities($_POST["nom"]),
            'packGenre' => htmlentities($_POST["genre"]),
            'packPrix' => htmlentities($_POST["prix"]),
            'packImage' => htmlentities($_POST["image"]),
            'catId' => $_SESSION["cat"]->catId,
            'userId' => $_SESSION["user"]->userId
        ]);
    }catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}

function updatePack(){
    try{
        $query = 'update user set packNom = :packNom, packMmorpg = :packMmorpg, packCat = :packCat, packPrix = :packPrix,packImage = :packImage where packId = :packId';  
        $selectPack = $pdo->prepare($query);
        $selectPack->execute([
            'packNom' => $_POST["nom"],
            'packGenre' => $_POST["genre"],
            'packPrix' => $_POST["prix"],
            'packImage' => $_POST["image"],
            'packId' => $_GET["packId"]
        ]);
    }catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}

function deleteOnePack($pdo){
    try{
        $query = 'delete from pack where packId = :packId';  
        $selectPack = $pdo->prepare($query);
        $selectPack->execute([
            'packId' => $_GET["packId"]
        ]);
    }catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}   

function deleteAllPacksFromUser($pdo){
    try{
        $query = 'delete from pack where userId = :userId';  
        $selectPack = $pdo->prepare($query);
        $selectPack->execute([
            'userId' => $_SESSION["user"]
        ]);
    }catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}