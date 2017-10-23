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
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <!-- Date picker JS-->

        <script>
            $(function() {
                var dateFormat = "dd-mm-yy",
                    from = $("#from")
                    .datepicker({
                        defaultDate: "+1w",
                        changeMonth: true,
                        numberOfMonths: 3,
                        changeMonth: true,
                        changeYear: true

                    })
                    .on("change", function() {
                        to.datepicker("option", "minDate", getDate(this));
                    }),
                    to = $("#to").datepicker({
                        defaultDate: "+1w",
                        changeMonth: true,
                        numberOfMonths: 3,
                        changeMonth: true,
                        changeYear: true
                    })
                    .on("change", function() {
                        from.datepicker("option", "maxDate", getDate(this));
                    });

                function getDate(element) {
                    var date;
                    try {
                        date = $.datepicker.parseDate(dateFormat, element.value);
                    } catch (error) {
                        date = null;
                    }
                    return date;
                }
            });
        </script>

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
                        <form action="records.php" method="post">

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="from">From</label>
                                    <input type="text" data-format="dd/MM/yyy" id="from" placeholder="dd-MM-yyyy" name="from" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="to">To</label>
                                    <input type="text" data-format="dd/MM/yyy" id="to" placeholder="dd-MM-yyyy" name="to" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleSelect1">Select Course</label>
                                    <select class='form-control' id='exampleSelect1' name='cname'>
								                     <?php
								                          $mysqli = mysqli_connect($databaseHost,$databaseUsername,$databasePassword,$databaseName);
								                          $query = "SELECT * FROM courses";
								                          $result = mysqli_query($mysqli,$query);
								                          while($addrow = mysqli_fetch_array($result)){
								                            echo "<option>$addrow[1]</option>";
								                          }
								                     ?>
                    						</select>
                              </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Search</label>
                                    <input type="submit" name="searchQuery" class="form-control" value="Search">
                                </div>
                            </div>
                    </div>

                    <br/>
                    <table class="table table-striped table-hover table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Student Name</th>
                            <th>Email</th>
                            <th>Course</th>
                            <th>Joined On</th>
                        </tr>
                        <?php
                $mysqli = mysqli_connect($databaseHost,$databaseUsername,$databasePassword,$databaseName);
                if (isset($_POST['searchQuery'])){
                  // TODO: Echo Results of Query
                  //SELECT * FROM `student_data` WHERE register_date BETWEEN '2017-03-01' and '2017-10-30'
                  $from = $_POST['from'];
                  $to = $_POST['to'];
                  $cname =$_POST['cname'];
                  $query = "select student_data.id,student_data.FULLNAME,student_data.EMAIL,selected_courses.coursename,student_data.register_date FROM student_data JOIN selected_courses ON student_data.ID=selected_courses.ID
                            WHERE  student_data.register_date BETWEEN '$from' AND '$to'
                            ";
                            echo $from . ' ' . $to.' '. $cname;
                  while($addrow = mysqli_fetch_array($result)){
                              $newDate = date('d-M-Y',strtotime($addrow[4]));
                              echo "<tr>";
                              echo "<td>$addrow[0]</td>";
                              echo "<td>$addrow[1]</td>";
                              echo "<td>$addrow[2]</td>";
                              echo "<td>$addrow[3]</td>";
                              echo "<td>$newDate</td>";
                              echo "</tr>";
                            }
                }

                else{
                  $query = "select student_data.id,student_data.FULLNAME,student_data.EMAIL,selected_courses.coursename,student_data.register_date FROM student_data JOIN selected_courses ON student_data.ID=selected_courses.ID";
                  $result = mysqli_query($mysqli,$query);
                  while($addrow = mysqli_fetch_array($result)){
                    $newDate = date('d-M-Y',strtotime($addrow[4]));
                    echo "<tr>";
                    echo "<td>$addrow[0]</td>";
                    echo "<td>$addrow[1]</td>";
                    echo "<td>$addrow[2]</td>";
                    echo "<td>$addrow[3]</td>";
                    echo "<td>$newDate</td>";
                    echo "</tr>";
                  }
                }
            ?>
                    </table>
                    </form>
                </div>
            </div>
        </div>
        </div>
        </div>
        </section>

        <?php
  }
else{
?>
<?php header("Location: ../admin/");
}
?>
