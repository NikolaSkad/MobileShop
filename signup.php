<?php include('./header.php')?>

<section class="signup-form">
    <h2>Sign Up</h2>
    <div class="signup-form-form">
        <form action="./includes/signup.inc.php" method="post">
            <input type="text" name="name" placeholder="Vase ime..."><br>
            <input type="text" name="lastName" placeholder="Vase prezime..."><br>
            <input type="text" name="email" placeholder="Vas email..."><br>
            <input type="text" name="username" placeholder="Vas username..."><br>
            <input type="password" name="pwd" placeholder="Vasa sifra..."><br>
            <input type="password" name="pwd1" placeholder="Ponovite sifru..."><br>
            <button type="submit" name="submit">Sign up</button><br><br><br><br>
        </form>
    </div>
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
</section>


<?php include("./footer.php")?>