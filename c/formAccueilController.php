<?php

/* 
 * Vérification de connexion (fichier config)
 */

if($_POST["login"]==USER && $_POST["pwd"]== PWD){
    // session valide
    $_SESSION['laclef'] = session_id();
    $_SESSION['nom'] = $_POST['login'];
    // redirection sur l'accueil
    header("Location: ./");
}else{
    header("Location: ./?faux");
}