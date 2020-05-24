<?php
    require('../../config/database.php');
    require_once('../Model/Transaction/listeDemandeTransaction.php');
    session_start();
    $title= "Lisitr'ireo fangatahana";
    $liste= new listeDemande();
    $user= $liste->findUser();
    $demande= $liste->findAllDemande();
    ob_start();
    require('../View/user/listeDemande.html.php');
    $content= ob_get_clean();
    require('../View/base.html.php');