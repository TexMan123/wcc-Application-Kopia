<nav class="navbar navbar-expand-lg navbar-light navb">
  <a class="navbar-brand" href="#"><strong style="color:white">KAOMININA MALAGASY</strong></a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="userController.php" style="color:yellow"> Lisitrin'ny olona <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="listeDemUFController.php" style="color:yellow">Lisitrin'ireo fangatahana</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="loginController.php" style="color:white"> Hiala </a>
      </li>
  </div>
</nav> <br>
<br>
<div class="row">
    <div class="col-md-10 ml-auto mr-auto">
    <h2 class="text-center" style="font-weight:bold">Lisitr'ireo fangatahana kopia eto amin'ny kaominina <?= $commune['nom'] ?></h2> <br>
    
        <?php foreach($User as $Users) : ?>
           
           <div id="demande">
           <?php $demande= $user->findAllDemande($Users['id']); ?>
               <h4 >Fangatahana nataon'i <b> <?= $Users['nom']  ?> <?= $Users['prenom'] ?> </b></h4>
               <?php foreach($demande as $demandes): ?>
                   <h3>Isa :<?= $demandes['nombres'] ?></h3>
                   <h5>Tamin'ny <?= $demandes['createdAt'] ?></h5>
               <?php endforeach ?> <br>
               <a  href="copieController.php?nbr=<?= $demandes['nombres'] ?>&idDem=<?=$demandes['id']?>&id=<?= $Users['id'] ?>&ok=1" class="btn btn-warning"> Hanamboarana </a>
           </div>
           
       <?php endforeach ?>
     
        
        
    </div>
</div>

