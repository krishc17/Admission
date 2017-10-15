<?php 
	session_start();
	$email = $_SESSION['email'];
	$msg=" ";
	if(isset($_SESSION['email'])){
	
	$databaseHost = "localhost";
	$databaseUsername = "root";
	$databasePassword = "";
	$databaseName = "admission2018";
		

	$conn = new PDO("mysql:host=$databaseHost;dbname=$databaseName;", $databaseUsername, $databasePassword);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$sql = "SELECT id,coursename FROM courses";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$users = $stmt->fetchAll();
	//id

	$mysqli = new mysqli($databaseHost,$databaseUsername,$databasePassword,$databaseName);
	//
	$query = "SELECT * FROM student_data WHERE email = '{$_SESSION['email']}'"; 
	$result = $mysqli->query($query) or die($mysqli->error);
	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			foreach($row as $val) {
				$details[] = $val;
			}
		}   
	}
	//selected course
	$id = $details[0];

	if(isset($_POST['applyCourse'])){
		$selectedCourse = $_POST['selectedCourse'];
		$insertQuery = "INSERT INTO selected_courses values(NULL,'$details[0]','$selectedCourse',1)";
		if ($conn->query($insertQuery))
		{
			$msg = "<p style='text-align:center; color:green;'>Application Successful/p>";
		}
		else
		{
			$msg = "<p style='text-align:center; color:red;'>An Error Occured Contact SysAdmin</p>";
		}
		
	}
?>
<!DOCTYPE html>
<html lang="en">
	<?php include 'home-menu.php'; ?>
	<?php include 'user-side-menu.php'; ?>
	<link rel="stylesheet" href="css/apply.css" type="text/css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.js"></script>
	<script src="js/apply.js"></script>
	<div class="container">
		<div class="col-lg-9">
			<div class="panel panel-default">
				<div class="panel-heading main-color-bg">
					<h3 class="panel-title">
						<b>Apply For Course</b>
					</h3>
				</div>
				<div class="panel-body">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-lg-10">
								<form action="apply.php" method="post">
									<div class="col-sm-12 form-group">
										<label>Courses</label>
										<select class="form-control" name="selectedCourse">
										<?php foreach($users as $user): ?>
        								<option value="<?= $user['coursename']; ?>"><?= $user['coursename'];?></option>
    									<?php endforeach; ?>
										</select>
									</div>
									<input class="btn btn-info" type="submit" name="applyCourse"  value="Submit">
								</form>
								<p><?php echo $msg;?></p>
							</div>
							<div class="col-sm-12 form-group">
							</div>
						</div>

					</div>

				</div>

			</div>
		</div>
	</div>
</html>
<?php
	}
		else
		{
		?>	
		<?php
		echo 'not logged in';
		}
		?>
	