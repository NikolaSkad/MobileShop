<?php

    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $lastName = $_POST["lastName"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $pwd = $_POST["pwd"];
        $pwd1 = $_POST["pwd1"];

        require_once 'db.inc.php';
        require_once 'functions.db.inc.php';

        if(emptyInputSignup($name, $lastName, $email, $username, $pwd, $pwd1) !== false){
        header("location: ../signup.php?error=emptyinput");
        exit();
        }
        if(invalidUsername($username) !== false){
            header("location: ../signup.php?error=invalidusername");
            exit();
        }
        if(invalidUid($email) !== false){
            header("location: ../signup.php?error=invalidemail");
            exit();
        }
        if(pwdMatch($pwd, $pwd1) !== false){
            header("location: ../signup.php?error=passworddontmatch");
            exit();
        }
        if(userExist($conn, $username, $email) !== false){
            header("location: ../signup.php?error=thisuserexist");
            exit();
        }

        createUser($conn, $name, $lastName, $email, $username, $pwd);


    }else{
        header("location: ../signup.php");
    }