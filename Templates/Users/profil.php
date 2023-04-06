<h1>Votre page profil</h1>
        <ol>
            <div>
                <li>Nom</li>
                <p><?= $_SESSION['user'] -> nomUser ?></p>
            </div>
            <div>
                <li>Prénom</li>
                <p>Carmen</p>
            </div>
            <div>
                <li>Adresse postale</li>
                <p>Rue de la pépiniaire, 5100 Namur</p>
            </div>
            <div>
                <li>Photo de profil</li>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <img id="imageProfil" src="Images/profil.png" alt="Mon image de profil">
            </div>
        </ol>