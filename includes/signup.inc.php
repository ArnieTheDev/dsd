<?php

if (isset($_POST['submit'])) {

    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordRepeat = $_POST['passwordRepeat'];

    require_once 'db.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($name, $email, $password, $passwordRepeat) !== false) {
        header("location: ../signup.php?error=emptyfields");
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }

    if (pwdMatch($password, $passwordRepeat) !== false) {
        header("location: ../signup.php?error=passworddontmatch");
        exit();
    }

    if (uidExists($conn, $name, $email) !== false) {
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $name, $email, $password);

}
else {
    header("location: ..signup.php");
    exit();
}