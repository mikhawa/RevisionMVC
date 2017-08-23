<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Le tableau</title>
    </head>
    <body>
        <h1>Le tableau</h1>
        <?php

            ?>
        <h2><a href="?idtab=<?=$obj->getId()?>"><?=$obj->getTitre()?></a></h2>
        <img src="<?=$obj->getImage()?>" width="150" height="150" alt=""/>
        <h3>Par <a href="?idartiste=<?=$obj->getArtiste_idArtiste()?>"><?=$obj->getLenom()?> <?=$obj->getLeprenom()?></a></h3>
        <p>En <?=date("Y",strtotime($obj->getCreation()))?></p>
        <h4><a href="./">Retour à l'accueil</a></h4>
        <?php
        
        ?>
    </body>
</html>
