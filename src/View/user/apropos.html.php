<nav class="navbar navbar-expand-lg navbar-light navb">
  <a class="navbar-brand" href="#"><strong style="color:white">KAOMININA MALAGASY</strong></a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="aproposUserController.php" style="color:yellow">Momba ahy <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="demandeController.php" style="color:yellow">Hangataka kopia</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="listeDemandeController.php" style="color:yellow">Lisitr'ireo fangatahana</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="loginController.php" style="color:white"> Hiala </a>
      </li>
  </div>
</nav> 
<br>
<div class="row">
    <div class="col-md-6 ml-auto mr-auto">
        
        <table class="table table-striped table-dark">
            <tr><td colspan="2" style="background-color:#0056a7">
            <h2 class="text-center" style="color:yellow">Laharana faha <?= $user['id'] ?></h2>
            </td></tr><tr>
            <td> <h5>Anarana : </h5> </td>
            <td style="float:right"> <h5> <?= $user['nom'] ?></h5> </td>
            </tr><tr>
            <td> <h5> Fanampin'anarana : </h5> </td>
            <td style="float:right"> <h5> <?= $user['prenom'] ?> </h5> </td>
            </tr><tr>
            <td> <h5>Vavy/Lahy : </h5> </td>
            <td style="float:right"> <h5> <?= $user['sexe'] ?></h5> </td>
            </tr><tr>
            <td> <h5>Teraka tamin'ny : </h5> </td>
            <td style="float:right"> <h5> <?= $user['DateN'] ?></h5> </td>
            </tr><tr>
            <td> <h5>Tao : </h5> </td>
            <td style="float:right"> <h5> <?= $user['lieuNais'] ?></h5> </td>
            </tr><tr>
            <td> <h5>Tamin'ny : </h5> </td>
            <td style="float:right"> <h5> <?= date('H:i', strtotime($user['heure']) ) ?> Ora</h5> </td>
            </tr><tr>
            <td> <h5>Ray niteraka </h5> </td>
            <td style="float:right"> <h5> <?= $user['pere'] ?></h4> </td>
            </tr><tr>
            <td> <h5>Teraka tamin'ny : </h5> </td>
            <td style="float:right"> <h5> <?= $user['dateNP'] ?></h5> </td>
            </tr><tr>
            <td> <h5>Tao : </h5> </td>
            <td style="float:right"> <h5> <?= $user['lieuNaisP'] ?></h5> </td>
            </tr><tr>
            <td> <h5>Reny niteraka : </h5> </td>
            <td style="float:right"> <h5> <?= $user['mere'] ?></h5> </td>
            </tr><tr>
            <td> <h5>Teraka tamin'ny : </h5> </td>
            <td style="float:right"> <h5> <?= $user['dateNM'] ?></h5> </td>
            </tr><tr>
            <td> <h5>Tao : </h5> </td>
            <td style="float:right"> <h4> <?= $user['lieuNaisM'] ?></h5> </td>
            </tr><tr>
            <td> <h5>Faritra naterahana : </h5> </td>
            <td style="float:right"> <h5> <?= $user['lieuNaisM'] ?></h5> </td>
            </tr><tr>
            <td> <h5>Kaominina naterahana : </h5> </td>
            <td style="float:right"> <h5> <?= $user['id'] ?></h5> </td>
            </tr>
        </table>

    </div>
</div>
