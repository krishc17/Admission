<title>
Navrachna Admission Portal
</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();
});
</script>
<link rel="stylesheet" href="style.css" type="text/css">
<style>
@import url(http://fonts.googleapis.com/css?family=Roboto);
/****** LOGIN MODAL ******/
.loginmodal-container {
padding: 30px;
max-width: 350px;
width: 100% !important;
background-color: #F7F7F7;
margin: 0 auto;
border-radius: 2px;
box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
overflow: hidden;
font-family: roboto;
}
.loginmodal-container h1 {
text-align: center;
font-size: 1.8em;
font-family: roboto;
}
.loginmodal-container input[type=submit] {
width: 100%;
display: block;
margin-bottom: 10px;
position: relative;
}
.loginmodal-container input[type=text], input[type=password] {
height: 44px;
font-size: 16px;
width: 100%;
margin-bottom: 10px;
-webkit-appearance: none;
background: #fff;
border: 1px solid #d9d9d9;
border-top: 1px solid #c0c0c0;
/* border-radius: 2px; */
padding: 0 8px;
box-sizing: border-box;
-moz-box-sizing: border-box;
}
.loginmodal-container input[type=text]:hover, input[type=password]:hover {
border: 1px solid #b9b9b9;
border-top: 1px solid #a0a0a0;
-moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
-webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
}
.loginmodal {
text-align: center;
font-size: 14px;
font-family: 'Arial', sans-serif;
font-weight: 700;
height: 36px;
padding: 0 8px;
/* border-radius: 3px; */
/* -webkit-user-select: none;
user-select: none; */
}
.loginmodal-submit {
/* border: 1px solid #3079ed; */
border: 0px;
color: #fff;
text-shadow: 0 1px rgba(0,0,0,0.1); 
background-color: #4d90fe;
padding: 17px 0px;
font-family: roboto;
font-size: 14px;
/* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
}
.loginmodal-submit:hover {
/* border: 1px solid #2f5bb7; */
border: 0px;
text-shadow: 0 1px rgba(0,0,0,0.3);
background-color: #357ae8;
/* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
}
.loginmodal-container a {
text-decoration: none;
color: #666;
font-weight: 400;
text-align: center;
display: inline-block;
opacity: 0.6;
transition: opacity ease 0.5s;
} 
.login-help{
font-size: 12px;
}
body {
margin: 0px;
}
nav {
margin-top: 10px;
padding: 35px;
text-align: center;
font-family: Raleway;
box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
}
.link-3 {
transition: 0.3s;
color: #ffffff;
font-size: 20px;
text-decoration: none;
padding: 0 10px;
margin: 0 10px;
}
.link-3:hover {
background-color: #ffffff;
color: #EEA200;
padding: 10px 10px;
}
.navbar-inverse {
background-color: #B4432D;
border-color: #080808;
}
#mySidenav a {
position: absolute;
left: -80px;
transition: 0.3s;
padding: 10px;
width: 100px;
text-decoration: none;
font-size: 20px;
color: white;
}
#mySidenav a:hover {
left: 0;
}
#about {
top: 140px;
background-color: #4CAF50;
}
#blog {
top: 200px;
background-color: #2196F3;
}
#projects {
top: 260px;
background-color: #f44336;
}
#contact {
top: 320px;
background-color: #555
}
.img{
position:absolute;
top:30px;
}
.lclass{
margin-right:50px;
padding-right:50px;
}
</style>
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
				 <li><a class="link-3" href="home.php">Home</a></li>
				 <li><a class="link-3" href="profile.php">Profile</a></li>
				 <li><a class="link-3" href="apply.php">Apply</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right vertical">
				 <a href="#" data-toggle="modal" class="navbar-brand" data-target="#login-modal">Logout</a>
			</ul>
	 </div>
</div>
</nav>
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
<div class="modal-dialog">
	 <div class="loginmodal-container">
			<h1>Login to Your Account</h1>
			<br>
			<form>
				 <input type="text" name="user" placeholder="Username">
				 <input type="password" name="pass" placeholder="Password">
				 <input type="submit" name="login" class="login loginmodal-submit" value="Login">
			</form>
			<div class="login-help">
				 <a href="register.php">Register</a> - <a href="#">Forgot Password</a>
			</div>
	 </div>
</div>
</div>