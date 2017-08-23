<?php


/*
 * Contrôleur secondaire
 */

require_once 'm/Artiste.class.php';
require_once 'm/ArtisteManager.class.php';
require_once 'm/Tableau.class.php';
require_once 'm/TableauManager.class.php';

$manageArtiste = new ArtisteManager($connect);