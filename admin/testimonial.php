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
			<h1><i class="fa fa-quote-left"></i>Testimonials</h1>
		</div>
        <div class="page-name col-3 text-right">
            <h1 id="time">Time</h1>
        </div>
		<div class="col-4 page-menu">
			<a id="cancel" href="index.php?route=themeoption/testimonial" data-toggle="tooltip" data-placement="left" title="Reload"><i class="fa fa-refresh"></i></a>
			<a href="index.php?route=themeoption/testimonial/add" data-toggle="tooltip" data-placement="left" title="Add Testimonial"><i class="fa fa-plus"></i></a>
		</div>
	</div>
</div>
<div class="content">
	<div class="table-container">
		<table id="testimonial-table" class="table table-bordered table-striped datatable-table">
			<thead>
				<tr class="table-heading">
					<th>#</th>
					<th>Picture</th>
					<th>Person Info</th>
					<th>Testimonial</th>
					<th class="table-action">Action</th>
				</tr>
			</thead>
			<tbody>
								<tr>
					<td class="table-srno">1</td>
					<td class="table-name">
						<p class="font-14 margin-0">Aditya Ghanekar</p>
						<p class="font-12 margin-0">aditya1802@gmail.com</p>
						<p class="font-12 margin-0">9545973001</p>
					</td>
					<td class="table-img">
						<img class="img-thumbnail" src="../public/uploads/testimonial-3.jpg" alt="">
					</td>
					<td><p class="font-12 margin-0">Thank you for the remedy. I feel it has been working on a deeper subtle level. An inner seeing. I have had the feeling of a melting inside and great sense of peace and rightness. I experienced this before with your perception and treatment so thank you very much.</p></td>
					<td class="table-action">
						<a href="index.php?route=themeoption/testimonial/edit&id=1" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="1">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">2</td>
					<td class="table-name">
						<p class="font-14 margin-0">Amar Ghode</p>
						<p class="font-12 margin-0">amar.ghode@gmail.com</p>
						<p class="font-12 margin-0">8975383539</p>
					</td>
					<td class="table-img">
						<img class="img-thumbnail" src="../public/uploads/testimonial-4.jpg" alt="">
					</td>
					<td><p class="font-12 margin-0">This was my second visit here I loved it first visit but love it more on my second visit. I loved thier facility and online system.
							</p></td>
					<td class="table-action">
						<a href="index.php?route=themeoption/testimonial/edit&id=2" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="2">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">3</td>
					<td class="table-name">
						<p class="font-14 margin-0">Sonu Singh</p>
						<p class="font-12 margin-0">sonu0289@gmail.com</p>
						<p class="font-12 margin-0">9545973001</p>
					</td>
					<td class="table-img">
						<img class="img-thumbnail" src="../public/uploads/testimonial-2.jpg" alt="">
					</td>
					<td><p class="font-12 margin-0">Thank you for the remedy. I feel it has been working on a deeper subtle level. An inner seeing. I have had the feeling of a melting inside and great sense of peace and rightness. I experienced this before with your perception and treatment so thank you very much.</p></td>
					<td class="table-action">
						<a href="index.php?route=themeoption/testimonial/edit&id=4" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="4">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">4</td>
					<td class="table-name">
						<p class="font-14 margin-0">Vaibhav Ramteke</p>
						<p class="font-12 margin-0">vaibhav@pepdev.com</p>
						<p class="font-12 margin-0">8975383539</p>
					</td>
					<td class="table-img">
						<img class="img-thumbnail" src="../public/uploads/testimonial-1.jpg" alt="">
					</td>
					<td><p class="font-12 margin-0">This was my second visit here I loved it first visit but love it more on my second visit. I loved thier facility and online system.
</p></td>
					<td class="table-action">
						<a href="index.php?route=themeoption/testimonial/edit&id=5" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="5">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">5</td>
					<td class="table-name">
						<p class="font-14 margin-0">winceton logo</p>
						<p class="font-12 margin-0">support@pepdev.com</p>
						<p class="font-12 margin-0">8975383539</p>
					</td>
					<td class="table-img">
						<img class="img-thumbnail" src="../public/uploads/testimonial-5.jpg" alt="">
					</td>
					<td><p class="font-12 margin-0">Thank you for the remedy. I feel it has been working on a deeper subtle level. An inner seeing. I have had the feeling of a melting inside and great sense of peace and rightness. I experienced this before with your perception and treatment so thank you very much.
</p></td>
					<td class="table-action">
						<a href="index.php?route=themeoption/testimonial/edit&id=6" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="6">
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
				<form action="index.php?route=themeoption/testimonial/delete" class="delete-card-button" method="post">
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