<?php include('includes/header.php'); ?>

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
					<div class="col-lg-12">
						<form>
							<div class="row formtype">
							<div class="col-md-4">
									<div class="form-group">
										<label>full name</label>
										<input type="text" class="form-control" id="usr1"> </div>
								</div>	
								<div class="col-md-4">
									<div class="form-group">
										<label>Email</label>
										<input type="text" class="form-control" id="usr1"> </div>
								</div>	

								<div class="col-md-4">
									<div class="form-group">
										<label>Username</label>
										<input type="text" class="form-control" id="usr1"> </div>
								</div>	

								<div class="col-md-4">
									<div class="form-group">
										<label>Gender</label>
										<select class="form-control" id="sel3" name="sellist1">
											<option>Select</option>
											<option>Male</option>
											<option>Female</option>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Contact Number</label>
										<input type="text" class="form-control" id="usr1"> </div>
								</div>			
				
								<div>
								<a href="#" class="btn btn-primary mt-4" role="button">Update Account</a>
								</div>
								<div>
								<a href="index.php" class="btn btn-primary mt-4" role="button">Go to dashboard</a>
								</div>
		</div>
	</div>
</div>

<?php include('includes/scripts.php'); ?>