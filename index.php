<?php

/*
 * Contrôleur frontal
 */

// dépendances
require_once 'config.php';
require_once 'm/myPDO.php';

// connexion
$connect = new myPDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET.";port=".DB_PORT, DB_LOGIN, DB_PWD);



// routage de base

// on veut afficher un artiste grâce à son id
if(isset($_GET['idartiste'])&& ctype_digit($_GET['idartiste'])){
    require_once 'c/artisteController.php';
}else{
    require_once 'c/tableauController.php';
}