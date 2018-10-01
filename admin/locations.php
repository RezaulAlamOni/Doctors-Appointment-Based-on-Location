<?php include('include/header.php'); ?>
<?php include('include/navbar.php'); ?>
<?php require ('class/location.php')?>
<?php require ('class/doctors.php')?>
    <div class="page-container">
    <script>
        $('#area').show();
        $('#area-li>a').addClass('active');
    </script>

    <div class="page-hdr">
        <div class="row">
            <div class="col-4 page-name">
                <h1><i class="fa fa-hospital-o"></i>Locations</h1>
            </div>
            <div class="page-name col-3 text-right">
                <h1 id="time">Time</h1>
            </div>
            <div class="col-5 page-menu">
                <a id="cancel" href="" data-toggle="tooltip" data-placement="left" title="Reload"><i class="fa fa-refresh"></i></a>
                <a href="add_location.php" data-toggle="tooltip" data-placement="left" title="Add location"><i class="fa fa-plus"></i></a>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="table-container">
            <table id="department-table" class="table table-bordered table-striped datatable-table">
                <thead class="text-center">
                <tr class="table-heading">
                    <th>ID#</th>
                    <th>Name</th>
<!--                    <th>Description</th>-->
                    <th>Hospitals</th>
                    <th class="table-action">Action</th>
                </tr>
                </thead>
                <tbody class="text-center">
                <?php
                    $location = new location();
                    $result = $location->all();
                    $locations = $result->fetchAll();

                foreach ($locations as $location) {

                    ?>

                    <tr>
                        <td class="table-srno"><?php echo $location->location_id; ?> </td>
                        <td class="table-name">
                            <p class="font-14 margin-0 text-capitalize"><?php echo $location->name; ?></p>
                        </td>
                        <td >
                            <p class="text-justify font-15 text-center">
                                <a href="hospital.php?location=<?php echo $location->location_id; ?> ">
                                <?php
                                    $hos = new hospitals();
                                    echo $hos->find_by_location($location->location_id);
                                ?>
                                </a>
                            </p>
                        </td>

                        <td class="table-action">
                            <a href="update_location.php?id=<?php echo $location->location_id; ?>"
                               class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip"
                               title="Edit"><i class="fa fa-pencil-square-o"></i>
                            </a>

                            <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete"

                               data-toggle="tooltip" data-placement="top" title="Delete">
                                <input type="hidden" value="delete" id="delete">
                                <i class="fa fa-trash-o"></i>

                            </a>
                        </td>

                    </tr>


                    <!--                    --><?php
//
//                }if (isset($_POST['delete'])) {
//                    $id = $_POST['id'];
//                    $dpt ->delete($id);
//                    header("Location: department.php");
//                }

                }
                ?>
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
                                <form action="department.php" class="delete-card-button" method="post">
                                    <input type="text" value="" name="id">
                                    <button type="submit" class="btn btn-danger" name="delete">Delete</button>
                                </form>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
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