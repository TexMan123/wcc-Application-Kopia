<?php
    require('../../config/database.php');
    require('../Model/Transaction/copieTransaction.php');
    session_start();
    $title="kopia";
    $user= new copieTransaction();
    $user-> envoyer();
    $userInfo= $user->findUser();
    ob_start();
    require('../View/fonctionnaire/copie.html.php');
    $content= ob_get_clean();
    require('../View/base.html.php');