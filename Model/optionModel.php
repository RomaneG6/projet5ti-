<?php 

function selectAllOptionsMmorpg($pdo){
    try{
        $query = "select * from mmorpg";  
        $mmorpg = $pdo->prepare($query);
        $mmorpg->execute();
        $mmorpgs = $mmorpg->fetchAll();
        return $mmorpgs;
    }catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}
function selectAllOptionsCat($pdo){
    try{
        $query = "select * from cat";  
        $mmorpg = $pdo->prepare($query);
        $mmorpg->execute();
        $mmorpg = $OptionMmorpg->fetchAll();
        return $OptionMmorpg;
    }catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}

/*function ajouterOptionPack($pdo, $packId, $mmorpgId){
    try{
        $query = "select * from pack_mmorpg (packId, mmorpgId) values (:packId, :mmorpgId)";  
        $mmorpg = $pdo->prepare($query);
        $mmorpg ->execute([
            'packId' => htmlentities($packId),
            'mmorpgId' => htmlentities($mmorpgId)
        ]);
        $OptionMmorpg = $OptionMmorpg->fetchAll();
        return $OptionMmorpg;
    }catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}*/

function deleteOptionPack($pdo){
    try{
        $query = 'delete from packMmorpg where packId = :packId';  
        $selectPack = $pdo->prepare($query);
        $selectPack->execute([
            'packId' => $_GET["packId"]
        ]); 
    }catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}