<form action="copieController.php" method="GET">
    <input type="hidden" value="<?= $_GET['idDem'] ?>" name="demande">
    <input type="hidden" value="<?= $_GET['id'] ?>" name="id">
    <input type="hidden" value="<?= $_GET['nbr'] ?>" name="nbre">
 <br>
<?php for($i=0; $i<intval($_GET['nbr']); $i++): ?>
    <div id="content">
        <div class="A4 ml-auto mr-auto" >
            <table style="width:180mm" class="ml-auto mr-auto" >
                <tr><td width="120px">
                    <img src="../../public/images/communeTana.jpg" width="120px" height="150px">
                </td><td>
                 <p class="text-center titre" > REPOBLIKAN'I MADAGASIKARA <br>
                    Fitiavana - Tanindrazana - Fandrosoana <br>
                COMMUNE URBAINE D'ANTANANARIVO <br>    
                </p>
                <div style="font-family:Brush Script Std" id="kopia" class="text-center">  Kopian'ny Sora-piankohonana </div>
                </td></tr>
                <tr><td colspan="2" style="padding-top:10px">
                    <p>N° <u> <?= $_GET['id'] ?> </u></p>
                    <p>Natao tamin'ny <u><?= $userInfo['createdAt'] ?></u> </p>
                    <u><p>Fahaterahana</p></u>
                </td></tr> <tr>
                <td colspan="2">
                    <div> <?= $userInfo['nom'] ?> <?= $userInfo['prenom'] ?> </div>
                    <u> <p> <?= $userInfo['DateN'] ?> </p> </u>
                </td>
                </tr><tr>
                <td colspan="2">
                    Tamin'ny <?= $userInfo['DateN'] ?>, tamin'ny <?= date('H:i', strtotime($userInfo['heure'])) ?> no teraka tao <?= $userInfo['lieuNais'] ?>, <?= $userInfo['nom'] ?> <?= $userInfo['prenom'] ?>, <?= $userInfo['sexe'] ?> zanak'i <?= $userInfo['pere'] ?>, teraka tao <?= $userInfo['lieuNaisP'] ?>, tamin'ny <?= $userInfo['dateNP'] ?> sy <?= $userInfo['mere'] ?> vadiny, teraka tao <?= $userInfo['lieuNaisM'] ?>, tamin'ny <?= $userInfo['dateNM'] ?>. <br> <br>

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis maxime placeat ipsum ducimus vero amet laborum distinctio dicta ad ipsam. Eum ad voluptas temporibus culpa possimus totam ea est dolorum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis maxime placeat ipsum ducimus vero amet laborum distinctio dicta ad ipsam. Eum ad voluptas temporibus culpa possimus totam ea est dolorum.
                </td></tr>

                <?php if($_GET['ok'] == 1) : ?>
                    <tr><td colspan="2" height="700px">
                    <input type="text" name="signature" style="float:right" placeholder="Sonia">
                    </td></tr>
                <?php else : ?>
                    <?php
                    //Tokony ao amin'ny copieTransaction
                        $conn= new connexion();
                        $sql= $conn->pdo->query("SELECT signe FROM signatures WHERE id='".$_GET['idDem']."'");
                        $sign= $sql->fetch();
                    ?>
                    <tr><td colspan="2" height="700px">
                    <input type="text" name="signature" style="float:right" value=<?= $sign['signe'] ?> disabled>
                    </td></tr>
                <?php endif ?> 
                
            </table>
        </div> <br>
    </div>

<?php endfor ?>
<?php if($_GET['ok'] == 1) : ?>
    <button class="btn btn-success" style="margin-left:155px" name="b1"> Halefa  </button> <br><br>
</form>
<?php else : ?>

    <input type="button" class="btn btn-primary" style="margin-left:155px" id="cmd" value="Halaina"> <br><br>
<?php endif ?> 
