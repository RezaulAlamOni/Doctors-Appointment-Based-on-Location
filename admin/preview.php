<?php include('include/header.php'); ?>
<?php include('include/navbar.php'); ?>

<div class="page-container">
    <script>
	    $('#review-li>a').addClass('active');
    </script>
<!-- Blog List Page Start -->
<div class="page-hdr">
	<div class="row">
		<div class="col-5 page-name">
			<h1><i class="fa fa-star-o"></i>Review</h1>
		</div>
        <div class="page-name col-3 text-right">
            <h1 id="time">Time</h1>
        </div>
		<div class="col-4 page-menu">
			<a id="cancel" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=review" data-toggle="tooltip" data-placement="left" title="Reload"><i class="fa fa-refresh"></i></a>
		</div>
	</div>
</div>
<div class="content">
	<div class="table-container">
		<table id="blog-table" class="table table-bordered table-striped datatable-table">
			<thead>
				<tr class="table-heading">
					<th>#</th>
					<th>Reviewer Info</th>
					<th>Status</th>
					<th>Added Date</th>
					<th class="table-action">Action</th>
				</tr>
			</thead>
			<tbody>
								<tr>
					<td class="table-srno">1</td>
					<td>
						<p class="font-16 margin-0">Susan Hall</p>
						<p class="font-12 margin-0">support@pepdev.com</p>
					</td>
					<td>
												<span class="badge badge-success badge-pill badge-sm">Published</span>
											</td>
					<td>27 Oct 2017</td>
					
					<td class="table-action">
						<a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=review/edit&id=4" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" data-placement="top" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="4">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">2</td>
					<td>
						<p class="font-16 margin-0">Sarah Evans</p>
						<p class="font-12 margin-0">support@pepdev.com</p>
					</td>
					<td>
												<span class="badge badge-warning badge-pill badge-sm">Unublished</span>
											</td>
					<td>03 Oct 2017</td>
					
					<td class="table-action">
						<a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=review/edit&id=7" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" data-placement="top" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="7">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">3</td>
					<td>
						<p class="font-16 margin-0">Kevin Lopez</p>
						<p class="font-12 margin-0">support@pepdev.com</p>
					</td>
					<td>
												<span class="badge badge-success badge-pill badge-sm">Published</span>
											</td>
					<td>01 Oct 2017</td>
					
					<td class="table-action">
						<a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=review/edit&id=6" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" data-placement="top" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="6">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">4</td>
					<td>
						<p class="font-16 margin-0">Wilson Scott</p>
						<p class="font-12 margin-0">support@pepdev.com</p>
					</td>
					<td>
												<span class="badge badge-success badge-pill badge-sm">Published</span>
											</td>
					<td>27 Sep 2017</td>
					
					<td class="table-action">
						<a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=review/edit&id=5" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" data-placement="top" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="5">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">5</td>
					<td>
						<p class="font-16 margin-0">Elizabeth Allen</p>
						<p class="font-12 margin-0">support@pepdev.com</p>
					</td>
					<td>
												<span class="badge badge-success badge-pill badge-sm">Published</span>
											</td>
					<td>27 Sep 2017</td>
					
					<td class="table-action">
						<a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=review/edit&id=3" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" data-placement="top" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="3">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">6</td>
					<td>
						<p class="font-16 margin-0">House Stark</p>
						<p class="font-12 margin-0">support@pepdev.com</p>
					</td>
					<td>
												<span class="badge badge-success badge-pill badge-sm">Published</span>
											</td>
					<td>25 Sep 2017</td>
					
					<td class="table-action">
						<a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=review/edit&id=2" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" data-placement="top" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="2">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">7</td>
					<td>
						<p class="font-16 margin-0">John Doe</p>
						<p class="font-12 margin-0">support@pepdev.com</p>
					</td>
					<td>
												<span class="badge badge-success badge-pill badge-sm">Published</span>
											</td>
					<td>25 Sep 2017</td>
					
					<td class="table-action">
						<a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=review/edit&id=1" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" data-placement="top" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="1">
						</a>
					</td>
				</tr>
							</tbody>
		</table>
	</div>
</div>

<!-- Delete Modal -->
<div id="delete-card" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Confirm Delete</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<p class="delete-card-ttl">Are you sure you want to delete?</p>
			</div>
			<div class="modal-footer">
				<form action="admin/index.php?route=review/delete" class="delete-card-button" method="post">
					<input type="hidden" value="" name="id">
					<button type="submit" class="btn btn-danger" name="delete">Delete</button>
				</form>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!-- Footer -->
<?php include ('include/footer.php'); ?>