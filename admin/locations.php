<?php include('include/db.php'); ?>
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

                            <a href="locations.php?delete=<?php echo $location->location_id; ?>" class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" onclick="checkDelete()"
                               data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="fa fa-trash-o"></i>

                            </a>
                        </td>

                    </tr>


                    <?php
                    if (isset($_GET['delete'])){
                        $id= $_GET['delete'];
                        $sql = "DELETE FROM locations WHERE location_id = {$id}";
                        $result = $pdo->prepare($sql);
                        $result->execute();
                        header('Location: locations.php');
                    }
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