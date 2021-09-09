<?php include('./header.php')?>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Sign Up</h5>
            <form action="./includes/signup.inc.php" method="post">
              <div class="form-floating mb-3">
                <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Vase ime...">
                <label for="floatingInput">Ime</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" name="lastName" class="form-control" id="floatingPassword" placeholder="Vase prezime...">
                <label for="floatingPassword">Prezime</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" name="email" class="form-control" id="floatingInput" placeholder="Vas Email...">
                <label for="floatingInput">Email</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Vas username...">
                <label for="floatingInput">Username</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" name="pwd" class="form-control" id="floatingPassword" placeholder="Sifra...">
                <label for="floatingPassword">Sifra</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" name="pwd1" class="form-control" id="floatingPassword" placeholder="Sifra...">
                <label for="floatingPassword">Ponovite sifru</label>
              </div>
              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" name="submit" type="submit">Registruj se</button>
              </div>
            </form><br><br>
            <?php 
            if(isset($_GET["error"])){
                if($_GET["error"]=="emptyinput"){
                    echo "<p>Popunite sva polja!</p>";
                }
                else if($_GET["error"]=="invalidusername"){
                    echo "<p>Unesite odgovarajuc username!</p>";
                }
                else if($_GET["error"]=="invalidemail"){
                    echo "<p>Unesite odgovarajuc email!</p>";
                }
                else if($_GET["error"]=="passworddontmatch"){
                    echo "<p>Unesite istu sifru oba puta!</p>";
                }
                else if($_GET["error"]=="thisuserexist"){
                    echo "<p>Ovaj username vec postoji!</p>";
                }
                else if($_GET["error"]=="stmtfailed"){
                    echo "<p>Nesto nije uredu, pokusajte ponovo!</p>";
                }
                else if($_GET["error"]=="none"){
                    echo "<p>Uspesno ste registrovani!</p>";
                }
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>


<?php include("./footer.php")?>