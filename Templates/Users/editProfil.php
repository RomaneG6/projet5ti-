<form method="post" action="">
            <fieldset>
                <legend>Inscription</legend>
                <div class="mb-3">
                    <label for="Nom" class="form-label">Nom</label>
                    <input type="text" placeholder="Nom" class="form-control" id="Nom" name="txtNom" required 
                    <?php if(isset($messageErrorLogin['nom'])) : ?> <p> <?= $messageErrorLogin['nom'] ?> </p> <?php endif ?>
                </div>
                <div class="mb-3">
                    <label for="Prenom" class="form-label">Prénom</label>
                    <input type="text" placeholder="Prénom" class="form-control" id="Prenom" name="txtPrenom" required 
                    <?php if(isset($messageErrorLogin['prenom'])) : ?> <p> <?= $messageErrorLogin['prenom'] ?> </p> <?php endif ?>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" placeholder="Email" class="form-control" id="email" name="txtEmail" required 
                    <?php if(isset($messageErrorLogin['email'])) : ?> <p> <?= $messageErrorLogin['email'] ?> </p> <?php endif ?>
                </div>
                <div class="mb-3">
                    <label for="Login" class="form-label">Login</label>
                    <input type="text" placeholder="Login" class="form-control" id="Login" name="txtLogin" required 
                    <?php if(isset($messageErrorLogin['login'])) : ?> <p> <?= $messageErrorLogin['login'] ?> </p> <?php endif ?>
                </div>
                <div class="mb-3">
                    <label for="Password" class="form-label">Mot de passe</label>
                    <input type="password" placeholder="Mot de passe" class="form-control" id="Password" name="txtMp" required 
                    <?php if(isset($messageErrorLogin['mot_de_passe'])) : ?> <p> <?= str_replace('_', ' ',$messageErrorLogin['mot_de_passe']) ?> </p> <?php endif ?>
                </div>
                <div>
                    <button name="btnEnvoi" class="btn btn-primary">Inscription</button>
                </div>
            </fieldset>
        </form>