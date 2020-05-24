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
    <div class="col-md-4 ml-auto mr-auto text-center" style="margin-top:200px">
    <h3 class="text-center">Fangatahana kopia</h3> <br><br>
        <form action="demandeController.php" method="GET">
            <select name="choix"  class="form-control">
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
            </select><br>
            <h4>Daty anio</h4>
            
               
               <?php if($acces < 7): ?>
                    <?php  $total= 7 - $acces ?>
                    <h5>Tsy afaka mangataka kopia indray ianao raha tsy afaka <?= $total ?> andro</h5>
                <?php else : ?>
                    <button type="submit" class="btn btn-success" name="b1"> Hangataka </button>
                <?php endif ?>

                
        </form>
    </div>
</div>