<?php
    require_once('../../config/database.php');
    require_once('../Model/Transaction/regionTransaction.php');
    require_once('../Model/Transaction/communetransaction.php');
    require_once('../Model/Transaction/fonctionnaireTransaction.php');

    $fonctionnaire= new fonctionnaireTransaction();
    if(isset($_GET['b1'])) {
        $fonctionnaire->setNom($_GET['nom']);
        $fonctionnaire->setPassword(password_hash($_GET['mdp'],PASSWORD_DEFAULT));
        $fonctionnaire->setCommune($_GET['commune']);
        $fonctionnaire->add();
    }
    $title="Fandaminana";
    $reg= new regionTransaction();
    $regionAll= $reg->findAll();
    $com= new communeTransaction();
    $communeAll= $com->findAll();
    
    $fonc= $fonctionnaire->findAll();
    ob_start();
    require('../View/supAdmin/AjoutFonctionnaire.html.php');
    $content= ob_get_clean();
    require('../View/base.html.php');