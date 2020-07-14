<?php 
    session_start(); 
    require '../includes/logout.inc.php';

    $owned = 0;
    if(isset($_SESSION['disname'])):
        require '../includes/dbh.inc.php';
        $acc_id = $_SESSION['user_id'];
        $item_id = 6;
        $query = "SELECT * FROM orders WHERE user_id='$acc_id' and item_id='$item_id'";
        $results = mysqli_query($db, $query);
        $row = mysqli_fetch_array($results);
        if($row['owned'] == 1):
            $owned = 1;
        else:
            $owned = 0;
        endif;
    endif;

    $_SESSION['item_id'] = 6;
?>
<!DOCTYPE html>
<html>
<head>
    <?php require '../includes/meta.inc.php' ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel='shortcut icon' type='image/png' href='../img/favicon.png'/>
	<title>Watch Dogs: Legion</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/8d72617c90.js" crossorigin="anonymous"></script>
    <link rel = 'stylesheet' type = 'text/css' href = 'product.css'/>   
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
        <div class="store-desk">                 
            <div class="product">
                <p class="special"><a class="special wdl" href="../index.php"><span style="font-size: 75%" class="glyphicon glyphicon-menu-left"></span> Back to Store</a> | Watch Dogs: Legion</p>
                <div class="wrapper">
                    <img id="logo" class="img-responsive" src="Watch Dogs Legion/WDLegion-logo.png" alt="Watch Dogs: Legion"> 
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/KbokXaPTk38"></iframe>
                    </div>
                </div>
                <div>
                    <article>
                        <p class="desc">In Watch Dogs Legion, you get to build a resistance from virtually anyone you see as you hack, infiltrate, and fight to take back a near-future London that is facing its downfall. Welcome to the Resistance.</p>
                    </article>
                </div>
                <div>
                    <p id="price">₹3699.99</p>
                    <?php if (isset($_SESSION['disname']) && $owned == 0): ?>
                        <a href="purchase.php" type="button" class="btn btn-primary btn-block cust-small">PRE-PURCHASE</a>
                    <?php elseif ($owned == 1): ?>
                        <a href="../library.php" type="button" class="btn btn-primary btn-block cust-small">OWNED</a>
                    <?php else: ?>
                        <a href="../login.php" type="button" class="btn btn-primary btn-block cust-small">PRE-PURCHASE</a>
                    <?php endif; ?>
                    <br>
                    <hr class="about-hr">
                    <br>
                </div>
                <div class="about"><p class="left-desc">About Game</p></div>
                <div class="card">
                    <div class="card-body john-cena"> 
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th style="width: 33.33%; text-align: left" scope="col">Developer<br><p style="text-align: left">Ubisoft Toronto</p></th>
                                    <th style="width: 33.33%; text-align: left" scope="col">Publisher<br><p style="text-align: left">Ubisoft</p></th>
                                    <th style="width: 33.33%; text-align: left" scope="col">Release Date<br><p style="text-align: left">Early 2020</p></th>
                                </tr>
                                <tr>
                                    <th style="text-align: left" scope="col">Tags<br><p style="text-align: left">Action, Multiplayer, Open World</p></th>
                                    <th style="text-align: left" scope="col">Rating<br><p style="text-align: left">RATING PENDING</p></th>
                                    <th style="text-align: left" scope="col">Platform<br><p style="text-align: left"><i class="fab fa-windows"></i></p></th>
                                </tr>
                            </tbody>
                            <br class="table-br">
                        </table> 
                        <br class="table-br" style="margin: -5% 0">
                    </div>
                    <br class="table-br">
                </div>
                <div id="info" class="info-wide">
                    <p class="block-id">Watch Dogs: Legion<br><br>
                    <img class="img-responsive gif" src="Watch Dogs Legion/Anim.gif"><br>
                    <p class="collapse" id="block-id">Everything is connected<br><br>
                    In Watch Dogs Legion, you get to build a resistance from virtually anyone you see as you hack, infiltrate, and fight to take back a near-future London that is facing its downfall. Welcome to the Resistance.<br><br>
                    <img class="img-responsive" src="Watch Dogs Legion/1.jpg"><br>
                    <img class="img-responsive" src="Watch Dogs Legion/2.jpg"><br>
                    <img class="img-responsive" src="Watch Dogs Legion/3.jpg"><br>
                    <img class="img-responsive" src="Watch Dogs Legion/4.jpg"><br>
                    <img class="img-responsive" src="Watch Dogs Legion/5.jpg"><br>
                    <img class="img-responsive" src="Watch Dogs Legion/6.jpg"><br class="info-br"></p>
                </div>  
                <div>
                    <a href="#block-id"
                            class="btn btn-primary btn-block show-wide"
                                data-toggle="collapse"
                                aria-expanded="false"
                                aria-controls="block-id">
                
                                <span id="show" class="collapsed">SHOW MORE</span>
                                <span id="show" class="expanded">SHOW LESS</span>
                    </a>
                </div>
                <br><br>
                <div class="specs">
                    <p class="about_header" style="text-align: left">Specifications</p>
                </div>
                <div class="card">
                    <div class="card-body"> 
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th colspan="2" scope="col">Languages Supported<br><p style="text-align: left">Audio: English, French, Italian, German, Spanish (Spain), Russian, Japanese, Text: Spanish (Latam), Dutch, Polish, Korean, Traditional Chinese, Simplified Chinese, Arabic</p></th>
                                </tr>
                                <tr>
                                    <th colspan="2" scope="col">Disclaimer<br><p style="text-align: left">This game requires Ubisoft account linking to play. This purchase is region-locked to account country. This game will be language-locked for purchases made from Russia, Ukraine and CIS countries. Uplay is required to play.</p></th>
                                </tr>
                            </tbody>
                            <br class="table-br">
                        </table> 
                        <br class="table-br" style="margin: -5% 0">
                    </div>
                    <br class="table-br">
                    <br class="table-br">
                </div>
                <div class="card">
                    <div class="card-body">
                        <br><br><img class="img-responsive center-block esrb" src="Watch Dogs Legion/7.png" style="width: 75%; align: center;"><br><hr style="width: 100%">
                        <p style="color: #9e9e9e">© 2019 Ubisoft Entertainment. All Rights Reserved.</p><br>
                    </div>
                </div>
                <br>
            </div>
        </div>
        <?php require '../footer.php' ?>
    </body>
</html>