<?php include('include/header.php'); ?>
<?php include('include/navbar.php'); ?>

<div class="page-container">

    <script>
	    $('#themeoption').show();
	    $('#themeoption-li>a').addClass('active');

    </script>

<div class="page-hdr">
	<div class="row">
		<div class="col-5 page-name">
			<h1><i class="fa fa-medkit"></i>Services</h1>
		</div>
        <div class="page-name col-3 text-right">
            <h1 id="time">Time</h1>
        </div>
		<div class="col-4 page-menu">
			<a id="cancel" href="index.php?route=themeoption/service" data-toggle="tooltip" data-placement="left" title="Reload"><i class="fa fa-refresh"></i></a>
			<a href="index.php?route=themeoption/service/add" data-toggle="tooltip" data-placement="left" title="Add Service"><i class="fa fa-plus"></i></a>
		</div>
	</div>
</div>
<div class="content">
	<div class="table-container">
		<table id="service-table" class="table table-bordered table-striped datatable-table">
			<thead>
				<tr class="table-heading">
					<th class="table-srno">#</th>
					<th>Name</th>
					<th>Picture</th>
					<th>Icon</th>
					<th>Priority</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
								<tr>
					<td class="table-srno">1</td>
					<td><p class="font-14 margin-0">Cardiovascular centre</p></td>
					<td class="table-img">
						<img class="img-thumbnail" src="../public/uploads/service-1.jpg" alt="">
					</td>
					<td class="table-icon"><i class="fa fa-stethoscope"></i></td>
					<td>1</td>
					<td class="table-action">
						<a href="index.php?route=themeoption/service/edit&id=1" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="1">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">2</td>
					<td><p class="font-14 margin-0">Childbirth Center</p></td>
					<td class="table-img">
						<img class="img-thumbnail" src="../public/uploads/service-2.jpg" alt="">
					</td>
					<td class="table-icon"><i class="fa fa-child"></i></td>
					<td>2</td>
					<td class="table-action">
						<a href="index.php?route=themeoption/service/edit&id=2" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="2">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">3</td>
					<td><p class="font-14 margin-0">Cardiology</p></td>
					<td class="table-img">
						<img class="img-thumbnail" src="../public/uploads/service-3.jpg" alt="">
					</td>
					<td class="table-icon"><i class="fa fa-heartbeat"></i></td>
					<td>3</td>
					<td class="table-action">
						<a href="index.php?route=themeoption/service/edit&id=3" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="3">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">4</td>
					<td><p class="font-14 margin-0">Skin Care</p></td>
					<td class="table-img">
						<img class="img-thumbnail" src="../public/uploads/service-4.jpg" alt="">
					</td>
					<td class="table-icon"><i class="fa fa-wheelchair-alt"></i></td>
					<td>4</td>
					<td class="table-action">
						<a href="index.php?route=themeoption/service/edit&id=4" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="4">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">5</td>
					<td><p class="font-14 margin-0">Laboratory Services</p></td>
					<td class="table-img">
						<img class="img-thumbnail" src="../public/uploads/service-5.jpg" alt="">
					</td>
					<td class="table-icon"><i class="fa fa-flask"></i></td>
					<td>5</td>
					<td class="table-action">
						<a href="index.php?route=themeoption/service/edit&id=5" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="5">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">6</td>
					<td><p class="font-14 margin-0">Mammography</p></td>
					<td class="table-img">
						<img class="img-thumbnail" src="../public/uploads/service-6.jpg" alt="">
					</td>
					<td class="table-icon"><i class="fa fa-certificate"></i></td>
					<td>6</td>
					<td class="table-action">
						<a href="index.php?route=themeoption/service/edit&id=6" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="6">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">7</td>
					<td><p class="font-14 margin-0">Dermatologist</p></td>
					<td class="table-img">
						<img class="img-thumbnail" src="../public/uploads/service-7.jpg" alt="">
					</td>
					<td class="table-icon"><i class="fa fa-h-square"></i></td>
					<td>7</td>
					<td class="table-action">
						<a href="index.php?route=themeoption/service/edit&id=9" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="9">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">8</td>
					<td><p class="font-14 margin-0">Anesthesiology</p></td>
					<td class="table-img">
						<img class="img-thumbnail" src="../public/uploads/service-8.jpg" alt="">
					</td>
					<td class="table-icon"><i class="fa fa-glass"></i></td>
					<td>8</td>
					<td class="table-action">
						<a href="index.php?route=themeoption/service/edit&id=10" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="10">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">9</td>
					<td><p class="font-14 margin-0">Paediatrics</p></td>
					<td class="table-img">
						<img class="img-thumbnail" src="../public/uploads/service-9.jpg" alt="">
					</td>
					<td class="table-icon"><i class="fa fa-stethoscope"></i></td>
					<td>9</td>
					<td class="table-action">
						<a href="index.php?route=themeoption/service/edit&id=11" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="11">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">10</td>
					<td><p class="font-14 margin-0">Eye Care</p></td>
					<td class="table-img">
						<img class="img-thumbnail" src="../public/uploads/service-10.jpg" alt="">
					</td>
					<td class="table-icon"><i class="fa fa-eye"></i></td>
					<td>10</td>
					<td class="table-action">
						<a href="index.php?route=themeoption/service/edit&id=12" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="12">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">11</td>
					<td><p class="font-14 margin-0">Radiology Center</p></td>
					<td class="table-img">
						<img class="img-thumbnail" src="../public/uploads/service-13.jpg" alt="">
					</td>
					<td class="table-icon"><i class="fa fa-bullhorn"></i></td>
					<td>11</td>
					<td class="table-action">
						<a href="index.php?route=themeoption/service/edit&id=13" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="13">
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
				<form action="index.php?route=themeoption/service/delete" class="delete-card-button" method="post">
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