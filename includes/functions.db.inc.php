<?php

function emptyInputSignup($name, $lastName, $email, $username, $pwd, $pwd1) {
    $result;
    if(empty($name) || empty($lastName) || empty($email) || empty($username) || empty($pwd) || empty($pwd1)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidUsername($username) {
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidUid($email) {
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwd1) {
    $result;
    if($pwd !== $pwd1){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function userExist($conn, $username, $email) {
    $sql = "SELECT * FROM user WHERE username = '$username' OR email = '$email';";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $lastName, $email, $username, $pwd){
    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO user (ime, prezime, username, email, passwordUser) 
        VALUES ('$name','$lastName','$email','$username','$hashedPwd')";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
}

function emptyInputLogin($username, $pwd) {
    $result = null;
    if(empty($username) || empty($pwd)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $pwd) {
    $uidExist = userExist($conn, $username, $username);

    if ($uidExist === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExist["passwordUser"];

    session_start();
    $_SESSION["userid"] = $uidExist["user_id"];
    $_SESSION["useruid"] = $uidExist["username"];
    header("location: ../index.php");
    exit();
}

