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
                        <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete"
                           data-toggle="tooltip" title="Delete">
                            <i class="fa fa-trash-o"></i><input type="hidden" value="29">
                        </a>
                    </td>
                </tr>



                <?php
            }
                 ?>
<!--								<tr>-->
<!--					<td class="table-srno">2</td>-->
<!--					<td><p class="font-14 margin-0">ahmedmtkboy@gmail.com</p></td>-->
<!--					<td>-->
<!--												<span class="badge badge-sm badge-success">Active</span>-->
<!--											</td>-->
<!--					<td>31 Jul 2018</td>-->
<!--					<td class="table-action">-->
<!--						<a href="index.php?route=subscriber/edit&id=28" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>-->
<!--						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete"  data-toggle="tooltip" title="Delete">-->
<!--							<i class="fa fa-trash-o"></i><input type="hidden" value="28">-->
<!--						</a>-->
<!--					</td>-->
<!--				</tr>-->
<!--								<tr>-->
<!--					<td class="table-srno">3</td>-->
<!--					<td><p class="font-14 margin-0">shailvi1597@yahoo.in</p></td>-->
<!--					<td>-->
<!--												<span class="badge badge-sm badge-success">Active</span>-->
<!--											</td>-->
<!--					<td>03 Jun 2018</td>-->
<!--					<td class="table-action">-->
<!--						<a href="index.php?route=subscriber/edit&id=27" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>-->
<!--						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete"  data-toggle="tooltip" title="Delete">-->
<!--							<i class="fa fa-trash-o"></i><input type="hidden" value="27">-->
<!--						</a>-->
<!--					</td>-->
<!--				</tr>-->
<!--								<tr>-->
<!--					<td class="table-srno">4</td>-->
<!--					<td><p class="font-14 margin-0">knockme18@gmail.com</p></td>-->
<!--					<td>-->
<!--												<span class="badge badge-sm badge-success">Active</span>-->
<!--											</td>-->
<!--					<td>30 May 2018</td>-->
<!--					<td class="table-action">-->
<!--						<a href="index.php?route=subscriber/edit&id=26" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>-->
<!--						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete"  data-toggle="tooltip" title="Delete">-->
<!--							<i class="fa fa-trash-o"></i><input type="hidden" value="26">-->
<!--						</a>-->
<!--					</td>-->
<!--				</tr>-->
<!--								<tr>-->
<!--					<td class="table-srno">5</td>-->
<!--					<td><p class="font-14 margin-0">polinakul87@gmail.com</p></td>-->
<!--					<td>-->
<!--												<span class="badge badge-sm badge-success">Active</span>-->
<!--											</td>-->
<!--					<td>22 May 2018</td>-->
<!--					<td class="table-action">-->
<!--						<a href="index.php?route=subscriber/edit&id=25" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>-->
<!--						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete"  data-toggle="tooltip" title="Delete">-->
<!--							<i class="fa fa-trash-o"></i><input type="hidden" value="25">-->
<!--						</a>-->
<!--					</td>-->
<!--				</tr>-->
<!--								<tr>-->
<!--					<td class="table-srno">6</td>-->
<!--					<td><p class="font-14 margin-0">polinakul87@gmail.com</p></td>-->
<!--					<td>-->
<!--												<span class="badge badge-sm badge-success">Active</span>-->
<!--											</td>-->
<!--					<td>15 May 2018</td>-->
<!--					<td class="table-action">-->
<!--						<a href="index.php?route=subscriber/edit&id=24" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>-->
<!--						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete"  data-toggle="tooltip" title="Delete">-->
<!--							<i class="fa fa-trash-o"></i><input type="hidden" value="24">-->
<!--						</a>-->
<!--					</td>-->
<!--				</tr>-->
<!--								<tr>-->
<!--					<td class="table-srno">7</td>-->
<!--					<td><p class="font-14 margin-0">info@fixmygiz.in</p></td>-->
<!--					<td>-->
<!--												<span class="badge badge-sm badge-success">Active</span>-->
<!--											</td>-->
<!--					<td>02 May 2018</td>-->
<!--					<td class="table-action">-->
<!--						<a href="index.php?route=subscriber/edit&id=23" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>-->
<!--						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete"  data-toggle="tooltip" title="Delete">-->
<!--							<i class="fa fa-trash-o"></i><input type="hidden" value="23">-->
<!--						</a>-->
<!--					</td>-->
<!--				</tr>-->
<!--								<tr>-->
<!--					<td class="table-srno">8</td>-->
<!--					<td><p class="font-14 margin-0">sliwun@naver.com</p></td>-->
<!--					<td>-->
<!--												<span class="badge badge-sm badge-success">Active</span>-->
<!--											</td>-->
<!--					<td>17 Feb 2018</td>-->
<!--					<td class="table-action">-->
<!--						<a href="index.php?route=subscriber/edit&id=22" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>-->
<!--						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete"  data-toggle="tooltip" title="Delete">-->
<!--							<i class="fa fa-trash-o"></i><input type="hidden" value="22">-->
<!--						</a>-->
<!--					</td>-->
<!--				</tr>-->
<!--								<tr>-->
<!--					<td class="table-srno">9</td>-->
<!--					<td><p class="font-14 margin-0">sliwun@naver.com</p></td>-->
<!--					<td>-->
<!--												<span class="badge badge-sm badge-success">Active</span>-->
<!--											</td>-->
<!--					<td>17 Feb 2018</td>-->
<!--					<td class="table-action">-->
<!--						<a href="index.php?route=subscriber/edit&id=21" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>-->
<!--						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete"  data-toggle="tooltip" title="Delete">-->
<!--							<i class="fa fa-trash-o"></i><input type="hidden" value="21">-->
<!--						</a>-->
<!--					</td>-->
<!--				</tr>-->
<!--								<tr>-->
<!--					<td class="table-srno">10</td>-->
<!--					<td><p class="font-14 margin-0">sliwun@naver.com</p></td>-->
<!--					<td>-->
<!--												<span class="badge badge-sm badge-success">Active</span>-->
<!--											</td>-->
<!--					<td>17 Feb 2018</td>-->
<!--					<td class="table-action">-->
<!--						<a href="index.php?route=subscriber/edit&id=20" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>-->
<!--						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete"  data-toggle="tooltip" title="Delete">-->
<!--							<i class="fa fa-trash-o"></i><input type="hidden" value="20">-->
<!--						</a>-->
<!--					</td>-->
<!--				</tr>-->
<!--								<tr>-->
<!--					<td class="table-srno">11</td>-->
<!--					<td><p class="font-14 margin-0">sliwun@naver.com</p></td>-->
<!--					<td>-->
<!--												<span class="badge badge-sm badge-success">Active</span>-->
<!--											</td>-->
<!--					<td>17 Feb 2018</td>-->
<!--					<td class="table-action">-->
<!--						<a href="index.php?route=subscriber/edit&id=19" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>-->
<!--						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete"  data-toggle="tooltip" title="Delete">-->
<!--							<i class="fa fa-trash-o"></i><input type="hidden" value="19">-->
<!--						</a>-->
<!--					</td>-->
<!--				</tr>-->
<!--								<tr>-->
<!--					<td class="table-srno">12</td>-->
<!--					<td><p class="font-14 margin-0">sliwun@naver.com</p></td>-->
<!--					<td>-->
<!--												<span class="badge badge-sm badge-success">Active</span>-->
<!--											</td>-->
<!--					<td>17 Feb 2018</td>-->
<!--					<td class="table-action">-->
<!--						<a href="index.php?route=subscriber/edit&id=18" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>-->
<!--						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete"  data-toggle="tooltip" title="Delete">-->
<!--							<i class="fa fa-trash-o"></i><input type="hidden" value="18">-->
<!--						</a>-->
<!--					</td>-->
<!--				</tr>-->
<!--								<tr>-->
<!--					<td class="table-srno">13</td>-->
<!--					<td><p class="font-14 margin-0">sliwun@naver.com</p></td>-->
<!--					<td>-->
<!--												<span class="badge badge-sm badge-success">Active</span>-->
<!--											</td>-->
<!--					<td>17 Feb 2018</td>-->
<!--					<td class="table-action">-->
<!--						<a href="index.php?route=subscriber/edit&id=17" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>-->
<!--						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete"  data-toggle="tooltip" title="Delete">-->
<!--							<i class="fa fa-trash-o"></i><input type="hidden" value="17">-->
<!--						</a>-->
<!--					</td>-->
<!--				</tr>-->
<!--								<tr>-->
<!--					<td class="table-srno">14</td>-->
<!--					<td><p class="font-14 margin-0">directorysubmissions@presstraffic.com</p></td>-->
<!--					<td>-->
<!--												<span class="badge badge-sm badge-success">Active</span>-->
<!--											</td>-->
<!--					<td>30 Oct 2017</td>-->
<!--					<td class="table-action">-->
<!--						<a href="index.php?route=subscriber/edit&id=16" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>-->
<!--						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete"  data-toggle="tooltip" title="Delete">-->
<!--							<i class="fa fa-trash-o"></i><input type="hidden" value="16">-->
<!--						</a>-->
<!--					</td>-->
<!--				</tr>-->
<!--								<tr>-->
<!--					<td class="table-srno">15</td>-->
<!--					<td><p class="font-14 margin-0">sdfgsdfg@gsdfg.gfd</p></td>-->
<!--					<td>-->
<!--												<span class="badge badge-sm badge-success">Active</span>-->
<!--											</td>-->
<!--					<td>25 Aug 2017</td>-->
<!--					<td class="table-action">-->
<!--						<a href="index.php?route=subscriber/edit&id=15" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>-->
<!--						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete"  data-toggle="tooltip" title="Delete">-->
<!--							<i class="fa fa-trash-o"></i><input type="hidden" value="15">-->
<!--						</a>-->
<!--					</td>-->
<!--				</tr>-->
<!--								<tr>-->
<!--					<td class="table-srno">16</td>-->
<!--					<td><p class="font-14 margin-0">yazan.lahawani@gmail.com</p></td>-->
<!--					<td>-->
<!--												<span class="badge badge-sm badge-success">Active</span>-->
<!--											</td>-->
<!--					<td>12 Aug 2017</td>-->
<!--					<td class="table-action">-->
<!--						<a href="index.php?route=subscriber/edit&id=14" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>-->
<!--						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete"  data-toggle="tooltip" title="Delete">-->
<!--							<i class="fa fa-trash-o"></i><input type="hidden" value="14">-->
<!--						</a>-->
<!--					</td>-->
<!--				</tr>-->
<!--								<tr>-->
<!--					<td class="table-srno">17</td>-->
<!--					<td><p class="font-14 margin-0">asda@hotmail.com</p></td>-->
<!--					<td>-->
<!--												<span class="badge badge-sm badge-success">Active</span>-->
<!--											</td>-->
<!--					<td>09 Aug 2017</td>-->
<!--					<td class="table-action">-->
<!--						<a href="index.php?route=subscriber/edit&id=13" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>-->
<!--						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete"  data-toggle="tooltip" title="Delete">-->
<!--							<i class="fa fa-trash-o"></i><input type="hidden" value="13">-->
<!--						</a>-->
<!--					</td>-->
<!--				</tr>-->
<!--								<tr>-->
<!--					<td class="table-srno">18</td>-->
<!--					<td><p class="font-14 margin-0">asda@hotmail.com</p></td>-->
<!--					<td>-->
<!--												<span class="badge badge-sm badge-success">Active</span>-->
<!--											</td>-->
<!--					<td>09 Aug 2017</td>-->
<!--					<td class="table-action">-->
<!--						<a href="index.php?route=subscriber/edit&id=12" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>-->
<!--						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete"  data-toggle="tooltip" title="Delete">-->
<!--							<i class="fa fa-trash-o"></i><input type="hidden" value="12">-->
<!--						</a>-->
<!--					</td>-->
<!--				</tr>-->
<!--								<tr>-->
<!--					<td class="table-srno">19</td>-->
<!--					<td><p class="font-14 margin-0">patelbilal15@gmail.com</p></td>-->
<!--					<td>-->
<!--												<span class="badge badge-sm badge-success">Active</span>-->
<!--											</td>-->
<!--					<td>02 Aug 2017</td>-->
<!--					<td class="table-action">-->
<!--						<a href="index.php?route=subscriber/edit&id=11" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>-->
<!--						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete"  data-toggle="tooltip" title="Delete">-->
<!--							<i class="fa fa-trash-o"></i><input type="hidden" value="11">-->
<!--						</a>-->
<!--					</td>-->
<!--				</tr>-->
<!--								<tr>-->
<!--					<td class="table-srno">20</td>-->
<!--					<td><p class="font-14 margin-0">patelbilal15@gmail.com</p></td>-->
<!--					<td>-->
<!--												<span class="badge badge-sm badge-success">Active</span>-->
<!--											</td>-->
<!--					<td>01 Aug 2017</td>-->
<!--					<td class="table-action">-->
<!--						<a href="index.php?route=subscriber/edit&id=10" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>-->
<!--						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete"  data-toggle="tooltip" title="Delete">-->
<!--							<i class="fa fa-trash-o"></i><input type="hidden" value="10">-->
<!--						</a>-->
<!--					</td>-->
<!--				</tr>-->
<!--								<tr>-->
<!--					<td class="table-srno">21</td>-->
<!--					<td><p class="font-14 margin-0">patelbilal15@gmail.com</p></td>-->
<!--					<td>-->
<!--												<span class="badge badge-sm badge-success">Active</span>-->
<!--											</td>-->
<!--					<td>01 Aug 2017</td>-->
<!--					<td class="table-action">-->
<!--						<a href="index.php?route=subscriber/edit&id=9" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>-->
<!--						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete"  data-toggle="tooltip" title="Delete">-->
<!--							<i class="fa fa-trash-o"></i><input type="hidden" value="9">-->
<!--						</a>-->
<!--					</td>-->
<!--				</tr>-->
<!--								<tr>-->
<!--					<td class="table-srno">22</td>-->
<!--					<td><p class="font-14 margin-0">mikopi1996@gmail.com</p></td>-->
<!--					<td>-->
<!--												<span class="badge badge-sm badge-success">Active</span>-->
<!--											</td>-->
<!--					<td>06 Jul 2017</td>-->
<!--					<td class="table-action">-->
<!--						<a href="index.php?route=subscriber/edit&id=8" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>-->
<!--						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete"  data-toggle="tooltip" title="Delete">-->
<!--							<i class="fa fa-trash-o"></i><input type="hidden" value="8">-->
<!--						</a>-->
<!--					</td>-->
<!--				</tr>-->
<!--								<tr>-->
<!--					<td class="table-srno">23</td>-->
<!--					<td><p class="font-14 margin-0">sonu0289@gmail.com</p></td>-->
<!--					<td>-->
<!--												<span class="badge badge-sm badge-warning">InActive</span>-->
<!--											</td>-->
<!--					<td>08 Jun 2017</td>-->
<!--					<td class="table-action">-->
<!--						<a href="index.php?route=subscriber/edit&id=7" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>-->
<!--						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete"  data-toggle="tooltip" title="Delete">-->
<!--							<i class="fa fa-trash-o"></i><input type="hidden" value="7">-->
<!--						</a>-->
<!--					</td>-->
<!--				</tr>-->
<!--								<tr>-->
<!--					<td class="table-srno">24</td>-->
<!--					<td><p class="font-14 margin-0">aditya1802@gmail.com</p></td>-->
<!--					<td>-->
<!--												<span class="badge badge-sm badge-success">Active</span>-->
<!--											</td>-->
<!--					<td>05 Jun 2017</td>-->
<!--					<td class="table-action">-->
<!--						<a href="index.php?route=subscriber/edit&id=6" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>-->
<!--						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete"  data-toggle="tooltip" title="Delete">-->
<!--							<i class="fa fa-trash-o"></i><input type="hidden" value="6">-->
<!--						</a>-->
<!--					</td>-->
<!--				</tr>-->
<!--								<tr>-->
<!--					<td class="table-srno">25</td>-->
<!--					<td><p class="font-14 margin-0">thakurmahendra13@gmail.com</p></td>-->
<!--					<td>-->
<!--												<span class="badge badge-sm badge-success">Active</span>-->
<!--											</td>-->
<!--					<td>29 May 2017</td>-->
<!--					<td class="table-action">-->
<!--						<a href="index.php?route=subscriber/edit&id=5" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>-->
<!--						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete"  data-toggle="tooltip" title="Delete">-->
<!--							<i class="fa fa-trash-o"></i><input type="hidden" value="5">-->
<!--						</a>-->
<!--					</td>-->
<!--				</tr>-->
<!--								<tr>-->
<!--					<td class="table-srno">26</td>-->
<!--					<td><p class="font-14 margin-0">mahendrachoudhary0013@gmail.com</p></td>-->
<!--					<td>-->
<!--												<span class="badge badge-sm badge-warning">InActive</span>-->
<!--											</td>-->
<!--					<td>16 Apr 2017</td>-->
<!--					<td class="table-action">-->
<!--						<a href="index.php?route=subscriber/edit&id=4" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>-->
<!--						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete"  data-toggle="tooltip" title="Delete">-->
<!--							<i class="fa fa-trash-o"></i><input type="hidden" value="4">-->
<!--						</a>-->
<!--					</td>-->
<!--				</tr>-->

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
				<form action="" class="delete-card-button" method="post">
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