<h1>Connexion Page</h1>
    <form method="post" action="">
        <fieldset>
            <legend>Se connecter</legend>
            <div class="mb-3">
                <label for="Login" class="form-label">Login</label>
                <input type="text" placeholder="Login" class="form-control" id="Login" aria-describedby="emailHelp" name="login" required>
            </div>
            <div class="mb-3">
                <label for="Password" class="form-label">Mot de passe</label>
                <input type="password" placeholder="Mot de passe" class="form-control" id="Password" name="mp" required>
            </div>
            <div>
                <button name="btnEnvoi" class="btn btn-primary" value="Envoyer">Envoyer</button>
            </div>
        </fieldset>
    </form>
    <div>
        <a href="/inscription" class="btn btn-secondary">Pas encore inscrit ?</a>
    </div>
</div>