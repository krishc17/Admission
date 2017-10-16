<html>
<?php include_once 'dbConfig.php'; ?>
<?php include 'menu.php'; ?>
<link rel="stylesheet" type="text/css" href="css/regForm.css">
<body>
	<div class="container">
		<h1 class="well" style="text-align: center;">Registration Form</h1>
			<?php echo $msg;?>
		<div class="col-lg-12 well">
			<div class="row">
				<form action="register.php" enctype="multipart/form-data" method="post">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Fullname</label>
								<input type="text" name="fullname" placeholder="Enter Full Name Here.." class="form-control" required>
							</div>	

							<div class="col-sm-6 form-group">
								<label>Image</label>
								<input type="file" name="profile_image" accept="image/*" required>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Gender </label>
								<input list="gender" name="gender" class="form-control" placeholder="Select Gender" required>
								<datalist id="gender">
									<option value="Male"> Male </option>
									<option value="Female"> Female </option>
								</datalist>
							</div>
							<div class="col-sm-6 form-group">
								<label>Blood Group</label>
								<input type="text" name="bgroup" placeholder="Enter Bloodgroup..(B+VE or B-VE)" class="form-control" required>
							</div>
						</div>
						<div class="form-group">
							<label>Address</label>
							<textarea name="address" placeholder="Enter Address Here.." rows="3" class="form-control" required></textarea>
						</div>
						<div class="row">
							<div class="col-sm-3 form-group">
                                <label>Date of Birth</label>
                                <input type="text" data-format="dd/MM/yyy" id="datepicker"  placeholder="dd-MM-yyyy"  name="dob" class="form-control"  required>
							</div>
							<div class="col-sm-3 form-group">
								<label>City</label>
								<input type="text" name="city" placeholder="Enter City Name Here.."class="form-control" required>
							</div>
							<div class="col-sm-3 form-group">
								<label>State</label>
								<input type="text" name="state" placeholder="Enter State Name Here.." class="form-control" required>
							</div>
							<div class="col-sm-3 form-group">
								<label>Zip</label>
								<input type="text"  name="zip" placeholder="Enter Zip Code Here.." class="form-control" required>
							</div>
						</div>
						<div class="form-group">
							<label>Phone Number</label>
							<input type="text" name="pnumber" placeholder="Enter Phone Number Here.." class="form-control" required>
						</div>
						<div class="form-group">
							<label>Email Address</label>
							<input type="email" name="email" placeholder="Enter Email Address Here.." class="form-control" required>
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Password</label>
								<input name="password" type="password" placeholder="Enter Password.." class="form-control" required>
							</div>
							<div class="col-sm-6 form-group">
								<label>Confirm Password</label>
								<input type="password" name="password2" placeholder="Confirm Password.." class="form-control" required>
							</div>
						</div>
						<input class="btn btn-lg btn-info" type="submit" name="addRegister"  value="Submit">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>