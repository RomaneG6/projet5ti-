<link rel="stylesheet" href="CSS/inscription&Connexion.css">
<div class="page">
    <h1>Connexion Page</h1>
    <form method="post" action="">
        <fieldset>
            <legend>Se connecter</legend>
            <div class="">
                <div class="login">
                    <input type="text" placeholder="" class="form-control" id="Login" aria-describedby="loginHelp" name="login" autocomplete="off" required>                
                    <label for="login" class="Login">
                        <span class="content-name">
                            Login
                        </span>
                    </label>
                </div>
                <div class="mb-3">
                    <input type="password" placeholder="" class="form-control" id="Password" name="mp" required>
                    <label for="mp" class="Mp">
                    <span class="content-name2">
                        Mot de passe
                    </span>
                </div>
            </div>
            <div class="link">
                <a href="/inscription" class="btn btn-secondary">Pas encore inscrit ?</a>
            </div>
            <div>
                <button name="btnEnvoi" class="btn btn-primary" value="Envoyer">Envoyer</button>
            </div>
        </fieldset>
    </form>
</div>