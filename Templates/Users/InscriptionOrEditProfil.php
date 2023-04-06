<form method="post" action="">
            <fieldset>
                <legend>Inscription</legend>
                <div class="mb-3">
                    <label for="Nom" class="form-label">Nom</label>
                    <input type="text" placeholder="Nom" class="form-control" id="Nom" name="nom" 
                    value="<?php if(isset($_SESSION["user"])) :?>
                    <?= $_SESSION["user"]->nomUser ?>
                    <?php endif ?>
                    ">
                </div>
                <div class="mb-3">
                    <label for="Prenom" class="form-label">Prénom</label>
                    <input type="text" placeholder="Prénom" class="form-control" id="Prenom" name="prenom" required 
                    <?php if(isset($messageErrorLogin['prenom'])) :?><p class="text-danger"> <?= $messageErrorLogin['prenom'] ?> </p> <?php endif ?>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" placeholder="Email" class="form-control" id="email" name="mail" required 
                    <?php if(isset($messageErrorLogin['email'])) :?><p class="text-danger"> <?= $messageErrorLogin['mail'] ?> </p> <?php endif ?>
                </div>
                <div class="mb-3">
                    <label for="Login" class="form-label">Login</label>
                    <input type="text" placeholder="Login" class="form-control" id="Login" name="login" required 
                    <?php if(isset($messageErrorLogin['login'])) :?><p class="text-danger"> <?= $messageErrorLogin['login'] ?> </p> <?php endif ?>
                </div>
                <div class="mb-3">
                    <label for="Password" class="form-label">Mot de passe</label>
                    <input type="<?php if(isset($_SESSION['user'])) :?>text<?php else : ?>password<?php endif ?>"placeholder="Mot de passe" class="form-control" id="Password" name="mp"
                    value="<?php if(isset($_SESSION["user"])) : ?>
                        <?= $_SESSION["user"]->passWordUser ?>
                        <?php endif ?>
                    ">
                    <?php if(isset($messageErrorLogin['mot_de_passe'])) : ?> <p> <?= str_replace('_', ' ',$messageErrorLogin['mp']) ?> </p> <?php endif ?>
                </div>
                <div>
                    <button name="btnEnvoi" class="btn btn-primary" value ="inscrire">Inscription</button>
                </div>
            </fieldset>
        </form>