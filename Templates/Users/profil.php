<p>Page profil</p>
<p>Nom :</p>
<p><?= $_SESSION["user"]->userNom?></p>
<p>Prenom :</p>
<p><?= $_SESSION["user"]->userPrenom?></p>
<p>Login : </p>
<p><?= $_SESSION["user"]->userLogin?></p>
<p>MP :</p>
<p><?= $_SESSION["user"]->userPassWord?></p>
<a href="updateProfil">Modifier</a>
<a href="deleteProfil">Supprimer</a>