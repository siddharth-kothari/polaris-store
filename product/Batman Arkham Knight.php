<?php 
    session_start(); 
    require '../includes/logout.inc.php';

    $owned = 0;
    if(isset($_SESSION['disname'])):
        require '../includes/dbh.inc.php';
        $acc_id = $_SESSION['user_id'];
        $item_id = 14;
        $query = "SELECT * FROM orders WHERE user_id='$acc_id' and item_id='$item_id'";
        $results = mysqli_query($db, $query);
        $row = mysqli_fetch_array($results);
        if($row['owned'] == 1):
            $owned = 1;
        else:
            $owned = 0;
        endif;
    endif;

    $_SESSION['item_id'] = 14;
?>
<!DOCTYPE html>
<html>
<head>
    <?php require '../includes/meta.inc.php' ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel='shortcut icon' type='image/png' href='../img/favicon.png'/>
	<title>Batman™: Arkham Knight</title>
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
                <p class="special"><a class="special bak" href="../index.php"><span style="font-size: 75%" class="glyphicon glyphicon-menu-left"></span> Back to Store</a> | Batman™: Arkham Knight</p>
                <div class="wrapper">
                    <img id="logo" class="img-responsive" src="BAK/BAK-logo.png" alt="Batman™: Arkham Knight"> 
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/f74AQUeXfBY"></iframe>
                    </div>
                </div>
                <div>
                    <article>
                        <p class="desc">Batman™: Arkham Knight brings the award-winning Arkham trilogy from Rocksteady Studios to its epic conclusion. Developed exclusively for New-Gen platforms, Batman: Arkham Knight introduces Rocksteady's uniquely designed version of the Batmobile.</p>
                    </article>
                </div>
                <div>
                    <p id="price">₹337.99</p>
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
                                    <th style="width: 33.33%; text-align: left" scope="col">Developer<br><p style="text-align: left">Rocksteady Studios</p></th>
                                    <th style="width: 33.33%; text-align: left" scope="col">Publisher<br><p style="text-align: left">Warner Bros.</p></th>
                                    <th style="width: 33.33%; text-align: left" scope="col">Release Date<br><p style="text-align: left">Jun 23, 2015</p></th>
                                </tr>
                                <tr>
                                    <th style="text-align: left" scope="col">Tags<br><p style="text-align: left">Action, Fighting, Open World</p></th>
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
                    <p class="block-id">Batman™: Arkham Knight<br><br>
                    <img class="img-responsive gif" src="BAK/Anim1.gif"><br>
                    <p class="collapse" id="block-id">BE THE BATMAN<br><br>
                    Batman™: Arkham Knight brings the award-winning Arkham trilogy from Rocksteady Studios to its epic conclusion. Developed exclusively for New-Gen platforms, Batman: Arkham Knight introduces Rocksteady's uniquely designed version of the Batmobile. The highly anticipated addition of this legendary vehicle, combined with the acclaimed gameplay of the Arkham series, offers gamers the ultimate and complete Batman experience as they tear through the streets and soar across the skyline of the entirety of Gotham City. In this explosive finale, Batman faces the ultimate threat against the city that he is sworn to protect, as Scarecrow returns to unite the super criminals of Gotham and destroy the Batman forever.<br><br>
                    <b>Product Features:</b><br>
                    <b>Introducing the Batmobile:</b> The Batmobile is brought to life with a completely new and original design featuring a distinct visual appearance and a full range of on-board high-tech gadgetry. Designed to be fully drivable throughout the game world and capable of transformation from high speed pursuit mode to military grade battle mode, this legendary vehicle sits at the heart of the game’s design and allows players to tear through the streets at incredible speeds in pursuit of Gotham City’s most dangerous villains. This iconic vehicle also augments Batman’s abilities in every respect, from navigation and forensics to combat and puzzle solving creating a genuine and seamless sense of the union of man and machine.<br><br>
                    <b>The Epic Conclusion to Rocksteady’s Arkham Trilogy:</b> Batman: Arkham Knight brings all-out war to Gotham City. The hit-and-run skirmishes of Batman: Arkham Asylum, which escalated into the devastating conspiracy against the inmates in Batman: Arkham City, culminates in the ultimate showdown for the future of Gotham. At the mercy of Scarecrow, the fate of the city hangs in the balance as he is joined by the Arkham Knight, a completely new and original character in the Batman universe, as well as a huge roster of other infamous villains including Harley Quinn, The Penguin, Two-Face and the Riddler.<br><br>
                    <b>Explore the entirety of Gotham City:</b> For the first time, players have the opportunity to explore all of Gotham City in a completely open and free-roaming game world. More than five times that of Batman: Arkham City, Gotham City has been brought to life with the same level of intimate, hand-crafted attention to detail for which the Arkham games are known.<br><br>
                    <b>Most Wanted Side Missions:</b> Players can fully immerse themselves in the chaos that is erupting in the streets of Gotham. Encounters with high-profile criminal masterminds are guaranteed while also offering gamers the opportunity to focus on and takedown individual villains or pursue the core narrative path.<br><br>
                    <b>New Combat and Gadget Features:</b> Gamers have at their disposal more combat moves and high-tech gadgetry than ever before. The new ‘gadgets while gliding’ ability allows Batman to deploy gadgets such as batarangs, the grapnel gun or the line launcher mid-glide while Batman’s utility belt is once again upgraded to include all new gadgets that expand his range of forensic investigation, stealth incursion and combat skills.<br><br>
                    <b>“Be The Batman”</b>: Live the complete Batman experience as the Dark Knight enters the concluding chapter of Rocksteady’s Arkham trilogy. Players will become The World’s Greatest Detective like never before with the introduction of the Batmobile and enhancements to signature features such as FreeFlow Combat, stealth, forensics and navigation.<br><br>
                    <img class="img-responsive" src="BAK/1.jpg"><br>
                    <img class="img-responsive" src="BAK/2.jpg"><br>
                    <img class="img-responsive" src="BAK/3.jpg"><br>
                    <img class="img-responsive" src="BAK/4.jpg"><br>
                    <img class="img-responsive" src="BAK/5.jpg"><br>
                    <img class="img-responsive" src="BAK/6.jpg"><br>
                    <img class="img-responsive" src="BAK/7.jpg"><br>
                    <img class="img-responsive gif" src="BAK/Anim2.gif">
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
                                    <th scope="col">OS<br><p style="text-align: left">Win 7 SP1, Win 8.1 (64-bit Operating System Required)</p></th>
                                    <th scope="col">OS<br><p style="text-align: left">Win 7 SP1, Win 8.1 (64-bit Operating System Required)</p></th>
                                </tr>
                                <tr>
                                    <th scope="col">Processor<br><p style="text-align: left">Intel Core i5-750, 2.67 GHz | AMD Phenom II X4 965, 3.4 GHz</p></th>
                                    <th scope="col">Processor<br><p style="text-align: left">Intel Core i7-3770, 3.4 GHz | AMD FX-8350, 4.0 GHz</p></th>
                                </tr>
                                <tr>
                                    <th scope="col">Memory<br><p style="text-align: left">6 GB RAM</p></th>
                                    <th scope="col">Memory<br><p style="text-align: left">8 GB RAM</p></th>
                                </tr>
                                <tr>
                                    <th scope="col">Graphics<br><p style="text-align: left">NVIDIA GeForce GTX 660 (2 GB Memory Minimum) | AMD Radeon HD 7870 (2 GB Memory Minimum)</p></th>
                                    <th scope="col">Graphics<br><p style="text-align: left">NVIDIA GeForce GTX 760 - 3 GB Memory Recommended | AMD Radeon HD 7950 - 3 GB Memory Recommended</p></th>
                                </tr>
                                <tr>
                                    <th scope="col">DirectX<br><p style="text-align: left">Version 11</p></th>
                                    <th scope="col">DirectX<br><p style="text-align: left">Version 11</p></th>
                                </tr>
                                <tr>
                                    <th scope="col">Network<br><p style="text-align: left">Broadband Internet connection</p></th>
                                    <th scope="col">Network<br><p style="text-align: left">Broadband Internet connection</p></th>
                                </tr>
                                <tr>
                                    <th scope="col">Storage<br><p style="text-align: left">45 GB</p></th>
                                    <th scope="col">Storage<br><p style="text-align: left">45 GB</p></th>
                                </tr>
                                <tr>
                                    <th colspan="2" scope="col">Languages Supported<br><p style="text-align: left">English, French, German, Italian, Polish, Korean, Portuguese - Brazil, Russian, Spanish - Spain</p></th>
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
                        <br><br><img class="img-responsive center-block esrb" src="BAK/8.jpg" style="width: 75%; align: center;"><br><hr style="width: 100%">
                        <p style="color: #9e9e9e">BATMAN: ARKHAM KNIGHT software © 2015 Warner Bros. Entertainment Inc.</p><br>
                    </div>
                </div>
                <br>
            </div>
        </div>
        <?php require '../footer.php' ?>
    </body>
</html>