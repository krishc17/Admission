<!-- No Need of session_start(); just yet -->
<a href="index.php"> <img src="img/nuv_logo.png" /> </a>
<title> Navrachna Admission Portal </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css" type="text/css">
<link rel="stylesheet" href="css/nuv-color.css" type="text/css">
<link rel="stylesheet" href="css/login.css">
  
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     
<!-- Jquery -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!-- Dropdown -->
<script>
  $(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
    });
        
  $('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
  }, 
  
  function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
  });
</script>
    
<!-- Date picker JS-->
<script>
  $( function() {
    $( "#datepicker" ).datepicker({
      dateFormat: 'dd-mm-yy',
      changeMonth: true,
      changeYear: true,
      yearRange: '1980:2005'
    });
  } );
  </script>

  
      <div class="navbar-nuvcolor navbar-inverse text-center h4">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse dropdown" id="myNavbar">
            <ul class="nav navbar-nav vertical" style="text-decoration:none;">
              <li>
                <a class="link-3" href="index.php">Home</a>
              </li>

              <li>
                <a class="link-3" href="about.php"> About </a>
              </li>

              <li class="dropdown" style="color:rgba(8, 8, 8, 0.09);">
                  <a href="courses.php" class="dropdown-toggle" data-toggle="dropdown"> Courses</a>
                  <ul class="dropdown-menu">
                    <li><a href="#">School Of Business And Law</a></li>
                    <li><a href="set.php">School of Engineering and Technology</a></li>
                    <li><a href="#">School of Liberal Studies and Education</a></li>
                    <li><a href="#">School of Environmental Design and Architecture</a></li>
                </ul>
                </a>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <a href="#" data-toggle="modal" class="navbar-brand" data-target="#login-modal"> Login</a>
              <a class="navbar-brand" href="register.php"> Register </a>
            </ul>
          </div>
        </div>
      </div>
      <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
          <div class="loginmodal-container">
            <h1>Login to Your Account</h1>
            <br>
              <form method="post" action="loginHandler.php">
                <input type="email" name="email" placeholder="Email" required>
                  <input type="password" name="pass" placeholder="Password" required>
                    <input type="submit" name="login" class="login loginmodal-submit navbar-inverse" value="Login">
                    </form>
                    <div class="login-help">
                      <a href="register.php">Register </a> - 
                      <a href="#">Forgot Password </a>
                    </div>
                  </div>
                </div>
              </div>
