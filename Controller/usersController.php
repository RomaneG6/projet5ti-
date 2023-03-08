<?php

$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/connexion'){
    require_once "Templates/Users/connexion.php";
}elseif ($uri === '/inscription') {
    require_once "Templates/Users/editProfil.php";
}elseif ($uri === '/profil') {
    require_once "Templates/Users/profil.php";
}