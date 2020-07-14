<?php
session_start();

require 'dbh.inc.php';

$fname = "";
$lname = "";
$disname = "";
$email = "";
$errors = array();

#                                                   x---SIGN UP---x
if (isset($_POST['signup-user'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $disname = $_POST['disname'];
    $email = $_POST['email'];
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];

    if (empty($fname)) { array_push($errors, "First Name is required."); }
    if (empty($lname)) { array_push($errors, "Last Name is required."); }
    if (empty($disname)) { array_push($errors, "Display Name is required."); }
    if (empty($email)) { array_push($errors, "Email is required."); }
    if (empty($password_1)) { array_push($errors, "Password is required."); }
    if ($password_1 !== $password_2) { array_push($errors, "Passwords do not match."); }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $disname)) {
        array_push($errors, "Please enter a valid DisplayName and Email.");
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Please enter a valid Email.");
    }
    elseif (!preg_match("/^[a-zA-Z0-9]*$/", $disname)) {
        array_push($errors, "Please enter a valid DisplayName.");
    }
    else {
        $sql = "SELECT DisplayName FROM users WHERE DisplayName=? OR Email=?";
        $stmt = mysqli_stmt_init($db);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            array_push($errors, "Connection failed.");
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $disname, $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                array_push($errors, "Email or DisplayName already exists.");
            } else {
                $sql = "INSERT INTO users (Fname, Lname, DisplayName, Email, Password) VALUES(?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($db);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    array_push($errors, "Connection failed.");
                } else {
                    $hashedPwd = password_hash($password_1, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "sssss", $fname, $lname, $disname, $email, $hashedPwd);
                    mysqli_stmt_execute($stmt);
                    $sql = "SELECT * FROM users WHERE Email=? AND Password=?";
                    $stmt = mysqli_stmt_init($db);
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        array_push($errors, "Connection failed.");
                    } else {
                        mysqli_stmt_bind_param($stmt, "ss", $email, $hashedPwd);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        if ($row = mysqli_fetch_assoc($result)) {
                            $_SESSION['user_id'] = $row['ID'];
                            $_SESSION['disname'] = $row['DisplayName'];
                            header('Location: index.php');
                        } else {
                            array_push($errors, "Registration Failed. Please try again.");
                        }
                    }
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($db);
}

#                                                   x---LOGIN---x
if (isset($_POST['login-user'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
  
    if (empty($email)) { array_push($errors, "Email is required."); }
    elseif (empty($password)) { array_push($errors, "Password is required."); }
    else {
        $sql = "SELECT * FROM users WHERE Email=?";
        $stmt = mysqli_stmt_init($db);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            array_push($errors, "Connection failed.");
        } else {
            mysqli_stmt_bind_param($stmt, 's', $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($result == NULL) {
                array_push($errors, "Sorry, the credentials you are using are invalid.");
            }
            else {
                if ($row = mysqli_fetch_assoc($result)) {
                    $pwdCheck = password_verify($password, $row['Password']);
                    if ($pwdCheck == false) {
                        array_push($errors, "Sorry, the credentials you are using are invalid.");
                    } elseif ($pwdCheck == true) {
                            $_SESSION['user_id'] = $row['ID'];
                            $_SESSION['disname'] = $row['DisplayName'];
                            header('Location: index.php');
                    }
                } else {
                    array_push($errors, "Sorry, the credentials you are using are invalid.");
                }
            } 
        }
    }
}
?>