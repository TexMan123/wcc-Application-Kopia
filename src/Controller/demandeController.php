<?php
    require('../../config/database.php');
    require('../Model/Transaction/demandeTransaction.php');
    session_start();

    $title="Fangatahana kopia";
    $demande= new demandeTransaction();
    
    if(isset($_GET['b1'])) {
        $demande->setNombres($_GET['choix']);
        $demande->setCreatedAt(date('Y-m-d'));
        $demande->setReponse(0);
        $demande->setUser($_SESSION['user']);
        $demande->demande();
    }
    $acces= $demande->findMaxDate();
    ob_start();
    require('../View/user/demande.html.php');
    $content=ob_get_clean();
    require('../View/base.html.php');