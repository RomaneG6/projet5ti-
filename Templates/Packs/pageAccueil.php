<h1>Page d'accueil</h1>
<?php if (isset($_SESSION["user"])) : ?><a href="createPack">Ajouter un pack</a><?php endif ?>
<div class="flexible wrap justify-content-center">
	<?php foreach ($packs as $pack) : ?>
		<div class="bordure center blockAffichage">
			<h2><?= $pack->packNom ?></h2>
			<img src="<?= $pack->packImage ?>" alt="Photo du pack">
			<p><span><?= $pack->packMmorpg ?></span> - <span><?= $pack->packGenre ?></span><span><?= $pack->packCat ?></span></p>
			<p><?= $pack->packPrix ?></p>
			<p><a href="voirPack?packId=<?= $pack->packId ?>">Voir Le pack</a></p>
			<?php if($uri === "/mesPack") : ?>
			<p><a href="deletePack?schoolId<?= $pack->packId ?>">Supprimer le pack</a></p>
			<p><a href="deletePack?schoolId<?= $pack->packId ?>">Modifier le pack</a></p>
			<?php endif ?>
		</div>
	<?php endforeach ?>
</div>
