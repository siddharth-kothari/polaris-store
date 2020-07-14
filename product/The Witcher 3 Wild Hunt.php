<?php 
    session_start(); 
    require '../includes/logout.inc.php';

    $owned = 0;
    if(isset($_SESSION['disname'])):
        require '../includes/dbh.inc.php';
        $acc_id = $_SESSION['user_id'];
        $item_id = 10;
        $query = "SELECT * FROM orders WHERE user_id='$acc_id' and item_id='$item_id'";
        $results = mysqli_query($db, $query);
        $row = mysqli_fetch_array($results);
        if($row['owned'] == 1):
            $owned = 1;
        else:
            $owned = 0;
        endif;
    endif;

    $_SESSION['item_id'] = 10;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require '../includes/meta.inc.php' ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel='shortcut icon' type='image/png' href='../img/favicon.png'/>
	<title>The Witcher 3: Wild Hunt</title>
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
                <p class="special"><a style="text-decoration: none" class="special tw3" href="../index.php"><span style="font-size: 75%" class="glyphicon glyphicon-menu-left"></span> Back to Store</a> | The Witcher 3: Wild Hunt</p>
                <div class="wrapper">
                    <img id="logo" class="img-responsive" src="TW3/TW3-logo.png" alt="TW3"> 
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/qy8jmm9kY4A"></iframe>
                    </div>
                </div>
                <div>
                    <article>
                        <p class="desc">As war rages on throughout the Northern Realms, you take on the greatest contract of your life - tracking down the Child of Prophecy, a living weapon that can alter the shape of the world.</p>
                    </article>
                </div>
                <div>
                    <p id="price">₹299.99</p>
                    <?php if (isset($_SESSION['disname']) && $owned == 0): ?>
                        <a href="purchase.php" type="button" class="btn btn-primary btn-block cust-small">BUY NOW</a>
                    <?php elseif ($owned == 1): ?>
                        <a href="../library.php" type="button" class="btn btn-primary btn-block cust-small">OWNED</a>
                    <?php else: ?>
                        <a href="../login.php" type="button" class="btn btn-primary btn-block cust-small">BUY NOW</a>
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
                                    <th style="width: 33.33%; text-align: left" scope="col">Developer<br><p style="text-align: left">CD PROJEKT RED</p></th>
                                    <th style="width: 33.33%; text-align: left" scope="col">Publisher<br><p style="text-align: left">CD PROJEKT RED</p></th>
                                    <th style="width: 33.33%; text-align: left" scope="col">Release Date<br><p style="text-align: left">May 18, 2015</p></th>
                                </tr>
                                <tr>
                                    <th style="text-align: left" scope="col">Tags<br><p style="text-align: left">Open World, RPG</p></th>
                                    <th style="text-align: left" scope="col">Rating<br><p style="text-align: left">MATURE 17+</p></th>
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
                    <p class="block-id">The Witcher 3: Wild Hunt<br><br>
                    <img class="img-responsive gif" src="TW3/Anim.gif"><br>
                    <p class="collapse" id="block-id">Wind's howling<br><br>
                    The Witcher: Wild Hunt is a story-driven open world RPG set in a visually stunning fantasy universe full of meaningful choices and impactful consequences. In The Witcher, you play as professional monster hunter Geralt of Rivia tasked with finding a child of prophecy in a vast open world rich with merchant cities, pirate islands, dangerous mountain passes, and forgotten caverns to explore.<br><br>
                    <b>KEY FEATURES</b><br>
                    <b>PLAY AS A HIGHLY TRAINED MONSTER SLAYER FOR HIRE</b><br>
                    Trained from early childhood and mutated to gain superhuman skills, strength and reflexes, witchers are a counterbalance to the monster-infested world in which they live.<br><br>
                    <b>EXPLORE A MORALLY INDIFFERENT FANTASY OPEN WORLD</b><br>
                    Built for endless adventure, the massive open world of The Witcher sets new standards in terms of size, depth and complexity.<br><br>
                    <b>CHASE DOWN THE CHILD OF PROPHECY</b><br>
                    Take on the most important contract to track down the child of prophecy, a key to save or destroy this world.<br><br>
                    <img class="img-responsive gif" src="TW3/Anim2.gif"><br>
                    <img class="img-responsive" src="TW3/1.jpg"><br>
                    <img class="img-responsive" src="TW3/2.jpg"><br>
                    <img class="img-responsive" src="TW3/3.jpg"><br>
                    <img class="img-responsive" src="TW3/4.jpg"><br>
                    <img class="img-responsive" src="TW3/5.jpg"><br>
                    <img class="img-responsive" src="TW3/6.jpg"><br>
                    <img class="img-responsive" src="TW3/7.jpg"><br class="info-br"></p>
                </div>  
                <div>
                    <a href="#block-id"
                            class="btn btn-primary btn-block show-wide"
                                data-toggle="collapse"
                                aria-expanded="false"
                                aria-controls="block-id">
                
                                <span id="show" class="collapsed">SHOW MORE</span>
                                <span id="show2" class="expanded">SHOW LESS</span>
                    </a>
                </div>
                <br><br>
                <div class="specs">
                    <p class="about_header" style="text-align: left">Specifications</p>
                </div>
                <div class="card">
                    <div class="card-body"> 
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th style="width: 50%; text-align: left" scope="col">Minimum</th>
                                    <th style="width: 50%; text-align: left" scope="col">Recommended</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="col">OS<br><p style="text-align: left">64-bit Windows 7, 64-bit Windows 8 (8.1) or 64-bit Windows 10</p></th>
                                    <th scope="col">OS<br><p style="text-align: left">64-bit Windows 7, 64-bit Windows 8 (8.1) or 64-bit Windows 10</p></th>
                                </tr>
                                <tr>
                                    <th scope="col">Processor<br><p style="text-align: left">Intel CPU Core i5-2500K 3.3GHz / AMD CPU Phenom II X4 940</p></th>
                                    <th scope="col">Processor<br><p style="text-align: left">Intel CPU Core i7 3770 3.4 GHz / AMD CPU AMD FX-8350 4 GHz</p></th>
                                </tr>
                                <tr>
                                    <th scope="col">Memory<br><p style="text-align: left">6 GB RAM</p></th>
                                    <th scope="col">Memory<br><p style="text-align: left">8 GB RAM</p></th>
                                </tr>
                                <tr>
                                    <th scope="col">Graphics<br><p style="text-align: left">Nvidia GPU GeForce GTX 660 / AMD GPU Radeon HD 7870</p></th>
                                    <th scope="col">Graphics<br><p style="text-align: left">Nvidia GPU GeForce GTX 770 / AMD GPU Radeon R9 290</p></th>
                                </tr>
                                <tr>
                                    <th scope="col">Storage<br><p style="text-align: left">35 GB</p></th>
                                    <th scope="col">Storage<br><p style="text-align: left">35 GB</p></th>
                                </tr>
                                <tr>
                                    <th colspan="2" scope="col">Languages Supported<br><p style="text-align: left">Voice: English, French, German, Japanese, Polish, Portuguese, Text: English, French, Italian, German, Spanish, Arabic, Czech, Hungarian Japanese, Korean, Polish, Portuguese, Russian, Chinese, Turkish</p></th>
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
                        <br><br><img class="img-responsive center-block esrb" src="TW3/8.png" style="width: 75%; align: center;"><br><hr style="width: 100%">
                        <p style="color: #9e9e9e">The Witcher game © CD Projekt S. A. All rights reserved.</p><br>
                    </div>
                </div>
                <br>
            </div>
        </div>
        <?php require '../footer.php' ?>
    </body>
</html>