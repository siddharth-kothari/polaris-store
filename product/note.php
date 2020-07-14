<?php 
    session_start(); 
    require '../includes/logout.inc.php';
    require '../includes/dbh.inc.php';
    require '../includes/paypal.inc.php';

    $acc_id = $_SESSION['user_id'];
    $item_id = $_SESSION['item_id'];
    $nowFormat = date('Y-m-d H:i:s');
    $query = "INSERT INTO orders VALUES($acc_id, $item_id, 1, '$nowFormat');";

    $_SESSION['commit'] = 0;

    if ($_SESSION['paypal'] == 1) {
        $_SESSION['commit'] = 1;
    } else {
        if($_SERVER['REQUEST_METHOD'] === 'POST'):
            if(isset($_POST['pay_now'])):
                $_SESSION['commit'] = 1;
            endif;
        endif;
    }

    $sql = "SELECT * FROM orders WHERE user_id=$acc_id AND item_id=$item_id";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) == 0) {
        $_SESSION['added_lib'] = 0;
    } else {
        $_SESSION['added_lib'] = 1;
    }

    if ($_SESSION['added_lib'] == 0 && $_SESSION['commit'] == 1) {
        mysqli_query($db, $query);
        mysqli_commit($db);
        mysqli_close($db);
        $_SESSION['added_lib'] = 1;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <?php require '../includes/meta.inc.php' ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel='shortcut icon' type='image/png' href='../img/favicon.png'/>
        <title>Polaris | Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel = 'stylesheet' type = 'text/css' href = '../homepage.css'/>
        <style>
            .greet {
                color: white;
                font-family: Calibri;
                font-size: 10vw;
                padding: 10%;
                text-align: center;
            }
        </style>   
    </head>
    <body>
        <?php
            if (isset($_SESSION['disname'])): 
                $username = $_SESSION['disname'];
            else:
                $username = 'SIGN IN';
            endif
        ?>
        <?php require 'header.php' ?>
        <div>
            <p class="greet">THANK YOU<br>FOR BUYING</p>
        </div>
        <footer style="position: absolute; right: 0; left: 0; bottom: 0;" class="page-footer">
                <div class="container"><p style="color: white; font-family: Calibri">© 2019, Polaris, Inc. All rights reserved.<br>Developed by <a style="text-decoration: none" class="devs" href="https://www.facebook.com/smitnawar.streak">ScarletStreak</a>, <a style="text-decoration: none" class="devs" href="https://www.facebook.com/siddharth.kothari.750">SoulTrinity</a> and <a style="text-decoration: none" class="devs" href="https://www.facebook.com/profile.php?id=100009769879471">ArchAngel</a>.</p></div>
        </footer>
    </body>
</html>