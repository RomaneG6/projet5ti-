<h1><?= $pack->packNom ?></h1>

<img src="<?= $pack->packImage ?>" alt="Image du Pack">
<div class="flexible justify-content-space-around ">
    <h2>Infos</h2>
    <p><?= $pack->packMmorpg ?></p>
    <p><span><?= $pack->packGenre ?></span> - <span><?= $pack->packCat ?></span></p>
    <p><?php $pack->packPrix ?></p>
</div>
<div>
    <h2>Options MMORPG</h2>
    <table>
        <tr>
            <th>Options MMORPG</th>
        </tr>
        <?php if(empty($options)) : ?>
            <tr>
                <td>Il n'y a aucune option pour l'instant<?= $option->nom ?></td>
            </tr>
        <?php else : ?>
            <?php foreach($options as $option) : ?>
            <tr>
                <td><?= $option->nom ?></td>
            </tr>
            <?php endforeach ?>
        <?php endif ?>
    </table>
</div>