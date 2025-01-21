<?php
session_start();
require_once('../model/model.php');

//Récupération du nom d'utilisateur
if($nom == null || $password == null) {
    $message = "information incorrect";
} else {
    $bdd = new model();

    $nom = $bdd->getEvents();
    
    if(!$nom) {
        $message = "nom inexistant";
    } else {
        $_SESSION["id"] = $nom["id"];
        $_SESSION["nom"] = $nom["nom"];
    }
}

//récupération de la liste des évènements dans la base de données


require_once('../view/listView.php');