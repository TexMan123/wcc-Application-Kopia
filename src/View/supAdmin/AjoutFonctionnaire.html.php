<nav class="navbar navbar-expand-lg navbar-light navb">
  <a class="navbar-brand" href="#"><strong style="color:white">KAOMININA MALAGASY</strong></a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="AdminController.php" style="color:yellow">Mpiasan'ny kaominina <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color:yellow">Mpandrindra</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="loginController.php" style="color:white"> Hiala </a>
      </li>
  </div>
</nav> <br>

<div class="contenuTabs">
<button class="btn btn-primary" id="affiche">Hampiditra mpiasa</button> <br>
  <form action="AdminController.php" action="GET">
        <div id="formAjout">
            <h2>Hampiditra mpiasan'ny kaominina</h2><br>
            <label for="nom">Anarana</label>
            <input type="text" class="form-control" name="nom">
            <label for="mdp">Teny miafina</label>
            <input type="text" class="form-control" name="mdp"> <br>

            <label for="region">Faritra</label>
            <select name="region" id="region" class="form-control">
                <option value="">Faritra...</option>
                <?php foreach($regionAll as $regionAlls) : ?>
                <option value="<?= $regionAlls['id'] ?>"><?= $regionAlls['nom'] ?> </option> 
                <?php endforeach ?>
            </select> <br>
            <label for="commune">Kaominina</label>
            <select name="commune" id="commune" class="form-control">
                <option value="">Kaominina misy ao amin'ny faritra eo ambony...</option>
                <?php foreach($communeAll as $communeAlls) : ?>
                <option value="<?= $communeAlls['id'] ?>" class="<?= $communeAlls['id_region'] ?>"><?= $communeAlls['nom'] ?> </option> 
                <?php endforeach ?>
            </select> <br>
            <button class="btn btn-success" style="width:100%" name="b1">Hampidirina</button>
        </div>           
     <br>
      <h2>Lisitr'ireo mpiasan'ny kaominina rehetra</h2>
        <table id="tab" class="text-center">
            <thead>
                <tr>
                  <td>
                    Laharana
                  </td> <td>
                    Anarana
                  </td> <td>
                    Faritra
                  </td> <td>
                    Kaominina
                  </td> <td>
                  </td>
                </tr> 
            </thead>
            <tbody>
                <?php foreach($fonc as $fonctionnaires) : ?>
                  <tr>
                  <td>
                    <?= $fonctionnaires['id'] ?>
                  </td>
                  <td>
                    <?= $fonctionnaires['nom'] ?>
                  </td>
                  <td>
                    <?php $reg= $fonctionnaire->findRegion($fonctionnaires['id_commune']) ?>
                    
                  </td>
                  <td>
                    <?php $reg= $fonctionnaire->findNomCommune($fonctionnaires['id_commune']) ?>
                  </td>
                  <td>
                    <a href="UpdateFoncController.php?id=<?= $fonctionnaires['id'] ?>&nom=<?= $fonctionnaires['nom'] ?>&C=<?= $fonctionnaires['id_commune'] ?>" class="btn btn-success">Modifier</a>
                  </td>
                  </tr>
                <?php endforeach ?>
            </tbody>
        </table>
</form>
</div>