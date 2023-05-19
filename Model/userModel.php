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
        $connectUser = $pdo->prepare($query);
        $connectUser->execute([
            'userLogin' => $_POST['login'],
            'userPassWord' => $_POST['mp'],

        ]);
        $user=$connectUser -> fetch();
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
        $query = "update user set userNom = :userNom, userPrenom = :userPrenom, userPassWord = :userPassWord where userId = :userId";
        $ajouteUser = $pdo->prepare($query);
        $ajouteUser->execute([
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
function deleteUser($pdo){
    try{
        $query = "delete from user where userId = :userId";
        $ajouteUser = $pdo->prepare($query);
        $ajouteUser->execute([
            'userId' => $_SESSION["user"]->userId
        ]);
    }catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}
function updateSession($pdo){
    try {
        $query = "select*from user where userId = :userId";
        $selectUser = $pdo->prepare($query);
        $selectUser->execute([
            'userId' => $_SESSION['user']->userId
        ]);
        $user=$selectUser -> fetch();
        if ($user) {
            $_SESSION['user']=$user;
        }
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}