<?php 
    session_start(); 
    require '../includes/logout.inc.php';

    $owned = 0;
    if(isset($_SESSION['disname'])):
        require '../includes/dbh.inc.php';
        $acc_id = $_SESSION['user_id'];
        $item_id = 9;
        $query = "SELECT * FROM orders WHERE user_id='$acc_id' and item_id='$item_id'";
        $results = mysqli_query($db, $query);
        $row = mysqli_fetch_array($results);
        if($row['owned'] == 1):
            $owned = 1;
        else:
            $owned = 0;
        endif;
    endif;

    $_SESSION['item_id'] = 9;
?>
<!DOCTYPE html>
<html>
<head>
    <?php require '../includes/meta.inc.php' ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel='shortcut icon' type='image/png' href='../img/favicon.png'/>
	<title>Vampire: The Masquerade - Bloodlines 2</title>
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
                <p class="special"><a class="special vmb2" href="../index.php"><span style="font-size: 75%" class="glyphicon glyphicon-menu-left"></span> Back to Store</a> | Vampire: The Masquerade - Bloodlines 2</p>
                <div class="wrapper">
                    <img id="logo" class="img-responsive" src="Bloodlines 2/VMB2-logo.png" alt="Vampire: The Masquerade - Bloodlines 2"> 
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/9dz0c0UsmnQ"></iframe>
                    </div>
                </div>
                <div>
                    <article>
                        <p class="desc">Sired in an act of vampire terrorism, your existence ignites the war for Seattle's blood trade. Enter uneasy alliances with the creatures who control the city and uncover the sprawling conspiracy which plunged Seattle into a bloody civil war between powerful vampire factions.</p>
                    </article>
                </div>
                <div>
                    <p id="price">₹1499.99</p>
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
                                    <th style="width: 33.33%; text-align: left" scope="col">Developer<br><p style="text-align: left">Hardsuit Labs</p></th>
                                    <th style="width: 33.33%; text-align: left" scope="col">Publisher<br><p style="text-align: left">Paradox Interactive</p></th>
                                    <th style="width: 33.33%; text-align: left" scope="col">Release Date<br><p style="text-align: left">March 2020</p></th>
                                </tr>
                                <tr>
                                    <th style="text-align: left" scope="col">Tags<br><p style="text-align: left">Action, RPG</p></th>
                                    <th style="text-align: left" scope="col">Rating<br><p style="text-align: left">Rating Pending</p></th>
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
                    <p class="block-id">Vampire: The Masquerade - Bloodlines 2<br><br>
                    <img class="img-responsive gif" src="Bloodlines 2/Anim.gif"><br>
                    <p class="collapse" id="block-id">A City Run on Blood<br><br>
                    <i>Sired in an act of vampire terrorism, your existence ignites the war for Seattle's blood trade. Enter uneasy alliances with the creatures who control the city and uncover the sprawling conspiracy which plunged Seattle into a bloody civil war between powerful vampire factions.</i><br><br>
                    <b>Feed Your Power, Own the Night</b><br>
                    You and your unique disciplines are a weapon in our forward-driving, fast-moving, melee-focused combat system. Your power will grow as you advance, but remember to uphold the Masquerade and guard your humanity... or face the consequences.<br><br>
                    <b>Descend into Seattle’s Dark Heart and Survive the Vampire Elite</b><br>
                    Seattle has always been run by vampires. Hunt your prey across Seattle locations faithfully reimagined in the World of Darkness. Meet the old blood founders present since the city’s birth and the new blood steering the tech money redefining the city. Everyone has hidden agendas - so choose your allies wisely.<br><br>
                    <b>Enter into Uneasy Alliances</b><br>
                    Choose a side among competing factions, each with their own unique traits and stories, in the war for Seattle’s blood trade. The world will judge you by the company you keep, but remember no one’s hands stay clean forever.<br><br>
                    <b>Experience the Story</b><br>
                    Immerse yourself in the World of Darkness and live out your vampire fantasy in a city filled with intriguing characters that react to your choices. Written by the creative mind behind the original Bloodlines, Vampire: The Masquerade® - Bloodlines™ 2 brings the ambitions of the first game to life and sees the return of a few fan favorite characters.<br><br>
                    <img class="img-responsive" src="Bloodlines 2/1.png"><br>
                    <img class="img-responsive" src="Bloodlines 2/2.png"><br>
                    <img class="img-responsive" src="Bloodlines 2/3.png"><br>
                    <img class="img-responsive" src="Bloodlines 2/4.jpg"><br>
                    <img class="img-responsive" src="Bloodlines 2/5.jpg"><br>
                    <img class="img-responsive" src="Bloodlines 2/6.jpg"><br class="info-br"></p>
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
                                    <th colspan="2" scope="col">Languages Supported<br><p style="text-align: left">[Voice Overs]: English, [Subtitles]: English, Spanish, French, German, Russian, Japanese, Simplified Chinese</p></th>
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
                        <br><br><img class="img-responsive center-block esrb" src="Bloodlines 2/7.png" style="width: 75%; align: center;"><br><hr style="width: 100%">
                        <p style="color: #9e9e9e">© 2019 Paradox Interactive AB.</p><br>
                    </div>
                </div>
                <br>
            </div>
        </div>
        <?php require '../footer.php' ?>
    </body>
</html>