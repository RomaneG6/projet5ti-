<h1><?= $pack->packNom ?></h1>

<img src="<?= $pack->packImage ?>" alt="Photo du pack">
<div class="flexible justify-content-space-around ">
    <h2>Infos</h2>
    <p><?php $pack->packPrix ?></p>
</div>
<div>

    <table>
        <tr>
            <th>Options MMORPG</th>
        </tr>
        <?php if(empty($optionMmorpgs)) : ?>
            <tr>
                <td>Il n'y a aucune option pour l'instant</td>
            </tr>
        <?php else : ?>
            <?php foreach($optionMmorpgs as $optionMmorpg) : ?>
            <tr>
                <td><?= $optionMmorpg->mmorpgNom?></td>
            </tr>
            <?php endforeach ?>
        <?php endif ?>
    </table>
</div>