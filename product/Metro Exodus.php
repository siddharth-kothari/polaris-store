<?php 
    session_start(); 
    require '../includes/logout.inc.php';

    $owned = 0;
    if(isset($_SESSION['disname'])):
        require '../includes/dbh.inc.php';
        $acc_id = $_SESSION['user_id'];
        $item_id = 3;
        $query = "SELECT * FROM orders WHERE user_id='$acc_id' and item_id='$item_id'";
        $results = mysqli_query($db, $query);
        $row = mysqli_fetch_array($results);
        if($row['owned'] == 1):
            $owned = 1;
        else:
            $owned = 0;
        endif;
    endif;

    $_SESSION['item_id'] = 3;
?>
<!DOCTYPE html>
<html>
<head>
    <?php require '../includes/meta.inc.php' ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel='shortcut icon' type='image/png' href='../img/favicon.png'/>
	<title>Metro Exodus</title>
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
                <p class="special"><a class="special metro" href="../index.php"><span style="font-size: 75%" class="glyphicon glyphicon-menu-left"></span> Back to Store</a> | Metro Exodus</p>
                <div class="wrapper">
                    <img id="logo" class="img-responsive" src="Metro Exodus/Exodus-logo.png" alt="Metro Exodus"> 
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/g5BDYV7DWL4"></iframe>
                    </div>
                </div>
                <div>
                    <article>
                        <p class="desc">Metro Exodus is an epic, story-driven first person shooter from 4A Games that blends deadly combat and stealth with exploration and survival horror in one of the most immersive game worlds ever created.</p>
                    </article>
                </div>
                <div>
                    <p id="price">₹1179.99</p>
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
                                    <th style="width: 33.33%; text-align: left" scope="col">Developer<br><p style="text-align: left">4A Games</p></th>
                                    <th style="width: 33.33%; text-align: left" scope="col">Publisher<br><p style="text-align: left">Deep Silver</p></th>
                                    <th style="width: 33.33%; text-align: left" scope="col">Release Date<br><p style="text-align: left">Feb 15, 2019</p></th>
                                </tr>
                                <tr>
                                    <th style="text-align: left" scope="col">Tags<br><p style="text-align: left">Single Player, FPS</p></th>
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
                    <p class="block-id">Metro Exodus<br><br>
                    <img class="img-responsive gif" src="Metro Exodus/Anim.gif"><br>
                    <p class="collapse" id="block-id"><i>“You reap what you sow, Artyom. Force breeds force.”</i><br><br>
                    Metro Exodus is an epic, story-driven first person shooter from 4A Games that blends deadly combat and stealth with exploration and survival horror in one of the most immersive game worlds ever created.<br><br>
                    Flee the shattered ruins of dead Moscow and embark on an epic, continent-spanning journey across post-apocalyptic Russia in the greatest Metro adventure yet.<br><br>
                    Explore the Russian wilderness in vast, non-linear levels and follow a thrilling story-line inspired by the novels of Dmitry Glukhovsky that spans an entire year through spring, summer and autumn to the depths of nuclear winter.<br><br>
                    <img class="img-responsive" src="Metro Exodus/ME1.jpg"><br>
                    <img class="img-responsive" src="Metro Exodus/ME2.jpg"><br>
                    <img class="img-responsive" src="Metro Exodus/ME3.jpg"><br>
                    <img class="img-responsive" src="Metro Exodus/ME4.jpg"><br>
                    <img class="img-responsive" src="Metro Exodus/ME5.jpg"><br>
                    <img class="img-responsive" src="Metro Exodus/ME6.jpg"><br>
                    <img class="img-responsive" src="Metro Exodus/ME7.jpg"><br>
                    <img class="img-responsive" src="Metro Exodus/ME8.jpg"><br class="info-br"></p>
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
                                    <th scope="col">OS<br><p style="text-align: left">Win10 RS5 (Build 1809) or newer | Win 8.1 required build 9600 | Win 8 required build 9200 | Win 7 required SP1</p></th>
                                    <th scope="col">OS<br><p style="text-align: left">Win10 RS5 (Build 1809) or newer | Win 8.1 required build 9600 | Win 8 required build 9200 | Win 7 required SP1</p></th>
                                </tr>
                                <tr>
                                    <th scope="col">CPU<br><p style="text-align: left">INTEL CORE I5-4440 or equivalent</p></th>
                                    <th scope="col">CPU<br><p style="text-align: left">INTEL CORE I7-4770K or equivalent</p></th>
                                </tr>
                                <tr>
                                    <th scope="col">RAM<br><p style="text-align: left">8 GB</p></th>
                                    <th scope="col">RAM<br><p style="text-align: left">8 GB</p></th>
                                </tr>
                                <tr>
                                    <th scope="col">GPU<br><p style="text-align: left">GEFORCE GTX 670 | GEFORCE GTX 1050 | AMD RADEON HD 7870</p></th>
                                    <th scope="col">GPU<br><p style="text-align: left">GEFORCE GTX 1070 | GEFORCE RTX 2060 | AMD RX VEGA 56</p></th>
                                </tr>
                                <tr>
                                    <th scope="col">VRAM<br><p style="text-align: left">2 GB</p></th>
                                    <th scope="col">VRAM<br><p style="text-align: left">8 GB</p></th>
                                </tr>
                                <tr>
                                    <th scope="col">DIRECT X<br><p style="text-align: left">11 | 12</p></th>
                                    <th scope="col">DIRECT X<br><p style="text-align: left">12</p></th>
                                </tr>
                                <tr>
                                    <th colspan="2" scope="col">Languages Supported<br><p style="text-align: left">English, Spanish, French, German, Italian, Russian, Ukrainian, Subtitles: Czech, Polish, Portuguese, Korean, Simplified Chinese, Traditional Chinese</p></th>
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
                        <br><br><img class="img-responsive center-block esrb" src="Metro Exodus/ME9.png" style="width: 75%; align: center;"><br><hr style="width: 100%">
                        <p style="color: #9e9e9e">© 2019 and published by Deep Silver, a division of Koch Media GmbH, Austria.</p><br>
                    </div>
                </div>
                <br>
            </div>
        </div>
        <?php require '../footer.php' ?>
    </body>
</html>