<?php include('include/header.php'); ?>
<?php include('include/navbar.php'); ?>


<div class="page-container">
            <script>
                $('#patient').show();
                $('#patient-li>a').addClass('active');
            </script>

<!-- User list page start -->
<div class="page-hdr">
	<div class="row">
		<div class="col-4 page-name">
			<h1><i class="fa fa-users"></i>Patients</h1>
		</div>
        <div class="page-name col-3 text-right">
            <h1 id="time" style="color: #900024">Time</h1>
        </div>
		<div class="col-5 page-menu">
			<a id="cancel" href="patient.php" data-toggle="tooltip" data-placement="left" title="Reload"><i class="fa fa-refresh"></i></a>
			<a href="patient_add.php" data-toggle="tooltip" data-placement="left" title="Add Patient"><i class="fa fa-plus"></i></a>
		</div>
	</div>
</div>
<div class="content">
	<div class="<!--well-->">
		<script type="text/javascript">
			/*Doctor filter*/
			function filterByRole(filter) {
				$('#user-table tr').each(function (index) {
					var role = $(this).find('.user-role').text().trim();
					if (role.indexOf(filter) == 0) {
						$(this).show();
					} else {
						$(this).hide();
					}
				});
			}
			/*Status filter*/
			function filterByStatus(filter) {
				$('#user-table tr').each(function (index) {
					var status = $(this).find('.user-status').text().trim();
					if (status.indexOf(filter) == 0 && $(this).css('display') == 'table-row') {
						$(this).show();
					} else {
						$(this).hide();
					}
				});
			}
			/*Single date filter*/
			function filterByDate(filter) {
				$('#user-table tr').each(function (index) {
					var date = $(this).find('.user-date').text().trim();
					if (date.indexOf(filter) == 0 && $(this).css('display') == 'table-row') {
						$(this).show();
					} else {
						$(this).hide();
					}
				});
			}
			/*Date range filter*/    
			function filterByDateRange(start_date, end_date) {
				var start_date = new Date(start_date);
				var end_date = new Date(end_date);

				$('#user-table tr').each(function (index) {
					var date = new Date($(this).find('.user-date').text().trim());
					if ( date >= start_date && $(this).css('display') == 'table-row') {
						$(this).show();
					} else {
						$(this).hide();
					}
					if (date > end_date  && $(this).css('display') == 'table-row') {
						$(this).hide();
					}
				});
			}
			
			$('#reset').click(function() {
				window.location.reload();
			})

			var userTable;
			var userSettings;
			$(document).ready(function(){
				userTable = $('#user-table').DataTable( {
					"aLengthMenu": [[10, 25, 50, 75, -1], [10, 25, 50, 75, "All"]],
					"iDisplayLength": 25,
					"bSort": true,
					"pagingType": "full_numbers",
					"responsive": true
				});
				userSettings = userTable.settings();
			});

			$('#filter-user').click(function() {
				userSettings[0]._iDisplayLength = userSettings[0].fnRecordsTotal();
				userTable.draw();
				$('#user-table tr').show();
				if ($('#filter-role').val() !== '' && typeof($('#filter-role').val()) !== "undefined") {
					filterByRole($('#filter-role').val());
				}
				if ($('#filter-status').val() !== '') {
					filterByStatus($('#filter-status').val());
				}
				if ($('#filter-start-date').val() !== '' && $('#filter-end-date').val() !== '' ) {
					filterByDateRange($('#filter-start-date').val(), $('#filter-end-date').val());
				}else if ($('#filter-start-date').val() !== '') {
					filterByDate($('#filter-start-date').val());
				}
				$('.table-heading').show();
			});
			$('#reset').click(function() {
				window.location.reload();
			})
		</script>
	</div>
	<div class="table-container">
		<table id="user-table" class="table table-bordered table-striped">
			<thead>
				<tr class="table-heading" style="color: #900024;background-color: #8f71ff">
					<th class="table-srno">#</th>
					<th>Person Info </th>
					<th>User Name </th>
					<th>User Role </th>
					<th>Status </th>
					<th>Created </th>
					<th>Updated </th>
					<th>Action  </th>
				</tr>
			</thead>

            <?php

                $pdo = new PDO("mysql:host=localhost;dbname=doctors",'root','');
                $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

                $sql = "SELECT * FROM patients";
                $result = $pdo->prepare($sql);
                $result->execute();
                $patients = $result->fetchAll();

            ?>

			<tbody>

            <?php
                foreach ($patients as $patient){

                    ?>

                <tr>
					<td class="table-srno"><?php echo $patient->patient_id;?></td>
					<td>
						<p class="font-16 margin-0 text-capitalize text-info"><?php echo $patient->first_name." ".$patient->last_name; echo " (".$patient->blood_group.")";?></p>
						<p class="font-14 margin-0" style="color: #900024;"><?php echo $patient->email;?></p>
						<p class="font-14 margin-0 text-capitalize" style="color: #3d0089;">
                                <?php
                                    $id = $patient->location_id;
                                    $sql = "SELECT * FROM locations WHERE location_id = :id";
                                    $result = $pdo->prepare($sql);
                                    $result->execute(['id'=>$id]);
                                    $locations = $result->fetchAll();
                                    foreach ($locations as $location){
                                        echo $location->name;
                                    }
                                ?>
                            , bangladesh
                        </p>
						<p class="font-14 margin-0" style="color: #000000;">+880<?php echo $patient->phone;?></p>
					</td>
					<td class="username"><?php echo $patient->user_name;?></td>
					<td class="user-role text-capitalize">
                        <?php
                            $id= $patient->role_id;
                            $sql = "SELECT * FROM roles WHERE role_id = :id";
                            $result = $pdo->prepare($sql);
                            $result->execute(['id'=>$id]);
                            $roles = $result->fetchAll();
                            foreach ($roles as $role){
                                echo $role->role_name;
                            }
                        ?>
                    </td>
					<td class="user-status">
                        <span class="badge badge-sm badge-success badge-pill text-capitalize"><?php if ($patient->status==1){echo "active";}else{echo "in active";}?></span>
                    </td>
					<td class="user-date"><?php echo $patient->created_at;?></td>
					<td class="user-date"><?php echo $patient->updated_at;?></td>
					<td class="table-action">
                        <a href="patient_edite.php?id=<?php echo $patient->patient_id;?>" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a href="patient.php?delete=<?php echo $patient->patient_id;?>" class="btn btn-outline btn-danger btn-outline-1x btn-circle" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
							<i class="fa fa-trash-o"></i>
						</a>
					</td>
				</tr>

                    <!-- Delete Modal -->


                    <?php

                }
                if (isset($_GET['delete'])){
                    $id = $_GET['delete'];
                    $sql = "DELETE FROM patients WHERE patient_id = {$id}";
                    $result = $pdo->prepare($sql);
                    $result->execute();
                    header('Location: patient.php');
                }
            ?>

            </tbody>
		</table>
	</div>
</div>


<!-- Footer -->
<?php include('include/footer.php');?>