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

<div class="contenuTabs">
    <button class="btn btn-primary" id="affiche">Hampiditra olona</button>
    <div id="formAjout"><br>
        <form action="userController.php" method="GET">
            <label for="name">Anarana</label>
            <input type="text" name="name" class="form-control">
            <label for="prenom">Fanampin'anarana</label>
            <input type="text" name="prenom" class="form-control"> <br>
            <div class="form-check">
                <input class="form-check-input " type="radio" name="sexe"  value="Lehilahy" checked>
                <label class="form-check-label" for="exampleRadios1"> Lehilahy </label>
                <input class="form-check-input check1" type="radio" name="sexe"  value="Vehivavy">
                <label class="form-check-label labCheck2" for="exampleRadios2">  Vehivavy  </label> 
            </div><br>
            <label for="date">Daty naterahana</label>
            <input type="date" name="date" class="form-control">
            <label for="lieu">Toerana naterahana</label>
            <input type="text" name="lieu" class="form-control">
            <label for="heure">Lera naterahana</label>
            <input type="time" name="heure" class="form-control">
            <label for="pere">Anaran'ny Ray</label>
            <input type="text" name="pere" class="form-control">
            <label for="lieuP">Toerana naterahana</label>
            <input type="text" name="lieuP" class="form-control">
            <label for="dateP">Daty naterahana</label>
            <input type="date" name="dateP" class="form-control">

            <label for="mere">Anaran'ny Reny</label>
            <input type="text" name="mere" class="form-control">
            <label for="lieuM">Toerana naterahana</label>
            <input type="text" name="lieuNM" class="form-control">
            <label for="dateM">Daty naterahana</label>
            <input type="date" name="dateNM" class="form-control">

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
            <button class="btn btn-primary" name="b1" style="width:100%"> Hampidirina </button>
        </form>
    </div>
    <table id="tab" class="table table-bordered text-center">
        <thead>
            <tr>
            <td> Laharana </td>
            <td> Anarana </td>
            <td> Fanampin'anarana </td>
            <td> Lahy/Vavy </td>
            <td> Daty naterahana </td>
            <td>  </td>
            </tr>
        </thead>
        <tbody>
           
                <?php foreach($AllUser as $users) : ?>
                    <tr>
                    <td> <?= $users['id'] ?> </td>
                    <td> <?= $users['nom'] ?> </td>
                    <td> <?= $users['prenom'] ?> </td>
                    <td> <?= $users['sexe'] ?> </td>
                    <td> <?= $users['DateN'] ?> </td>
                    <td><a href=""class="btn btn-success">Hanova</a></td>
                    </tr>
                <?php endforeach ?>
            
            
        </tbody>
    </table>
    
</div>

