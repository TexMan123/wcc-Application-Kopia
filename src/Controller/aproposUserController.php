<?php
    require('../../config/database.php');
    require('../Model/Transaction/aproposUserTransaction.php');
    session_start();

    $title= "Momba ahy";
    $apropos= new aproposUserTransaction();
    $user= $apropos->findAll();
    ob_start();
    require('../View/user/apropos.html.php');
    $content= ob_get_clean();
    require('../View/base.html.php');