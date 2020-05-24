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
    <form action="updateFoncController.php" method="GET">
        <input type="hidden" name="idF" value="<?= $_GET['id'] ?>">
            <h2>Fanovana eo amin'ny mpiasa</h2><br>
            <label for="nom">Anarana</label>
            <input type="text" class="form-control" name="nom" value="<?= $_GET['nom'] ?>"><br>
        
            <button class="btn btn-warning" style="width:100%" name="b1">Hovaina</button>
        </form>
    </div>