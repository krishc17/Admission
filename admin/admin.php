<?php 
	session_start();
	if(isset($_SESSION['email']))
	{
    include 'adminLoginHandler.php';
    $mysqli = new mysqli($databaseHost,$databaseUsername,$databasePassword,$databaseName);
    $query = "SELECT count(*) FROM student_data"; 
    // Count of Student Data
    $result = $mysqli->query($query) or die($mysqli->error);
    if($result->num_rows > 0) 
    {
      while($row = $result->fetch_assoc()) 
      {
        foreach($row as $val) 
        {
                
        }
        }   
    }
?>

<body>
	<!-- Almost Common for Every Page -->
	<?php include'adminMenu.php' ?>
	<header id="header">
		<div class="container">
			<div class="row">
				<div class="col-md-10">
					<h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard </h1>
				</div>
			</div>
		</div>
		</div>
		</div>
	</header>
	<section id="breadcrumb">
		<div class="container">
			<ol class="breadcrumb">
				<li class="active">Dashboard</li>
			</ol>
		</div>
	</section>
	<?php include 'side-menu.php' ?>
	<div class="col-md-9">
		<!-- Website Overview -->
		<div class="panel panel-default">
			<div class="panel-heading main-color-bg">
				<h3 class="panel-title"> Overview</h3>
			</div>
			<div class="panel-body">
				<div class="col-md-6">
					<div class="well dash-box">
						<h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
							<?php echo $val; ?>
						</h2>
						<h4>Admissions</h4>
					</div>
				</div>
				<div class="col-md-6">
					<div class="well dash-box">
						<h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 12</h2>
						<h4>Test Questions</h4>
					</div>
				</div>
			</div>
		</div>
		<!-- Latest Users -->
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Recent Admissions</h3>
			</div>
			<div class="panel-body">
				<table class="table table-striped table-hover table-bordered">
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Joined</th>
					</tr>
					<?php
                $mysqli = mysqli_connect($databaseHost,$databaseUsername,$databasePassword,$databaseName);
                $query = "SELECT * FROM student_data ORDER BY id DESC LIMIT 5 ";
                $result = mysqli_query($mysqli,$query);       
                while($addrow = mysqli_fetch_array($result)) 
                  {
                    $newDate = date('d-M-Y',strtotime($addrow[11]));
                    echo "<tr>";
                    echo "<td>$addrow[0]</td>";
                    echo "<td>$addrow[1]</td>";
                    echo "<td>$addrow[9]</td>";
                    echo "<td>$newDate</td>";
                    echo "</tr>";

                  }
                  ?>
				</table>
			</div>
		</div>
	</div>
	</div>
	</div>
	</section>
	<footer id="footer">
	</footer>
</body>

</html>
<?php 
  } 
  else
    {
      header('Location: index.php');
  }
?>