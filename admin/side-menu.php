<?php

	if(isset($_SESSION['email']))
	{
        $email = $_SESSION['email'];
        $databaseHost = "localhost";
        $databaseUsername = "root";
        $databasePassword = "";
        $databaseName = "admission2018";
        
        $mysqli = new mysqli($databaseHost,$databaseUsername,$databasePassword,$databaseName);
        $query = "SELECT count(*) FROM student_data"; 
        $result = $mysqli->query($query) or die($mysqli->error);
		if($result->num_rows > 0) 
		{
			while($row = $result->fetch_assoc()) 
			{
				foreach($row as $val) 
				{
                    
                }
            }   
		}
	}
?>
<section id="main">
<div class="container">
<div class="row">
<div class="col-md-3">
    <div class="list-group">
        <a href="admin.php" class="list-group-item active main-color-bg">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Sidemenu</a>
        <a href="#" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Transactions <span class="badge">12</span></a>
        <a href="records.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Records <span class="badge"><?php echo $val;?></span></a>
        <a href="test-questions.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Test <span class="badge">203</span></a>
        <a href="#" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Profile <span class="badge"></span></a>
        <a href="addCourse.php" class="list-group-item"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Course <span class="badge"></span></a>
    </div>
</div>