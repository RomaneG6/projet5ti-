<link rel="stylesheet" href="CSS/accueil.css">

<h1><?php if(isset($_SESSION["user"])) :?>Vos Packs<?php else : ?>MMorpg featured creations<?php endif ?></h1>

<?php if (isset($_SESSION["user"])) : ?><a href="createPack">Ajouter un pack</a><?php endif ?>
	<?php if(isset($_SESSION['flashMessage'])) : ?>
	<?php require_once "Components/alertFlashMessage.php"?>
	<?php endif ?>
<div class="flexible wrap">
	<?php foreach ($packs as $pack) : ?>
		<div class="bordure center blockAffichage ">
			<img src="<?= $pack->packImage ?>" alt="Photo du pack">
			<div class="flexBet">
				<p><a href="voirPack?packId=<?= $pack->packId ?>"><?= $pack->packNom ?></a></h2>
				<p class="prix"><?= $pack->packPrix . "€"?></p>
			</div>
			<?php if($uri === "/mesPack") : ?>
			<p><a href="deletePack?packId<?= $pack->packId ?>">Supprimer le pack</a></p>
			<p><a href="deletePack?packId<?= $pack->packId ?>">Modifier le pack</a></p>
			<?php endif ?>
		</div>
	<?php endforeach ?>
</div>
<p><span><?= $mmorpg->mmorpgNom ?></span> - <span><?= $genre->genreNom ?></span><span><?= $cat->catNom ?></span></p>

