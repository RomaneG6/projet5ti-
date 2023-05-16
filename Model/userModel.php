<?php

function createUser($pdo){
    try{
        $query = "insert into user (userNom, userPrenom, userLogin, userEmail, userPassWord) values (:userNom, :userPrenom, :userLogin, :userEmail, :userPassWord)"; //nom des colonnes de user
        $newUser = $pdo->prepare($query);
        $newUser->execute([
            'userNom' => $_POST["nom"],
            'userPrenom' => $_POST["prenom"],
            'userLogin' => $_POST["login"],
            'userEmail' => $_POST["email"],
            'userPassWord' => $_POST["mp"],
        ]);
    }catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}
function connectUser($pdo){
    try {
        $query = "select*from user where userLogin=:userLogin and userPassWord=:userPassWord";
        $chercheUser = $pdo->prepare($query);
        $chercheUser->execute([
            'userLogin' => $_POST['login'],
            'userPassWord' => $_POST['mp'],

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
function updateUser($pdo){
    try{
        $query = "update user set userNom = :userNom, userPrenom = :userPrenom, userPassWord = :userPassWord where userId = :userId"; //nom des colonnes de user
        $newUser = $pdo->prepare($query);
        $newUser->execute([
            'userNom' => $_POST["nom"],
            'userPrenom' => $_POST["prenom"],
            'userPassWord' => $_POST["mp"],
            'userId' => $_SESSION["user"] -> userId 
        ]);
    }catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}