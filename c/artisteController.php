<?php


/*
 * Contrôleur secondaire
 */

require_once 'm/Artiste.class.php';
require_once 'm/ArtisteManager.class.php';

$manageArtiste = new ArtisteManager($connect);
//var_dump($manageArtiste);
$recupArtiste = $manageArtiste->afficheArtiste($_GET['idartiste']);

var_dump($recupArtiste);