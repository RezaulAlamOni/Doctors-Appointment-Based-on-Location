<?php include('include/header.php'); ?>
<?php include('include/navbar.php'); ?>


<div class="page-container">

    <script>
	    $('#themeoption').show();
	    $('#themeoption-li>a').addClass('active');
    </script>

<div class="page-hdr">
	<div class="row">
		<div class="col-4 page-name">
			<h1><i class="fa fa-shield"></i>Facilities</h1>
		</div>
        <div class="page-name col-3 text-right">
            <h1 id="time">Time</h1>
        </div>
		<div class="col-5 page-menu">
			<a id="cancel" href="index.php?route=themeoption/facility" data-toggle="tooltip" data-placement="left" title="Reload">
				<i class="fa fa-refresh"></i>
			</a>
			<a href="index.php?route=themeoption/facility/add" data-toggle="tooltip" data-placement="left" title="Add Facility">
				<i class="fa fa-plus"></i>
			</a>
		</div>
	</div>
</div>
<div class="content">
	<div class="table-container">
		<table id="facility-table" class="table table-bordered table-striped datatable-table">
			<thead>
				<tr class="table-heading">
					<th>#</th>
					<th>Name</th>
					<th>Icon</th>
					<th class="table-action">Action</th>
				</tr>
			</thead>
			<tbody>
								<tr>
					<td class="table-srno">1</td>
					<td><p class="font-14 margin-0">Emergency Departments</p></td>
					
					<td class="table-icon"><i class="fa fa-phone"></i></td>
					<td class="table-action">
						<a href="index.php?route=themeoption/facility/edit&id=1" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="1">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">2</td>
					<td><p class="font-14 margin-0">24 hour Service</p></td>
					
					<td class="table-icon"><i class="fa fa-calendar"></i></td>
					<td class="table-action">
						<a href="index.php?route=themeoption/facility/edit&id=2" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="2">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">3</td>
					<td><p class="font-14 margin-0">Advanced Technology</p></td>
					
					<td class="table-icon"><i class="fa fa-cloud"></i></td>
					<td class="table-action">
						<a href="index.php?route=themeoption/facility/edit&id=3" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="3">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">4</td>
					<td><p class="font-14 margin-0">Ambulance</p></td>
					
					<td class="table-icon"><i class="fa fa-ambulance"></i></td>
					<td class="table-action">
						<a href="index.php?route=themeoption/facility/edit&id=4" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="4">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">5</td>
					<td><p class="font-14 margin-0">Primary health care</p></td>
					
					<td class="table-icon"><i class="fa fa-stethoscope"></i></td>
					<td class="table-action">
						<a href="index.php?route=themeoption/facility/edit&id=5" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="5">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">6</td>
					<td><p class="font-14 margin-0">Pharmacies and drug stores</p></td>
					
					<td class="table-icon"><i class="fa fa-shopping-bag"></i></td>
					<td class="table-action">
						<a href="index.php?route=themeoption/facility/edit&id=6" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="6">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">7</td>
					<td><p class="font-14 margin-0">Laboratory and research</p></td>
					
					<td class="table-icon"><i class="fa fa-hospital-o"></i></td>
					<td class="table-action">
						<a href="index.php?route=themeoption/facility/edit&id=9" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="9">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">8</td>
					<td><p class="font-14 margin-0">Medical nursing home</p></td>
					
					<td class="table-icon"><i class="fa fa-user-md"></i></td>
					<td class="table-action">
						<a href="index.php?route=themeoption/facility/edit&id=10" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="10">
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
				<form action="index.php?route=themeoption/facility/delete" class="delete-card-button" method="post">
					<input type="hidden" value="" name="id">
					<button type="submit" class="btn btn-danger" name="delete">Delete</button>
				</form>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!-- Footer -->
<?php include('include/footer.php');?>