<?php 
	session_start();
    if(isset($_SESSION['email']))
    {
      $email = $_SESSION['email'];
      $databaseHost = "localhost";
      $databaseUsername = "root";
      $databasePassword = "";
      $databaseName = "admission2018";
    ?>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Admin Area | Dashboard</title>
   <!-- Bootstrap core CSS -->
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <link href="css/style.css" rel="stylesheet">
   <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
</head>
<body>
   <!-- Almost Common for Every Page -->
   <?php include'adminMenu.php' ?>
   <header id="header">
      <div class="container">
         <div class="row">
            <div class="col-md-10">
               <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Search Records </h1>
            </div>
         </div>
      </div>
      </div>
      </div>
   </header>
   <section id="breadcrumb">
      <div class="container">
         <ol class="breadcrumb">
            <li class="active">Records</li>
         </ol>
      </div>
   </section>
   <?php include 'side-menu.php' ?>
   <div class="col-md-9">
      <!-- Website Overview -->
      <div class="panel panel-default">
         <div class="panel-heading main-color-bg">
            <h3 class="panel-title">Admissions Record</h3>
         </div>
         <div class="panel-body">
            <div class="row">
            <form action="" method="post">
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="exampleSelect1">Select Year</label>
                     <select class="form-control" id="exampleSelect1">
                        <option>2017</option>
                        <option>2018</option>
                        <option>2019</option>
                        <option>2020</option>
                        <option>2021</option>
                     </select>
                  </div>
               </div>
               
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="exampleSelect1">Select Course</label>
                     <select class='form-control' id='exampleSelect1'>
                     <?php
                          $mysqli = mysqli_connect($databaseHost,$databaseUsername,$databasePassword,$databaseName);
                          $query = "SELECT * FROM courses";
                          $result = mysqli_query($mysqli,$query);       
                          while($addrow = mysqli_fetch_array($result)) 
                          {
                            echo "<option>$addrow[1]</option>";

                          }
                     ?>
                    </select>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label>Search</label>
                      <input type="submit" name="searchQuery" class="form-control" value="Search">
                  </div>
               </div>
            </div>
            </form>
            <br>
            <table class="table table-striped table-hover table-bordered">
               <tr>
                  <th>ID</th>
                  <th>Student Name</th>
                  <th>Email</th>
                  <th>Course</th>
                  <th>Joined On</th>
               </tr>
               <?php
                if (isset($_POST['searchQuery'])){
                $mysqli = mysqli_connect($databaseHost,$databaseUsername,$databasePassword,$databaseName);
                $query = "SELECT * FROM student_data";
                $result = mysqli_query($mysqli,$query);       
                while($addrow = mysqli_fetch_array($result)) 
                  {
                    $newDate = date('d-M-Y',strtotime($addrow[11]));
                    echo "<tr>";
                    echo "<td>$addrow[0]</td>";
                    echo "<td>$addrow[1]</td>";
                    echo "<td>$addrow[9]</td>";
                    echo "<td>Msc (IT)</td>";
                    echo "<td>$newDate</td>";
                    echo "</tr>";
                  }
                }
                  ?>
            </table>
         </div>
      </div>
   </div>
   </div>
   </div>
   </section>
   <script>
      CKEDITOR.replace( 'editor1' );
   <?php
  }
else{
?> 
  <?php
echo 'not logged in ';
}
?>
