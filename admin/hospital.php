<?php include('include/db.php'); ?>
<?php include('include/header.php'); ?>
<?php include('include/navbar.php'); ?>

<?php require ('class/doctors.php')?>

<div class="page-container">
            <script>
	$('#hospital').show();
	$('#hospital-li>a').addClass('active');
            </script>

<div class="page-hdr">
	<div class="row">
		<div class="col-4 page-name">
			<h1><i class="fa fa-user-md"></i>Hospitals</h1>
		</div>
        <div class="page-name col-3 text-right">
            <h1 id="time">Time</h1>
        </div>
		<div class="col-5 page-menu">
			<a id="cancel" href="hospital.php" data-toggle="tooltip" data-placement="left" title="Reload"><i class="fa fa-refresh"></i></a>
			<a href="add_hospital.php" data-toggle="tooltip" data-placement="left" title="Add Doctor"><i class="fa fa-plus"></i></a>
		</div>
	</div>
</div>
<div class="content">
	<div class="table-container">
		<table id="doctor-table" class="table table-bordered table-striped datatable-table">
			<thead>
				<tr class="table-heading">
					<th>#</th>
					<th>Hospital Info</th>
					<th>Picture</th>
					<th>Doctors</th>
					<th>Location</th>
					<th class="table-action">Action</th>
				</tr>
			</thead>
			<tbody>

                <?php
                    $hospita = new hospitals();
                    if (isset($_GET['location'])){
                       $id = $_GET['location'];
                        $result = $hospita->find_all_by_location($id);
                    }else{
                        $result = $hospita->all();
                    }

                    $hospitals = $result->fetchAll();
                    if ($result->rowCount()>0) {
                        foreach ($hospitals as $hospital) {

                ?>
                <tr>
                <td class="table-srno"><?php echo $hospital->id;?></td>
                <td>
                    <p class="font-16 margin-0"><?php echo $hospital->name;?></p>
                    <p class="font-12 margin-0"><?php echo $hospital->address; ?></p>

                </td>
                <td class="table-img">
                    <img class="img-thumbnail" src="../public/uploads/<?php echo $hospital->photo;?>" alt="">
                </td>
                <td class="text-center">
                    <a href="doctors.php?hospital=<?php echo $hospital->id; ?>">
                    <?php
                        echo $doctors = $hospita->doctor_count_by_hospitalID($hospital->id);
                    ?>
                    </a></td>
                <td class="text-center text-capitalize">
                    <?php
                    $hospita->hptl_location($hospital->location_id);
                    ?>
                </td>
                <td class="table-action">
                    <a href="update_hospital.php?id=<?php echo $hospital->id; ?>" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                        <i class="fa fa-trash-o"></i>
                        <input type="hidden" value="1">
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