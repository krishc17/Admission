<!-- No Need of session_start(); just yet -->``
<title> Navrachna Admission Portal </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css" type="text/css">
<link rel="stylesheet" href="css/login.css" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>

<nav class="navbar navbar-inverse text-center h4">
<div class="container-fluid">
  <a class="navbar-brand" href="index.php">
  <img class="img" src="img/nuv_logo.png" />
  </a>
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
    <span class="icon-bar">
    </span>
    <span class="icon-bar">
    </span>
    <span class="icon-bar">
    </span>
    </button>
    <a class="navbar-brand" href="index.php">Uni Logo
    </a>
  </div>
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav vertical" style="text-decoration:none;">
      <li>
        <a class="link-3" href="index.php">Home
        </a>
      </li>
      <li>
        <a class="link-3" href="about.php">About
        </a>
      </li>
      <li>
        <a class="link-3" href="courses.php">Courses
        </a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <a href="#" data-toggle="modal" class="navbar-brand" data-target="#login-modal">Login
      </a>
      <a class="navbar-brand" href="register.php">Register
      </a>
    </ul>
  </div>
</div>
</nav>
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
<div class="modal-dialog">
  <div class="loginmodal-container">
    <h1>Login to Your Account
    </h1>
    <br>
    <form method="post" action="dbConfig.php">
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="pass" placeholder="Password" required>
      <input type="submit" name="login" class="login loginmodal-submit" value="Login">
    </form>
    <div class="login-help">
      <a href="register.php">Register
      </a> - 
      <a href="#">Forgot Password
      </a>
    </div>
  </div>
</div>
</div>
