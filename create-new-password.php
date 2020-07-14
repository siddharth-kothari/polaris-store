<?php include('includes/reset-password.inc.php') ?>
<!DOCTYPE html>
<html>
	<head>
        <?php require 'includes/meta.inc.php' ?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel='shortcut icon' type='image/png' href='img/favicon.png'/>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Reset your Polaris Account Password | Polaris</title>
	</head>
	<body>
        <?php
            $sel = $_GET["selector"];
            $val = $_GET["validator"];

            if (empty($sel) || empty($val)) {
                echo "Cannot validate your request.";
            } else {
                if (ctype_xdigit($sel) !== false && ctype_xdigit($val) !== false) {
        ?>
                    <div class="grandParentContaniner fixedContainer">
                        <div class="parentContainer">
                            <form class="form-group login" method="post" action="create-new-password.php?<?php echo "selector=$sel&validator=$val"; ?>">
                                <?php include('errors.php'); ?>
                                <input type="hidden" name="selector" value="<?php echo $sel ?>">
                                <input type="hidden" name="validator" value="<?php echo $val ?>">
                                <img style="width: 10%; height: 10%" src="img/favicon.png"><br style="margin: 1.5% 0">
                                <h5>RESET YOUR PASSWORD</h5>
                                <div class="input-group">
                                    <input type="password" name="pwd" placeholder="New Password">
                                </div>
                                <div class="input-group">
                                    <input type="password" name="pwd-repeat" placeholder="Confirm Password">
                                </div>
                                <div class="input-group">
                                    <button type="submit" class="btn" name="reset-pwd-submit">RESET PASSWORD</button>
                                </div>
                            </form>
                        </div>
                    </div>
        <?php
                }
            }

        ?>
		
	</body>
</html>