
<?php include('include/header.php');?>
<?php
$page_name = "<i class='fa fa-plus-square-o'> </i> My Invoice";
?>
<?php include('include/nav.php');?>
<!-- Header End -->
<link rel="stylesheet" href="public/css/datatables.min.css">
<!-- Start Page Title Section -->
<!--<div class="page-ttl">-->
<!--    <div class="layer-stretch">-->
<!--        <div class="page-ttl-container">-->
<!--            <div class="page-ttl-icon">-->
<!--                <i class="fa fa-plus-square-o"></i>-->
<!--            </div>-->
<!--            <div class="page-ttl-name">-->
<!--                <h1>My Invoices</h1>-->
<!--                <p><a href="http://pepdev.com/theme-preview/klinikal/index.php?route=home">Home</a> &gt; My Invoices</p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div><!-- End Page Title Section -->-->
<!-- Start My Appointment Section -->
<div class="layer-stretch animated-wrapper" style="opacity: 1;">
    <div class="layer-wrapper" style="padding-bottom: 0">
        <div class="theme-material-card">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="75">75</option><option value="-1">All</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered table-striped datatable-table dataTable no-footer dtr-inline collapsed" width="100%" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 100%;">
                            <thead>
                            <tr role="row"><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 26.5px;" aria-label="INV: activate to sort column ascending">INV</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 43.5px;" aria-label="Name: activate to sort column ascending">Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 49.5px;" aria-label="Doctor: activate to sort column ascending">Doctor</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 59.5px;" aria-label="Amount: activate to sort column ascending">Amount</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 32.5px; display: none;" aria-label="Paid: activate to sort column ascending">Paid</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label="Due: activate to sort column ascending">Due</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label=": activate to sort column ascending"></th></tr>
                            </thead>
                            <tbody>
                            <tr class="odd"><td valign="top" colspan="4" class="dataTables_empty">No data available in table</td></tr></tbody>
                        </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
        </div>
    </div>
</div><!-- End My Appointment Section -->



<!-- Start Make an Appointment Modal -->
<!-- Start Make an Appointment Modal -->
<?php include('include/make_appointment.php');?><!-- End Make an Appointment Section -->
<?php include('include/footer.php');?>
