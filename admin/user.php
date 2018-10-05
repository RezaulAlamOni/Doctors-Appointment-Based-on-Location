<?php include('include/db.php'); ?>
<?php include('include/header.php'); ?>
<?php include('include/navbar.php'); ?>

<div class="page-container">
    <script>
        $('#user').show();
        $('#user-li>a').addClass('active');
    </script>
<!-- Subscriber list page start -->
<div class="page-hdr">
	<div class="row">
		<div class="col-4 page-name">
			<h1><i class="fa fa-black-tie"></i>Subscribers</h1>
		</div>
        <div class="page-name col-3 text-right">
            <h1 id="time">Time</h1>
        </div>
		<div class="col-5 page-menu">
			<a id="cancel" href="user.php" data-toggle="tooltip" data-placement="left" title="Reload"><i class="fa fa-refresh"></i></a>
<!--			<a href="" data-toggle="tooltip" data-placement="left" title="Add Subscriber"><i class="fa fa-plus"></i></a>-->
		</div>
	</div>
</div>
<div class="content">
	<div class="table-container">
		<table id="subscriber-table" class="table table-bordered table-striped datatable-table">
			<thead>
				<tr class="table-heading">
					<th class="table-srno">#</th>
					<th>Email</th>
					<th>Status</th>
					<th>Date of joining</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
            <?php
                $sql ="SELECT * FROM `subscribers`";
                $result = $pdo->prepare($sql);
                $result->execute();
                $subs = $result->fetchAll();

            foreach ($subs as $sub) {

                ?>
                <tr>
                    <td class="table-srno"><?php echo $sub->id;?></td>
                    <td><p class="font-14 margin-0"><?php echo $sub->email;?></p></td>
                    <td>
                        <span class="badge badge-sm badge-success"><?php if($sub->status)echo 'Active'; else echo 'InActive';?></span>
                    </td>
                    <td><?php echo $sub->created_at;?></td>
                    <td class="table-action">
<!--                        <a href=""-->
<!--                           class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip"-->
<!--                           title="Edit"><i class="fa fa-pencil-square-o"></i></a>-->
                        <a href="locations.php?delete=<?php echo $sub->id;?>" class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete"
                           data-toggle="tooltip" title="Delete">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>



                <?php
            }
            if (isset($_GET['delete'])){
                $id= $_GET['delete'];
                $sql = "DELETE FROM subscribers WHERE id = {$id}";
                $result = $pdo->prepare($sql);
                $result->execute();
                header('Location: locations.php');
            }
                 ?>
            </tbody>
		</table>
	</div>
</div>

<!-- Delete Modal -->
<!--<div id="delete-card" class="modal fade" role="dialog">-->
<!--	<div class="modal-dialog">-->
<!--		<div class="modal-content">-->
<!--			<div class="modal-header">-->
<!--				<h4 class="modal-title">Confirm Delete</h4>-->
<!--				<button type="button" class="close" data-dismiss="modal">&times;</button>-->
<!--			</div>-->
<!--			<div class="modal-body">-->
<!--				<p class="delete-card-ttl">Are you sure you want to delete?</p>-->
<!--			</div>-->
<!--			<div class="modal-footer">-->
<!--				<form action="" class="delete-card-button" method="post">-->
<!--					<input type="hidden" value="" name="id">-->
<!--					<button type="submit" class="btn btn-danger" name="delete">Delete</button>-->
<!--				</form>-->
<!--				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->
<!-- Footer -->
<?php include ('include/footer.php'); ?>