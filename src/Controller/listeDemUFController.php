<?php
    require('../../config/database.php');
    require_once('../Model/Transaction/userTransaction.php');
    session_start();
    $title= "Lisitr'ireo fangatahana";
    $user= new userTransaction();
    $commune= $user->findCommune();
    $User= $user->findUser();
    ob_start();
    require('../View/fonctionnaire/listeDemande.html.php');
    $content= ob_get_clean();
    require('../View/base.html.php');