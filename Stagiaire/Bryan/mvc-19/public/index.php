<?php
# Stagiaire/Robin/mvc-19/public/index.php

# CONTROLEUR FRONTAL
/*
 Chargement une seule fois et qui arrête 
le script en cas d'échec 
*/
require_once "../config.php";

// Si il n'existe pas de variable GET nommée 'page'
if(!isset($_GET['page'])) {
    // On charge la page d'accueil
    include ROOT_PATH."/view/index.php";

// Sinon si la variable get 'page' a une valeur
// acceptée dans la constante de type array PUBLIC_PAGES
}else if(in_array($_GET['page'],PUBLIC_PAGES)){

    // Si la variable GET correspond à une valeur
    // acceptée dans le tableau
    include ROOT_PATH."/view/".$_GET['page'].".php";
}
// sinon, la variable get page egiste
// mais n'est pas valide
else {
    // Appel de l'erreur 404
    include ROOT_PATH."/view/404.php";
}