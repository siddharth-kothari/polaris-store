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
		<div class="grandParentContaniner fixedContainer">
			<div class="parentContainer">
				<form class="form-group login" method="post" action="login.php">
					<?php $errors = array(); include('errors.php'); ?>
					<img style="width: 10%; height: 10%" src="img/favicon.png"><br style="margin: 1.5% 0">
					<h5>EMAIL SENT</h5>
                    <p style="padding-left: 9%; padding-right: 9%">An email has been sent to your email address with instructions on how to reset your password. If you don't receive it within a few minutes, please check that you used the e-mail address for your Polaris account and try again or contact us for help.</p>
					<div class="input-group">
						<button type="submit" class="btn" name="login">SIGN IN</button>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>