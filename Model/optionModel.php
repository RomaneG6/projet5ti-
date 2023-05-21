<?php 

function selectAllOptionsMmorpg($pdo){
    try{
        $query = "select * from mmorpg";  
        $OptionMmorpg = $pdo->prepare($query);
        $OptionMmorpg->execute();
        $OptionMmorpg = $OptionMmorpg->fetchAll();
        return $OptionMmorpg;
    }catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}

function ajouterOptionPack($pdo, $packId, $mmorpgId){
    try{
        $query = "select * from option_pack (packId, mmorpgId) values (:packId, :mmorpgId)";  
        $OptionMmorpg = $pdo->prepare($query);
        $OptionMmorpg->execute([
            'packId' => htmlentities($packId),
            'mmorpgId' => htmlentities($mmorpgId)
        ]);
        $OptionMmorpg = $OptionMmorpg->fetchAll();
        return $OptionMmorpg;
    }catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}

function deleteOptionPack($pdo){
    try{
        $query = 'delete from option_pack where packId = :packId';  
        $selectPack = $pdo->prepare($query);
        $selectPack->execute([
            'packId' => $_GET["packId"]
        ]); 
    }catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}