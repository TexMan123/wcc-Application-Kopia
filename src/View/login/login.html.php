<div class="row">
    <div class="col-md-6 ml-auto mr-auto" id="formLogin">
        <h3 class="text-center">Fanamarinan-tena</h3> <br>
        <div class="form-check">
            <input type="checkbox" name="user" class="form-check-input">
            <label for="user" class="form-check-label">Olon-tsotra aho</label>
        </div><br>
        <form action="loginController.php" method="GET">
            <div id="user">
                <label for="numero">Laharana anao</label>
                <input type="text" name="numero" id="numero" class="form-control" placeholder="Laharana anao"><br>
                <button type="submit" class="btn btn-primary" name="b1" style="width:100%" > Hiditra </button>
            </div>
            <div id="login">
                <label for="numero">Anarana</label>
                <input type="text" name="nom" class="form-control" placeholder="Ampidiro eto ny anaranao"><br>
                <label for="numero">Teny miafina</label>
                <input type="password" name="password" class="form-control" placeholder="Ampidiro eto ny teny miafina anao"><br><br>
                <button type="submit" class="btn btn-primary" name="b2" style="width:100%"> Hiditra </button>
            </div><br>
        </form>   
       
        
    </div>
</div>