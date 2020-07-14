<?php 
    session_start(); 
    require '../includes/logout.inc.php';

    $owned = 0;
    if(isset($_SESSION['disname'])):
        require '../includes/dbh.inc.php';
        $acc_id = $_SESSION['user_id'];
        $item_id = 13;
        $query = "SELECT * FROM orders WHERE user_id='$acc_id' and item_id='$item_id'";
        $results = mysqli_query($db, $query);
        $row = mysqli_fetch_array($results);
        if($row['owned'] == 1):
            $owned = 1;
        else:
            $owned = 0;
        endif;
    endif;

    $_SESSION['item_id'] = 13;
?>
<!DOCTYPE html>
<html>
<head>
    <?php require '../includes/meta.inc.php' ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel='shortcut icon' type='image/png' href='../img/favicon.png'/>
	<title>Red Dead Redemption 2</title>
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
                <p class="special"><a class="special rdr2" href="../index.php"><span style="font-size: 75%" class="glyphicon glyphicon-menu-left"></span> Back to Store</a> | Red Dead Redemption 2</p>
                <div class="wrapper">
                    <img id="logo" class="img-responsive" src="RDR2/RDR2-logo.png" alt="Red Dead Redemption 2"> 
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/SXvQ1nK4oxk"></iframe>
                    </div>
                </div>
                <div>
                    <article>
                        <p class="desc">From the creators of Grand Theft Auto V and Red Dead Redemption, Red Dead Redemption 2 is an epic tale of life in America at the dawn of the modern age.</p>
                    </article>
                </div>
                <div>
                    <p id="price">₹3199.99</p>
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
                                    <th style="width: 33.33%; text-align: left" scope="col">Developer<br><p style="text-align: left">Rockstar Games</p></th>
                                    <th style="width: 33.33%; text-align: left" scope="col">Publisher<br><p style="text-align: left">Rockstar Games</p></th>
                                    <th style="width: 33.33%; text-align: left" scope="col">Available<br><p style="text-align: left">Nov 05, 2019</p></th>
                                </tr>
                                <tr>
                                    <th style="text-align: left" scope="col">Tags<br><p style="text-align: left">Narration, Action, Open World</p></th>
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
                    <p class="block-id">Red Dead Redemption 2<br><br>
                    <img class="img-responsive gif" src="RDR2/Anim.gif"><br>
                    <p class="collapse" id="block-id"><i>“Vengeance is an idiot’s game.”</i><br><br>
                    America, 1899. The end of the wild west era has begun as lawmen hunt down the last remaining outlaw gangs. Those who will not surrender or succumb are killed. After a robbery goes badly wrong in the western town of Blackwater, Arthur Morgan and the Van der Linde gang are forced to flee. With federal agents and the best bounty hunters in the nation massing on their heels, the gang must rob, steal and fight their way across the rugged heartland of America in order to survive. As deepening internal divisions threaten to tear the gang apart, Arthur must make a choice between his own ideals and loyalty to the gang who raised him.<br><br>
                    <img class="img-responsive" src="RDR2/1.jpg"><br>
                    <img class="img-responsive" src="RDR2/2.jpg"><br>
                    <img class="img-responsive" src="RDR2/3.jpg"><br>
                    <img class="img-responsive" src="RDR2/4.jpg">
                    <br class="info-br"></p>
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
                                    <th scope="col">OS<br><p style="text-align: left">Windows 7 - Service Pack 1 (6.1.7601)</p></th>
                                    <th scope="col">OS<br><p style="text-align: left">Windows 10 - April 2018 Update (v1803)</p></th>
                                </tr>
                                <tr>
                                    <th scope="col">Processor<br><p style="text-align: left">Intel(R) Core(TM) i5-2500K / AMD FX-6300</p></th>
                                    <th scope="col">Processor<br><p style="text-align: left">Intel(R) Core(TM) i7-4770K / AMD Ryzen 5 1500x</p></th>
                                </tr>
                                <tr>
                                    <th scope="col">Memory<br><p style="text-align: left">8 GB</p></th>
                                    <th scope="col">Memory<br><p style="text-align: left">12 GB</p></th>
                                </tr>
                                <tr>
                                    <th scope="col">Graphics<br><p style="text-align: left">Nvidia GeForce GTX 770 2GB / AMD Radeon R9 280 3GB</p></th>
                                    <th scope="col">Graphics<br><p style="text-align: left">Nvidia GeForce GTX 1060 6GB / AMD Radeon RX 480 4GB</p></th>
                                </tr>
                                <tr>
                                    <th scope="col">Storage<br><p style="text-align: left">150 GB</p></th>
                                    <th scope="col">Storage<br><p style="text-align: left">150 GB</p></th>
                                </tr>
                                <tr>
                                    <th scope="col">Other<br><p style="text-align: left">Sound Card: DirectX Compatible</p></th>
                                    <th scope="col">Other<br><p style="text-align: left">Sound Card: DirectX Compatible</p></th>
                                </tr>
                                <tr>
                                    <th colspan="2" scope="col">Languages Supported<br><p style="text-align: left">Voice: English Text: English, Simplified Chinese, Traditional Chinese, Portuguese, French, German, Italian, Japanese, Korean, Polish, Russian, Spanish</p></th>
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
                        <br><br><img class="img-responsive center-block esrb" src="RDR2/5.png" style="width: 75%; align: center;"><br><hr style="width: 100%">
                        <p style="color: #9e9e9e">© 2019 Rockstar Games.</p><br>
                    </div>
                </div>
                <br>
            </div>
        </div>
        <?php require '../footer.php' ?>
    </body>
</html>