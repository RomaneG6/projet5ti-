<?php

function createUser($pdo)
{
    try{
        $query = "insert into utilisateurs (nameUser, firstNUser, loginUser, passWordUser, emailUser) values (:nameUser, :firstNUser, :loginUser, :passWordUser, :emailUser)"; //nom des colonnes utilisateur
        $newUser = $pdo->prepare($query);
        $newUser->execute([
            'nameUser' => $_POST["txtNom"],
            'firstNUser' => $_POST["txtPrenom"],
            'loginUser' => $_POST["txtLogin"],
            'passWordUser' => $_POST["txtMp"],
            'emailUser' => $_POST["txtEmail"],
        ]);
    }
    catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}