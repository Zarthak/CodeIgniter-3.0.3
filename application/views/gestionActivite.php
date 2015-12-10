<?php

include_once("head.php");

function titre() {
    ?>
    <h2>Gestion des activités</h2>
    <?php
}

function affichageActivite($activites) {    // toutes les activités, 1 activite = idActivite,nomActivite,descriptionActivite,nomTheme
    ?>

    <div class="tableform">
        <table id="activite">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Description</th>
                <th>Thème</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($activites as $act) {
                ?>
                <tr>
                    <td><?=$act['nomActivite']?></td>
                    <td><?=$act['descriptionActivite']?></td>
                    <td><?=$act['nomTheme']?></td>
                    <td><a href="<?=base_url(); ?>/application/controllers/GestionActivite.php?id=<?=$act['idActivite']?>&action=modif"><img src="<?=base_url(); ?>/asset/img/edit.png" alt="modif" name="modif"/></a>
                        <a href="<?=base_url(); ?>/application/controllers/GestionActivite.php?id=<?=$act['idActivite']?>&action=delete" <img src="<?=base_url(); ?>/asset/img/remove.png" alt="delete" name="delete"/></a></td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>

    <?php
}

function formActivite($themes){ // tous les themes, 1 theme = idTheme, nomTheme
    ?>
    <div class="formGestionActivite">
        <fieldset>
            <legend>Ajouter activité : </legend>
            <form id="activite" method="post" name="activite" action="<?=base_url(); ?>/application/controllers/GestionActivite.php">
                <label for="nomActivite">Nom de l'activité</label>
                    <input type="text" id="nomActivite" name="nomActivite">
                <label for="descriptionActivite">Description de l'activité</label>
                    <input type="text" id="descriptionActivite" name="descriptionActivite">
                <label for="idTheme">Thème : </label>
                    <select id="idTheme" name="idTheme">
                        <?php
                        foreach($themes as $theme){
                            ?>
                            <option <?php echo('selected');?>
                                value="<?=$theme['idTheme']?>"><?=$theme['nomTheme']?></option><?php
                        }
                        ?>
                        <option value="-1">non existant</option>
                    </select>
                <label>Si le thème n'existe pas encore, veuillez indiquer le nom d'un nouveau thème ci-dessous</label>
                <label for="nomTheme">Nom du thème : </label>
                    <input type="text" id="nomTheme" name="nomTheme">
            </form>
        </fieldset>
    </div>
    <?
}
function modifActivite($activite,$themes) { // l'activité à modifier et tous les themes, 1 theme = idTheme, nomTheme
    ?>
    <div class="formGestion">
        <fieldset>
            <legend>Modifier une activité </legend>
            <form id="activite" method="post" name="activite" action="<?=base_url(); ?>/application/controllers/GestionActivite.php">
                <input type="hidden" name="idActivite" value="<?=$activite['idActivite']?>">

                <label for="nomActivite">Nom de l'activité</label>
                    <input type="text" id="nomActivite" name="nomActivite" value="<?=$activite['nomActivite']?>">

                <label for="descriptionActivite">Description de l'activité</label>
                    <input type="text" id="descriptionActivite" name="descriptionActivite" value="<?=$activite['descriptionActivite']?>">
                <label for="idTheme">Thème : </label>
                <select id="idTheme" name="idTheme">
                    <?php
                    foreach($themes as $theme){
                        ?>
                        <option <?php echo('selected');?>
                        value="<?=$theme['idTheme']?>"><?=$theme['nomTheme']?></option><?php
                    }
                    ?>
                    <option value="-1">non existant</option>
                </select>
                <label>Si le thème n'existe pas encore, veuillez indiquer le nom d'un nouveau thème ci-dessous</label>
                <label for="nomTheme">Nom du thème : </label>
                <input type="text" id="nomTheme" name="nomTheme">
            </form>
        </fieldset>
    </div>
    <?php
}
