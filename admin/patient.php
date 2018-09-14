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
            <h1 id="time">Time</h1>
        </div>
		<div class="col-5 page-menu">
			<a id="cancel" href="index.php?route=patient" data-toggle="tooltip" data-placement="left" title="Reload"><i class="fa fa-refresh"></i></a>
			<a href="index.php?route=patient/add" data-toggle="tooltip" data-placement="left" title="Add Patient"><i class="fa fa-plus"></i></a>
		</div>
	</div>
</div>
<div class="content">
	<div class="well">
		<div class="row">
						<div class="col-sm-3">
				<div class="form-group">
					<label class="control-label">Status</label>
					<select name="" id="filter-status" class="form-control">
						<option value=""></option>
						<option value="Active">Active</option>
						<option value="InActive">In Active</option>
					</select>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="form-group">
					<label class="control-label">Start Date</label>
					<input type="text" id="filter-start-date" class="form-control filter-date">
				</div>
			</div>
			<div class="col-sm-3">
				<div class="form-group">
					<label class="control-label">End Date</label>
					<input type="text" id="filter-end-date" class="form-control filter-date">
				</div>
			</div>
			<div class="col-sm-12">
				<div class="pull-right">
					<button id="reset" class="btn btn-default btn-sm">Reset</button>
					<button id="filter-user" class="btn btn-primary btn-sm"><i class="fa fa-filter"></i> Filter</button>
				</div>
			</div>
		</div>
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
				<tr class="table-heading">
					<th class="table-srno">#</th>
					<th>Person Info</th>
					<th>User Name</th>
					<th>User Role</th>
					<th>Status</th>
					<th>Created Date</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
								<tr>
					<td class="table-srno">1</td>
					<td>
						<p class="font-16 margin-0">Jokin Cuello</p>
						<p class="font-12 margin-0">jokin.cuello@openlanak.com</p>
						<p class="font-12 margin-0">650815852</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						23 Aug 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=276" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="276">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">2</td>
					<td>
						<p class="font-16 margin-0">Yogesh Thakre</p>
						<p class="font-12 margin-0">chintufru@gmail.com</p>
						<p class="font-12 margin-0">9552213960</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						23 Aug 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=275" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="275">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">3</td>
					<td>
						<p class="font-16 margin-0">testtest testtest</p>
						<p class="font-12 margin-0">testtest123@test.com</p>
						<p class="font-12 margin-0">9878987676</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						17 Aug 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=274" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="274">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">4</td>
					<td>
						<p class="font-16 margin-0">Kelvin Ar</p>
						<p class="font-12 margin-0">kelvin@gmail.com</p>
						<p class="font-12 margin-0">9123456789</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						15 Aug 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=273" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="273">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">5</td>
					<td>
						<p class="font-16 margin-0">pandeli majko</p>
						<p class="font-12 margin-0">arad@fleckens.hu</p>
						<p class="font-12 margin-0">32435324532453245</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						15 Aug 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=272" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="272">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">6</td>
					<td>
						<p class="font-16 margin-0">Carlos Beto</p>
						<p class="font-12 margin-0">carllos_34@msn.com</p>
						<p class="font-12 margin-0">7920850922</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						12 Aug 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=271" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="271">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">7</td>
					<td>
						<p class="font-16 margin-0">Lourdes Soares</p>
						<p class="font-12 margin-0">lourdesksoares@gmail.com</p>
						<p class="font-12 margin-0">8698702143</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						03 Aug 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=270" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="270">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">8</td>
					<td>
						<p class="font-16 margin-0">Mickey Mouse</p>
						<p class="font-12 margin-0">www.priyabhalara@gmail.com</p>
						<p class="font-12 margin-0">7894561233</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						02 Aug 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=269" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="269">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">9</td>
					<td>
						<p class="font-16 margin-0">Manish Srivastava</p>
						<p class="font-12 margin-0">designermaan30@gmail.com</p>
						<p class="font-12 margin-0">7081888200</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						01 Aug 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=268" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="268">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">10</td>
					<td>
						<p class="font-16 margin-0">Ahmed Muhammed</p>
						<p class="font-12 margin-0">ahmed@gmail.com</p>
						<p class="font-12 margin-0">08186966350</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						01 Aug 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=267" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="267">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">11</td>
					<td>
						<p class="font-16 margin-0">test testing</p>
						<p class="font-12 margin-0">test@gmail.com</p>
						<p class="font-12 margin-0">1234567890</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						01 Aug 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=266" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="266">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">12</td>
					<td>
						<p class="font-16 margin-0">Ahmed Muhammed</p>
						<p class="font-12 margin-0">ahmedmtkboy@gmail.com</p>
						<p class="font-12 margin-0">08186966350</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						01 Aug 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=265" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="265">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">13</td>
					<td>
						<p class="font-16 margin-0">Ram Josh</p>
						<p class="font-12 margin-0">rj.user143@gmail.com</p>
						<p class="font-12 margin-0">9898989898</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						30 Jul 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=264" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="264">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">14</td>
					<td>
						<p class="font-16 margin-0">AdminHot AdminHotPQ</p>
						<p class="font-12 margin-0">toniporshenko@yandex.com</p>
						<p class="font-12 margin-0">84796324131</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						30 Jul 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=263" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="263">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">15</td>
					<td>
						<p class="font-16 margin-0">Emmanuel Henry</p>
						<p class="font-12 margin-0">emmanuel.hy@gmail.com</p>
						<p class="font-12 margin-0">62950007</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						30 Jul 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=262" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="262">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">16</td>
					<td>
						<p class="font-16 margin-0">robHot robHotCT</p>
						<p class="font-12 margin-0">terriposhenko@yandex.com</p>
						<p class="font-12 margin-0">88628882568</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						29 Jul 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=261" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="261">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">17</td>
					<td>
						<p class="font-16 margin-0">Amer Khan</p>
						<p class="font-12 margin-0">office386@gmail.com</p>
						<p class="font-12 margin-0">03355553442</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						28 Jul 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=260" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="260">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">18</td>
					<td>
						<p class="font-16 margin-0">rehan ch</p>
						<p class="font-12 margin-0">rehanch927@gmail.com</p>
						<p class="font-12 margin-0">03007176770</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						22 Jul 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=259" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="259">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">19</td>
					<td>
						<p class="font-16 margin-0">iron man</p>
						<p class="font-12 margin-0">ironman@marvel.com</p>
						<p class="font-12 margin-0">007007007</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						21 Jul 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=258" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="258">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">20</td>
					<td>
						<p class="font-16 margin-0">Leo Moreno</p>
						<p class="font-12 margin-0">aaaaaaa@gmail.com</p>
						<p class="font-12 margin-0">12345678</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						20 Jul 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=257" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="257">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">21</td>
					<td>
						<p class="font-16 margin-0">ntytrtyr vttrtrt</p>
						<p class="font-12 margin-0">vermaniraj1502@gmail.com</p>
						<p class="font-12 margin-0">7838060707</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						20 Jul 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=256" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="256">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">22</td>
					<td>
						<p class="font-16 margin-0">Ajit sHARMA</p>
						<p class="font-12 margin-0">ajitkrsharma@yahoo.com</p>
						<p class="font-12 margin-0">9839693605</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						19 Jul 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=255" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="255">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">23</td>
					<td>
						<p class="font-16 margin-0">test test</p>
						<p class="font-12 margin-0">test@tester.nl</p>
						<p class="font-12 margin-0">0612345698</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						18 Jul 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=254" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="254">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">24</td>
					<td>
						<p class="font-16 margin-0">NA bg</p>
						<p class="font-12 margin-0">arghya1@gmail.com</p>
						<p class="font-12 margin-0">8753235762</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						16 Jul 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=253" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="253">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">25</td>
					<td>
						<p class="font-16 margin-0">test test</p>
						<p class="font-12 margin-0">rickthetyrant@gmail.com</p>
						<p class="font-12 margin-0">132342323</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						15 Jul 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=252" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="252">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">26</td>
					<td>
						<p class="font-16 margin-0">hallo donne</p>
						<p class="font-12 margin-0">donneall@hhgg.fr</p>
						<p class="font-12 margin-0">01224457778</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						11 Jul 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=251" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="251">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">27</td>
					<td>
						<p class="font-16 margin-0">NA bg</p>
						<p class="font-12 margin-0">arghya9@gmail.com</p>
						<p class="font-12 margin-0">8582858855</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						10 Jul 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=250" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="250">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">28</td>
					<td>
						<p class="font-16 margin-0">sunny kumar</p>
						<p class="font-12 margin-0">krsunny088@gmail.com</p>
						<p class="font-12 margin-0">7892437761</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						10 Jul 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=249" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="249">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">29</td>
					<td>
						<p class="font-16 margin-0">surinder Kaur</p>
						<p class="font-12 margin-0">test@test.com</p>
						<p class="font-12 margin-0">9815361275</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						09 Jul 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=247" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="247">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">30</td>
					<td>
						<p class="font-16 margin-0">Tamer jabsheh</p>
						<p class="font-12 margin-0">tjabsheh1@yahoo.com</p>
						<p class="font-12 margin-0">9097021941</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						09 Jul 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=246" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="246">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">31</td>
					<td>
						<p class="font-16 margin-0">vince King</p>
						<p class="font-12 margin-0">vince@email.com</p>
						<p class="font-12 margin-0">8015551234</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						06 Jul 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=245" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="245">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">32</td>
					<td>
						<p class="font-16 margin-0">Raju Yadav</p>
						<p class="font-12 margin-0">ry976815@gmail.com</p>
						<p class="font-12 margin-0">9120252483</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						04 Jul 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=244" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="244">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">33</td>
					<td>
						<p class="font-16 margin-0">Raj Bonsa</p>
						<p class="font-12 margin-0">rajbonsa@gmail.com</p>
						<p class="font-12 margin-0">440404040</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						03 Jul 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=243" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="243">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">34</td>
					<td>
						<p class="font-16 margin-0">mohammed shaukat</p>
						<p class="font-12 margin-0">shaukatapps@gmail.com</p>
						<p class="font-12 margin-0">9912508767</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						02 Jul 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=242" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="242">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">35</td>
					<td>
						<p class="font-16 margin-0">NA bg</p>
						<p class="font-12 margin-0">arghya@gmail.com</p>
						<p class="font-12 margin-0">8582858855</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						30 Jun 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=241" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="241">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">36</td>
					<td>
						<p class="font-16 margin-0">NA bg</p>
						<p class="font-12 margin-0">arghya69@gmail.com</p>
						<p class="font-12 margin-0">8582858855</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						30 Jun 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=240" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="240">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">37</td>
					<td>
						<p class="font-16 margin-0">NA bg</p>
						<p class="font-12 margin-0">dr.suashaw@gmail.com</p>
						<p class="font-12 margin-0">677777554</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						30 Jun 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=239" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="239">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">38</td>
					<td>
						<p class="font-16 margin-0">hola como</p>
						<p class="font-12 margin-0">y@g.com</p>
						<p class="font-12 margin-0">021222222222222222</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						29 Jun 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=238" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="238">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">39</td>
					<td>
						<p class="font-16 margin-0">mona ash</p>
						<p class="font-12 margin-0">enas@baianat.com</p>
						<p class="font-12 margin-0">124235</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						28 Jun 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=237" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="237">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">40</td>
					<td>
						<p class="font-16 margin-0">dev bros</p>
						<p class="font-12 margin-0">devbros92@gmail.com</p>
						<p class="font-12 margin-0">00923015685077</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						23 Jun 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=236" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="236">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">41</td>
					<td>
						<p class="font-16 margin-0">asdf asd</p>
						<p class="font-12 margin-0">asdt@reer.com</p>
						<p class="font-12 margin-0">324234234234</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						23 Jun 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=235" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="235">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">42</td>
					<td>
						<p class="font-16 margin-0">Muhammad Kamran</p>
						<p class="font-12 margin-0">kamranyousaf786@ymail.com</p>
						<p class="font-12 margin-0">3035203313</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						22 Jun 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=234" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="234">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">43</td>
					<td>
						<p class="font-16 margin-0">tobi tosin</p>
						<p class="font-12 margin-0">touthtek@gmail.com</p>
						<p class="font-12 margin-0">8062209408</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						22 Jun 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=233" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="233">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">44</td>
					<td>
						<p class="font-16 margin-0">nihad kj</p>
						<p class="font-12 margin-0">nihadnk@gmail.com</p>
						<p class="font-12 margin-0">9946245919</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						20 Jun 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=232" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="232">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">45</td>
					<td>
						<p class="font-16 margin-0">Test Test</p>
						<p class="font-12 margin-0">test@test.ro</p>
						<p class="font-12 margin-0">07012345423</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						18 Jun 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=231" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="231">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">46</td>
					<td>
						<p class="font-16 margin-0">Dajiya Rinku</p>
						<p class="font-12 margin-0">rinkunnl80@gmail.com</p>
						<p class="font-12 margin-0">7056375867</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						15 Jun 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=230" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="230">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">47</td>
					<td>
						<p class="font-16 margin-0">ali razq</p>
						<p class="font-12 margin-0">arjanjua1@gmail.com</p>
						<p class="font-12 margin-0">3126605654</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						15 Jun 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=229" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="229">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">48</td>
					<td>
						<p class="font-16 margin-0">ty tyy</p>
						<p class="font-12 margin-0">ad@ad.com</p>
						<p class="font-12 margin-0">9999999999999999999999999999</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						12 Jun 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=228" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="228">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">49</td>
					<td>
						<p class="font-16 margin-0">ty tyy</p>
						<p class="font-12 margin-0">yu@tt.kk</p>
						<p class="font-12 margin-0">555555</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						12 Jun 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=227" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="227">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">50</td>
					<td>
						<p class="font-16 margin-0">Sercan Serdar</p>
						<p class="font-12 margin-0">sercanserdar2013@gmail.com</p>
						<p class="font-12 margin-0">4565</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						09 Jun 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=226" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="226">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">51</td>
					<td>
						<p class="font-16 margin-0">Angelo Bratti</p>
						<p class="font-12 margin-0">angelo.bratti@tbschile.com</p>
						<p class="font-12 margin-0">933523319</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						07 Jun 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=225" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="225">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">52</td>
					<td>
						<p class="font-16 margin-0">sonam sharma</p>
						<p class="font-12 margin-0">sonam.sharma@varaunited.com</p>
						<p class="font-12 margin-0">9871899503</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						06 Jun 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=224" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="224">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">53</td>
					<td>
						<p class="font-16 margin-0">Game Change</p>
						<p class="font-12 margin-0">admin@nhpc.us</p>
						<p class="font-12 margin-0">3034826824</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						05 Jun 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=223" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="223">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">54</td>
					<td>
						<p class="font-16 margin-0">gaurav Garg</p>
						<p class="font-12 margin-0">asd@gmail.com</p>
						<p class="font-12 margin-0">8950859514</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						04 Jun 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=222" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="222">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">55</td>
					<td>
						<p class="font-16 margin-0">ioannid mavroudis</p>
						<p class="font-12 margin-0">ioannis.mavroudis@gmail.com</p>
						<p class="font-12 margin-0">07425879359</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						04 Jun 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=221" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="221">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">56</td>
					<td>
						<p class="font-16 margin-0">ahmed ragab</p>
						<p class="font-12 margin-0">ahmedragaba2015@gmail.com</p>
						<p class="font-12 margin-0">01272350476</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						03 Jun 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=220" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="220">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">57</td>
					<td>
						<p class="font-16 margin-0">omer farooq</p>
						<p class="font-12 margin-0">warlox414@gmail.com</p>
						<p class="font-12 margin-0">012313123123</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						02 Jun 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=219" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="219">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">58</td>
					<td>
						<p class="font-16 margin-0">Tanya Prive</p>
						<p class="font-12 margin-0">tanyaprive@gmail.com</p>
						<p class="font-12 margin-0">4158477234</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						31 May 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=218" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="218">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">59</td>
					<td>
						<p class="font-16 margin-0">mohamed mostafa</p>
						<p class="font-12 margin-0">moahned11@gmail.com</p>
						<p class="font-12 margin-0">88888888</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						29 May 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=217" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="217">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">60</td>
					<td>
						<p class="font-16 margin-0">Ashwin Banga</p>
						<p class="font-12 margin-0">gurpreetkumarbanga@gmail.com</p>
						<p class="font-12 margin-0">4145394517</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						26 May 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=216" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="216">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">61</td>
					<td>
						<p class="font-16 margin-0">sdfgh xcvg</p>
						<p class="font-12 margin-0">fg@fyh.fgg</p>
						<p class="font-12 margin-0">23456</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						25 May 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=215" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="215">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">62</td>
					<td>
						<p class="font-16 margin-0">jb jbbj</p>
						<p class="font-12 margin-0">bjjb@mm.com</p>
						<p class="font-12 margin-0">5555</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						23 May 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=214" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="214">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">63</td>
					<td>
						<p class="font-16 margin-0">ert wertyuy</p>
						<p class="font-12 margin-0">asdf@efgg.yuk</p>
						<p class="font-12 margin-0">12345</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						21 May 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=213" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="213">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">64</td>
					<td>
						<p class="font-16 margin-0">asdf erhewr</p>
						<p class="font-12 margin-0">g375@gmail.com</p>
						<p class="font-12 margin-0">2345565</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						20 May 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=212" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="212">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">65</td>
					<td>
						<p class="font-16 margin-0">Ronnie Chowdhury</p>
						<p class="font-12 margin-0">chowdhury@gmail.com</p>
						<p class="font-12 margin-0">017234645643</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						19 May 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=211" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="211">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">66</td>
					<td>
						<p class="font-16 margin-0">test  user</p>
						<p class="font-12 margin-0">testuser@yahoo.com</p>
						<p class="font-12 margin-0">1231234123</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						16 May 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=210" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="210">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">67</td>
					<td>
						<p class="font-16 margin-0">fgrdgdfgdgd fgrdgdfgdgd</p>
						<p class="font-12 margin-0">fgrdgdfgdgd@wp.pl</p>
						<p class="font-12 margin-0">53454353</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						16 May 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=209" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="209">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">68</td>
					<td>
						<p class="font-16 margin-0">fgrdgdfgdgd rtete</p>
						<p class="font-12 margin-0">fahalfjalj@wp.pl</p>
						<p class="font-12 margin-0">345345345</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						16 May 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=208" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="208">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">69</td>
					<td>
						<p class="font-16 margin-0">mimi mimi</p>
						<p class="font-12 margin-0">masankamartin@gmail.com</p>
						<p class="font-12 margin-0">0717638245</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						11 May 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=207" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="207">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">70</td>
					<td>
						<p class="font-16 margin-0">akhilesh dev</p>
						<p class="font-12 margin-0">akhileshdev72@gmail.com</p>
						<p class="font-12 margin-0">09958723227</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						11 May 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=206" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="206">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">71</td>
					<td>
						<p class="font-16 margin-0">hjb hjbhj</p>
						<p class="font-12 margin-0">vc@g.com</p>
						<p class="font-12 margin-0">51644646</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						05 May 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=205" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="205">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">72</td>
					<td>
						<p class="font-16 margin-0">Naqi Raza</p>
						<p class="font-12 margin-0">naqiraza199@gmail.com</p>
						<p class="font-12 margin-0">03101006702</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						30 Apr 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=204" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="204">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">73</td>
					<td>
						<p class="font-16 margin-0">gugu gugu</p>
						<p class="font-12 margin-0">gugu@hotmail.com</p>
						<p class="font-12 margin-0">5558882525</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						26 Apr 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=203" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="203">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">74</td>
					<td>
						<p class="font-16 margin-0">ahmed helal</p>
						<p class="font-12 margin-0">ahmdtawfeek@gmail.com</p>
						<p class="font-12 margin-0">01020250657</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						25 Apr 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=202" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="202">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">75</td>
					<td>
						<p class="font-16 margin-0">Nitish Praja</p>
						<p class="font-12 margin-0">nitish.infocommedia@gmail.com</p>
						<p class="font-12 margin-0">1234567896</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						24 Apr 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=201" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="201">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">76</td>
					<td>
						<p class="font-16 margin-0">dfh dfjt</p>
						<p class="font-12 margin-0">asdvc@gmail.com</p>
						<p class="font-12 margin-0">4567</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						23 Apr 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=200" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="200">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">77</td>
					<td>
						<p class="font-16 margin-0">shr fjtru</p>
						<p class="font-12 margin-0">n@gmail.com</p>
						<p class="font-12 margin-0">642668262</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						22 Apr 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=199" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="199">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">78</td>
					<td>
						<p class="font-16 margin-0">gsd hhr</p>
						<p class="font-12 margin-0">ab@g.com</p>
						<p class="font-12 margin-0">5578765</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						22 Apr 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=198" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="198">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">79</td>
					<td>
						<p class="font-16 margin-0">ryer erher</p>
						<p class="font-12 margin-0">dg@gmil.com</p>
						<p class="font-12 margin-0">576778</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						22 Apr 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=197" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="197">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">80</td>
					<td>
						<p class="font-16 margin-0">Honorius Lucas</p>
						<p class="font-12 margin-0">honolucas6@yahoo.com</p>
						<p class="font-12 margin-0">0715716309</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						20 Apr 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=196" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="196">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">81</td>
					<td>
						<p class="font-16 margin-0">sdfgh srdtfyghkj</p>
						<p class="font-12 margin-0">a@g.com</p>
						<p class="font-12 margin-0">53754545</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						20 Apr 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=195" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="195">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">82</td>
					<td>
						<p class="font-16 margin-0">gsd ghgc</p>
						<p class="font-12 margin-0">f@g.com</p>
						<p class="font-12 margin-0">5465</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						19 Apr 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=194" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="194">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">83</td>
					<td>
						<p class="font-16 margin-0">aa aa</p>
						<p class="font-12 margin-0">aa@gmail.com</p>
						<p class="font-12 margin-0">88395768</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						19 Apr 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=193" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="193">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">84</td>
					<td>
						<p class="font-16 margin-0">dfhdr hhr</p>
						<p class="font-12 margin-0">h@gmil.com</p>
						<p class="font-12 margin-0">5427737</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						19 Apr 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=192" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="192">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">85</td>
					<td>
						<p class="font-16 margin-0">Kim Abrea</p>
						<p class="font-12 margin-0">kimabreakingemo@gmail.com</p>
						<p class="font-12 margin-0">09057620346</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						19 Apr 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=191" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="191">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">86</td>
					<td>
						<p class="font-16 margin-0">Md Rahman</p>
						<p class="font-12 margin-0">masuddhk@hotmail.com</p>
						<p class="font-12 margin-0">1777753204</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						19 Apr 2018					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=190" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="190">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">87</td>
					<td>
						<p class="font-16 margin-0">advnsdn sdinvs</p>
						<p class="font-12 margin-0">acontn@gmail.com</p>
						<p class="font-12 margin-0">999999999</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						15 Dec 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=138" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="138">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">88</td>
					<td>
						<p class="font-16 margin-0">hello world</p>
						<p class="font-12 margin-0">mosespanni6@gmail.com</p>
						<p class="font-12 margin-0">02222224465</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						01 Dec 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=137" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="137">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">89</td>
					<td>
						<p class="font-16 margin-0">Moses Moses</p>
						<p class="font-12 margin-0">jquerry9@gmail.com</p>
						<p class="font-12 margin-0">0246132241</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						23 Nov 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=136" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="136">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">90</td>
					<td>
						<p class="font-16 margin-0">Luis Rios</p>
						<p class="font-12 margin-0">luisriosoyola@gmail.com</p>
						<p class="font-12 margin-0">3013127465</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						13 Nov 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=135" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="135">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">91</td>
					<td>
						<p class="font-16 margin-0">Sadeque Sharif</p>
						<p class="font-12 margin-0">sadeque.sharif@gmail.com</p>
						<p class="font-12 margin-0">1911621227</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						12 Nov 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=134" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="134">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">92</td>
					<td>
						<p class="font-16 margin-0">karma gandhi</p>
						<p class="font-12 margin-0">wilaontower@gmail.com</p>
						<p class="font-12 margin-0">8460529800</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						06 Nov 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=133" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="133">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">93</td>
					<td>
						<p class="font-16 margin-0">sd dsd</p>
						<p class="font-12 margin-0">das@gmail.com</p>
						<p class="font-12 margin-0">8989898989898</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						06 Nov 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=132" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="132">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">94</td>
					<td>
						<p class="font-16 margin-0">yoga varshini</p>
						<p class="font-12 margin-0">yogavarshini.s@gmail.com</p>
						<p class="font-12 margin-0">96558</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						28 Oct 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=131" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="131">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">95</td>
					<td>
						<p class="font-16 margin-0">Ac Cardoso</p>
						<p class="font-12 margin-0">acg@acg.com</p>
						<p class="font-12 margin-0">222222</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						19 Oct 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=130" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="130">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">96</td>
					<td>
						<p class="font-16 margin-0">Bukan Saya</p>
						<p class="font-12 margin-0">bukansaya@gol.co</p>
						<p class="font-12 margin-0">7381848</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						18 Oct 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=129" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="129">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">97</td>
					<td>
						<p class="font-16 margin-0">Adi Rosli</p>
						<p class="font-12 margin-0">adiyazid@gmail.com</p>
						<p class="font-12 margin-0">12345</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						11 Oct 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=128" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="128">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">98</td>
					<td>
						<p class="font-16 margin-0">gb gb</p>
						<p class="font-12 margin-0">gb@gmail.com</p>
						<p class="font-12 margin-0">1234567891</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						08 Oct 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=127" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="127">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">99</td>
					<td>
						<p class="font-16 margin-0">wa wa</p>
						<p class="font-12 margin-0">w7alm@yahoo.com</p>
						<p class="font-12 margin-0">00201015666593</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						26 Sep 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=126" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="126">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">100</td>
					<td>
						<p class="font-16 margin-0">najib malik</p>
						<p class="font-12 margin-0">webdevelopmentlabs@gmail.com</p>
						<p class="font-12 margin-0">3244363229</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						19 Sep 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=125" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="125">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">101</td>
					<td>
						<p class="font-16 margin-0">nilesh david</p>
						<p class="font-12 margin-0">nilesh.d@live.com</p>
						<p class="font-12 margin-0">9944982203</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						10 Sep 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=124" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="124">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">102</td>
					<td>
						<p class="font-16 margin-0">John John</p>
						<p class="font-12 margin-0">jithin@olivecs.com</p>
						<p class="font-12 margin-0">789654123</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						06 Sep 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=123" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="123">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">103</td>
					<td>
						<p class="font-16 margin-0">prueba prueba</p>
						<p class="font-12 margin-0">prueba@prueba.com</p>
						<p class="font-12 margin-0">232323</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						04 Sep 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=122" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="122">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">104</td>
					<td>
						<p class="font-16 margin-0">Danielle Balisky Young</p>
						<p class="font-12 margin-0">danielle.young.hair@gmail.com</p>
						<p class="font-12 margin-0">7809377842</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						03 Sep 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=121" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="121">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">105</td>
					<td>
						<p class="font-16 margin-0">Felipe  Guinossi</p>
						<p class="font-12 margin-0">fg@brandmkt.com.br</p>
						<p class="font-12 margin-0">5126264720</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						25 Aug 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=120" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="120">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">106</td>
					<td>
						<p class="font-16 margin-0">dd dd</p>
						<p class="font-12 margin-0">salam@gmail.com</p>
						<p class="font-12 margin-0">0163558455</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						23 Aug 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=119" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="119">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">107</td>
					<td>
						<p class="font-16 margin-0">moe moe</p>
						<p class="font-12 margin-0">123@123.com</p>
						<p class="font-12 margin-0">456456</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						17 Aug 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=118" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="118">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">108</td>
					<td>
						<p class="font-16 margin-0">mohamad ali</p>
						<p class="font-12 margin-0">jij@jasda.com</p>
						<p class="font-12 margin-0">54615</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						17 Aug 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=117" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="117">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">109</td>
					<td>
						<p class="font-16 margin-0">eee eewd</p>
						<p class="font-12 margin-0">emmanuel@navegantes.mx</p>
						<p class="font-12 margin-0">9999999999</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						14 Aug 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=116" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="116">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">110</td>
					<td>
						<p class="font-16 margin-0">Sin Bout</p>
						<p class="font-12 margin-0">singto@projecthum.org</p>
						<p class="font-12 margin-0">0405546212</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						11 Aug 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=115" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="115">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">111</td>
					<td>
						<p class="font-16 margin-0">asda asda</p>
						<p class="font-12 margin-0">asda@hotmail.com</p>
						<p class="font-12 margin-0">5312455555</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						09 Aug 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=114" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="114">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">112</td>
					<td>
						<p class="font-16 margin-0">Henock Pierre</p>
						<p class="font-12 margin-0">henockp@gmail.com</p>
						<p class="font-12 margin-0">50936449536</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						08 Aug 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=113" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="113">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">113</td>
					<td>
						<p class="font-16 margin-0">asd asd</p>
						<p class="font-12 margin-0">asd@hotmail.com</p>
						<p class="font-12 margin-0">5454544544</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						07 Aug 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=112" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="112">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">114</td>
					<td>
						<p class="font-16 margin-0">tota patel</p>
						<p class="font-12 margin-0">patelbilal15@gmail.com</p>
						<p class="font-12 margin-0">7990448834</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						03 Aug 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=111" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="111">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">115</td>
					<td>
						<p class="font-16 margin-0">ali casa</p>
						<p class="font-12 margin-0">alicacasaligi@gmail.com</p>
						<p class="font-12 margin-0">994546</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						03 Aug 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=110" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="110">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">116</td>
					<td>
						<p class="font-16 margin-0">noly Chigwedere</p>
						<p class="font-12 margin-0">nolychigwedere@hotmail.co.uk</p>
						<p class="font-12 margin-0">01657654620</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						27 Jul 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=109" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="109">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">117</td>
					<td>
						<p class="font-16 margin-0">nigig nfos</p>
						<p class="font-12 margin-0">nff@hotmail.co.uk</p>
						<p class="font-12 margin-0">01248999999999</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						27 Jul 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=108" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="108">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">118</td>
					<td>
						<p class="font-16 margin-0">xxxx xxxxx</p>
						<p class="font-12 margin-0">webmaster@smedi.com.tn</p>
						<p class="font-12 margin-0">23940323</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						26 Jul 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=107" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="107">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">119</td>
					<td>
						<p class="font-16 margin-0">test teyrddq</p>
						<p class="font-12 margin-0">jjzemog@gmail.com</p>
						<p class="font-12 margin-0">65498721</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						21 Jul 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=106" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="106">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">120</td>
					<td>
						<p class="font-16 margin-0">yf fyh</p>
						<p class="font-12 margin-0">keystroke99@gmail.com</p>
						<p class="font-12 margin-0">8328456358</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						19 Jul 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=105" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="105">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">121</td>
					<td>
						<p class="font-16 margin-0">xyz abc</p>
						<p class="font-12 margin-0">xyz@gmail.com</p>
						<p class="font-12 margin-0">7897654335</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						18 Jul 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=104" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="104">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">122</td>
					<td>
						<p class="font-16 margin-0">xyz abc</p>
						<p class="font-12 margin-0">abc@gmail.com</p>
						<p class="font-12 margin-0">7897654335</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						18 Jul 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=103" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="103">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">123</td>
					<td>
						<p class="font-16 margin-0">yazan lahawani</p>
						<p class="font-12 margin-0">yazan.lahawani@gmail.com</p>
						<p class="font-12 margin-0">0796994110</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						17 Jul 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=102" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="102">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">124</td>
					<td>
						<p class="font-16 margin-0">Anny Fink</p>
						<p class="font-12 margin-0">any@gmail.com</p>
						<p class="font-12 margin-0">01455878895</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						14 Jul 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=101" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="101">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">125</td>
					<td>
						<p class="font-16 margin-0">aa bb</p>
						<p class="font-12 margin-0">aa@bb.cl</p>
						<p class="font-12 margin-0">789798798798789</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						11 Jul 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=100" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="100">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">126</td>
					<td>
						<p class="font-16 margin-0">Don Rose</p>
						<p class="font-12 margin-0">rosedon19@gmail.com</p>
						<p class="font-12 margin-0">3033333949</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						07 Jul 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=99" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="99">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">127</td>
					<td>
						<p class="font-16 margin-0">Sam Sim</p>
						<p class="font-12 margin-0">zandusdk@gmail.com</p>
						<p class="font-12 margin-0">6122323702</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						07 Jul 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=98" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="98">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">128</td>
					<td>
						<p class="font-16 margin-0">Mahendra Choudhary</p>
						<p class="font-12 margin-0">thakurmahendra13@gmail.com</p>
						<p class="font-12 margin-0">8975383539</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						07 Jul 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=96" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="96">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">129</td>
					<td>
						<p class="font-16 margin-0">xxx Rivers</p>
						<p class="font-12 margin-0">donald.rose82@gmail.com</p>
						<p class="font-12 margin-0">303919999</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						06 Jul 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=95" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="95">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">130</td>
					<td>
						<p class="font-16 margin-0">Rahul Sharma</p>
						<p class="font-12 margin-0">rahul@perfectqaservices.com</p>
						<p class="font-12 margin-0">9904204070</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						04 Jul 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=94" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="94">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">131</td>
					<td>
						<p class="font-16 margin-0">webtec eee</p>
						<p class="font-12 margin-0">info@gwtes.org</p>
						<p class="font-12 margin-0">9876543210</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						03 Jul 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=93" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="93">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">132</td>
					<td>
						<p class="font-16 margin-0">vinay bu</p>
						<p class="font-12 margin-0">vinaylimson@gmail.com</p>
						<p class="font-12 margin-0">9052979685</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						03 Jul 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=92" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="92">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">133</td>
					<td>
						<p class="font-16 margin-0">hetali topiwala</p>
						<p class="font-12 margin-0">he@gmail.com</p>
						<p class="font-12 margin-0">1234567898</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						03 Jul 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=91" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="91">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">134</td>
					<td>
						<p class="font-16 margin-0">fff fff fff fff</p>
						<p class="font-12 margin-0">f@gmail.com</p>
						<p class="font-12 margin-0">1234567898</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						03 Jul 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=90" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="90">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">135</td>
					<td>
						<p class="font-16 margin-0">alvaro vald</p>
						<p class="font-12 margin-0">alvaro@presscom.cl</p>
						<p class="font-12 margin-0">8888888</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						30 Jun 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=89" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="89">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">136</td>
					<td>
						<p class="font-16 margin-0">admin admin</p>
						<p class="font-12 margin-0">infofirstindia@gmail.com</p>
						<p class="font-12 margin-0">8005652215</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						29 Jun 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=88" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="88">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">137</td>
					<td>
						<p class="font-16 margin-0">Sonu Singh</p>
						<p class="font-12 margin-0">sonu@pepdev.com</p>
						<p class="font-12 margin-0">9175477153</p>
					</td>
					<td class="username">
											</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						20 Apr 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=64" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="64">
						</a>
											</td>
				</tr>
								<tr>
					<td class="table-srno">138</td>
					<td>
						<p class="font-16 margin-0">Sonu Singh</p>
						<p class="font-12 margin-0">sonu0289@gmail.com</p>
						<p class="font-12 margin-0">9175477153</p>
					</td>
					<td class="username">
						sonu					</td>
					<td class="user-role">
						Paitent					</td>
					<td class="user-status">
												<span class="badge badge-sm badge-success badge-pill">Active</span>
											</td>
					<td class="user-date">
						05 Apr 2017					</td>
					<td class="table-action">
												<a href="index.php?route=user/edit&id=63" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="63">
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
				<form action="index.php?route=user/delete" class="delete-card-button" method="post">
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