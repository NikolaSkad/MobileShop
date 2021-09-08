<?php include('./header.php')?>

<section class="signup-form">
    <h2>Log In</h2>
    <div class="signup-form-form">
        <form action="./includes/login.inc.php" method="post">
            <input type="text" name="uid" placeholder="Vas username/Email..."><br>
            <input type="password" name="pwd" placeholder="Vasa sifra..."><br>
            <button type="submit" name="submit">Log In</button><br><br><br><br>
        </form>
    </div>
    <?php 

    if(isset($_GET["error"])){
        if($_GET["error"]=="emptyinput"){
            echo "<p>Popunite sva polja!</p>";
        }
        else if($_GET["error"]=="wronglogin"){
            echo "<p>Netacne login informacije!</p>";
        }
    }
    ?>
</section>

<?php include("./footer.php")?>