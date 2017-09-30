<?php include 'dbConfig.php';?>
<title>
		Navrachna Admission Portal
</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/login.css">
<link rel="stylesheet" href="style.css" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
		$(document).ready(function() {
				$('[data-toggle="tooltip"]').tooltip();
		});
</script>
<nav class="navbar navbar-inverse text-center h4">
		<div class="container-fluid">
				<a class="navbar-brand" href="home.php">
						<img class="img" src="img/nuv_logo.png" />
				</a>
				<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
						</button>
				</div>
				<div style="margin-left:100px;" class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav vertical lclass" style="text-decoration:none;">
								<li>
										<a class="link-3" href="home.php">Home
</a>
								</li>
								<li>
										<a class="link-3" href="profile.php">Profile
</a>
								</li>
								<li>
										<a class="link-3" href="apply.php">Apply
</a>
								</li>
						</ul>
						<ul class="nav navbar-nav navbar-right vertical">
								<a href="#" data-toggle="modal" class="navbar-brand" data-target="#login-modal">Logout
</a>
						</ul>
				</div>
		</div>
</nav>