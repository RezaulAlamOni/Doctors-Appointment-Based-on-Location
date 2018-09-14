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
			<h1><i class="fa fa-hospital-o"></i>Departments</h1>
		</div>
        <div class="page-name col-3 text-right">
            <h1 id="time">Time</h1>
        </div>
		<div class="col-5 page-menu">
			<a id="cancel" href="index.php?route=themeoption/department" data-toggle="tooltip" data-placement="left" title="Reload"><i class="fa fa-refresh"></i></a>
			<a href="index.php?route=themeoption/department/add" data-toggle="tooltip" data-placement="left" title="Add Department"><i class="fa fa-plus"></i></a>
		</div>
	</div>
</div>
<div class="content">
	<div class="table-container">
		<table id="department-table" class="table table-bordered table-striped datatable-table">
			<thead>
				<tr class="table-heading">
					<th>#</th>
					<th>Name</th>
					<th>Description</th>
					<th>Icon</th>
					<th class="table-action">Action</th>
				</tr>
			</thead>
			<tbody>
								<tr>
					<td class="table-srno">1</td>
					<td class="table-name">
						<p class="font-14 margin-0">Gynaecology</p>
					</td>
					<td><p class="text-justify font-12">Obstetrics and Gynaecology (often abbreviated to OB/GYN, OBG, O&amp;G or Obs &amp; Gynae) are the two surgical specialties dealing with the female reproductive organs, and as such are often combined to form a single medical specialty and postgraduate training program.</p></td>
					<td class="table-icon"><i class="fa fa-female"></i></td>
					<td class="table-action">
						<a href="index.php?route=themeoption/department/edit&id=1" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" data-placement="top" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="1">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">2</td>
					<td class="table-name">
						<p class="font-14 margin-0">Orthology</p>
					</td>
					<td><p class="text-justify font-12">Orthology is the study of the right use of words in language. The word comes from Greek ortho- ("correct") and -logy ("science of"). This science is a place where psychology, philosophy, linguistics, and many other fields of learning come together.</p></td>
					<td class="table-icon"><i class="fa fa-thermometer"></i></td>
					<td class="table-action">
						<a href="index.php?route=themeoption/department/edit&id=2" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" data-placement="top" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="2">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">3</td>
					<td class="table-name">
						<p class="font-14 margin-0">Dermatologist</p>
					</td>
					<td><p class="text-justify font-12">Dermatology is the branch of medicine dealing with the skin, nails, hair and its diseases. It is a specialty with both medical and surgical aspects. A dermatologist treats diseases, in the widest sense, and some csasdsadosmetic problems of the skin, scalp, hair, and nails.</p></td>
					<td class="table-icon"><i class="fa fa-stethoscope"></i></td>
					<td class="table-action">
						<a href="index.php?route=themeoption/department/edit&id=3" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" data-placement="top" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="3">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">4</td>
					<td class="table-name">
						<p class="font-14 margin-0">Anaesthesia</p>
					</td>
					<td><p class="text-justify font-12">As anesthesiologists we are responsible for the safety and well-being of patients before, during and after surgery. This includes placing patients in a state of controlled unconsciousness called â€œgeneral anesthesiaâ€, the provision of â€œregional anestheticsâ€ where only a portion of the body is made numb, or administering â€˜sedationâ€™ when indicated for the relief of pain or anxiety.asdadasdsad</p></td>
					<td class="table-icon"><i class="fa fa-bed"></i></td>
					<td class="table-action">
						<a href="index.php?route=themeoption/department/edit&id=4" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" data-placement="top" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="4">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">5</td>
					<td class="table-name">
						<p class="font-14 margin-0">Ayurvedic</p>
					</td>
					<td><p class="text-justify font-12">Another milestone to achieve Holistic Health is the addendum of Ayurvedic Clinic at our clinic. The first school of medicine dating back to the origin of life itself, makes a come back with all its glory in the 21st century. With the west aping the east on eternal truths and knowledge of life, we need to refresh our old science of sages according to modern ages.</p></td>
					<td class="table-icon"><i class="fa fa-eye"></i></td>
					<td class="table-action">
						<a href="index.php?route=themeoption/department/edit&id=5" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" data-placement="top" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="5">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">6</td>
					<td class="table-name">
						<p class="font-14 margin-0">Pathology</p>
					</td>
					<td><p class="text-justify font-12">The modern practice of pathology is divided into a number of subdisciplines within the discrete but deeply interconnected aims of biological research and medical practice. Biomedical research into disease incorporates the work of vast variety of life science specialists, whereas, in most parts of the world, to be licensed to practice pathology as medical specialty, one has to complete medical school and secure a license to practice medicine.</p></td>
					<td class="table-icon"><i class="fa fa-glass"></i></td>
					<td class="table-action">
						<a href="index.php?route=themeoption/department/edit&id=6" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" data-placement="top" title="Delete">
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
				<form action="index.php?route=themeoption/department/delete" class="delete-card-button" method="post">
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