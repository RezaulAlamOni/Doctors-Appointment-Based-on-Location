<?php include('include/header.php'); ?>
<?php include('include/navbar.php'); ?>

<div class="page-container">

    <script>
        $('#patient').show();
        $('#patient-li>a').addClass('active');
    </script>

<!-- Request list page start -->
<div class="page-hdr">
    <div class="row">
        <div class="col-5 page-name">
            <h1><i class="fa fa-envelope"></i>Requests</h1>
        </div>
        <div class="page-name col-3 text-right">
            <h1 id="time">Time</h1>
        </div>
        <div class="col-4 page-menu">
            <a id="cancel" href="index.php?route=request" data-toggle="tooltip" data-placement="left" title="Reload"><i class="fa fa-refresh"></i></a>
            <a href="index.php?route=request/add" data-toggle="tooltip" data-placement="left" title="Add Request"><i class="fa fa-plus"></i></a>
        </div>
    </div>
</div>
<div class="content">
    <table id="card-table" class="table request-table">
        <thead>
            <tr>
                <th style="display: none;"></th>
            </tr>
        </thead>
        <tbody>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">1</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>23 Aug 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Jokin Cuello</div>
                                        <div class="card-text">jokin.cuello@openlanak.com</div>
                                        <div class="card-text">650815852</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Testing</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=96" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="96">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">2</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>12 Aug 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Pipoca</div>
                                        <div class="card-text">carllos_334@msn.com</div>
                                        <div class="card-text">79998155757</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>dente</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=95" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="95">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">3</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>30 Jul 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">ezetusi</div>
                                        <div class="card-text">ibahawuq@ounmail.com</div>
                                        <div class="card-text">89561862938</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Despite writes parallel at-risk behaviours. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=94" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="94">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">4</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>30 Jul 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">eejabeyarof</div>
                                        <div class="card-text">ewucoca@ounmail.com</div>
                                        <div class="card-text">83382183573</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Transfer cephalosporins, else; exudation haemorrhage; drill. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=93" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="93">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">5</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>27 Jul 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">ehoixococuofi</div>
                                        <div class="card-text">usinedoq@abujmail.com</div>
                                        <div class="card-text">87557446388</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Severe fore, shoe metabolize decompressed claims. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=92" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="92">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">6</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>26 Jul 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">olanleqaja</div>
                                        <div class="card-text">ocivpo@femail.com</div>
                                        <div class="card-text">88371416582</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Cervical invited artery, prongs malnourished mobilize, thin. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=91" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="91">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">7</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>25 Jul 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">auszaowoqag</div>
                                        <div class="card-text">ijoxoxeh@maurmail.com</div>
                                        <div class="card-text">83479633579</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Place medullaris phases: turgor 2. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=90" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="90">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">8</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>25 Jul 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">cijorobe</div>
                                        <div class="card-text">aqamacaf@iqmail.com</div>
                                        <div class="card-text">84512232979</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>The sensibility wealthy changes: relevant; warranted. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=89" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="89">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">9</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>25 Jul 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">oehuecibo</div>
                                        <div class="card-text">altusw@agemail.com</div>
                                        <div class="card-text">84166255651</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>However isolated medio-inferior hark prove reproducible. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=88" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="88">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">10</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>25 Jul 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">ahegsmeiwet</div>
                                        <div class="card-text">asolqujut@maurmail.com</div>
                                        <div class="card-text">82348986228</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Usually testing mundane involving home current. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=87" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="87">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">11</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>25 Jul 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">rohuguki</div>
                                        <div class="card-text">okuowo@agemail.com</div>
                                        <div class="card-text">88496974919</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Note fibres anaemia: settle: otherwise, detail. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=86" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="86">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">12</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>25 Jul 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">asogubuaox</div>
                                        <div class="card-text">ewqiku@iqmail.com</div>
                                        <div class="card-text">81114932686</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>English unearth fragments circular, internet. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=85" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="85">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">13</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>25 Jul 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">xejuzadum</div>
                                        <div class="card-text">ervoqeala@iqmail.com</div>
                                        <div class="card-text">88118912116</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Choice bone: predictive reinflate, antibiotics. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=84" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="84">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">14</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>20 Jul 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">verma</div>
                                        <div class="card-text">vermaniraj1502@gmail.com</div>
                                        <div class="card-text">9572316171</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>ghrfjyh</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=83" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="83">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">15</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>10 Jul 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">aggh rtty</div>
                                        <div class="card-text">arghya9@gmail.com</div>
                                        <div class="card-text">8582858844</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>bf fhrhsh</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=82" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="82">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">16</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>09 Jul 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">surinder Kaur</div>
                                        <div class="card-text">test@test.com</div>
                                        <div class="card-text">1234567890</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>They have charged me double</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=81" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="81">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">17</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>20 Jun 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Solomon Mwanga</div>
                                        <div class="card-text">jnrsolomon@gmail.com</div>
                                        <div class="card-text">715135666</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>ddddd</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=80" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="80">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">18</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>12 Jun 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">AmeliaW</div>
                                        <div class="card-text">ad@ad.com</div>
                                        <div class="card-text">9999999999999999999999999999</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Test message</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=79" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="79">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">19</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>05 Jun 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Name</div>
                                        <div class="card-text">admin@nhpc.us</div>
                                        <div class="card-text">3034826824</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Hello</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=78" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="78">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">20</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>23 May 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">elourukato</div>
                                        <div class="card-text">ruoqef@dsdsd.domailnew.com</div>
                                        <div class="card-text">84435766379</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Others: flatten flow, vaccination, messages. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=77" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="77">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">21</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>23 May 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">xucogicy</div>
                                        <div class="card-text">oxuyejupa@dsdsd.domailnew.com</div>
                                        <div class="card-text">85987383863</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Inappropriate philosophies whistle, raise by: discovered. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=76" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="76">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">22</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>22 May 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">ujeozewuroine</div>
                                        <div class="card-text">tasein@asassd.domailnew.com</div>
                                        <div class="card-text">83337979733</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>I sinus, supero-medially, days' opioids. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=75" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="75">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">23</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>22 May 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">ibiludakierun</div>
                                        <div class="card-text">elojer@asassd.domailnew.com</div>
                                        <div class="card-text">89491854283</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Transfer epidural tries cupped incongruent mobilized. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=74" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="74">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">24</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>20 May 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">eixuvir</div>
                                        <div class="card-text">ixelixiya@emm.domailnew.com</div>
                                        <div class="card-text">88542432548</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Flow constituents suprachiasmatic first impaired. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=73" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="73">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">25</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>20 May 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">ikadaepa</div>
                                        <div class="card-text">otiqalife@emm.domailnew.com</div>
                                        <div class="card-text">81482768167</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Antiplatelet nutrients siphoned rewards torch firm, suspicious. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=72" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="72">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">26</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>20 May 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">eoketesiogoq</div>
                                        <div class="card-text">ukeusisu@emm.domailnew.com</div>
                                        <div class="card-text">81755263557</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>In lesser uncharacteristic pyrophosphate gently. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=71" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="71">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">27</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>20 May 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">akiisabohuv</div>
                                        <div class="card-text">orialita@emm.domailnew.com</div>
                                        <div class="card-text">83657261695</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Lipids appetite, hernia commercial network. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=70" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="70">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">28</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>20 May 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">aqovgazyesix</div>
                                        <div class="card-text">enehodi@emm.domailnew.com</div>
                                        <div class="card-text">86728464525</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Any identified defuses relapse circumferential fistulas. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=69" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="69">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">29</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>17 May 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">ivahovodeho</div>
                                        <div class="card-text">amalep@asdas.domailnew.com</div>
                                        <div class="card-text">81384164311</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Make cyanosis metatarsal ventricular predicts nonjudgmental practicality. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=68" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="68">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">30</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>17 May 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">ekafutocogila</div>
                                        <div class="card-text">aadigir@asdas.domailnew.com</div>
                                        <div class="card-text">83982959477</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Hb debrided well-being, inevitable tending recur. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=67" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="67">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">31</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>16 May 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">ihodboyaaqo</div>
                                        <div class="card-text">eciqujij@dsdsd.domailnew.com</div>
                                        <div class="card-text">83674565941</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Excellent family-only concerned airtight elevation. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=66" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="66">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">32</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>16 May 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">etanohulew</div>
                                        <div class="card-text">ihijucuk@dsdsd.domailnew.com</div>
                                        <div class="card-text">83679851697</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>V uncontrollable eclampsia sounds site induce arrhythmias. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=65" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="65">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">33</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>19 Apr 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Kim Abrea</div>
                                        <div class="card-text">kimabreakingemo@gmail.com</div>
                                        <div class="card-text">09057620346</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Release of records</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=64" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="64">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">34</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>16 Jul 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">vrushali</div>
                                        <div class="card-text">mali.vrushali4@gmail.com</div>
                                        <div class="card-text">9876543210</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>vghjj</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=35" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="35">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-0">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">35</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>08 Jun 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>About my Reports </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique suntasdadsada</p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=34" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="34">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-1">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">36</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>07 Jun 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>About my Reports </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-success badge-sm">Closed</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=33" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="33">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">37</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>05 Jun 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>About my Reports </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=32" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="32">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">38</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>05 Jun 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>About my Reports </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=31" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="31">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-0">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">39</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>02 Jun 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>About my Reports</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary">We are trying our best to give you perfect system
</p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=30" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="30">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-1">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">40</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>02 Jun 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>About my Reports </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-success badge-sm">Closed</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=29" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="29">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-1">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">41</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>02 Jun 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>About my Reports </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary">Veros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enimVeros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enimVeros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim</p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-success badge-sm">Closed</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=28" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="28">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">42</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>02 Jun 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>About my Reports </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=27" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="27">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-1">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">43</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>02 Jun 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>About my Reports </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary">No, you do not need to come just send us your reports and we will see</p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-success badge-sm">Closed</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=26" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="26">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">44</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>01 Jun 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>About my Reports </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=25" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="25">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-1">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">45</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>01 Jun 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>About my Reports </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-success badge-sm">Closed</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=24" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="24">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-0">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">46</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>01 Jun 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Veros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary">Veros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enimVeros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enimVeros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim</p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=23" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="23">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">47</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>01 Jun 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>About my Reports </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=22" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="22">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-1">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">48</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>01 Jun 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>About my Reports </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-success badge-sm">Closed</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=21" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="21">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">49</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>19 May 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Veros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary">Veros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enimVeros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim</p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=20" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="20">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-1">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">50</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>17 May 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Veros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary">Veros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enimVeros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enimVeros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enimVeros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enimVeros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim</p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-success badge-sm">Closed</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=19" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="19">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">51</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>17 May 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Veros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=18" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="18">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">52</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>17 May 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Veros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=17" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="17">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-1">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">53</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>17 May 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Veros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-success badge-sm">Closed</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=16" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="16">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">54</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>08 May 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Veros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=15" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="15">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-1">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">55</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>08 May 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Veros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-success badge-sm">Closed</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=14" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="14">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">56</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>08 May 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>According to media report</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=13" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="13">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-1">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">57</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>08 May 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Hello mahendra how you doing</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-success badge-sm">Closed</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=12" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="12">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-1">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">58</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>08 May 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Veros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-success badge-sm">Closed</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=11" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="11">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-1">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">59</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>27 Apr 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Veros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary">Veros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enimVeros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enimVeros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enimVeros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enimVeros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enimVeros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enimVeros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim</p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-success badge-sm">Closed</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=9" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="9">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-1">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">60</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>20 Apr 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Veros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary">Veros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enimVeros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim</p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-success badge-sm">Closed</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=8" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="8">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-1">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">61</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>18 Apr 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Veros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary">Veros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim</p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-success badge-sm">Closed</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=7" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="7">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-1">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">62</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>08 Apr 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Veros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary">Veros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim</p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-success badge-sm">Closed</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=6" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="6">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-1">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">63</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>08 Apr 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>According to mmedia report</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-success badge-sm">Closed</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=5" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="5">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                    </tbody>
    </table>
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
                <form action="index.php?route=request/delete" class="delete-card-button" method="post">
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