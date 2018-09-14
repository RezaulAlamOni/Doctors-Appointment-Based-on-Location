<?php include('include/header.php'); ?>
<?php include('include/navbar.php'); ?>


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
			<a id="cancel" href="index.php?route=themeoption/doctor" data-toggle="tooltip" data-placement="left" title="Reload"><i class="fa fa-refresh"></i></a>
			<a href="index.php?route=themeoption/doctor/add" data-toggle="tooltip" data-placement="left" title="Add Doctor"><i class="fa fa-plus"></i></a>
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
					<th>Picture</th>
					<th>Department</th>
					<th>Priority</th>
					<th class="table-action">Action</th>
				</tr>
			</thead>
			<tbody>
								<tr>
					<td class="table-srno">1</td>
					<td>
						<p class="font-16 margin-0">Dr. Daniel Barnes</p>
						<p class="font-12 margin-0">pepdevofficial@gmail.com</p>
						<p class="font-12 margin-0">8975383539</p>
					</td>
					<td class="table-img">
						<img class="img-thumbnail" src="../public/uploads/doctor-1.jpg" alt="">
					</td>
					<td>Orthology</td>
					<td>1</td>
					<td class="table-action">
						<a href="index.php?route=themeoption/doctor/edit&id=1" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="1">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">2</td>
					<td>
						<p class="font-16 margin-0">Dr. Melissa Bates</p>
						<p class="font-12 margin-0">pepdevofficial@gmail.com</p>
						<p class="font-12 margin-0">89753835393</p>
					</td>
					<td class="table-img">
						<img class="img-thumbnail" src="../public/uploads/doctor-2.jpg" alt="">
					</td>
					<td>Gynaecology</td>
					<td>2</td>
					<td class="table-action">
						<a href="index.php?route=themeoption/doctor/edit&id=3" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="3">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">3</td>
					<td>
						<p class="font-16 margin-0">Dr. Cheri Aria</p>
						<p class="font-12 margin-0">pepdevofficial@gmail.com</p>
						<p class="font-12 margin-0">8975383539</p>
					</td>
					<td class="table-img">
						<img class="img-thumbnail" src="../public/uploads/doctor-4.jpg" alt="">
					</td>
					<td>Dermatologist</td>
					<td>3</td>
					<td class="table-action">
						<a href="index.php?route=themeoption/doctor/edit&id=4" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="4">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">4</td>
					<td>
						<p class="font-16 margin-0">Dr. Steve Soeren</p>
						<p class="font-12 margin-0">pepdevofficial@gmail.com</p>
						<p class="font-12 margin-0">8975383539</p>
					</td>
					<td class="table-img">
						<img class="img-thumbnail" src="../public/uploads/doctor-3.jpg" alt="">
					</td>
					<td>Orthology</td>
					<td>4</td>
					<td class="table-action">
						<a href="index.php?route=themeoption/doctor/edit&id=5" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="5">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">5</td>
					<td>
						<p class="font-16 margin-0">Dr. Theodore Bennett</p>
						<p class="font-12 margin-0">pepdevofficial@gmail.com</p>
						<p class="font-12 margin-0">8975383539</p>
					</td>
					<td class="table-img">
						<img class="img-thumbnail" src="../public/uploads/doctor-6.jpg" alt="">
					</td>
					<td>Anaesthesia</td>
					<td>5</td>
					<td class="table-action">
						<a href="index.php?route=themeoption/doctor/edit&id=6" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="6">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">6</td>
					<td>
						<p class="font-16 margin-0">Dr. Barbara Baker</p>
						<p class="font-12 margin-0">pepdevofficial@gmail.com</p>
						<p class="font-12 margin-0">8975383539</p>
					</td>
					<td class="table-img">
						<img class="img-thumbnail" src="../public/uploads/doctor-8.jpg" alt="">
					</td>
					<td>Orthology</td>
					<td>6</td>
					<td class="table-action">
						<a href="index.php?route=themeoption/doctor/edit&id=7" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="7">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">7</td>
					<td>
						<p class="font-16 margin-0">Dr. Linda Adams</p>
						<p class="font-12 margin-0">pepdevofficial@gmail.com</p>
						<p class="font-12 margin-0">8975383539</p>
					</td>
					<td class="table-img">
						<img class="img-thumbnail" src="../public/uploads/doctor-10.jpg" alt="">
					</td>
					<td>Gynaecology</td>
					<td>7</td>
					<td class="table-action">
						<a href="index.php?route=themeoption/doctor/edit&id=8" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="8">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">8</td>
					<td>
						<p class="font-16 margin-0">Dr. Janet Collins</p>
						<p class="font-12 margin-0">pepdevofficial@gmail.com</p>
						<p class="font-12 margin-0">8975383539</p>
					</td>
					<td class="table-img">
						<img class="img-thumbnail" src="../public/uploads/doctor-9.jpg" alt="">
					</td>
					<td>Gynaecology</td>
					<td>8</td>
					<td class="table-action">
						<a href="index.php?route=themeoption/doctor/edit&id=9" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="9">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">9</td>
					<td>
						<p class="font-16 margin-0">Dr. Vedhraj Jain</p>
						<p class="font-12 margin-0">support@pepdev.com</p>
						<p class="font-12 margin-0">8975383539</p>
					</td>
					<td class="table-img">
						<img class="img-thumbnail" src="../public/uploads/doctor-11.jpg" alt="">
					</td>
					<td>Ayurvedic</td>
					<td>9</td>
					<td class="table-action">
						<a href="index.php?route=themeoption/doctor/edit&id=10" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="10">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">10</td>
					<td>
						<p class="font-16 margin-0">Dr. Emily Rasberry</p>
						<p class="font-12 margin-0">pepdevofficial@gmail.com</p>
						<p class="font-12 margin-0">8975383539</p>
					</td>
					<td class="table-img">
						<img class="img-thumbnail" src="../public/uploads/doctor-5.jpg" alt="">
					</td>
					<td>Pathology</td>
					<td>10</td>
					<td class="table-action">
						<a href="index.php?route=themeoption/doctor/edit&id=11" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="11">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">11</td>
					<td>
						<p class="font-16 margin-0">Dr. Nancy Allen</p>
						<p class="font-12 margin-0">pepdevofficial@gmail.com</p>
						<p class="font-12 margin-0">9545973001</p>
					</td>
					<td class="table-img">
						<img class="img-thumbnail" src="../public/uploads/doctor-12.jpg" alt="">
					</td>
					<td>Gynaecology</td>
					<td>11</td>
					<td class="table-action">
						<a href="index.php?route=themeoption/doctor/edit&id=12" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="12">
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

<script>  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-93901876-1', 'auto');
  ga('send', 'pageview');</script>


</div>

<script type="text/javascript">
var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || 
{widgetcode:"b0707d67168a123a4b74ffaaa713d80d766a387e66055ee6c3b075720a1e3e1b", values:{},ready:function(){}};
var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;
s.src="https://salesiq.zoho.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);d.write("<div id='zsiqwidget'></div>");
</script>
		
</div>
	</div>
</body>
</html>