<?php include('include/db.php'); ?>
<?php include('include/header.php'); ?>
<?php include('include/navbar.php'); ?>
<?php require ('class/doctors.php')?>

<div class="page-container">
            <script>
	$('#doctor').show();
	$('#doctor-li>a').addClass('active');
            </script>

<div class="page-hdr">
	<div class="row">
		<div class="col-4 page-name">
			<h1><i class="fa fa-user-md"></i>Doctors</h1>
		</div>
        <div class="page-name col-3 text-right">
            <h1 id="time">Time</h1>
        </div>
		<div class="col-5 page-menu">
			<a id="cancel" href="doctors.php" data-toggle="tooltip" data-placement="left" title="Reload"><i class="fa fa-refresh"></i></a>
			<a href="add_doctors.php" data-toggle="tooltip" data-placement="left" title="Add Doctor"><i class="fa fa-plus"></i></a>
		</div>
	</div>
</div>
<div class="content">
	<div class="table-container">
		<table id="doctor-table" class="table table-bordered table-striped datatable-table">
			<thead>
				<tr class="table-heading">
					<th>#</th>
					<th>Doctor Info</th>
                    <th>Department</th>
                    <th>Picture</th>
					<th class="text-center">Patients</th>
					<th class="table-action">Action</th>
				</tr>
			</thead>
			<tbody>

                <?php
                    $doctors = new doctors();
                    if (isset($_GET['hospital'])){
                        $id = $_GET['hospital'];
                        $result = $doctors->find_all_by_hosptalID($id);
                    }else{
                        $result = $doctors->all();
                    }


                    $docts = $result->fetchAll();
                    if ($result->rowCount()>0) {
                        foreach ($docts as $doct) {

                ?>
                <tr>
                <td class="table-srno"><?php echo $doct->id;?></td>
                <td>
                    <p class="font-16 margin-0"><?php echo $doct->first_name." ".$doct->last_name;?></p>
                    <p class="font-12 margin-0"><?php echo $doct->email;?></p>
                    <p class="font-12 margin-0"><?php echo $doct->phone;?></p>
                </td>
                <td>
                    <?php $doctors->doctor_dpt($doct->id); ?>
                </td>
                    <td class="table-img">
                        <img class="img-thumbnail" src="../public/uploads/<?php echo $doct->photo;?>" alt="">
                    </td>

                <td class="text-center">0</td>
                <td class="table-action">
                    <a href="edit_doctor.php?id=<?php echo $doct->id; ?>" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>

                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                        <i class="fa fa-trash-o"></i>
                        <input type="hidden" value="<?php echo $doct->id; ?>">
                    </a>
                </td>
            </tr>

                <?php
                        }
                    }
                ?>
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
				<form action="index.php?route=themeoption/doctor/delete" class="delete-card-button" method="post">
					<input type="hidden" value="" name="id">
					<button type="submit" class="btn btn-danger" name="delete">Delete</button>
				</form>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!-- Footer -->

    <?php include ('include/footer.php');?>