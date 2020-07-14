<?php

$errors = array();

if (isset($_POST["reset-pwd-submit"])) {
    
    $selector = $_POST["selector"];
    $validator = $_POST["validator"];
    $password = $_POST["pwd"];
    $passwordRepeat = $_POST["pwd-repeat"];

    if (empty($password) || empty($passwordRepeat)) { 
        array_push($errors, "Password is required.");
    } else if ($password !== $passwordRepeat) {
        array_push($errors, "Passwords do not match.");
    } else {
        $currentDate = date("U");
        require 'dbh.inc.php';
        $sql = "SELECT * FROM pwdreset WHERE pwdResetSelector=? AND pwdResetExpires>=?";
        $stmt = mysqli_stmt_init($db);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            array_push($errors, "Connection failed.");
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $selector, $currentDate);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if (!$row = mysqli_fetch_assoc($result)) {
                array_push($errors, "Password reset session expired.");
            } else {
                $tokenBin = hex2bin($validator);
                $tokenCheck = password_verify($tokenBin, $row["pwdResetToken"]);
                if ($tokenCheck == false) {
                    array_push($errors, "Error: Please resubmit your request.");
                } else if ($tokenCheck == true) {
                    $tokenEmail = $row["pwdResetEmail"];
                    $sql = "SELECT * FROM users WHERE Email=?;";
                    $stmt = mysqli_stmt_init($db);
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        array_push($errors, "Connection failed.");
                    } else {
                        mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        if (!$row = mysqli_fetch_assoc($result)) {
                            array_push($errors, "Error: Could not update.");
                        } else {
                            $sql = "UPDATE users SET Password=? WHERE Email=?";
                            $stmt = mysqli_stmt_init($db);
                            if (!mysqli_stmt_prepare($stmt, $sql)) {
                                array_push($errors, "Connection failed.");
                            } else {
                                $newPwdHash = password_hash($password, PASSWORD_DEFAULT);
                                mysqli_stmt_bind_param($stmt, "ss", $newPwdHash, $tokenEmail);
                                mysqli_stmt_execute($stmt);

                                $sql = "DELETE FROM pwdreset WHERE pwdResetEmail=?";
                                $stmt = mysqli_stmt_init($db);
                                if (!mysqli_stmt_prepare($stmt, $sql)) {
                                    array_push($errors, "Connection failed.");
                                } else {
                                    mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                                    mysqli_stmt_execute($stmt);
                                    header("Location: ../login.php?reset=success");
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}