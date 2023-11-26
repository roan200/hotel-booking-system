<?php include('includes/header.php'); ?>
<?php 
include('config/conn.php');

if(isset($_POST['submit'])){

$staff = $_POST['staff'];
$name = $_POST['name'];
$sex = $_POST['sex'];
$email = $_POST['email'];
$number = $_POST['number'];
$role = $_POST['role'];
$join_date = $_POST['join'];

$sql = "INSERT INTO staff (staff_id, name, sex, email, contact_num, role, join_date) VALUES ('$staff', '$name', '$sex', '$email', '$number', '$role', '$join_date')";

$result = $conn->query($sql);

	if($result){
		echo "<script>
		alert('Staff added successfully');
		window.location.href = 'all-staff.php';
		</script>";
	}
	else{
		echo "<script>
		alert('adding staff unsuccessful');
		window.location.href = 'add-staff.php';
		</script>";
	}

}

?>

<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<h3 class="page-title mt-5">Add Staff</h3> 
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<form action="add-staff.php" method="POST">

	
								<div class="col-md-4 mt-3">
								<div class="form-group">
								<label>Staff ID</label>
								<div>
									<input type="text" class="form-control" id="staff" name="staff" autocomplete="off" required> 
								</div>
							</div>
						</div>
						<div class="col-md-4 mt-3">
							<div class="form-group">
								<label>Name</label>
								<div>
									<input type="text" class="form-control" id="name" name="name" autocomplete="off" required> 
								</div>
							</div>
								<div class="col-3-md-4 mt-3">
									<div class="form-group">
										<label>Sex</label>
										<select class="form-control" id="sex" name="sex">
											<option>Select</option>
											<option>Male</option>
											<option>Female</option>
										</select>
									</div>
								</div>
								<div class="col-3-md-4 mt-3">
									<div class="form-group">
										<label>Email</label>
										<input class="form-control" type="email" id="email" name="email" autocomplete="off" required> </div>
								</div>

								<div class="col-3-md-4 mt-3">
									<div class="form-group">
										<label>Phone Number</label>
										<input class="form-control" type="text" id="number" name="number" autocomplete="off" required> </div>
								</div>

								<div class="col-3-md-4 mt-3">
									<div class="form-group">
										<label>Role</label>
										<select class="form-control" id="role" name="role">
											<option>Select</option>
											<option>Manager</option>
											<option>Staff</option>
											<option>Room Cleaners</option>
											<option>Servants</option>
											<option>Accountant</option>
											<option>Receiptionalist</option>
										</select>
									</div>
								</div>
								<div class="col-3-md-4 mt-3">
									<div class="form-group">
										<label>Joining Date</label>
										<div class="cal-icon">
											<input type="date" class="form-control" id="join" name="join" autocomplete="off" required> </div>
									</div>
								</div>
							</div>
							<div>
							<div class="col-md-5 mt-3">
								<button type="submit" name="submit" id="submit" class="btn btn-primary btn-block">Add Staff</button>
							</div>	
						</form>
					</div>
			</div>
		</div>
	</div>
<?php include('includes/scripts.php'); ?>