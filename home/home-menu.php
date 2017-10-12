<?php

	if(isset($_SESSION['email']))
	{
        $email = $_SESSION['email'];
        $databaseHost = "localhost";
        $databaseUsername = "root";
        $databasePassword = "";
        $databaseName = "admission2018";
        
        $mysqli = new mysqli($databaseHost,$databaseUsername,$databasePassword,$databaseName);
        $query = "SELECT * FROM student_data WHERE email = '{$_SESSION['email']}'"; 
        $result = $mysqli->query($query) or die($mysqli->error);
		if($result->num_rows > 0) 
		{
			while($row = $result->fetch_assoc()) 
			{
				foreach($row as $val) 
				{
                    $details[] = $val;
                }
            }   
		}
	}
?>

<title>
		Navrachna Admission Portal
</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/nuv-color.css">
<link rel="stylesheet" href="style.css" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
		$(document).ready(function() {
				$('[data-toggle="tooltip"]').tooltip();
		});
</script>
<a href="home.php"><img class="img" src="img/nuv_logo.png" /> </a>
<div class="navbar-nuvcolor navbar-inverse text-center h4">
		<div class="container-fluid">
				<div style="margin-left:100px;" class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav vertical lclass" style="text-decoration:none;"> 
							<li><a class="link-3" href="index.php">Home</a> </li>
							<li><a class="link-3" href="profile.php">Profile</a></li>
							<li><a class="link-3" href="apply.php">Apply</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right horizontal">
								<p class="navbar-brand">Welcome <?php echo $details[1];?></p>
								<a href="logout.php" class="navbar-brand" >Logout</a>
						</ul>
				</div>
		</div>
</div>
