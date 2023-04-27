<?php

function createUser($pdo){
    try{
        $query = "insert into utilisateurs (nameUser, firstNUser, loginUser, passWordUser, emailUser) values (:nameUser, :firstNUser, :loginUser, :passWordUser, :emailUser)"; //nom des colonnes utilisateur
        $newUser = $pdo->prepare($query);
        $newUser->execute([
            'nameUser' => $_POST["nom"],
            'firstNUser' => $_POST["prenom"],
            'loginUser' => $_POST["login"],
            'passWordUser' => $_POST["mp"],
            'emailUser' => $_POST["email"],
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
            'loginUser' => $_POST['login'],
            'passWordUser' => $_POST['mp'],

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