<?php
    session_start();
    $a="";
    $msg="";
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

        if(isset($_POST['submitEducationDetails_BE'])){
            // hardcoding in variables

            //queries_setting user ID
            $id = $details[0];
            //Connection
            $conn = new PDO("mysql:host=$databaseHost;dbname=$databaseName;", $databaseUsername, $databasePassword);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //Query to check education information
            $eQuery = $conn->prepare( "SELECT `ID` FROM `education_information` WHERE `ID` = ?" );			
			$eQuery->bindValue( 1, $details[0]);
            $eQuery->execute();
            if($eQuery->rowCount() > 0 )
			{	
                $msg = "We Already Have Your Details";
                $a = "readonly";

			}
			else{
			    try{


                    $insertEducationQry_be = "INSERT INTO 
                                   education_information_be 
                                        VALUES                 
                                        (NULL,'$id')";
                    $insertAppliedCourse_BE="";
                if ($conn->query($insertEducationQry_be))
                {
                            $msg = "Data Collected Successful. You Can Apply now";
                }
                else
                {
                            $msg = "An Error Occured Contact SysAdmin";
                }
                    }
                    catch(PDOException $e){
                        echo $e;
                    }

            }
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
                                                <input type="text" name="sscboardbe" class="form-control" required <?php echo $a?>>
                                            </td>

                                            <td>
                                                <input type="text" name="sscyearpassbe" class="form-control"  required <?php echo $a?>>
                                            </td>

                                            <td>
                                            
                                            </td>

                                            <td>
                                                <input type="text" name="sscperbe" style="width:50px;" class="form-control"  required <?php echo $a?>>
                                            </td>

                                            <td>
                                                <input type="text" name="sscgradebe" class="form-control"  required <?php echo $a?>>
                                            </td>
                                        </tr>

                                        <!-- HSC -->
                                        <tr align="center">
                                            <td>H.S.C</td>
                                            <td>
                                                <input type="text" name="hscboardbe" class="form-control"  required <?php echo $a?>>
                                            </td>
                                            <td>
                                                <input type="text" name="hscyearpassbe" class="form-control"  required <?php echo $a?>>
                                            </td>
                                            <td>
                                                <input type="text" name="hscpcm" style="width:50px;" class="form-control"  required <?php echo $a?>>
                                            </td>
                                            <td>
                                                <input type="number" name="hscperbe" style="width:50px;" class="form-control"  required <?php echo $a?>>
                                            </td>
                                            <td>
                                                <input type="text" name="hscgradebe" class="form-control"  required <?php echo $a?>>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- JEE and ACPC Information -->
            <div class="panel panel-default">
                <div class="panel-heading main-color-bg">
                    <h3 class="panel-title"> <b>JEE(Main)/ACPC-Information</b> </h3>
                </div>
                <div class="panel-body">
                    <div class="col-lg-12">
                        <div class="row">
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
                                            <input type="text" name="rollnobe" class="form-control" required <?php echo $a?>>
                                        </td>
                                        <td>
                                            <input type="text" name="phybe" style="width:50px;" class="form-control" required <?php echo $a?>>
                                        </td>

                                        <td>
                                            <input type="text" name="chembe" style="width:50px;" class="form-control" required <?php echo $a?>>
                                        </td>

                                        <td>
                                            <input type="text" name="matbe" style="width:50px;" class="form-control" required <?php echo $a?>>
                                        </td>

                                        <td>
                                            <input type="text" name="totbe" style="width:50px;" class="form-control" required <?php echo $a?>>
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
                                            <input type="text" name="rankbe" class="form-control" required <?php echo $a?>>
                                        </td>

                                        <td>
                                            <input type="text" name="c1be" class="form-control" required <?php echo $a?>>
                                        </td>

                                        <td>
                                            <input type="text" name="c2be" class="form-control" required <?php echo $a?>>
                                        </td>

                                        <td>
                                            <input type="text" name="acpcregbe" class="form-control" required <?php echo $a?>>
                                        </td>

                                        <td>
                                            <input type="text" name="acpcmeritbe" class="form-control" required <?php echo $a?>>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Priority -->
            <div class="panel panel-default">
                <div class="panel-heading main-color-bg">
                    <h3 class="panel-title"> <b>Branch Applied for</b> </h3>
                </div>
                <div class="panel-body">
                    <div class="col-lg-12">
                        <div class="row">
                            <p style="color:#BD0006;"> Branch Applied For (ME - Mechanical, CE- Civil, EE- Electrical, CSE- Computer Science and Engineering) </p>
                            <div class="row">

                                <div class="col-sm-3 form-group">
                                    <label> P1  </label>
                                    <select name="p1" id="" class="form-control" style="width:auto;" required <?php echo $a?>> 
                                        <option value="Select">Select</option>
                                        <option value="ME">ME</option>
                                        <option value="CE">CE</option>
                                        <option value="EE">EE</option>
                                        <option value="CSE">CSE</option>
                                    </select>
                                </div>

                                <div class="col-sm-3 form-group">
                                    <label> P2  </label>
                                    <select name="p2" id="" class="form-control" style="width:auto;"  required <?php echo $a?> >
                            <option value="Select">Select</option>
                            <option value="ME">ME</option>
                            <option value="CE">CE</option>
                            <option value="EE">EE</option>
                            <option value="CSE">CSE</option>
                        </select>
                                </div>

                                <div class="col-sm-3 form-group">
                                    <label> P3  </label>
                                    <select name="p3" id="" class="form-control" style="width:auto;"  required <?php echo $a?>>
                            <option value="Select">Select</option>
                            <option value="ME">ME</option>
                            <option value="CE">CE</option>
                            <option value="EE">EE</option>
                            <option value="CSE">CSE</option>
                        </select>
                                </div>

                                <div class="col-sm-3 form-group">
                                    <label> P4  </label>
                                    <select name="p4" id="" class="form-control" style="width:auto;"  required <?php echo $a?>>
                            <option value="Select">Select</option>
                            <option value="ME">ME</option>
                            <option value="CE">CE</option>
                            <option value="EE">EE</option>
                            <option value="CSE">CSE</option>
                        </select>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <input type="submit" style="color:#BD0006;" name="submitEducationDetails_BE" class="form-control">
            </form>
            <?php
        }
        else
    {
        ?>
                <?php
header("Location: ../index.php");
    }
    ?>