<?php include('includes/header.php'); ?>

<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<div class="mt-4">
								<h2 class="card-title float-left mt-2">All Rooms</h2>
                            </div>
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
												<th>Booking ID</th>
												<th>Name</th>
												<th>Room Type</th>
												<th>Arrival Date</th>
												<th>Depature Date</th>
												<th>Email </th>
												<th>Contact #</th>
												<th>Actions</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>BKG-0001</td>
												<td><h4>Ralph A. Miole</h4></td>
												<td>Double</td>
												<td>22-03-2020</td>
												<td>23-03-2020</td>
												<td>aaa@gmail.com</td>
												<td>631-254-6480</td>
                                                <td>
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                                        Delete
                                                    </button>
												</td>
											</tr>
											<tr>
												<td>BKG-0002</td>
												<td>
													<h4 class="table-avatar">
                                                    <a href="profile.php" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-04.jpg" alt="User Image"></a>
                                                    <a href="profile.php">Richard G. <span>#0002</span></a>
                                                    </h4>
                                                </td>
												<td>Single</td>
												<td>22-03-2020</td>
												<td>23-03-2020</td>
												<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="03716a606b62716761716c61707743667b626e736f662d606c6e">[email&#160;protected]</a></td>
												<td>830-468-1042</td>
                                                <td>
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                                        Delete
                                                    </button>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php include('includes/scripts.php'); ?>