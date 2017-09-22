<html>
	     <?php include 'menu.php'; ?>
		 <?php include_once 'dbConfig.php'; ?>
 <style>
@import "font-awesome.min.css";
@import "font-awesome-ie7.min.css";
/* Space out content a bit */
body {
  padding-top: 20px;
  padding-bottom: 20px;
}

/* Everything but the jumbotron gets side spacing for mobile first views */
.header,
.marketing,
.footer {
  padding-right: 15px;
  padding-left: 15px;
}

/* Custom page header */
.header {
  border-bottom: 1px solid #e5e5e5;
}
/* Make the masthead heading the same height as the navigation */
.header h3 {
  padding-bottom: 19px;
  margin-top: 0;
  margin-bottom: 0;
  line-height: 40px;
}

/* Custom page footer */
.footer {
  padding-top: 19px;
  color: #777;
  border-top: 1px solid #e5e5e5;
}

/* Customize container */
@media (min-width: 768px) {
  .container {
    max-width: 730px;
  }
}
.container-narrow > hr {
  margin: 30px 0;
}

/* Main marketing message and sign up button */
.jumbotron {
  text-align: center;
  border-bottom: 1px solid #e5e5e5;
}
.jumbotron .btn {
  padding: 14px 24px;
  font-size: 21px;
}

/* Supporting marketing content */
.marketing {
  margin: 40px 0;
}
.marketing p + h4 {
  margin-top: 28px;
}

/* Responsive: Portrait tablets and up */
@media screen and (min-width: 768px) {
  /* Remove the padding we set earlier */
  .header,
  .marketing,
  .footer {
    padding-right: 0;
    padding-left: 0;
  }
  /* Space out the masthead */
  .header {
    margin-bottom: 30px;
  }
  /* Remove the bottom border on the jumbotron for visual effect */
  .jumbotron {
    border-bottom: 0;
  }
}
</style>
<body>
<div class="container">
    <h1 class="well">Registration Form</h1>
	<div class="col-lg-12 well">
	<div class="row">
				<form action="regInsert.php" method="post">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-12 form-group">
								<label>Fullname</label>
								<input type="text" name="fullname" placeholder="Enter Full Name Here.." class="form-control" required>
							</div>
						</div>
            <div class="row">
        <div class="col-sm-6 form-group">
							<label>Gender</label>
              <input list="gender" name="gender" class="form-control" placeholder="Select Gender" required>
              <datalist id="gender">
                <option value="Male">
                <option value="Female">
              </datalist>
				</div>
              <div class="col-sm-6 form-group">
								<label>Blood Group</label>
								<input type="text" name="bgroup" placeholder="Enter Bloodgroup..(B+VE or B-VE)" class="form-control">
							</div>
						</div>					
						
						<div class="form-group">
							<label>Address</label>
							<textarea name="address" placeholder="Enter Address Here.." rows="3" class="form-control"></textarea>
						</div>	
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>City</label>
								<input type="text" name="city" placeholder="Enter City Name Here.." class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>State</label>
								<input type="text" name="state" placeholder="Enter State Name Here.." class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Zip</label>
								<input type="text"  name="zip" placeholder="Enter Zip Code Here.." class="form-control">
							</div>		
						</div>
						
						<div class="form-group">
						<label>Phone Number</label>
						<input type="text" name="pnumber" placeholder="Enter Phone Number Here.." class="form-control">
					</div>

					<div class="form-group">
						<label>Email Address</label>
						<input type="email" name="email" placeholder="Enter Email Address Here.." class="form-control">
					</div>	

          	<div class="row">
							<div class="col-sm-6 form-group">
								<label>Password</label>
								<input name="password" type="password" placeholder="Enter Password.." class="form-control">
							</div>		
							<div class="col-sm-6 form-group">
								<label>Confirm Password</label>
								<input type="password" placeholder="Confirm Password.." class="form-control">
							</div>	
						</div>
					<button type="button" class="btn btn-lg btn-info" name="Submit" type="submit">Submit</button>					
					</div>
				</form> 
				</div>
	</div>
	</div>
	</body>
	</html>

