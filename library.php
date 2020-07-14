<?php
    session_start(); 
    require 'includes/logout.inc.php';
    require 'includes/dbh.inc.php';

    $acc_id = $_SESSION['user_id'];
    $query = "SELECT * FROM orders WHERE user_id='$acc_id'";
    $results = mysqli_query($db, $query);
    $item_id = array();
    $i = 0;
    while($row = mysqli_fetch_array($results)):
        $item_id[$i] = $row['item_id'];
        $i++;
    endwhile;
    $j = 0;
    $k = 0;
    $title = array();
    for($j = 0; $j < $i; $j++):
        $query = "SELECT * FROM products WHERE id='$item_id[$j]'";
        $game_info = mysqli_query($db, $query);
        $row = mysqli_fetch_array($game_info);
        $title[$j] = $row['image'];
    endfor;
?>
<!DOCTYPE html>
<html>
    <head>
        <?php require 'includes/meta.inc.php' ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel='shortcut icon' type='image/png' href='img/favicon.png'/>
        <title>Polaris | Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel = 'stylesheet' type = 'text/css' href = 'library.css'/>    
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
        <?php 
            $c = $i;
            if($i > 0):
                for($k = 0; $k < $i; $k += 3):    
        ?>
            <div class="card-deck">
                <div class="card">
                    <div class="card-body">
                        <img src="<?php echo "$title[$k]"; ?>" class="card-img-top img-responsive center-block">
                        <p class="card-style" style="font-family: Calibri; text-align: center; background-color: #037bee; padding: 3%;">OWNED</p>
                    </div>
                    <br style="display: block; margin: 1% 0;">
                    <?php
                        $c -= 1;
                        if($c != 0):
                    ?>
                    <div class="card-body">
                        <img src="<?php $z = $k + 1; echo "$title[$z]"; ?>" class="card-img-top img-responsive center-block">
                        <p style="font-family: Calibri; text-align: center; background-color: #037bee; padding: 3%;">OWNED</p>
                    </div>
                    <br style="display: block; margin: 1% 0;">
                    <?php
                        $c -= 1;
                        endif;
                        if($c != 0):
                    ?>
                    <div class="card-body">
                        <img src="<?php $z = $k + 2; echo "$title[$z]"; ?>" class="card-img-top img-responsive center-block">
                        <p style="font-family: Calibri; text-align: center; background-color: #037bee; padding: 3%;">OWNED</p>
                    </div>
                    <br style="display: block; margin: 1% 0;">
                    <?php
                        $c -= 1; 
                        endif; ?>
                </div>
            </div>
            <br style="display: block; margin: 1% 0;">
        <?php endfor; endif; ?>
        <br style="display: block; margin: 3% 0;">                            
        <footer 
            <?php 
                if($i < 4):
                    echo "style=\"position: absolute; right: 0; left: 0; bottom: 0;\"";
                endif;
            ?>
            class="page-footer">
            <div class="container"><p style="color: white; font-family: Calibri">© 2019, Polaris, Inc. All rights reserved.<br>Developed by <a style="text-decoration: none" class="devs" href="https://www.facebook.com/smitnawar.streak">ScarletStreak</a>, <a style="text-decoration: none" class="devs" href="https://www.facebook.com/siddharth.kothari.750">SoulTrinity</a> and <a style="text-decoration: none" class="devs" href="https://www.facebook.com/profile.php?id=100009769879471">ArchAngel</a>.</p></div>
        </footer>
    </body>
</html>