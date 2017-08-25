<?php

// on est connecté en tant qu'admin
// dépendances pour le CRUD des tableaux
require_once 'm/Tableau.class.php';
require_once 'm/TableauManager.class.php';

$manageTableau = new TableauManager($connect);

// on veut se déconnecter
if (isset($_GET['deco'])) {
    // destruction complète de session
    $_SESSION = array();
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]
        );
    }
    session_destroy();   
    // redirection
    header("Location: ./");
}elseif(isset($_GET['insert'])){
    echo "on essaie d'insérer";
}else{
    $recupTous = $manageTableau->selectAll();

    if ($recupTous) {
        foreach ($recupTous as $key => $value) {
            $obj[] = new Tableau($value);
        }
        //var_dump($obj);
    } else {
        echo "soucis !";
    }
}


// Appel de la vue
require_once 'v/adminTableauTous.php';
