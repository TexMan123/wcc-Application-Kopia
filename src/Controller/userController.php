<?php
    require('../../config/database.php');
    require_once('../Model/Transaction/regionTransaction.php');
    require_once('../Model/Transaction/communetransaction.php');
    require_once('../Model/Transaction/userTransaction.php');
    session_start();

    $title="Lisitrin'ny olona";
    $reg= new regionTransaction();
    $regionAll= $reg->findAll();
    $com= new communeTransaction();
    $communeAll= $com->findAll();
    $user= new userTransaction();
    if(isset($_GET['b1'])) {
        $user->setNom($_GET['name']);
        $user->setPrenom($_GET['prenom']);
        $user->setSexe($_GET['sexe']);
        $user->setDateN($_GET['date']);
        $user->setLieuN($_GET['lieu']);
        $user->setHeureNais($_GET['heure']);
        $user->setPere($_GET['pere']);
        $user->setLieuNP($_GET['lieuP']);
        $user->setDateNP($_GET['dateP']);
        $user->setMere($_GET['mere']);
        $user->setLieuNM($_GET['lieuNM']);
        $user->setDateNM($_GET['dateNM']);
        $user->setCommune($_GET['commune']);
        $user->addUser();
    }
    $AllUser= $user->findAllUser(); 
    ob_start();
    require('../View/fonctionnaire/ajoutUser.html.php');
    $content= ob_get_clean();
    require('../View/base.html.php');