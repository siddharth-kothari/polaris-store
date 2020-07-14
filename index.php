<?php 
    session_start(); 
    require 'includes/logout.inc.php';
    require 'includes/dbh.inc.php'
?>
<!DOCTYPE html>
<html>
    <head>
        <?php require 'includes/meta.inc.php' ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel='shortcut icon' type='image/png' href='img/favicon.png'/>
        <title>Polaris | Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel = 'stylesheet' type = 'text/css' href = 'homepage.css'/>
        <?php include 'includes/browser.inc.php' ?>   
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
        <div class="card-deck">
            <div class="card">
                <a class="transp" href="product/Control.php">
                    <div class="card-body">
                        <picture>
                            <source class="card-img-top img-responsive center-block" media="(min-width: 768px)" srcset="product/Control/Control-V.jpg">
                            <img src="product/Control/Control.jpg" class="card-img-top img-responsive center-block">
                        </picture>
                        <p class="card-title" <?php if ($crossx == 1) { echo 'style="margin-bottom: -1%"'; } ?>>Control<span class="pull-right">₹1699.99</span><br>505 Games | Remedy Entertainment Plc.</p>
                        <br style="display: block; margin: 3% 0;">
                    </div>
                </a>
                <br style="display: block; margin: 3% 0;">
            </div>
            <br style="display: block; margin: 3% 0;" class="smaller-br">
            <div class="card">
                <div class="card-body">
                    <a class="transp" href="product/Rainbow Six Siege.php"><img src="product/R6 Siege/Siege.jpg" class="card-img-top img-responsive center-block">
                    <p class="card-title" <?php if ($crossx == 1) { echo 'style="margin-bottom: -1%"'; } ?>>Rainbow Six: Siege<span class="pull-right">₹999.99</span><br>Ubisoft</p>
                    <br style="display: block; margin: 3% 0;"></a>
                </div>
                <?php
                    if ($crossx == 1) { echo '<p style="margin: 2.4em;"></p>'; }
                    else { echo '<br style="display: block; margin: 3% 0;">'; };
                ?>
                <div class="card-body">
                    <a class="transp" href="product/Metro Exodus.php"><img src="product/Metro Exodus/Exodus.jpg" class="card-img-top img-responsive center-block">
                    <p class="card-title" <?php if ($crossx == 1) { echo 'style="margin-bottom: -1%"'; } ?>>Metro Exodus<span class="pull-right">₹1179.99</span><br>Deep Silver | 4A Games</p>
                    <br style="display: block; margin: 3% 0;"></a>
                </div>
            </div>
            <br style="display: block; margin: 3% 0;">
        </div>
        <?php if ($crossx == 1) { echo '<p style="margin: 1.1em;"></p>'; } ?>
        <div class="card-deck">
            <div class="card">
                <div class="card-body">
                    <a class="transp" href="product/Cyberpunk 2077.php"><img src="product/Cyberpunk 2077/CP.png" class="card-img-top img-responsive center-block">
                    <p class="card-title" <?php if ($crossx == 1) { echo 'style="margin-bottom: -1%"'; } ?>>Cyberpunk 2077<span class="pull-right">₹2999.99</span><br>CD PROJEKT RED</p>
                    <br style="display: block; margin: 3% 0;"></a>
                </div>
                <?php
                    if ($crossx == 1) { echo '<p style="margin: 2.4em;"></p>'; }
                    else { echo '<br style="display: block; margin: 3% 0;">'; };
                ?>
                <div class="card-body">
                    <a class="transp" href="product/The Outer Worlds.php"><img src="product/The Outer Worlds/OW.png" class="card-img-top img-responsive center-block">
                    <p class="card-title" <?php if ($crossx == 1) { echo 'style="margin-bottom: -1%"'; } ?>>The Outer Worlds<span class="pull-right">₹3199.99</span><br>Private Division | Obsidian Entertainment</p>
                    <br style="display: block; margin: 3% 0;"></a>
                </div>
            </div>
            <br style="display: block; margin: 3% 0;">
            <div class="card">
                <a class="transp" href="product/Watch Dogs Legion.php">
                    <div class="card-body">
                        <picture>
                            <source class="card-img-top img-responsive center-block" media="(min-width: 768px)" srcset="product/Watch%20Dogs%20Legion/Legion-V.jpg">
                            <img src="product/Watch Dogs Legion/Legion.jpg" class="card-img-top img-responsive center-block">
                        </picture>
                        <p class="card-title" <?php if ($crossx == 1) { echo 'style="margin-bottom: -1%"'; } ?>>Watch Dogs: Legion<span class="pull-right">₹3699.99</span><br>Ubisoft</p>
                        <br style="display: block; margin: 3% 0;">
                    </div>
                </a>
                <br style="display: block; margin: 3% 0;">
            </div>
            <br style="display: block; margin: 3% 0;" class="smaller-br">
        </div>
        <?php if ($crossx == 1) { echo '<p style="margin: 1.1em;"></p>'; } ?>
        <div class="card-deck">
            <div class="card">
                <a class="transp" href="product/Borderlands 3.php">
                    <div class="card-body">
                        <picture>
                            <source class="card-img-top img-responsive center-block" media="(min-width: 768px)" srcset="product/Borderlands%203/Borderlands3-V.png">
                            <img src="product/Borderlands 3/Borderlands3.png" class="card-img-top img-responsive center-block">
                        </picture>
                        <p class="card-title" <?php if ($crossx == 1) { echo 'style="margin-bottom: -1%"'; } ?>>Borderlands 3<span class="pull-right">₹3499.99</span><br>2K | Gearbox Software</p>
                        <br style="display: block; margin: 3% 0;">
                    </div>
                </a>
                <br style="display: block; margin: 3% 0;">
            </div>
            <br style="display: block; margin: 3% 0;" class="smaller-br">
            <div class="card">
                <div class="card-body">
                    <a class="transp" href="product/The Walking Dead.php"><img src="product/The Walking Dead Definitive Series/TWD.png" class="card-img-top img-responsive center-block">
                    <p class="card-title" <?php if ($crossx == 1) { echo 'style="margin-bottom: -1%"'; } ?>>The Walking Dead: The Telltale Definitive Series<span class="pull-right">₹1299.99</span><br>Skybound Entertainment | Telltale Games</p>
                    <br style="display: block; margin: 3% 0;"></a>
                </div>
                <?php
                    if ($crossx == 1) { echo '<p style="margin: 2.4em;"></p>'; }
                    else { echo '<br style="display: block; margin: 3% 0;">'; };
                ?>
                <div class="card-body">
                    <a class="transp" href="product/Bloodlines 2.php"><img src="product/Bloodlines 2/Bloodlines2.png" class="card-img-top img-responsive center-block">
                    <p class="card-title" <?php if ($crossx == 1) { echo 'style="margin-bottom: -1%"'; } ?>>Vampire: The Masquerade - Bloodlines 2<span class="pull-right">₹1499.99</span><br>Paradox Interactive | Hardsuit Labs Inc.</p>
                    <br style="display: block; margin: 3% 0;"></a>
                </div>
            </div>
            <br style="display: block; margin: 3% 0;">
        </div>
        <?php if ($crossx == 1) { echo '<p style="margin: 1.1em;"></p>'; } ?>
        <div class="card-deck">
            <div class="card">
                <div class="card-body">
                    <a class="transp" href="product/The Witcher 3 Wild Hunt.php"><img src="product/TW3/TW3.png" class="card-img-top img-responsive center-block">
                    <p class="card-title" <?php if ($crossx == 1) { echo 'style="margin-bottom: -1%"'; } ?>>The Witcher 3: Wild Hunt<span class="pull-right">₹299.99</span><br>CD PROJEKT RED</p>
                    <br style="display: block; margin: 3% 0;"></a>
                </div>
                <?php
                    if ($crossx == 1) { echo '<p style="margin: 2.4em;"></p>'; }
                    else { echo '<br style="display: block; margin: 3% 0;">'; };
                ?>
                <div class="card-body">
                    <a class="transp" href="product/Dishonored 2.php"><img src="product/Dishonored 2/D2.jpg" class="card-img-top img-responsive center-block">
                    <p class="card-title" <?php if ($crossx == 1) { echo 'style="margin-bottom: -1%"'; } ?>>Dishonored 2<span class="pull-right">₹534.99</span><br>Bethesda Softworks | Arkane Studios</p>
                    <br style="display: block; margin: 3% 0;"></a>
                </div>
            </div>
            <br style="display: block; margin: 3% 0;">
            <div class="card">
                <a class="transp" href="product/Shadow of the Tomb Raider.php">
                    <div class="card-body">
                        <picture>
                            <source class="card-img-top img-responsive center-block" media="(min-width: 768px)" srcset="product/SOTR/SOTR-V.jpg">
                            <img src="product/SOTR/SOTR.jpg" class="card-img-top img-responsive center-block">
                        </picture>
                        <p class="card-title" <?php if ($crossx == 1) { echo 'style="margin-bottom: -1%"'; } ?>>Shadow of the Tomb Raider<span class="pull-right">₹1154.99</span><br>Square Enix | Eidos-Montréal</p>
                        <br style="display: block; margin: 3% 0;">
                    </div>
                </a>
                <br style="display: block; margin: 3% 0;">
            </div>
            <br style="display: block; margin: 3% 0;" class="smaller-br">
        </div>
        <?php if ($crossx == 1) { echo '<p style="margin: 1.1em;"></p>'; } ?>
        <div class="card-deck">
            <div class="card">
                <a class="transp" href="product/Red Dead Redemption 2.php">
                    <div class="card-body">
                        <picture>
                            <source class="card-img-top img-responsive center-block" media="(min-width: 768px)" srcset="product/RDR2/RDR2-V.jpg">
                            <img src="product/RDR2/RDR2.jpg" class="card-img-top img-responsive center-block">
                        </picture>
                        <p class="card-title" <?php if ($crossx == 1) { echo 'style="margin-bottom: -1%"'; } ?>>Red Dead Redemption 2<span class="pull-right">₹3199.99</span><br>Rockstar Games</p>
                        <br style="display: block; margin: 3% 0;">
                    </div>
                </a>
                <br style="display: block; margin: 3% 0;">
            </div>
            <br style="display: block; margin: 3% 0;" class="smaller-br">
            <div class="card">
                <div class="card-body">
                    <a class="transp" href="product/Batman Arkham Knight.php"><img src="product/BAK/BAK.jpg" class="card-img-top img-responsive center-block">
                    <p class="card-title" <?php if ($crossx == 1) { echo 'style="margin-bottom: -1%"'; } ?>>Batman™: Arkham Knight<span class="pull-right">₹337.99</span><br>Warner Bros. | Rocksteady Studios</p>
                    <br style="display: block; margin: 3% 0;"></a>
                </div>
                <?php
                    if ($crossx == 1) { echo '<p style="margin: 2.4em;"></p>'; }
                    else { echo '<br style="display: block; margin: 3% 0;">'; };
                ?>
                <div class="card-body">
                    <a class="transp" href="product/Counter Strike Global Offensive.php"><img src="product/CSGO/CSGO.jpg" class="card-img-top img-responsive center-block">
                    <p class="card-title" <?php if ($crossx == 1) { echo 'style="margin-bottom: -1%"'; } ?>>Counter-Strike: Global Offensive Prime Status<span class="pull-right">₹565.99</span><br>Valve</p>
                    <br style="display: block; margin: 3% 0;"></a>
                </div>
            </div>
            <br style="display: block; margin: 3% 0;">
        </div>
        <?php if ($crossx == 1) { echo '<p style="margin: 1.1em;"></p>'; } ?>
        <?php require 'footer.php' ?>
    </body>
</html>