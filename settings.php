<?php include('user/user-header.php'); ?>
<?php
$id = $_GET['id'];
include('config/conn.php');

$sql = "SELECT * FROM users WHERE id = $id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $users = $result->fetch_assoc();
} else {
    die('User not found.'); 
}

if(isset($_POST['submit'])) {
    
    $name = $_POST['name'];
	$sex = $_POST['sex'];
    $email = $_POST['email'];
    $username = $_POST['username'];
	$password = $_POST['password'];


    // Update the user's data
    $sql = "UPDATE users SET full_name='$name', gender='$sex', email='$email', username ='$username', pass ='$password' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<script type='text/javascript'>
        alert('Updated Successful!');
        window.location = 'all-staff.php';
    </script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();

?>

<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="page-header">
			<div class="row align-items-center">
				<div class="col">
					<h3 class="page-title mt-3 mb-4">Update account</h3> 
                </div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 ">
				<form action="#" method="POST">
					<div class="col-xl-5 col-md-4 mt-3">	

					<div class="card bg-success text-white mb-4">

						<div class="form-group">
						<label>Full name</label>
							<div class="cal-icon">
								<input type="text" class="form-control" id="name" name="name"  required> 
							</div>
						</div>

						<div class="form-group">
                        <label>Sex</label>
							<select class="form-control " id="sex" name="sex" required>
								<option>Select</option>
								<option value="male">male</option>
								<option value="female">female</option>
							</select>
						</div>
	
						<div class="form-group">
						<label>Email</label>
							<input type="text" class="form-control" id="email" name="email" required> 
						</div>
								
						<div class="form-group">
						<label>Username</label>
							<div>
								<input type="text" class="form-control" id="username" name="username" required> 
							</div>
						</div>

						<div class="form-group">
						<label>Password</label>
							<div>
								<input type="text" class="form-control" id="password" name="password" required> 
							</div>
						</div>

						<div>
							<button type="submit" name="submit" id="submit" class="btn btn-primary btn-block mt-4 mb-4">Update account</button>
						</div>
					</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include('includes/scripts.php'); ?>