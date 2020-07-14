<?php include('includes/reset-request.inc.php') ?>
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
				<form class="form-group login" method="post" action="reset-password.php">
					<?php include('errors.php'); ?>
					<img style="width: 10%; height: 10%" src="img/favicon.png"><br style="margin: 1.5% 0">
					<h5>FORGOT YOUR PASSWORD?</h5>
                    <p style="padding-left: 9%; padding-right: 9%">Please fill in the email that you used to register. You will be sent an email with instructions on how to reset your password.</p>
					<div class="input-group">
						<input type="text" name="email" placeholder="Email Address">
					</div>
					<div class="input-group">
						<button type="submit" class="btn" name="reset-req-submit">SEND EMAIL</button>
					</div>
					<p>Remember your password? <a href="login.php">Sign In</a></p>
				</form>
			</div>
		</div>
	</body>
</html>