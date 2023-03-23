<?php

function createUser($pdo){
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
    }catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}
function ChercherUser($pdo){
    try {
        $query = "select*from utilisateurs where loginUser=:loginUser and passWordUser=:passWordUser";
        $chercheUser = $pdo->prepare($query);
        $chercheUser->execute([
            'loginUser' => $_POST['txtLogin'],
            'passWordUser' => $_POST['txtMp'],

        ]);
        $user=$chercheUser -> fetch();
        if ($user) {
            $_SESSION['user']=$user;
        }
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}