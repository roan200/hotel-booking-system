<?php include('includes/header.php'); ?>

    <div class="page-wrapper">
		<div class="content container-fluid">
			<div class="page-header">
				<div class="row align-items-center">
					<div class="col">
						<div class="mt-5">
							<h2 class="card-title float-left mt-2">Booking</h2>
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
												<th>ID</th>
												<th>Name</th>
												<th>Room Type</th>
												<th>Total Numbers</th>
												<th>Arrival Date</th>
												<th>Depature Date</th>
												<th>Email</th>
												<th >Actions</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>BKG-0001</td>
												<td>ssss bbbb</td>
												<td>Double</td>
												<td>10</td>
												<td>22-03-2020</td>
												<td>23-03-2020</td>
												<td>09287342364</td>

												<td>
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
                                                        Delete
                                                    </button>
												</td>
											</tr>
										</tbody>
									</table>
								</div>

								<!-- Modal -->
								<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="deleteModalLabel">DELETE</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												delete booking?
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
												<button type="button" class="btn btn-danger">Delete</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
	    </div>
	</div>


<?php include('includes/scripts.php'); ?>