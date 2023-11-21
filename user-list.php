<?php include('includes/header.php'); ?>

		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center ">
						<div class="col ">
							<div class="mt-4">
								<h2 class="card-title float-left mt-2">All users</h2></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 mt-4">
						<div class="card card-table">
							<div class="card-body booking_card">
								<div class="table-responsive">
									<table class="datatable table table-stripped table table-hover table-center mb-0">
										<thead>
											<tr>
												<th>#</th>
												<th>Full Name</th>
												<th>Gender</th>
												<th>Email</th>
												<th>Username</th>
												<th>actions</th>
											</tr>
										</thead>
										<?php 
										include("config/conn.php");

										if (isset($_GET['delete_id'])) {
											$delete_id = $_GET['delete_id'];
											// Prepare statement to avoid SQL injection
											$stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
											$stmt->bind_param("i", $delete_id); // "i" for integer type
											$result = $stmt->execute();
								
											if ($result) {
												echo "<script type='text/javascript'>
												alert('Updated Successful!');
												window.location = 'user-list.php';
											</script>";
											} else {
												echo "<p>Error: Could not delete user.</p>";
											}
								
											$stmt->close();
										}

										
										$sql = "SELECT id, full_name, gender, email, username FROM users WHERE user_type = 'user' "; // Assuming you have an 'id' field for each user
        								$result = $conn->query($sql);

        							if ($result->num_rows > 0) 	
									{
            							// output data of each row
            							while($row = $result->fetch_assoc()) 
										{
												echo "<tr>";
												echo "<td>" . $row['id'] . "</td>";
												echo "<td>" . $row['full_name'] . "</td>";
												echo "<td>" . $row['gender'] . "</td>";
												echo "<td>" . $row['email'] . "</td>";
												echo "<td>" . $row['username'] . "</td>";
												echo "<td>";
												echo "<a href='?delete_id=".$row['id']."' class='btn btn-delete btn-danger' onclick='return confirm(\"Are you sure you want to delete this user?\")'>Delete</a></td>";
												echo "</td>";
												echo "</tr>";
            							}
        							} else 
									{
            							echo "<tr><td colspan='8'>No results found</td></tr>"; // Updated colspan to match the number of <th> elements
									}
									$conn->close();
										
										?>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>

<?php include('includes/scripts.php'); ?>