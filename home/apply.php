<?php 
	session_start();
	if(isset($_SESSION['email'])){
	$pdo = new PDO('mysql:host=localhost;dbname=admission2018', 'root', '');
	$sql = "SELECT id,coursename FROM courses";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	$users = $stmt->fetchAll()
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
							<div class="col-lg-9">
								<form action="" method="post">
									<div class="col-sm-12 form-group">
										<label>Courses</label>
										<select class="form-control">
										<?php foreach($users as $user): ?>
        								<option value="<?= $user['id']; ?>"><?= $user['coursename'];?></option>
    									<?php endforeach; ?>
										</select>
									</div>
								</form>
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
	