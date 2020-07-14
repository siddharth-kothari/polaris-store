<?php 
    session_start(); 
    require '../includes/logout.inc.php';

    $owned = 0;
    if(isset($_SESSION['disname'])):
        require '../includes/dbh.inc.php';
        $acc_id = $_SESSION['user_id'];
        $item_id = 11;
        $query = "SELECT * FROM orders WHERE user_id='$acc_id' and item_id='$item_id'";
        $results = mysqli_query($db, $query);
        $row = mysqli_fetch_array($results);
        if($row['owned'] == 1):
            $owned = 1;
        else:
            $owned = 0;
        endif;
    endif;

    $_SESSION['item_id'] = 11;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require '../includes/meta.inc.php' ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel='shortcut icon' type='image/png' href='../img/favicon.png'/>
	<title>Dishonored 2</title>
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
                <p class="special"><a style="text-decoration: none" class="special d2" href="../index.php"><span style="font-size: 75%" class="glyphicon glyphicon-menu-left"></span> Back to Store</a> | Dishonored 2</p>
                <div class="wrapper">
                    <img id="logo" class="img-responsive" src="Dishonored 2/D2-logo.png" alt="D2"> 
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/7bLNC8VDTlQ"></iframe>
                    </div>
                </div>
                <div>
                    <article>
                        <p class="desc">Reprise your role as a supernatural assassin in Dishonored 2.It is the follow up to Arkane’s 1st-person action blockbuster & winner of 100+ 'Game of the Year' awards, Dishonored. </p>
                    </article>
                </div>
                <div>
                    <p id="price">₹534.99</p>
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
                                    <th style="width: 33.33%; text-align: left" scope="col">Developer<br><p style="text-align: left">Arkane Studios</p></th>
                                    <th style="width: 33.33%; text-align: left" scope="col">Publisher<br><p style="text-align: left">Bethesda Softworks</p></th>
                                    <th style="width: 33.33%; text-align: left" scope="col">Release Date<br><p style="text-align: left">Nov 11, 2016</p></th>
                                </tr>
                                <tr>
                                    <th style="text-align: left" scope="col">Tags<br><p style="text-align: left">Stealth, First-Person</p></th>
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
                    <p class="block-id">Dishonored 2<br><br>
                    <img class="img-responsive gif" src="Dishonored 2/Anim.gif"><br>
                    <p class="collapse" id="block-id"><i>"And what are you willing to become?"</i><br><br>
                    Play your way in a world where mysticism and industry collide. Will you choose to play as Empress Emily Kaldwin or the royal protector, Corvo Attano? Will you make your way through the game unseen, make full use of its brutal combat system, or use a blend of both? How will you combine your character's unique set of powers, weapons and gadgets to eliminate your enemies? The story responds to your choices, leading to intriguing outcomes, as you play through each of the game's hand-crafted missions.<br><br>
                    <b>Key Features</b><br>
                    <b>The Assassins</b><br>
                    As fully voiced characters, Emily Kaldwin and Corvo Attano now bring their own perspectives and emotional responses to the world and story. Use each character’s set of powers, gadgets and uniquely-tuned weapons in creative ways as you explore the world – whether you fight your way through the city streets or sneak across the rooftops - and which enemies you decide to eliminate or spare.<br><br>
                    <b>Supernatural Powers</b><br>
                    Advanced bonecharm crafting and all-new upgrade trees allow you to customize your powers in vastly different ways. Become a living shadow to silently stalk your targets, link enemies so they share a common fate, or mesmerize your foes and dominate their minds. Choose from nearly infinite combinations of violence, nonlethal combat, powers and weapons to accomplish your objectives.<br><br>
                    <b>Imaginative World</b><br>
                    From the grimy, rat-infested streets of Dunwall to the lush, exotic coasts of a decaying Karnaca, immerse yourself in stylized locales created by Arkane’s premiere art and narrative teams. The world is a character in its own right, rich with story, architecture and eclectic characters. It is also punctuated by signature mission locations, such as the Dust District, ravaged by dust storms and warring factions, and a madman’s mansion made of shifting walls, deadly traps and clockwork soldiers.<br><br>
                    <img class="img-responsive" src="Dishonored 2/1.jpg"><br>
                    <img class="img-responsive" src="Dishonored 2/2.jpg"><br>
                    <img class="img-responsive" src="Dishonored 2/3.jpg"><br>
                    <img class="img-responsive" src="Dishonored 2/4.jpg"><br>
                    <img class="img-responsive" src="Dishonored 2/5.jpg"><br>
                    <img class="img-responsive" src="Dishonored 2/6.jpg"><br class="info-br"></p>
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
                                    <th scope="col">OS<br><p style="text-align: left">Windows 7/8/10 (64-bit versions)</p></th>
                                    <th scope="col">OS<br><p style="text-align: left">Windows 10 (64-bit versions)</p></th>
                                </tr>
                                <tr>
                                    <th scope="col">Processor<br><p style="text-align: left">Intel Core i5-2400/AMD FX-8320 or better</p></th>
                                    <th scope="col">Processor<br><p style="text-align: left">Intel Core i7-4770/AMD FX-8350 or better</p></th>
                                </tr>
                                <tr>
                                    <th scope="col">Memory<br><p style="text-align: left">8 GB RAM</p></th>
                                    <th scope="col">Memory<br><p style="text-align: left">16 GB RAM</p></th>
                                </tr>
                                <tr>
                                    <th scope="col">Graphics<br><p style="text-align: left">NVIDIA GTX 660 2GB/AMD Radeon HD 7970 3GB or better</p></th>
                                    <th scope="col">Graphics<br><p style="text-align: left">NVIDIA GTX 1060 6GB/AMD Radeon RX 480 8GB or better</p></th>
                                </tr>
                                <tr>
                                    <th scope="col">Storage<br><p style="text-align: left">60 GB</p></th>
                                    <th scope="col">Storage<br><p style="text-align: left">60 GB</p></th>
                                </tr>
                                <tr>
                                    <th colspan="2" scope="col">Languages Supported<br><p style="text-align: left">Voice: English, French, Italian, German, Spain, Polish, Portuguese, Russian, Chinese, Japenese, Text: English, French, Italian, German, Spain, Polish, Portuguese, Russian, Japenese</p></th>
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
                        <br><br><img class="img-responsive center-block esrb" src="Dishonored 2/7.png" style="width: 75%; align: center;"><br><hr style="width: 100%">
                        <p style="color: #9e9e9e">© 2016 Bethesda Softworks LLC, a ZeniMax Media company.</p><br>
                    </div>
                </div>
                <br>
            </div>
        </div>
        <?php require '../footer.php' ?>
    </body>
</html>