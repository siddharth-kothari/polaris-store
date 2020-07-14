<?php 
    session_start(); 
    require '../includes/logout.inc.php';

    $owned = 0;
    if(isset($_SESSION['disname'])):
        require '../includes/dbh.inc.php';
        $acc_id = $_SESSION['user_id'];
        $item_id = 2;
        $query = "SELECT * FROM orders WHERE user_id='$acc_id' and item_id='$item_id'";
        $results = mysqli_query($db, $query);
        $row = mysqli_fetch_array($results);
        if($row['owned'] == 1):
            $owned = 1;
        else:
            $owned = 0;
        endif;
    endif;

    $_SESSION['item_id'] = 2;
?>
<!DOCTYPE html>
<html>
<head>
    <?php require '../includes/meta.inc.php' ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel='shortcut icon' type='image/png' href='../img/favicon.png'/>
	<title>Rainbow Six: Siege - Tom Clancy's Rainbow Six: Siege</title>
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
                <p class="special"><a class="special siege" href="../index.php"><span style="font-size: 75%" class="glyphicon glyphicon-menu-left"></span> Back to Store</a> | Tom Clancy's Rainbow Six Siege</p>
                <div class="wrapper">
                    <img id="logo" class="img-responsive" src="R6 Siege/R6-logo.png" alt=""> 
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/6wlvYh0h63k"></iframe>
                    </div>
                </div>
                <div>
                    <article>
                        <p class="desc">Squad up and breach in to explosive 5v5 PVP action.</p>
                    </article>
                </div>
                <div>
                    <p id="price">₹999.99</p>
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
                                    <th style="width: 33.33%; text-align: left" scope="col">Developer<br><p style="text-align: left">Ubisoft</p></th>
                                    <th style="width: 33.33%; text-align: left" scope="col">Publisher<br><p style="text-align: left">Ubisoft</p></th>
                                    <th style="width: 33.33%; text-align: left" scope="col">Release Date<br><p style="text-align: left">Dec 01, 2015</p></th>
                                </tr>
                                <tr>
                                    <th style="text-align: left" scope="col">Tags<br><p style="text-align: left">Shooter</p></th>
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
                    <p class="block-id">Tom Clancy's Rainbow Six: Siege<br><br>
                    <img class="img-responsive gif" src="R6 Siege/Anim.gif"><br>
                    <p class="collapse" id="block-id"><i>"Chaos is my home and I'll make sure you never escape it."</i><br><br>
                    Rainbow Six Siege is an intense, new approach to the first-person multiplayer shooter experience. Choose from a variety of unique elite Operators and master their abilities as you lead your team through tense, thrilling, and destructive team-based combat.<br><br>
                    Squad up and breach in to explosive 5v5 PVP action. Tom Clancy's Rainbow Six® Siege features a huge roster of specialized operators, each with game-changing gadgets to help you lead your team to victory.<br><br>
                    <img class="img-responsive" src="R6 Siege/R1.png"><br>
                    <img class="img-responsive" src="R6 Siege/R2.jpg"><br>
                    <img class="img-responsive" src="R6 Siege/R3.jpg"><br>
                    <img class="img-responsive" src="R6 Siege/R4.jpg"><br>
                    <img class="img-responsive" src="R6 Siege/R5.jpg"><br>
                    <img class="img-responsive" src="R6 Siege/R6.jpg"><br>
                    <img class="img-responsive" src="R6 Siege/R7.jpg"><br class="info-br"></p>
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
                            <thead>
                                <tr>
                                    <th style="width: 50%; text-align: left" scope="col">Minimum</th>
                                    <th style="width: 50%; text-align: left" scope="col">Recommended</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="col">OS<br><p style="text-align: left">Windows 7 | Windows 8.1 | Windows 10 | 64 bit only</p></th>
                                    <th scope="col">OS<br><p style="text-align: left">Windows 7 SP1 | Windows 8.1 | Windows 10 | 64 bit only</p></th>
                                </tr>
                                <tr>
                                    <th scope="col">Processor<br><p style="text-align: left">Intel Core i3 560 @ 3.3 GHz | AMD Phenom II X4 945 @ 3.0 GHz</p></th>
                                    <th scope="col">Processor<br><p style="text-align: left">Intel Core i5-2500K @ 3.3 GHz | AMD FX-8120 @ 3.1 Ghz</p></th>
                                </tr>
                                <tr>
                                    <th scope="col">Memory<br><p style="text-align: left">6 GB RAM</p></th>
                                    <th scope="col">Memory<br><p style="text-align: left">8 GB RAM</p></th>
                                </tr>
                                <tr>
                                    <th scope="col">Graphics Card<br><p style="text-align: left">NVIDIA GeForce GTX 460 | AMD Radeon HD 5870 (DirectX-11 compliant with 1GB of VRAM)</p></th>
                                    <th scope="col">Graphics Card<br><p style="text-align: left">NVIDIA GeForce GTX 670 (or GTX 760 / GTX 960) | AMD Radeon HD 7970 (or R9 280x [2GB VRAM] / R9 380 / Fury X)</p></th>
                                </tr>
                                <tr>
                                    <th scope="col">Storage<br><p style="text-align: left">61 GB available space</p></th>
                                    <th scope="col">Storage<br><p style="text-align: left">61 GB available space</p></th>
                                </tr>
                                <tr>
                                    <th scope="col">Network<br><p style="text-align: left">Broadband Internet connection</p></th>
                                    <th scope="col">Network<br><p style="text-align: left">Broadband Internet connection</p></th>
                                </tr>
                                <tr>
                                    <th scope="col">Sound Card<br><p style="text-align: left">DirectX® 9.0c compatible sound card with latest drivers</p></th>
                                    <th scope="col">Sound Card<br><p style="text-align: left">DirectX® 9.0c compatible sound card 5.1 with latest drivers</p></th>
                                </tr>
                                <tr>
                                    <th colspan="2" scope="col">Languages Supported<br><p style="text-align: left">Voice: English, French, Italien, German, Spanish (Spain), Portuguese, Russian, Text: Polish, Arabic, Czech, Dutch, Turkish</p></th>
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
                        <br><br><img class="img-responsive center-block esrb" src="R6 Siege/R8.png" style="width: 75%; align: center;"><br><hr style="width: 100%">
                        <p style="color: #9e9e9e">© 2015 Ubisoft Entertainment.</p><br>
                    </div>
                </div>
                <br>
            </div>
        </div>
        <?php require '../footer.php' ?>
    </body>
</html>