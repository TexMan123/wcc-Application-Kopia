<?php
    require_once('../../config/database.php');
    require_once('../Model/Transaction/regionTransaction.php');
    require_once('../Model/Transaction/communetransaction.php');
    require_once('../Model/Transaction/fonctionnaireTransaction.php');

    $title="Fanovana";
    $fonctionnaire= new fonctionnaireTransaction();
    $reg= new regionTransaction();
    $regionAll= $reg->findAll();
    $com= new communeTransaction();
    $communeAll= $com->findAll();
    if(isset($_GET['b1'])){
        $fonctionnaire->setNom($_GET['nom']);
        $fonctionnaire->update();
    }
    
    ob_start();
    require('../View/supAdmin/updateFonctionnaire.html.php');
    $content= ob_get_clean();
    require('../View/base.html.php');