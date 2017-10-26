<?php
    session_start();
	if(isset($_SESSION['email']))
	{
        //function this
        $email = $_SESSION['email'];
        $databaseHost = "localhost";
        $databaseUsername = "root";
        $databasePassword = "";
        $databaseName = "admission2018";
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
        if(isset($_POST['submitEducationDetails'])){
            $id = $details[0];
            $insertEducationQry = "INSERT INTO 
                                   education_information 
                                        (ID,ssc_board,ssc_school,ssc_per,ssc_attempt,
                                        hsc_board,hsc_school,hsc_per,hsc_attempt,
                                        grad_deg,grad_board,grad_school,grad_year,grad_attempt,
                                        pgrad_deg,pgrad_board,pgrad_school,pgrad_year,pgrad_attempt)
                    
                                        VALUES
                                        
                                        ('$id',)";

        }
     ?>

    <?php include 'home-menu.php'; ?>
    <?php include 'user-side-menu.php'; ?>
    <!-- Educational Details -->
    <div class="container">
        <div class="col-lg-9">
            <div class="panel panel-default">
                <div class="panel-heading main-color-bg">
                    <h3 class="panel-title"> <b>Educational Information</b> </h3>
                </div>
                <div class="panel-body">
                    <div class="col-lg-12">
                        <div class="row">
                            <form action="educational_details_be.php" method="post">
                                <table class="table">
                                    <thead class="thead-inverse" style="background-color:#000;color:#fff;">
                                        <tr>
                                            <th>Examination</th>
                                            <th>Name of the University/ Board</th>
                                            <th>Year Of Passing</th>
                                            <th>PCM%</th>
                                            <th>Percentage/Percentile</th>
                                            <th>Class/Grade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- SSC -->
                                        <tr align="center">
                                            <td>S.S.C</td>
                                            <td>
                                                <input type="text" name="sscboardbe" class="form-control">
                                            </td>

                                            <td>
                                                <input type="text" name="sscyearpassbe" class="form-control">
                                            </td>

                                            <td>
                                                -
                                            </td>

                                            <td>
                                                <input type="text" name="sscperbe" style="width:50px;" class="form-control">
                                            </td>

                                            <td>
                                                <input type="text" name="sscgradebe" class="form-control">
                                            </td>
                                        </tr>

                                        <!-- HSC -->
                                        <tr align="center">
                                            <td>H.S.C</td>
                                            <td>
                                                <input type="text" name="hscboardbe" class="form-control">
                                            </td>
                                            <td>
                                                <input type="text" name="hscyearpassbe" class="form-control">
                                            </td>
                                            <td>
                                                <input type="text" name="hscpcm" style="width:50px;" class="form-control">
                                            </td>
                                            <td>
                                                <input type="number" name="hscperbe" style="width:50px;" class="form-control">
                                            </td>
                                            <td>
                                                <input type="text" name="hscgradebe" class="form-control">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>


                                <div class="panel panel-default">
                                    <div class="panel-heading main-color-bg">
                                        <h3 class="panel-title"> <b>JEE(Main)/ACPC-Information</b> </h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <form action="educational_details_be.php" method="post">
                                                    <table class="table">
                                                        <thead class="thead-inverse" style="background-color:#000;color:#fff;">
                                                            <tr>
                                                                <th>Roll Number</th>
                                                                <th>Physics</th>
                                                                <th>Chemistry</th>
                                                                <th>Mathematics</th>
                                                                <th>Total</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            <!--JEE-->
                                                            <tr align="center">
                                                                <td>
                                                                    <input type="text" name="" class="form-control">
                                                                </td>
                                                                <td>
                                                                    <input type="text" name="" style="width:50px;" class="form-control">
                                                                </td>

                                                                <td>
                                                                    <input type="text" name="" style="width:50px;" class="form-control">
                                                                </td>

                                                                <td>
                                                                    <input type="text" name="" style="width:50px;" class="form-control">
                                                                </td>

                                                                <td>
                                                                    <input type="text" name="" style="width:50px;" class="form-control">
                                                                </td>
                                                            </tr>
                                                        </tbody>

                                                        <thead class="thead-inverse" style="background-color:#000;color:#fff;">
                                                            <tr>
                                                                <th>JEE main Rank</th>
                                                                <th>Contact No. 1</th>
                                                                <th>Contact No. 2</th>
                                                                <th>ACPC Registration No.(optional)</th>
                                                                <th>ACPC Merit No.(optional)</th>
                                                            </tr>
                                                        </thead>
                                                        
                                                        <tbody>
                                                            <!--JEE ACPC-->
                                                            <tr align="center">
                                                                <td>
                                                                    <input type="text" name="" class="form-control">
                                                                </td>

                                                                <td>
                                                                    <input type="text" name="" class="form-control">
                                                                </td>

                                                                <td>
                                                                    <input type="text" name="" class="form-control">
                                                                </td>

                                                                <td>
                                                                    <input type="text" name="" class="form-control">
                                                                </td>

                                                                <td>
                                                                    <input type="text" name="" class="form-control">
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <input type="submit" name="submitEducationDetails_BE" class="form-control">
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                <?php
        }
        else
    {
        ?>
                                    <?php
        echo 'not logged in';
    }
    ?>