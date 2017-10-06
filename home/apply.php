<?php 
	session_start();
	if(isset($_SESSION['email']))
	{
		header('Location: ../home/apply.php');
	}
	else
	{
		header('Location: ../');
	}
?>
<!DOCTYPE html>
<html lang="en">
	<?php include 'home-menu.php'; ?>
	<?php include 'user-side-menu.php'; ?>
	<link rel="stylesheet" href="css/apply.css" type="text/css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.js"></script>
	<script src="js/apply.js"></script>
	<div class="container">
		<div class="col-lg-9">
			<div class="panel panel-default">
				<div class="panel-heading main-color-bg">
					<h3 class="panel-title">
						<b>Apply For Course</b>
					</h3>
				</div>
				<div class="panel-body">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-lg-9">
								<form action="" method="post">
									<div class="col-sm-12 form-group ui-widget">
										<label>School</label>
										<input type="text" name="fullname" class="form-control autocomplete" id="groups" required>
									</div>
									<div class="col-sm-12 form-group">
										<label>Courses</label>
										<select id="sub_groups" class="form-control autocomplete">
											<option active>Select a Course</option>
											<!-- SBL -->
											<option data-group='School of Business and Law' value='BCA'>Bachelor of Computer Applications </option>
											<option data-group='School of Business and Law' value='BBA'>Bachelor of Bussiness Administration </option>
											<option data-group='School of Business and Law' value='BBA-LLB'>Bachelor of Bussiness Administration-LLB </option>
											<option data-group='School of Business and Law' value='MBA'>Master of Bussiness Administration-LLB </option>
											<option data-group='School of Business and Law' value='MSC(IT)'>Master of Science (IT) </option>
											<option data-group='School of Business and Law' value='MHRM'>Master of Human Resource Management</option>
											<!-- SEDA -->
											<option data-group='School of Environmental Design and Architecture' value='BArch'> Bachelor of Architecture </option>
											<option data-group='School of Environmental Design and Architecture' value='BDesign'> Bachelor of Design </option>
											<option data-group='School of Environmental Design and Architecture' value='BLAD'>Bachelor Of Landscape Architectural Design Program </option>
											<!-- SLSE -->
											<option data-group='School of Liberal Studies and Education' value='Bscp'>Bachelor of Science+ </option>
											<option data-group='School of Liberal Studies and Education' value='BscCMB'>B.Sc-M.Sc Integrated in Biomedical Science </option>
											<option data-group='School of Liberal Studies and Education' value='BA'> Bachelor Of Arts (Journalism And Mass Communication) </option>
											<option data-group='School of Liberal Studies and Education' value='BEd'>Bachelor of Education </option>
											<option data-group='School of Liberal Studies and Education' value='MSC(CHM)'>Master of Science Chemistry</option>
											<option data-group='School of Liberal Studies and Education' value='MSC(L.S)'>M.Sc. Life Science</option>
											<option data-group='School of Liberal Studies and Education' value='MSW'>MSW Program</option>
											<option data-group='School of Liberal Studies and Education' value='MEd'>Master of Education</option>
											<option data-group='School of Liberal Studies and Education' value='ECCE'>P G Diploma in Early Childhood Care and Education</option>
										</select>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</html>