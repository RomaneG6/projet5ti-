<form method="post" action="">
            <fieldset>
                <legend>Creation Pack</legend>
                <div class="mb-3">
                    <label for="Nom" class="form-label">Nom</label>
                    <input type="text" placeholder="Nom" class="form-control" id="Nom" name="nom" value="<?php if(isset($pack)) :?><?= $pack->packNom ?><?php endif ?>">
                        <?php if(isset($messageError["nom"])) :?><small><?= $messageError["nom"] ?></small><?php endif ?>
                </div>
                <div class="mb-3">                    
                    <label for="mmorpg-select">Choisis un mmorpg :</label>

                    <select name="mmorpg[]" id="mmorpg-select" multiple required>
                        <?php foreach($optionMmorpgs as $optionMmorpg) : ?>
                        <option value="<?= $optionMmorpg->mmorpgId ?>"<?php if(isset($optionMmorpg)) :?><?php foreach($OptionsMmorpg as $optionMmorpg) : ?><?php if($option->mmorpgId === $optionMmorpg->optionMmorpgId) : ?>selected<?php endif ?><?php endforeach ?><?php endif ?>><?= $optionMmorpg->mmorpgLogin ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                    
                <div class="mb-3">
                    <label for="Genre" class="form-label">Genre</label>
                    <input type="genre" placeholder="Genre" class="form-control" id="genre" name="genre" value="<?php if(isset($pack)) :?><?= $pack->packGenre?><?php endif ?>">
                    <?php if(isset($messageError['genre'])) :?><small><?= $messageError['genre'] ?></small><?php endif ?>
                </div>
                <label>Genre</label><input type="radio" name="gender" value="homme">Homme<input type="radio" name="gender" value="femme">Femme<input type="radio" name="gender" value="fille">fille
                <div class="mb-3">         
                    <label for="cats-select">Choisis une Catégorie :</label>

                    <select name="cats" id="cats-select">
                        <?php foreach($options as $option) : ?>
                            <option value="<?= $option->catId ?>" <?php if(isset($OptionCat)) :?><?php foreach($OptionsMmorpg as $optionMmorpg) : ?><?php if($option->mmorpgId === $optionMmorpg->optionMmorpgId) : ?>selected<?php endif ?><?php endforeach ?><?php endif ?>></option>
                    <?php endforeach ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="Prix" class="form-label">Prix</label>
                    <input type="prix" placeholder="Prix" class="form-control" id="prix" name="prix" value="<?php if(isset($pack)) :?><?= $pack->packPrix?><?php endif ?>">
                    <?php if(isset($messageError['genre'])) :?><small><?= $messageError['genre'] ?></small><?php endif ?>
                </div>
                <div class="mb-3">
                    <label for="Img" class="form-label">Image</label>
                    <input type="text" placeholder="Image" class="form-control" id="image" name="image" value="<?php if(isset($pack)) :?><?= $pack->packImage?><?php endif ?>">
                    <?php if(isset($messageError['image'])) :?><small><?= $messageError['image'] ?></small><?php endif ?>
                </div>  
                <div>   
                    <button name="btnEnvoi" class="btn btn-primary" value ="envoyer"><?php if(isset($pack)) :?>Modifier<?php else : ?>Ajouter<?php endif ?></button>
                </div>
            </fieldset>
        </form>

