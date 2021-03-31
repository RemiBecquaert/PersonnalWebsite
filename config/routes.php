<?php
    
function getPage(){

    $lesPages['accueil'] = "accueilControleur";
    $lesPages['mentions'] = "mentionsControleur";
    $lesPages['actualite'] = "actuControleur";
    $lesPages['projet'] = "projetControleur";
    $lesPages['voirMess'] = "voirMessControleur";
    $lesPages['creerActu'] = "creerActuControleur";
    $lesPages['cv'] = "cvControleur";
    if (isset($_GET['page'])){
        $page = $_GET['page'];
    }
    else{
        $page = 'accueil';
    }
    if (isset($lesPages[$page])){
        $contenu = $lesPages[$page];
    }
    else{
        $contenu = $lesPages['accueil'];
    }
    return $contenu;
}
?>