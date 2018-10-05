<?php include('include/db.php'); ?>
<?php include('include/header.php'); ?>
<?php include('include/navbar.php'); ?>
<?php require ('class/departments.php')?>
<?php require ('class/doctors.php')?>
<div class="page-container">
    <script>
	    $('#department').show();
	    $('#department-li>a').addClass('active');
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
			<a id="cancel" href="" data-toggle="tooltip" data-placement="left" title="Reload"><i class="fa fa-refresh"></i></a>
			<a href="department_add.php" data-toggle="tooltip" data-placement="left" title="Add Department"><i class="fa fa-plus"></i></a>
		</div>
	</div>
</div>
<div class="content">
	<div class="table-container">
		<table id="department-table" class="table table-bordered table-striped datatable-table">
			<thead>
				<tr class="table-heading">
					<th>ID#</th>
					<th>Name</th>
					<th>Description</th>
					<th>Doctors</th>
					<th class="table-action">Action</th>
				</tr>
			</thead>
			<tbody>
            <?php
            $doct = new doctors();
            $dpt = new departments();
            $result = $dpt->all();
            $departments = $result->fetchAll();
            foreach ($departments as $department) {
                ?>

                <tr>
                    <td class="table-srno"><?php  echo $department->id;?> </td>
                    <td class="table-name">
                        <p class="font-14 margin-0 text-capitalize"><?php  echo $department->name;?></p>
                    </td>
                    <td>
                        <p class="text-justify font-12"><?php  echo $department->details;?></p>
                    </td>
                    <td class="text-center">
                        <a href="doctors.php?dpt_id=<?php echo $department->id;?>">
                        <?php
                        echo $doct->count_by_dptID($department->id);
                        ?>
                        </a>
                    </td>
                    <td class="table-action">
                        <a href="edit_department.php?id=<?php  echo $department->id;?>"
                           class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip"
                           title="Edit"><i class="fa fa-pencil-square-o"></i>
                        </a>

                        <a  href="department.php?delete=<?php echo $department->id;?>" class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" onclick="checkDelete()"

                           data-toggle="tooltip" data-placement="top" title="Delete">
                            <i class="fa fa-trash-o"></i>

                        </a>
                    </td>

                </tr>



                <?php

            }
            if (isset($_GET['delete'])) {
                $id= $_GET['delete'];
                $sql = "DELETE FROM departments WHERE id = {$id}";
                $result = $pdo->prepare($sql);
                $result->execute();

                header("Location: department.php");
            }

            ?>

            </tbody>
		</table>
	</div>
</div>
    <script language="JavaScript" type="text/javascript">
        function checkDelete(){
            return confirm('Are you sure?');
        }
    </script>
<!-- Delete Modal -->

<!-- Footer -->
<?php include('include/footer.php');?>