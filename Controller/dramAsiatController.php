<?php

$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/index.php' || $uri === '/'){
    require_once "Templates/Dramas/voirTousLesMeets.php";
}elseif ($uri === '/voirLeProfil') {
    require_once "Templates/Dramas/voirLeDrama.php";
}