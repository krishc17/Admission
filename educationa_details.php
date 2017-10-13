<?php include 'home-menu.php'; ?>
    <?php include 'user-side-menu.php'; ?>
              <!-- Educational Details -->
              <div class="panel panel-default">
                    <div class="panel-heading main-color-bg">
                        <h3 class="panel-title"><b>Educational Information</b></h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-lg-12">
                            <div class="row">
                                <form action="profile.php" method="post">
                                    <table class="table">
                                        <thead class="thead-inverse" style="background-color:#000;color:#fff;">
                                            <tr>
                                                <th>Examination</th>
                                                <th>Name of the University/ Board</th>
                                                <th>School/ College Name</th>
                                                <th>Aggreate Percentage / Grade</th>
                                                <th>Year of Passing</th>
                                                <th>No. of Attempt </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- SSC -->
                                            <tr align="center">
                                                <td>S.S.C</td>
                                                <td>
                                                    <input type="text" name="sscuniv" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="text" name="ssccoll" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="text" size="5" name="sscgrade" style="width:50px;" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="number" name="sscyearp" class="form-control">
                                                </td>
                                                <td>
                                                    <select class="form-control" name="sscattemp">
                                                        <option value="Select Attempt">Select..</option>
                                                        <option value="First">First</option>
                                                        <option value="Second">Second</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <!-- HSC -->
                                            <tr align="center">
                                                <td>H.S.C</td>
                                                <td>
                                                    <input type="text" name="hscuniv" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="text" name="hsccoll" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="text" size="5" name="hscgrade" style="width:50px;" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="number" name="hscyearp" class="form-control">
                                                </td>
                                                <td>
                                                    <select class="form-control" name="hscattemp">
                                                        <option value="Select Attempt">Select..</option>
                                                        <option value="First">First</option>
                                                        <option value="Second">Second</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <!-- Graduation -->
                                            <tr align="center">
                                                <td>Graduation
                                                    <br>
                                                    <font size="-2">Degree</font>
                                                    <input type="text" size="10" class="form-control" name="graddegree">
                                                </td>
                                                <td>
                                                    <input type="text" name="graduniv" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="text" name="gradcoll" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="text" size="5" name="gradgrade" style="width:50px;" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="number" name="gradyearp" class="form-control">
                                                </td>
                                                <td>
                                                    <select class="form-control">
                                                        <option value="Select Attempt" name="gradattemp">Select..</option>
                                                        <option value="First">First</option>
                                                        <option value="Second">Second</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <!-- P. Graduation -->
                                            <tr align="center">
                                                <td>Post Graduation
                                                    <br>
                                                    <font size="-2" face="Verdana">Degree</font>
                                                    <input type="text" size="10" class="form-control" tabindex="24" name="postgdegree">
                                                </td>
                                                <td>
                                                    <input type="text" name="postgraduniv" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="text" name="postgradcoll" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="text" size="5" name="postgradgrade" style="width:50px;" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="number" name="postgradyearp" class="form-control">
                                                </td>
                                                <td>
                                                    <select class="form-control" name="postgradattemp">
                                                        <option value="Select Attempt">Select..</option>
                                                        <option value="First">First</option>
                                                        <option value="Second">Second</option>
                                                    </select>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>                         
                            <input type="submit" name="submitEducationDetails" class="form-control">
							</form>
