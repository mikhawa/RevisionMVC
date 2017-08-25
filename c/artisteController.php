<?php


/*
 * Contrôleur secondaire
 */

require_once 'm/Artiste.class.php';
require_once 'm/ArtisteManager.class.php';

$manageArtiste = new ArtisteManager($connect);
//var_dump($manageArtiste);
$recupArtiste = $manageArtiste->afficheArtiste($_GET['idartiste']);
// si on a récupéré un artiste (0 ou 1)
if(!empty($recupArtiste)){
    // création de l'instance de Artiste
    $art = new Artiste($recupArtiste);
    //var_dump($art);
}else{ // 0
    $erreur = "Artiste non existant";
}
// appel de la vue
require_once 'v/artisteSeul.php';
