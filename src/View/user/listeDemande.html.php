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

<div class="row">
    <div class="col-md-10 ml-auto mr-auto">
    <h2 class="text-center" style="font-weight:bold">Lisitr'ireo fangatahana </h2> <br>
       
            <div id="demande">
                <h4 >Fangatahana nataon'i <b> <?= $user['nom']  ?> <?= $user['prenom'] ?> </b></h4>
                <?php foreach($demande as $demandes): ?>
                    <h3>Isa :<?= $demandes['nombres'] ?></h3>
                    <h5>Tamin'ny <?= $demandes['createdAt'] ?></h5>
                
                    <?php if($demandes['reponse'] == 1 ) : ?>

                        <a  href="copieController.php?nbr=<?= $demandes['nombres'] ?>&idDem=<?=$demandes['id']?>&id=<?= $user['id'] ?>&ok=2" class="btn btn-warning"> Halaina </a>
                        
                    <?php else : ?>
                        <button class="btn btn-primary" disabled> Mbola tsy afaka alaina raha tsy vosonia </button>
                    <?php endif ?>
       
                <?php endforeach ?> <br>
    </div>
</div>
