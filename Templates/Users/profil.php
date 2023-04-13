<h1>Votre page profil</h1>
        <ol>
            <div>
                <li>Nom :</li>
                <p><?= $_SESSION['user'] -> userNom ?></p>
            </div>
            <div>
                <li>Prénom :</li>
                <p><?= $_SESSION['user'] -> userPrenom ?></p>
            </div>
            <div>
                <li>Pseudo :</li>
                <p><?= $_SESSION['user'] -> userLogin?></p>
            </div>
            <div>
            <p><?= $_SESSION['user'] -> userPassword?></p>
            </div>
            <div>
                <li>Photo de profil</li>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <img id="imageProfil" src="Images/profil.png" alt="Mon image de profil">
            </div>
        </ol>
        <a href="modifyProfil">Modifier</a>