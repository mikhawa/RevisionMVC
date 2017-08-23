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

require_once 'c/tableauController.php';