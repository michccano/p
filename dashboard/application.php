<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Boxed Layout</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-boxed">
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">Parvaty Cloud</span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar" >
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Alexander Pierce</a>
                </div>
            </div>
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="#" id="access_details" class="nav-link">
                            <p>Access Details</p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Analytics
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link" id="traffic_link">
                                    <p>Traffic</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link" id="php_link">
                                    <p>PHP</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link" id="mysql_link">
                                    <p>MySQL</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link" id="running_crons_link">
                                    <p>Running Crons</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0)" id="disk_usage" class="nav-link">
                                    <p>Disk Usage</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Logs
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">
                                <a href="./index.html" class="nav-link">
                                    <p>Access Log</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="./index.html" class="nav-link">
                                    <p>Error Log</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>




    <?php include("navbar.php");?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Applications</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Layout</a></li>
                            <li class="breadcrumb-item active">Boxed Layout</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div id="main_content" class="col-12"></div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.0.5
        </div>
        <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>


<!--Team-->
<!-- Default box -->
<div  id="traffic_content" style="display:none;">
    <div  class="card  card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title text-uppercase">Traffic</h3>

            <!--<div class="card-tools">
               <a href="create-huddle.php" class="btn btn-primary">START A NEW APPLICATION</a>
            </div>-->
        </div>

        <div class="card-body">
            <p>Monitoring traffic statistics is essential in ensuring the success of your website. This section presents key statistics (IP Requests, Bot Traffic, URL Requests, and Status Code) allowing you to easily monitor and analyze your website’s traffic and health.</p>

            <div  class="row">
                <div class="col-12">
                    <div class="card card-primary card-outline card-outline-tabs">
                        <div class="card-header p-0 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-for-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active text-uppercase" id="custom-tabs-for-ip-requests-tab" data-toggle="pill" href="#custom-tabs-for-ip-requests" role="tab" aria-controls="custom-tabs-for-ip-requests" aria-selected="true">IP Requests</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" id="custom-tabs-for-bot-traffic-tab" data-toggle="pill" href="#custom-tabs-for-bot-traffic" role="tab" aria-controls="custom-tabs-for-bot-traffic" aria-selected="false">Bot Traffic</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" id="custom-tabs-for-url-requests-tab" data-toggle="pill" href="#custom-tabs-for-url-requests" role="tab" aria-controls="custom-tabs-for-url-requests" aria-selected="false">URL Requests</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" id="custom-tabs-for-status-codes-tab" data-toggle="pill" href="#custom-tabs-for-status-codes" role="tab" aria-controls="custom-tabs-for-status-codes" aria-selected="false">Status Codes</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-for-tabContent">
                                <div class="tab-pane fade show active" id="custom-tabs-for-ip-requests" role="tabpanel" aria-labelledby="custom-tabs-for-home-ip-requests-tab">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-8"><span class="text-uppercase"><b>Top ip requests</b></span><a href="#"><i class="fa fa-redo ml-2"></i></a> </div>
                                                <div class="col-md-4">
                                                    <select class="form-control">
                                                        <option>15 Minutes</option>
                                                        <option>30 Minutes</option>
                                                        <option>1 Hour</option>
                                                        <option>1 Day</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-8"></div>
                                                <div class="col-md-4">
                                                    <span class="small">06/08/2020 18:22 - 06/08/2020 18:37</span>
                                                </div>
                                                <div class="col-md-12">
                                                    <table class="w-100 mt-3">
                                                        <thead class="font-weight-bold bg-gray">
                                                            <tr>
                                                                <td class="p-2">Top 10 IP Addresses</td>
                                                                <td class="p-2">Request Count</td>
                                                                <td class="p-2"></td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="p-2">134.209.186.62</td>
                                                                <td class="p-2">2</td>
                                                                <td class="p-2">Details +</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="p-2">134.209.186.62</td>
                                                                <td class="p-2">2</td>
                                                                <td class="p-2">Details +</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="custom-tabs-for-bot-traffic" role="tabpanel" aria-labelledby="custom-tabs-for-bot-traffic-tab">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-8"><span class="text-uppercase"><b>TOP BOTS SENDING TRAFFIC</b></span><a href="#"><i class="fa fa-redo ml-2"></i></a> </div>
                                                <div class="col-md-4">
                                                    <select class="form-control">
                                                        <option>15 Minutes</option>
                                                        <option>30 Minutes</option>
                                                        <option>1 Hour</option>
                                                        <option>1 Day</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-8"></div>
                                                <div class="col-md-4">
                                                    <span class="small">06/08/2020 18:22 - 06/08/2020 18:37</span>
                                                </div>
                                                <div class="col-md-12">
                                                    <table class="w-100 mt-3">
                                                        <thead class="font-weight-bold bg-gray">
                                                        <tr>
                                                            <td class="p-2">Bots</td>
                                                            <td class="p-2">Request Count</td>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td class="p-2">Zgrab</td>
                                                            <td class="p-2">2</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-for-url-requests" role="tabpanel" aria-labelledby="custom-tabs-for-url-requests-tab">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-8"><span class="text-uppercase"><b>TOP REQUESTING URLS</b></span><a href="#"><i class="fa fa-redo ml-2"></i></a> </div>
                                                <div class="col-md-4">
                                                    <select class="form-control">
                                                        <option>15 Minutes</option>
                                                        <option>30 Minutes</option>
                                                        <option>1 Hour</option>
                                                        <option>1 Day</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-8"></div>
                                                <div class="col-md-4">
                                                    <span class="small">06/08/2020 18:22 - 06/08/2020 18:37</span>
                                                </div>
                                                <div class="col-md-12">
                                                    <table class="w-100 mt-3">
                                                        <thead class="font-weight-bold bg-gray">
                                                        <tr>
                                                            <td class="p-2">Top 10 IP Addresses</td>
                                                            <td class="p-2">Request Count</td>
                                                            <td class="p-2"></td>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td class="p-2">/ReportServer</td>
                                                            <td class="p-2">2</td>
                                                            <td class="p-2">Details +</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-for-status-codes" role="tabpanel" aria-labelledby="custom-tabs-for-status-codes-tab">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-8"><span class="text-uppercase"><b>WEB REQUEST STATUS CODES</b></span><a href="#"><i class="fa fa-redo ml-2"></i></a> </div>
                                                <div class="col-md-4">
                                                    <select class="form-control">
                                                        <option>15 Minutes</option>
                                                        <option>30 Minutes</option>
                                                        <option>1 Hour</option>
                                                        <option>1 Day</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-8"></div>
                                                <div class="col-md-4">
                                                    <span class="small">06/08/2020 18:22 - 06/08/2020 18:37</span>
                                                </div>
                                                <div class="col-md-12">
                                                    <table class="w-100 mt-3">
                                                        <thead class="font-weight-bold bg-gray">
                                                        <tr>
                                                            <td class="p-2">Top 10 IP Addresses</td>
                                                            <td class="p-2">Request Count</td>
                                                            <td class="p-2"></td>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td class="p-2">404</td>
                                                            <td class="p-2">2</td>
                                                            <td class="p-2">Details +</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-footer"></div>

</div>

<div  id="php_content" style="display:none;">
    <div  class="card  card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title text-uppercase">php</h3>

            <!--<div class="card-tools">
               <a href="create-huddle.php" class="btn btn-primary">START A NEW APPLICATION</a>
            </div>-->
        </div>

        <div class="card-body">
            <p>Monitoring PHP performance is essential in ensuring a consistent quality experience of your website. This section presents important PHP related statistics including top Requested Pages, currently Running Processes, and Slow Pages, allowing you to quickly analyze and track PHP performance.</p>

            <div  class="row">
                <div class="col-12">
                    <div class="card card-primary card-outline card-outline-tabs">
                        <div class="card-header p-0 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-for-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active text-uppercase" id="custom-tabs-for-requested-pages-tab" data-toggle="pill" href="#custom-tabs-for-requested-pages" role="tab" aria-controls="custom-tabs-for-requested-pages" aria-selected="true">Requested Pages</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" id="custom-tabs-for-running-processes-tab" data-toggle="pill" href="#custom-tabs-for-running-processes" role="tab" aria-controls="custom-tabs-for-running-processes" aria-selected="false">Running Processes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" id="custom-tabs-for-slow-pages-tab" data-toggle="pill" href="#custom-tabs-for-slow-pages" role="tab" aria-controls="custom-tabs-for-slow-pages" aria-selected="false">Slow Pages</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-for-tabContent">
                                <div class="tab-pane fade show active" id="custom-tabs-for-requested-pages" role="tabpanel" aria-labelledby="custom-tabs-for-requested-pages-tab">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-8"><span class="text-uppercase"><b>TOP REQUESTED PHP PAGES</b></span><a href="#"><i class="fa fa-redo ml-2"></i></a> </div>
                                                <div class="col-md-4">
                                                    <select class="form-control">
                                                        <option>15 Minutes</option>
                                                        <option>30 Minutes</option>
                                                        <option>1 Hour</option>
                                                        <option>1 Day</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-8"></div>
                                                <div class="col-md-4">
                                                    <span class="small">06/08/2020 18:22 - 06/08/2020 18:37</span>
                                                </div>
                                                <div class="col-md-12">
                                                    <table class="w-100 mt-3">
                                                        <thead class="font-weight-bold bg-gray">
                                                        <tr>
                                                            <td class="p-2">Page URLs</td>
                                                            <td class="p-2">Avg. Duration <small>(in sec)</small></td>
                                                            <td class="p-2">Request Count</td>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td class="p-2">/index.php</td>
                                                            <td class="p-2">1</td>
                                                            <td class="p-2">1</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="custom-tabs-for-running-processes" role="tabpanel" aria-labelledby="custom-tabs-for-running-processes-tab">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-8"><span class="text-uppercase"><b>CURRENTLY RUNNING PHP PROCESSES</b></span><a href="#"><i class="fa fa-redo ml-2"></i></a> </div>

                                                <div class="col-md-12">
                                                    <table class="w-100 mt-3">
                                                        <thead class="font-weight-bold bg-gray">
                                                        <tr>
                                                            <td class="p-2">Process Name</td>
                                                            <td class="p-2">CPU%</td>
                                                            <td class="p-2">Memory%</td>
                                                            <td class="p-2">Duration <small>(in sec)</small></td>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td class="p-2">Zgrab</td>
                                                            <td class="p-2">2</td>
                                                            <td class="p-2">2</td>
                                                            <td class="p-2">2</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-for-slow-pages" role="tabpanel" aria-labelledby="custom-tabs-for-slow-pages-tab">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-8"><span class="text-uppercase"><b>SLOW REQUESTED PHP PAGES</b></span><a href="#"><i class="fa fa-redo ml-2"></i></a> </div>
                                                <div class="col-md-4">
                                                    <select class="form-control">
                                                        <option>15 Minutes</option>
                                                        <option>30 Minutes</option>
                                                        <option>1 Hour</option>
                                                        <option>1 Day</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-8"></div>
                                                <div class="col-md-4">
                                                    <span class="small">06/08/2020 18:22 - 06/08/2020 18:37</span>
                                                </div>
                                                <div class="col-md-12">
                                                    <table class="w-100 mt-3">
                                                        <thead class="font-weight-bold bg-gray">
                                                            <tr>
                                                                <td class="p-2">Page Requests</td>
                                                                <td class="p-2">Request Count</td>
                                                                <td class="p-2">Max Time <small>(in sec)</small></td>
                                                                <td class="p-2">Avg. Time <small>(in sec)</small></td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td class="p-2">/ReportServer</td>
                                                            <td class="p-2">2</td>
                                                            <td class="p-2">30</td>
                                                            <td class="p-2">20</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-for-status-codes" role="tabpanel" aria-labelledby="custom-tabs-for-status-codes-tab">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-8"><span class="text-uppercase"><b>WEB REQUEST STATUS CODES</b></span><a href="#"><i class="fa fa-redo ml-2"></i></a> </div>
                                                <div class="col-md-4">
                                                    <select class="form-control">
                                                        <option>15 Minutes</option>
                                                        <option>30 Minutes</option>
                                                        <option>1 Hour</option>
                                                        <option>1 Day</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-8"></div>
                                                <div class="col-md-4">
                                                    <span class="small">06/08/2020 18:22 - 06/08/2020 18:37</span>
                                                </div>
                                                <div class="col-md-12">
                                                    <table class="w-100 mt-3">
                                                        <thead class="font-weight-bold bg-gray">
                                                        <tr>
                                                            <td class="p-2">Top 10 IP Addresses</td>
                                                            <td class="p-2">Request Count</td>
                                                            <td class="p-2"></td>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td class="p-2">404</td>
                                                            <td class="p-2">2</td>
                                                            <td class="p-2">Details +</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-footer"></div>

</div>


<div  id="mysql_content" style="display:none;">
    <div  class="card  card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title text-uppercase">mysql</h3>

            <!--<div class="card-tools">
               <a href="create-huddle.php" class="btn btn-primary">START A NEW APPLICATION</a>
            </div>-->
        </div>

        <div class="card-body">
            <p>This section presents database level statistics including active connections, currently-running queries, and queries that are taking too long to execute.</p>

            <div  class="row">
                <div class="col-12">
                    <div class="card card-primary card-outline card-outline-tabs">
                        <div class="card-header p-0 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-for-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active text-uppercase" id="custom-tabs-for-summary-tab" data-toggle="pill" href="#custom-tabs-for-summary" role="tab" aria-controls="custom-tabs-for-summary" aria-selected="true">Summary</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" id="custom-tabs-for-slow-queries-tab" data-toggle="pill" href="#custom-tabs-for-slow-queries" role="tab" aria-controls="custom-tabs-for-slow-queries" aria-selected="false">Slow Queries</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-for-tabContent">
                                <div class="tab-pane fade show active" id="custom-tabs-for-summary" role="tabpanel" aria-labelledby="custom-tabs-for-summary-tab">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-8"><span class="text-uppercase"><b>CONNECTIONS</b></span><a href="#"><i class="fa fa-redo ml-2"></i></a> </div>
                                                <div class="col-md-12 border-bottom pb-4 mb-2">
                                                    <span class="">Active Connections: 0</span>
                                                </div>
                                                <div class="col-md-12"><span class="text-uppercase"><b>QUERIES</b></span></div>
                                                <div class="col-md-12">
                                                    <table class="w-100 mt-3">
                                                        <thead class="font-weight-bold bg-gray">
                                                        <tr>
                                                            <td class="p-2">Host</td>
                                                            <td class="p-2">Command Type</td>
                                                            <td class="p-2">Running Time <small>(in sec)</small></td>
                                                            <td class="p-2">Query</td>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td class="p-2">Test</td>
                                                            <td class="p-2">1</td>
                                                            <td class="p-2">10</td>
                                                            <td class="p-2">Test</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="custom-tabs-for-slow-queries" role="tabpanel" aria-labelledby="custom-tabs-for-slow-queries-tab">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-8"><span class="text-uppercase"><b>Top slow queries</b></span><a href="#"><i class="fa fa-redo ml-2"></i></a> </div>
                                                <div class="col-md-4">
                                                    <select class="form-control">
                                                        <option>15 Minutes</option>
                                                        <option>30 Minutes</option>
                                                        <option>1 Hour</option>
                                                        <option>1 Day</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-12">
                                                    <table class="w-100 mt-3">
                                                        <thead class="font-weight-bold bg-gray">
                                                        <tr>
                                                            <td class="p-2 w-75">Query</td>
                                                            <td class="p-2">Execution Time <small>(in sec)</small></td>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td class="p-2">Test</td>
                                                            <td class="p-2">20</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-for-slow-pages" role="tabpanel" aria-labelledby="custom-tabs-for-slow-pages-tab">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-8"><span class="text-uppercase"><b>SLOW REQUESTED PHP PAGES</b></span><a href="#"><i class="fa fa-redo ml-2"></i></a> </div>
                                                <div class="col-md-4">
                                                    <select class="form-control">
                                                        <option>15 Minutes</option>
                                                        <option>30 Minutes</option>
                                                        <option>1 Hour</option>
                                                        <option>1 Day</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-8"></div>
                                                <div class="col-md-4">
                                                    <span class="small">06/08/2020 18:22 - 06/08/2020 18:37</span>
                                                </div>
                                                <div class="col-md-12">
                                                    <table class="w-100 mt-3">
                                                        <thead class="font-weight-bold bg-gray">
                                                        <tr>
                                                            <td class="p-2">Page Requests</td>
                                                            <td class="p-2">Request Count</td>
                                                            <td class="p-2">Max Time <small>(in sec)</small></td>
                                                            <td class="p-2">Avg. Time <small>(in sec)</small></td>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td class="p-2">/ReportServer</td>
                                                            <td class="p-2">2</td>
                                                            <td class="p-2">30</td>
                                                            <td class="p-2">20</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-for-status-codes" role="tabpanel" aria-labelledby="custom-tabs-for-status-codes-tab">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-8"><span class="text-uppercase"><b>WEB REQUEST STATUS CODES</b></span><a href="#"><i class="fa fa-redo ml-2"></i></a> </div>
                                                <div class="col-md-4">
                                                    <select class="form-control">
                                                        <option>15 Minutes</option>
                                                        <option>30 Minutes</option>
                                                        <option>1 Hour</option>
                                                        <option>1 Day</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-8"></div>
                                                <div class="col-md-4">
                                                    <span class="small">06/08/2020 18:22 - 06/08/2020 18:37</span>
                                                </div>
                                                <div class="col-md-12">
                                                    <table class="w-100 mt-3">
                                                        <thead class="font-weight-bold bg-gray">
                                                        <tr>
                                                            <td class="p-2">Top 10 IP Addresses</td>
                                                            <td class="p-2">Request Count</td>
                                                            <td class="p-2"></td>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td class="p-2">404</td>
                                                            <td class="p-2">2</td>
                                                            <td class="p-2">Details +</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-footer"></div>

</div>


<div  id="running_crons_content" style="display:none;">
    <div  class="card  card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title text-uppercase">Running Crons</h3>

            <!--<div class="card-tools">
               <a href="create-huddle.php" class="btn btn-primary">START A NEW APPLICATION</a>
            </div>-->
        </div>

        <div class="card-body">
            <p>This section presents cron jobs that are currently running on your application.</p>

            <div  class="row">
                <div class="col-md-12"><span class="text-uppercase"><b>running crons</b></span><a href="#"><i class="fa fa-redo ml-2"></i></a> </div>
                <div class="col-md-12">
                    <table class="w-100 mt-3">
                        <thead class="font-weight-bold bg-gray">
                        <tr>
                            <td class="p-2 w-50">Cron</td>
                            <td class="p-2">CPU%</td>
                            <td class="p-2">Memory%</td>
                            <td class="p-2">Running Time <small>(in sec)</small></td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="p-2">Cron Name</td>
                            <td class="p-2">30</td>
                            <td class="p-2">45 +</td>
                            <td class="p-2">40</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="card-footer"></div>

</div>




<!-- Access log content -->
<div  id="access_log_content" style="display:none;">
    <div  class="card  card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title text-uppercase">ACCESS LOGS</h3>

            <!--<div class="card-tools">
               <a href="create-huddle.php" class="btn btn-primary">START A NEW APPLICATION</a>
            </div>-->
        </div>

        <div class="card-body">
            <p>Analyzing logs is essential to understand web requests, the status of requests, visitors’ IP, and viewed pages and user-agents, etc.</p>
            <p>This section presents logs of Apache (for dynamic requests such as PHP requests), NGINX (for static assets such as images/JS/CSS), and PHP (detailed PHP process information such as files/routes, CPU and memory consumption).</p>

            <div  class="row">
                <div class="col-12">
                    <div class="card card-primary card-outline card-outline-tabs">
                        <div class="card-header p-0 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-for-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active text-uppercase" id="custom-tabs-for-apache-tab" data-toggle="pill" href="#custom-tabs-for-apache" role="tab" aria-controls="custom-tabs-for-apache" aria-selected="true">Requested Pages</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" id="custom-tabs-for-nginx-tab" data-toggle="pill" href="#custom-tabs-for-nginx" role="tab" aria-controls="custom-tabs-for-nginx" aria-selected="false">Running Processes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" id="custom-tabs-for-accesslog-php-tab" data-toggle="pill" href="#custom-tabs-for-accesslog-php" role="tab" aria-controls="custom-tabs-for-accesslog-php" aria-selected="false">Slow Pages</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-for-tabContent">
                                <div class="tab-pane fade show active" id="custom-tabs-for-apache" role="tabpanel" aria-labelledby="custom-tabs-for-apache-tab">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-8"><span class="text-uppercase"><b>TOP REQUESTED PHP PAGES</b></span><a href="#"><i class="fa fa-redo ml-2"></i></a> </div>
                                                <div class="col-md-4">
                                                    <select class="form-control">
                                                        <option>15 Minutes</option>
                                                        <option>30 Minutes</option>
                                                        <option>1 Hour</option>
                                                        <option>1 Day</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-8"></div>
                                                <div class="col-md-4">
                                                    <span class="small">06/08/2020 18:22 - 06/08/2020 18:37</span>
                                                </div>
                                                <div class="col-md-12">
                                                    <table class="w-100 mt-3">
                                                        <thead class="font-weight-bold bg-gray">
                                                        <tr>
                                                            <td class="p-2">Page URLs</td>
                                                            <td class="p-2">Avg. Duration <small>(in sec)</small></td>
                                                            <td class="p-2">Request Count</td>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td class="p-2">/index.php</td>
                                                            <td class="p-2">1</td>
                                                            <td class="p-2">1</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="custom-tabs-for-nginx" role="tabpanel" aria-labelledby="custom-tabs-for-nginx-tab">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-8"><span class="text-uppercase"><b>CURRENTLY RUNNING PHP PROCESSES</b></span><a href="#"><i class="fa fa-redo ml-2"></i></a> </div>

                                                <div class="col-md-12">
                                                    <table class="w-100 mt-3">
                                                        <thead class="font-weight-bold bg-gray">
                                                        <tr>
                                                            <td class="p-2">Process Name</td>
                                                            <td class="p-2">CPU%</td>
                                                            <td class="p-2">Memory%</td>
                                                            <td class="p-2">Duration <small>(in sec)</small></td>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td class="p-2">Zgrab</td>
                                                            <td class="p-2">2</td>
                                                            <td class="p-2">2</td>
                                                            <td class="p-2">2</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-for-accesslog-php" role="tabpanel" aria-labelledby="custom-tabs-for-accesslog-php-tab">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-8"><span class="text-uppercase"><b>SLOW REQUESTED PHP PAGES</b></span><a href="#"><i class="fa fa-redo ml-2"></i></a> </div>
                                                <div class="col-md-4">
                                                    <select class="form-control">
                                                        <option>15 Minutes</option>
                                                        <option>30 Minutes</option>
                                                        <option>1 Hour</option>
                                                        <option>1 Day</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-8"></div>
                                                <div class="col-md-4">
                                                    <span class="small">06/08/2020 18:22 - 06/08/2020 18:37</span>
                                                </div>
                                                <div class="col-md-12">
                                                    <table class="w-100 mt-3">
                                                        <thead class="font-weight-bold bg-gray">
                                                        <tr>
                                                            <td class="p-2">Page Requests</td>
                                                            <td class="p-2">Request Count</td>
                                                            <td class="p-2">Max Time <small>(in sec)</small></td>
                                                            <td class="p-2">Avg. Time <small>(in sec)</small></td>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td class="p-2">/ReportServer</td>
                                                            <td class="p-2">2</td>
                                                            <td class="p-2">30</td>
                                                            <td class="p-2">20</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-for-status-codes" role="tabpanel" aria-labelledby="custom-tabs-for-status-codes-tab">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-8"><span class="text-uppercase"><b>WEB REQUEST STATUS CODES</b></span><a href="#"><i class="fa fa-redo ml-2"></i></a> </div>
                                                <div class="col-md-4">
                                                    <select class="form-control">
                                                        <option>15 Minutes</option>
                                                        <option>30 Minutes</option>
                                                        <option>1 Hour</option>
                                                        <option>1 Day</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-8"></div>
                                                <div class="col-md-4">
                                                    <span class="small">06/08/2020 18:22 - 06/08/2020 18:37</span>
                                                </div>
                                                <div class="col-md-12">
                                                    <table class="w-100 mt-3">
                                                        <thead class="font-weight-bold bg-gray">
                                                        <tr>
                                                            <td class="p-2">Top 10 IP Addresses</td>
                                                            <td class="p-2">Request Count</td>
                                                            <td class="p-2"></td>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td class="p-2">404</td>
                                                            <td class="p-2">2</td>
                                                            <td class="p-2">Details +</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-footer"></div>

</div>



<div  id="monitoring_content" style="display:none;">
    <div  class="card  card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Monitoring</h3>

            <!--<div class="card-tools">
               <a href="create-huddle.php" class="btn btn-primary">START A NEW APPLICATION</a>
            </div>-->
        </div>

        <div class="card-body">
            <p>Information related to the several ways you can interact with your application.</p>

            <div  class="row">
                <div class="col-6">
                    <p><b>APPLICATION URL</b></p>
                    </br></br>
                    <p><b>ADMIN PANEL </b></p>
                    </br></br>
                    <p><b>MYSQL ACCESS</b></p>
                    <p>DB Name:</p>
                    <p>Username:</p>
                    <p>Password:</p>
                </div>

                <div class="col-6">
                    <p><b>APPLICATION CREDENTIALS</b></p>

                    <p>You can create and use multiple Application credentials for SFTP or SSH access to this Application</p>


                    </br></br>


                    <p><b>MYSQL ACCESS</b></p>
                    <p>DB Name:</p>
                    <p>Username:</p>
                    <p>Password:</p>
                </div>



            </div>
        </div>
    </div>

    <div class="card-footer"></div>

</div>




<div id="access_details_content" style="display:none;">
    <!-- Default box -->
    <div  class="card  card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Access Details</h3>

            <!--<div class="card-tools">
               <a href="create-huddle.php" class="btn btn-primary">START A NEW APPLICATION</a>
            </div>-->
        </div>


        <div class="card-body">
            <p>Information related to the several ways you can interact with your application.</p>

            <div  class="row">
                <div class="col-6">
                    <p><b>APPLICATION URL</b></p>
                    </br></br>
                    <p><b>ADMIN PANEL </b></p>
                    <p>URL:&nbsp;<span id="wpurl"></span></p>
                    <p>Username:&nbsp;<span>root</span></p>
                    <p>Password:&nbsp;<span id="dbpass"></span></p>
                    </br></br>


                    <p><b>MYSQL ACCESS</b></p>
                    <p>DB Name:&nbsp;<span>wp</span></p>
                    <p>Username:&nbsp;<span>root</span></p>
                    <p>Password:&nbsp;<span id="dbpass"></span></p>
                </div>

                <div class="col-6">

                </div>



            </div>

        </div>


    </div>

    <div class="card-footer">

    </div>

</div>





<div id="disk_usage_details_content" style="display:none;">
    <!-- Default box -->
    <div  class="card  card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Disk Usage</h3>

            <!--<div class="card-tools">
               <a href="create-huddle.php" class="btn btn-primary">START A NEW APPLICATION</a>
            </div>-->
        </div>


        <div class="card-body">
            <p>This section presents an overview of the application disk usage, and lists the webroot directories and database tables that are consuming the disk space.</p>

            <div  class="row">
                <div class="col-12">
                    <div class="card card-primary card-outline card-outline-tabs">
                        <div class="card-header p-0 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Summary</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Details</a>
                                </li>

                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-four-tabContent">
                                <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                                    <p><b>APPLICATION USAGE</b></p>

                                    <p>
                                        This section presents the application disk usage and lists the webroot directories and database tables that are consuming the disk space.</p>
                                    </br></br>
                                    <p><b>FILES USAGE</b></p>

                                    <p>
                                        Current application web files usage is</p>

                                </div>


                                <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                                    Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                                    Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna.
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-four-settings" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
                                    Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-footer">

    </div>

</div>



<!-- ./wrapper -->

<!-- jQuery -->
<script src="./plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./dist/js/demo.js"></script>

<!-- AdminLTE App -->
<script src="./dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./dist/js/demo.js"></script>
<!-- FLOT CHARTS -->
<script src="./plugins/flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="./plugins/flot-old/jquery.flot.resize.min.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="./plugins/flot-old/jquery.flot.pie.min.js"></script>
<!-- Page script -->

<script>

    $("#access_details").click(function(e){

        $("#main_content").html( $("#access_details_content").html());

        var settings = {
            "url": "system/application.php",
            "method": "GET",
            "timeout": 0,
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer "+localStorage.token
            },
            "data":{"id":localStorage.id}

        };

        $.ajax(settings).done(function (response) {

            var response = JSON.parse(response);
            var tmp = JSON.parse(response.data.wpinfo);
            $("#wpurl").text('http://'+response.data.ip+'/wp-admin');
            $("#dbpass").text(tmp.pw);

        });




    });


    $("#disk_usage").click(function(e){
        //$("#access_details_content").css('display','none');
        $("#main_content").html( $("#disk_usage_details_content").html());

    });

    $("#monitoring").click(function(e){
        //$("#access_details_content").css('display','none');
        $("#main_content").html( $("#monitoring_content").html());

    });

    $("#traffic_link").click(function(e){
        $("#main_content").html( $("#traffic_content").html());

    });

    $("#php_link").click(function(e){
        $("#main_content").html( $("#php_content").html());

    });

    $("#mysql_link").click(function(e){
        $("#main_content").html( $("#mysql_content").html());

    });

    $("#running_crons_link").click(function(e){
        $("#main_content").html( $("#running_crons_content").html());

    });



    if(localStorage.token==undefined){
        //  window.location="login.php";
    }


    $(function () {
        /*
         * Flot Interactive Chart
         * -----------------------
         */
        // We use an inline data source in the example, usually data would
        // be fetched from a server
        var data        = [],
            totalPoints = 100

        function getRandomData() {

            if (data.length > 0) {
                data = data.slice(1)
            }

            // Do a random walk
            while (data.length < totalPoints) {

                var prev = data.length > 0 ? data[data.length - 1] : 50,
                    y    = prev + Math.random() * 10 - 5

                if (y < 0) {
                    y = 0
                } else if (y > 100) {
                    y = 100
                }

                data.push(y)
            }

            // Zip the generated y values with the x values
            var res = []
            for (var i = 0; i < data.length; ++i) {
                res.push([i, data[i]])
            }

            return res
        }

        var interactive_plot = $.plot('#interactive', [
                {
                    data: getRandomData(),
                }
            ],
            {
                grid: {
                    borderColor: '#f3f3f3',
                    borderWidth: 1,
                    tickColor: '#f3f3f3'
                },
                series: {
                    color: '#3c8dbc',
                    lines: {
                        lineWidth: 2,
                        show: true,
                        fill: true,
                    },
                },
                yaxis: {
                    min: 0,
                    max: 100,
                    show: true
                },
                xaxis: {
                    show: true
                }
            }
        )

        var updateInterval = 500 //Fetch data ever x milliseconds
        var realtime       = 'on' //If == to on then fetch data every x seconds. else stop fetching
        function update() {

            interactive_plot.setData([getRandomData()])

            // Since the axes don't change, we don't need to call plot.setupGrid()
            interactive_plot.draw()
            if (realtime === 'on') {
                setTimeout(update, updateInterval)
            }
        }

        //INITIALIZE REALTIME DATA FETCHING
        if (realtime === 'on') {
            update()
        }
        //REALTIME TOGGLE
        $('#realtime .btn').click(function () {
            if ($(this).data('toggle') === 'on') {
                realtime = 'on'
            }
            else {
                realtime = 'off'
            }
            update()
        })
        /*
         * END INTERACTIVE CHART
         */


        /*
         * LINE CHART
         * ----------
         */
        //LINE randomly generated data

        var sin = [],
            cos = []
        for (var i = 0; i < 14; i += 0.5) {
            sin.push([i, Math.sin(i)])
            cos.push([i, Math.cos(i)])
        }
        var line_data1 = {
            data : sin,
            color: '#3c8dbc'
        }
        var line_data2 = {
            data : cos,
            color: '#00c0ef'
        }
        $.plot('#line-chart', [line_data1, line_data2], {
            grid  : {
                hoverable  : true,
                borderColor: '#f3f3f3',
                borderWidth: 1,
                tickColor  : '#f3f3f3'
            },
            series: {
                shadowSize: 0,
                lines     : {
                    show: true
                },
                points    : {
                    show: true
                }
            },
            lines : {
                fill : false,
                color: ['#3c8dbc', '#f56954']
            },
            yaxis : {
                show: true
            },
            xaxis : {
                show: true
            }
        })
        //Initialize tooltip on hover
        $('<div class="tooltip-inner" id="line-chart-tooltip"></div>').css({
            position: 'absolute',
            display : 'none',
            opacity : 0.8
        }).appendTo('body')
        $('#line-chart').bind('plothover', function (event, pos, item) {

            if (item) {
                var x = item.datapoint[0].toFixed(2),
                    y = item.datapoint[1].toFixed(2)

                $('#line-chart-tooltip').html(item.series.label + ' of ' + x + ' = ' + y)
                    .css({
                        top : item.pageY + 5,
                        left: item.pageX + 5
                    })
                    .fadeIn(200)
            } else {
                $('#line-chart-tooltip').hide()
            }

        })
        /* END LINE CHART */

        /*
         * FULL WIDTH STATIC AREA CHART
         * -----------------
         */
        var areaData = [[2, 88.0], [3, 93.3], [4, 102.0], [5, 108.5], [6, 115.7], [7, 115.6],
            [8, 124.6], [9, 130.3], [10, 134.3], [11, 141.4], [12, 146.5], [13, 151.7], [14, 159.9],
            [15, 165.4], [16, 167.8], [17, 168.7], [18, 169.5], [19, 168.0]]
        $.plot('#area-chart', [areaData], {
            grid  : {
                borderWidth: 0
            },
            series: {
                shadowSize: 0, // Drawing is faster without shadows
                color     : '#00c0ef',
                lines : {
                    fill: true //Converts the line chart to area chart
                },
            },
            yaxis : {
                show: false
            },
            xaxis : {
                show: false
            }
        })

        /* END AREA CHART */

        /*
         * BAR CHART
         * ---------
         */

        var bar_data = {
            data : [[1,10], [2,8], [3,4], [4,13], [5,17], [6,9]],
            bars: { show: true }
        }
        $.plot('#bar-chart', [bar_data], {
            grid  : {
                borderWidth: 1,
                borderColor: '#f3f3f3',
                tickColor  : '#f3f3f3'
            },
            series: {
                bars: {
                    show: true, barWidth: 0.5, align: 'center',
                },
            },
            colors: ['#3c8dbc'],
            xaxis : {
                ticks: [[1,'January'], [2,'February'], [3,'March'], [4,'April'], [5,'May'], [6,'June']]
            }
        })
        /* END BAR CHART */

        /*
         * DONUT CHART
         * -----------
         */

        var donutData = [
            {
                label: 'Series2',
                data : 30,
                color: '#3c8dbc'
            },
            {
                label: 'Series3',
                data : 20,
                color: '#0073b7'
            },
            {
                label: 'Series4',
                data : 50,
                color: '#00c0ef'
            }
        ]
        $.plot('#donut-chart', donutData, {
            series: {
                pie: {
                    show       : true,
                    radius     : 1,
                    innerRadius: 0.5,
                    label      : {
                        show     : true,
                        radius   : 2 / 3,
                        formatter: labelFormatter,
                        threshold: 0.1
                    }

                }
            },
            legend: {
                show: false
            }
        })
        /*
         * END DONUT CHART
         */

    })

    /*
     * Custom Label formatter
     * ----------------------
     */
    function labelFormatter(label, series) {
        return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
            + label
            + '<br>'
            + Math.round(series.percent) + '%</div>'
    }
</script>




</body>
</html>
