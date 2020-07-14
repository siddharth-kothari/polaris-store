<?php 
    session_start(); 
    require '../includes/logout.inc.php';

    $owned = 0;
    if(isset($_SESSION['disname'])):
        require '../includes/dbh.inc.php';
        $acc_id = $_SESSION['user_id'];
        $item_id = 15;
        $query = "SELECT * FROM orders WHERE user_id='$acc_id' and item_id='$item_id'";
        $results = mysqli_query($db, $query);
        $row = mysqli_fetch_array($results);
        if($row['owned'] == 1):
            $owned = 1;
        else:
            $owned = 0;
        endif;
    endif;

    $_SESSION['item_id'] = 15;
?>
<!DOCTYPE html>
<html>
<head>
    <?php require '../includes/meta.inc.php' ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel='shortcut icon' type='image/png' href='../img/favicon.png'/>
	<title>Counter-Strike: Global Offensive Prime Status</title>
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
                <p class="special"><a class="special csgo" href="../index.php"><span style="font-size: 75%" class="glyphicon glyphicon-menu-left"></span> Back to Store</a> | Counter-Strike: Global Offensive Prime Status</p>
                <div class="wrapper">
                    <img id="logo" class="img-responsive" src="CSGO/CSGO-logo.png" alt="Counter-Strike: Global Offensive Prime Status"> 
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/edYCtaNueQY"></iframe>
                    </div>
                </div>
                <div>
                    <article>
                        <p class="desc">Counter-Strike: Global Offensive expands upon the team-based action gameplay that it pioneered when it was launched 19 years ago. CS: GO features new maps, characters, weapons, and game modes, and delivers updated versions of the classic CS content.</p>
                    </article>
                </div>
                <div>
                    <p id="price">₹565.99</p>
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
                                    <th style="width: 33.33%; text-align: left" scope="col">Developer<br><p style="text-align: left">Valve</p></th>
                                    <th style="width: 33.33%; text-align: left" scope="col">Publisher<br><p style="text-align: left">Valve</p></th>
                                    <th style="width: 33.33%; text-align: left" scope="col">Release Date<br><p style="text-align: left">Aug 21, 2012</p></th>
                                </tr>
                                <tr>
                                    <th style="text-align: left" scope="col">Tags<br><p style="text-align: left">FPS, Shooter</p></th>
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
                    <p class="block-id">Counter-Strike: Global Offensive Prime Status<br><br>
                    <img class="img-responsive gif" src="CSGO/Anim.gif"><br>
                    <p class="collapse" id="block-id"><i>"Gear up; We aren't going on a windy walk here!"</i><br><br>
                    Counter-Strike: Global Offensive (CS: GO) expands upon the team-based action gameplay that it pioneered when it was launched 19 years ago.<br><br>
                    CS: GO features new maps, characters, weapons, and game modes, and delivers updated versions of the classic CS content (de_dust2, etc.).<br><br>
                    "Counter-Strike took the gaming industry by surprise when the unlikely MOD became the most played online PC action game in the world almost immediately after its release in August 1999," said Doug Lombardi at Valve. "For the past 12 years, it has continued to be one of the most-played games in the world, headline competitive gaming tournaments and selling over 25 million units worldwide across the franchise. CS: GO promises to expand on CS' award-winning gameplay and deliver it to gamers on the PC as well as the next gen consoles and the Mac."<br><br>
                    <img class="img-responsive" src="CSGO/1.jpg"><br>
                    <img class="img-responsive" src="CSGO/2.jpg"><br>
                    <img class="img-responsive" src="CSGO/3.jpg"><br>
                    <img class="img-responsive" src="CSGO/4.jpg">
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
                                    <th style="width: 66.66%; text-align: left" scope="col">Minimum</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="col">OS<br><p style="text-align: left">Windows® 7/Vista/XP</p></th>
                                </tr>
                                <tr>
                                    <th scope="col">Processor<br><p style="text-align: left">Intel® Core™ 2 Duo E6600 or AMD Phenom™ X3 8750 processor or better</p></th>
                                </tr>
                                <tr>
                                    <th scope="col">Memory<br><p style="text-align: left">2 GB RAM</p></th>
                                </tr>
                                <tr>
                                    <th scope="col">Graphics<br><p style="text-align: left">Video card must be 256 MB or more and should be a DirectX 9-compatible with support for Pixel Shader 3.0</p></th>
                                </tr>
                                <tr>
                                    <th scope="col">DirectX<br><p style="text-align: left">Version 9.0c</p></th>
                                </tr>
                                <tr>
                                    <th scope="col">Storage<br><p style="text-align: left">15 GB</p></th>
                                </tr>
                                <tr>
                                    <th scope="col">Languages Supported<br><p style="text-align: left">Voice: English, Text: English, Czech, Danish, Dutch, Finnish, French, German, Hungarian, Italian, Japanese, Korean, Norwegian, Polish, Portuguese, Romanian, Russian, Chinese, Spanish, Swedish, Thai, Turkish, Bulgarian, Ukrainian</p></th>
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
                        <br><br><img class="img-responsive center-block esrb" src="CSGO/5.png" style="width: 75%; align: center;"><br><hr style="width: 100%">
                        <p style="color: #9e9e9e">© Valve.</p><br>
                    </div>
                </div>
                <br>
            </div>
        </div>
        <?php require '../footer.php' ?>
    </body>
</html>