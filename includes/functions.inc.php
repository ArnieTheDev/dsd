<?php

function emptyInputSignup($name, $email, $password, $passwordRepeat) {
    $result;
    if (empty($name) || empty($email) || empty($password) || empty($passwordRepeat)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function pwdMatch($password, $passwordRepeat) {
    $result;
    if ($password !== $passwordRepeat) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $name, $email) {
    $sql = "SELECT * FROM users WHERE usersName = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $name, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}


function createUser($conn, $name, $email, $password) {
    $sql = "INSERT INTO users(usersName, usersEmail, usersPwd) VALUES(?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
}


function emptyInputLogin($name, $password) {
    $result;
    if (empty($name) || empty($password)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}


function loginUser($conn, $name, $password) {
    $uidExists = uidExists($conn, $name, $name);

    if ($uidExists === false) {
        header("Location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($password, $pwdHashed);

    if ($checkPwd === false) {
        header("Location: ../login.php?error=wronglogin");
        exit();
    }
    else {
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["username"] = $uidExists["usersName"];
        header("Location: ../index.php");
        exit();
    }
}