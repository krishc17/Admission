<?php 
	session_start();
	if(isset($_SESSION['email']))
	{
    include 'adminLoginHandler.php';
    ?>
<body>
	<!-- Almost Common for Every Page -->
	<?php include 'adminMenu.php' ?>
	<header id="header">
		<div class="container">
			<div class="row">
				<div class="col-md-10">
					<h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Add Courses </h1>
				</div>
			</div>
		</div>
		</div>
		</div>
	</header>
	<section id="breadcrumb">
		<div class="container">
			<ol class="breadcrumb">
				<li class="active">Courses</li>
			</ol>
		</div>
	</section>
	<?php include 'side-menu.php' ?>
	<div class="col-md-9">
		<!-- Website Overview -->
		<div class="panel panel-default">
			<div class="panel-heading main-color-bg">
				<h3 class="panel-title">Delete Course</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-10">
						<?php                      
                      $id = $_GET['id'];
                      $result = $conn->prepare("DELETE FROM COURSES WHERE ID = ?");
                      $result->bindParam(1,$id);
                      $result->execute();
                      header("Location:../admin/addCourse.php");
                  ?>

					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</section>

</html>
<?php
  }
else{
?>
	<?php
 header("Location: ../admin/");	
}
?>