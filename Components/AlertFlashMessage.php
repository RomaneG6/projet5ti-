<?php 

$messageFlash = $_SESSION['flashMessage'];
$color = $_SESSION['flashColor'];
unset($_SESSION['flashMessage']);
unset($_SESSION['flashColor']);


?>
<div class="alert alert-<?= $color ?>"><?= $messageFlash ?></div>