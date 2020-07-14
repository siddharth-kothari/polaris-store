<?php 
    session_start(); 
    require '../includes/logout.inc.php';

    $owned = 0;
    if(isset($_SESSION['disname'])):
        require '../includes/dbh.inc.php';
        $acc_id = $_SESSION['user_id'];
        $item_id = 12;
        $query = "SELECT * FROM orders WHERE user_id='$acc_id' and item_id='$item_id'";
        $results = mysqli_query($db, $query);
        $row = mysqli_fetch_array($results);
        if($row['owned'] == 1):
            $owned = 1;
        else:
            $owned = 0;
        endif;
    endif;

    $_SESSION['item_id'] = 12;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require '../includes/meta.inc.php' ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel='shortcut icon' type='image/png' href='../img/favicon.png'/>
	<title>Shadow of the Tomb Raider</title>
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
                <p class="special"><a style="text-decoration: none" class="special sotr" href="../index.php"><span style="font-size: 75%" class="glyphicon glyphicon-menu-left"></span> Back to Store</a> | Shadow of the Tomb Raider</p>
                <div class="wrapper">
                    <img id="logo" class="img-responsive" src="SOTR/SOTR-logo.png" alt="SOTR"> 
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/r_WbvIDAcA4"></iframe>
                    </div>
                </div>
                <div>
                    <article>
                        <p class="desc">As Lara Croft races to save the world from a Maya apocalypse, she must become the Tomb Raider she is destined to be.</p>
                    </article>
                </div>
                <div>
                    <p id="price">₹1154.99</p>
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
                                    <th style="width: 33.33%; text-align: left" scope="col">Developer<br><p style="text-align: left">Eidos-Montréal</p></th>
                                    <th style="width: 33.33%; text-align: left" scope="col">Publisher<br><p style="text-align: left">Square Enix</p></th>
                                    <th style="width: 33.33%; text-align: left" scope="col">Release Date<br><p style="text-align: left">Sept 14, 2018</p></th>
                                </tr>
                                <tr>
                                    <th style="text-align: left" scope="col">Tags<br><p style="text-align: left">Action, Adventure</p></th>
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
                    <p class="block-id">Shadow of the Tomb Raider<br><br>
                    <img class="img-responsive gif" src="SOTR/Anim.gif"><br>
                    <p class="collapse" id="block-id">Become the Hunter<br><br>
                    Experience Lara Croft’s defining moment as she becomes the Tomb Raider. In Shadow of the Tomb Raider, Lara must master a deadly jungle, overcome terrifying tombs, and persevere through her darkest hour. As she races to save the world from a Maya apocalypse, Lara will ultimately be forged into the Tomb Raider she is destined to be.<br><br>
                    <b>KEY FEATURES</b><br>
                    <b>Survive and Thrive In the Deadliest Place on Earth:</b> Master an unforgiving jungle setting in order to survive. Explore underwater environments filled with crevasses and deep tunnel systems.<br><br>
                    <b>Become One With the Jungle:</b> Outgunned and outnumbered, Lara must use the jungle to her advantage. Strike suddenly and disappear like a jaguar, use mud as camouflage, and instill fear in enemies to sow chaos.<br><br>
                    <b>Discover Dark and Brutal Tombs:</b> Tombs are more terrifying than ever before, requiring advanced traversal techniques to reach them, and once inside they are filled with deadly puzzles.<br><br>
                    <b>Uncover Living History:</b> Discover a hidden city and explore the biggest hub space ever found in a Tomb Raider game.<br><br>
                    <img class="img-responsive" src="SOTR/1.jpg"><br>
                    <img class="img-responsive" src="SOTR/2.jpg"><br>
                    <img class="img-responsive" src="SOTR/3.jpg"><br>
                    <img class="img-responsive" src="SOTR/4.jpg"><br>
                    <img class="img-responsive" src="SOTR/5.jpg"><br>
                    <img class="img-responsive" src="SOTR/6.jpg"><br>
                    <img class="img-responsive" src="SOTR/7.jpg"><br>
                    <img class="img-responsive" src="SOTR/8.jpg"><br>
                    <img class="img-responsive" src="SOTR/9.jpg"><br class="info-br"></p>
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
                                    <th scope="col">OS<br><p style="text-align: left">Windows 7, 64 bit</p></th>
                                    <th scope="col">OS<br><p style="text-align: left">Windows 10, 64-bit</p></th>
                                </tr>
                                <tr>
                                    <th scope="col">Processor<br><p style="text-align: left">i3-3220 INTEL or AMD Equivalent</p></th>
                                    <th scope="col">Processor<br><p style="text-align: left">Intel Core i7 4770K, 3.40 Ghz or AMD Ryzen 5 1600, 3.20 Ghz</p></th>
                                </tr>
                                <tr>
                                    <th scope="col">Memory<br><p style="text-align: left">8 GB RAM</p></th>
                                    <th scope="col">Memory<br><p style="text-align: left">16 GB RAM</p></th>
                                </tr>
                                <tr>
                                    <th scope="col">Graphics<br><p style="text-align: left">Nvidia GTX 660/GTX 1050 or AMD Radeon HD 7770</p></th>
                                    <th scope="col">Graphics<br><p style="text-align: left">Nvidia GTX 1060 6GB or AMD Radeon RX 480, 8GB</p></th>
                                </tr>
                                <tr>
                                    <th scope="col">DirectX<br><p style="text-align: left">Version 11</p></th>
                                    <th scope="col">DirectX<br><p style="text-align: left">Version 12</p></th>
                                </tr>
                                <tr>
                                    <th scope="col">Storage<br><p style="text-align: left">40 GB</p></th>
                                    <th scope="col">Storage<br><p style="text-align: left">40 GB</p></th>
                                </tr>
                                <tr>
                                    <th colspan="2" scope="col">Languages Supported<br><p style="text-align: left">Voice & Text: English, French, Italian, German, Spanish, Polish, Russian, Chinese, Arabic</p></th>
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
                        <br><br><img class="img-responsive center-block esrb" src="SOTR/10.png" style="width: 75%; align: center;"><br><hr style="width: 100%">
                        <p style="color: #9e9e9e">SHADOW OF THE TOMB RAIDER © 2018 Square Enix Ltd.</p><br>
                    </div>
                </div>
                <br>
            </div>
        </div>
        <?php require '../footer.php' ?>
    </body>
</html>