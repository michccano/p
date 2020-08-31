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
    <link rel="stylesheet" href="./dist/css/adminlte.css">
    <link rel="stylesheet" href="./dist/css/style.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="./plugins/toastr/toastr.min.css">
</head>
<body class="hold-transition sidebar-mini layout-boxed">
<!-- Site wrapper -->
<div class="container-fluid p-0">


    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">Parvaty Cloud</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="javascript:void(0)" class="float-left pr-2 " id="">Server Name</a>
                    <i class="fa fa-edit float-left pr-2 "></i>
                    <a href="createapplication.php"><i class="fa fa-plus-circle float-left pr-2  "></i></a>
                    <div class="btn-group dropright">
                        <i class="fa fa-chevron-down float-left" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></i>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Delete</a>
                            <a class="dropdown-item" href="#">Clone App/Create Staging</a>
                        </div>
                    </div>
                </div>
            </div>


            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
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
                                <a href="javascript:void(0)" class="nav-link" id="access_log_link">
                                    <p>Access Log</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link" id="error_log_link">
                                    <p>Error Log</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0)" id="domain_management_link" class="nav-link">
                            <p>Domain Management</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0)" id="cron_job_link" class="nav-link">
                            <p>Cron Job Management</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0)" id="backup_restore_link" class="nav-link">
                            <p>Backup and Restore</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0)" id="application_settings_link" class="nav-link">
                            <p>Application Settings</p>
                        </a>
                    </li>


                </ul>
            </nav>


            <!-- /.sidebar-menu -->
        </div>


        <!-- /.sidebar -->
    </aside>


    <?php include("navbar.php"); ?>

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
                    <div id="main_content" class="col-12"

                    </div>
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
<div id="monitoring_content" style="display:none;">
    <div class="card  card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Monitoring</h3>

            <!--<div class="card-tools">
               <a href="create-huddle.php" class="btn btn-primary">START A NEW APPLICATION</a>
            </div>-->
        </div>


        <div class="card-body">
            <p>Information related to the several ways you can interact with your application.</p>

            <div class="row">
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

                    <p>You can create and use multiple Application credentials for SFTP or SSH access to this
                        Application</p>

                    </br></br>
                    <p><b>MYSQL ACCESS</b></p>
                    <p>DB Name:</p>
                    <p>Username:</p>
                    <p>Password:</p>
                </div>
            </div>
        </div>
        <div class="card-footer"></div>
    </div>
</div>


<!-- Default box -->


<div id="access_details_content" style="display:none;">
    <!-- Default box -->
    <div class="card  card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Access Details</h3>

            <!--<div class="card-tools">
               <a href="create-huddle.php" class="btn btn-primary">START A NEW APPLICATION</a>
            </div>-->
        </div>


        <div class="card-body">
            <p>Information related to the several ways you can interact with your application.</p>

            <div class="row">
                <div class="col-6">
                    <p class="mb-4"><b>APPLICATION URL</b></p>
                    <p><b>ADMIN PANEL </b></p>
                    <p>URL:&nbsp;<span id="wpurl"></span></p>
                    <p>Username:&nbsp;<span>root</span></p>
                    <p class="mb-4">Password:&nbsp;<span id="dbpass"></span></p>


                    <p><b>MYSQL ACCESS</b></p>
                    <p>DB Name:&nbsp;<span>wp</span></p>
                    <p>Username:&nbsp;<span>root</span></p>
                    <p>Password:&nbsp;<span id="dbpass"></span></p>
                </div>

                <div class="col-6">
                </div>
            </div>
        </div>
        <div class="card-footer"></div>
    </div>
</div>


<div id="disk_usage_details_content" style="display:none;">
    <!-- Default box -->
    <div class="card  card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title text-uppercase">Disk Usage</h3>

            <!--<div class="card-tools">
               <a href="create-huddle.php" class="btn btn-primary">START A NEW APPLICATION</a>
            </div>-->
        </div>


        <div class="card-body">
            <p>This section presents an overview of the application disk usage, and lists the webroot directories and
                database tables that are consuming the disk space.</p>

            <div class="row">


                <div class="col-12">
                    <div class="card card-primary card-outline card-outline-tabs">
                        <div class="card-header p-0 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill"
                                       href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home"
                                       aria-selected="true">Summary</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill"
                                       href="#custom-tabs-four-profile" role="tab"
                                       aria-controls="custom-tabs-four-profile" aria-selected="false">Details</a>
                                </li>

                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-four-tabContent">
                                <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel"
                                     aria-labelledby="custom-tabs-four-home-tab">
                                    <p><b>APPLICATION USAGE</b></p>

                                    <p>
                                        This section presents the application disk usage and lists the webroot
                                        directories and database tables that are consuming the disk space.</p>
                                    </br></br>
                                    <p><b>FILES USAGE</b></p>

                                    <p>
                                        Current application web files usage is&nbsp;<span id="total_fs"></span></p>
                                    <div id="files_list">

                                    </div>

                                    </br></br>
                                    <p><b>DATABASE USAGE</b></p>

                                    <p>
                                        Current application database usage is&nbsp;<span id="total_dbs"></span></p>
                                    <div id="db_list">

                                    </div>


                                </div>


                                <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel"
                                     aria-labelledby="custom-tabs-four-profile-tab">
                                    Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra
                                    purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et
                                    ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl
                                    ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus,
                                    elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel"
                                     aria-labelledby="custom-tabs-four-messages-tab">
                                    Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus
                                    volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum.
                                    Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec
                                    augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc.
                                    Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus
                                    efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum.
                                    Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum
                                    metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare
                                    magna.
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-four-settings" role="tabpanel"
                                     aria-labelledby="custom-tabs-four-settings-tab">
                                    Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis
                                    tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque
                                    tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum
                                    consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra.
                                    Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut
                                    nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet
                                    accumsan ex sit amet facilisis.
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
</div>


<!-- Access log content -->
<div id="access_log_content" style="display:none;">
    <div class="card  card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title text-uppercase">ACCESS LOGS</h3>

            <!--<div class="card-tools">
               <a href="create-huddle.php" class="btn btn-primary">START A NEW APPLICATION</a>
            </div>-->
        </div>

        <div class="card-body">
            <p>Analyzing logs is essential to understand web requests, the status of requests, visitors’ IP, and viewed
                pages and user-agents, etc.</p>
            <p>This section presents logs of Apache (for dynamic requests such as PHP requests), NGINX (for static
                assets such as images/JS/CSS), and PHP (detailed PHP process information such as files/routes, CPU and
                memory consumption).</p>

            <div class="row">
                <div class="col-12">
                    <div class="card card-primary card-outline card-outline-tabs">
                        <div class="card-header p-0 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-for-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active text-uppercase" id="custom-tabs-for-apache-tab"
                                       data-toggle="pill" href="#custom-tabs-for-apache" role="tab"
                                       aria-controls="custom-tabs-for-apache" aria-selected="true">Requested Pages</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" id="custom-tabs-for-nginx-tab" data-toggle="pill"
                                       href="#custom-tabs-for-nginx" role="tab" aria-controls="custom-tabs-for-nginx"
                                       aria-selected="false">Running Processes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" id="custom-tabs-for-accesslog-php-tab"
                                       data-toggle="pill" href="#custom-tabs-for-accesslog-php" role="tab"
                                       aria-controls="custom-tabs-for-accesslog-php" aria-selected="false">Slow
                                        Pages</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-for-tabContent">
                                <div class="tab-pane fade show active" id="custom-tabs-for-apache" role="tabpanel"
                                     aria-labelledby="custom-tabs-for-apache-tab">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-8"><span class="text-uppercase"><b>TOP REQUESTED PHP PAGES</b></span><a
                                                            href="#"><i class="fa fa-redo ml-2"></i></a></div>
                                                <div class="col-md-4">
                                                    <select class="form-control border-bottom">
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
                                                            <td class="p-2">Avg. Duration
                                                                <small>(in sec)</small>
                                                            </td>
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

                                <div class="tab-pane fade" id="custom-tabs-for-nginx" role="tabpanel"
                                     aria-labelledby="custom-tabs-for-nginx-tab">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-8"><span class="text-uppercase"><b>CURRENTLY RUNNING PHP PROCESSES</b></span><a
                                                            href="#"><i class="fa fa-redo ml-2"></i></a></div>

                                                <div class="col-md-12">
                                                    <table class="w-100 mt-3">
                                                        <thead class="font-weight-bold bg-gray">
                                                        <tr>
                                                            <td class="p-2">Process Name</td>
                                                            <td class="p-2">CPU%</td>
                                                            <td class="p-2">Memory%</td>
                                                            <td class="p-2">Duration
                                                                <small>(in sec)</small>
                                                            </td>
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
                                <div class="tab-pane fade" id="custom-tabs-for-accesslog-php" role="tabpanel"
                                     aria-labelledby="custom-tabs-for-accesslog-php-tab">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-8"><span class="text-uppercase"><b>SLOW REQUESTED PHP PAGES</b></span><a
                                                            href="#"><i class="fa fa-redo ml-2"></i></a></div>
                                                <div class="col-md-4">
                                                    <select class="form-control border-bottom">
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
                                                            <td class="p-2">Max Time
                                                                <small>(in sec)</small>
                                                            </td>
                                                            <td class="p-2">Avg. Time
                                                                <small>(in sec)</small>
                                                            </td>
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
                                <div class="tab-pane fade" id="custom-tabs-for-status-codes" role="tabpanel"
                                     aria-labelledby="custom-tabs-for-status-codes-tab">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-8"><span class="text-uppercase"><b>WEB REQUEST STATUS CODES</b></span><a
                                                            href="#"><i class="fa fa-redo ml-2"></i></a></div>
                                                <div class="col-md-4">
                                                    <select class="form-control border-bottom">
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
        <div class="card-footer"></div>
    </div>

</div>


<!--Team-->
<!-- Default box -->
<div id="traffic_content" style="display:none;">
    <div class="card  card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title text-uppercase">Traffic</h3>

            <!--<div class="card-tools">
               <a href="create-huddle.php" class="btn btn-primary">START A NEW APPLICATION</a>
            </div>-->
        </div>

        <div class="card-body">
            <p>Monitoring traffic statistics is essential in ensuring the success of your website. This section presents
                key statistics (IP Requests, Bot Traffic, URL Requests, and Status Code) allowing you to easily monitor
                and analyze your website’s traffic and health.</p>

            <div class="row">
                <div class="col-12">
                    <div class="card card-primary card-outline card-outline-tabs">
                        <div class="card-header p-0 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-for-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active text-uppercase" id="custom-tabs-for-ip-requests-tab"
                                       data-toggle="pill" href="#custom-tabs-for-ip-requests" role="tab"
                                       aria-controls="custom-tabs-for-ip-requests" aria-selected="true">IP Requests</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" id="custom-tabs-for-bot-traffic-tab"
                                       data-toggle="pill" href="#custom-tabs-for-bot-traffic" role="tab"
                                       aria-controls="custom-tabs-for-bot-traffic" aria-selected="false">Bot Traffic</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" id="custom-tabs-for-url-requests-tab"
                                       data-toggle="pill" href="#url-requests" role="tab"
                                       aria-controls="custom-tabs-for-url-requests" aria-selected="false">URL
                                        Requests</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" id="custom-tabs-for-status-codes-tab"
                                       data-toggle="pill" href="#custom-tabs-for-status-codes" role="tab"
                                       aria-controls="custom-tabs-for-status-codes" aria-selected="false">Status
                                        Codes</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-for-tabContent">
                                <div class="tab-pane fade show active" id="custom-tabs-for-ip-requests" role="tabpanel"
                                     aria-labelledby="custom-tabs-for-home-ip-requests-tab">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-8"><span
                                                            class="text-uppercase"><b>Top ip requests</b></span><a
                                                            href="#"><i class="fa fa-redo ml-2"></i></a></div>
                                                <div class="col-md-4">
                                                    <select class="form-control border-bottom">
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
                                                        <tbody id="ip_list">


                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="custom-tabs-for-bot-traffic" role="tabpanel"
                                     aria-labelledby="custom-tabs-for-bot-traffic-tab">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-8"><span class="text-uppercase"><b>TOP BOTS SENDING TRAFFIC</b></span><a
                                                            href="#"><i class="fa fa-redo ml-2"></i></a></div>
                                                <div class="col-md-4">
                                                    <select class="form-control border-bottom">
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
                                <div class="tab-pane fade" id="url-requests" role="tabpanel"
                                     aria-labelledby="custom-tabs-for-url-requests-tab">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-8"><span class="text-uppercase"><b>TOP REQUESTING URLS</b></span><a
                                                            href="#"><i class="fa fa-redo ml-2"></i></a></div>
                                                <div class="col-md-4">
                                                    <select class="form-control border-bottom">
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
                                                        <tbody id="url_list">

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-for-status-codes" role="tabpanel"
                                     aria-labelledby="custom-tabs-for-status-codes-tab">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-8"><span class="text-uppercase"><b>WEB REQUEST STATUS CODES</b></span><a
                                                            href="#"><i class="fa fa-redo ml-2"></i></a></div>
                                                <div class="col-md-4">
                                                    <select class="form-control border-bottom">
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
                                                        <tbody id="status_list">

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


<div id="cron_management_content" style="display:none;">
    <div class="card  card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title text-uppercase">CRON JOB MANAGEMENT</h3>

            <!--<div class="card-tools">
               <a href="create-huddle.php" class="btn btn-primary">START A NEW APPLICATION</a>
            </div>-->
        </div>

        <div class="card-body">
            <p>Cron Job Manager for your application.</p>
            <button class="btn btn-info text-uppercase mr-0 mt-5 mb-3" data-toggle="modal" data-target="#cron_job_modal">add
                new cron job
            </button>

            <div class="row">
                <div class="col-12">
                    <div class="card card-primary card-outline card-outline-tabs">
                        <div class="card-header p-0 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-for-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active text-uppercase" id="custom-tabs-for-basic-tab"
                                       data-toggle="pill" href="#custom-tabs-for-basic" role="tab"
                                       aria-controls="custom-tabs-for-basic" aria-selected="true">Basic</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" id="custom-tabs-for-advanced-tab"
                                       data-toggle="pill"
                                       href="#custom-tabs-for-advanced" role="tab"
                                       aria-controls="custom-tabs-for-advanced"
                                       aria-selected="false">Advanced</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-for-tabContent">
                                <div class="tab-pane fade show active" id="custom-tabs-for-basic" role="tabpanel"
                                     aria-labelledby="custom-tabs-for-basic-tab">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">

                                                <div class="col-md-12 crons_row_container mb-2 mt-4">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="custom-tabs-for-advanced" role="tabpanel"
                                     aria-labelledby="custom-tabs-for-advanced-tab">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-8 mb-4"><span
                                                            class="text-uppercase"><b>advanced cron</b></span></div>

                                                <div class="col-md-12">
                                                    <textarea class="w-100 border-0 p-2" rows="15"
                                                              placeholder="This is your Advanced Cron editor"></textarea>
                                                    <p>
                                                        <button class="btn btn-info text-uppercase mt-3 mb-3 disabled">
                                                            save changes
                                                        </button>
                                                    </p>
                                                    <small class="">*Please use this editor carefully. You can easily
                                                        break your crons if you are not careful.
                                                    </small>
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

<div id="domain_management_content" style="display:none;">
    <div class="card  card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title text-uppercase">DOMAIN MANAGEMENT</h3>

            <!--<div class="card-tools">
               <a href="create-huddle.php" class="btn btn-primary">START A NEW APPLICATION</a>
            </div>-->
        </div>

        <div class="card-body">
            <p>Point your domain to your web app.</p>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h6 class="text-uppercase text-bold">primary domain <i class="fa fa-info-circle"
                                                                           data-toggle="tooltip" data-placement="left"
                                                                           title="This should be the fully qualified domain name for your application. For example, www.example.com and example.com are valid values for primary domain."></i>
                    </h6>
                    <input name="primary_domain_name"
                           class="form-control border-bottom w-50 primary_domain_input border-bottom" type="text"/>
                    <p class="mt-3">
                        <button class="btn btn-info text-uppercase">save changes</button>
                        <button class="btn btn-default text-uppercase ml-2">delete</button>
                    </p>
                    <p>How to point your Domain to wordpress-381373-1413369.cloudwaysapps.com. <a href=""
                                                                                                  class="text-bold"><u>More
                                Details</u></a></p>
                </div>
                <div class="col-md-6 col-sm-12 border-left pl-5 additional_domain_section">
                    <h6 class="text-uppercase text-bold">additional domains</h6>
                    <div class="w-100 " id="additional_domain_name_container">
                        <div class="w-100 domain_name_actions float-left">
                            <span class="float-left pt-1 mt-1">Domain:</span> <input name="domain_name" type="text"
                                                                                     class="border-bottom form-control w-50 float-left">
                            <span class="float-left pt-1 mt-1 pl-3"><i class="fa fa-check-square"></i> <i
                                        class="fa fa-window-close pl-3 delete_additional_domain"></i></span>
                        </div>
                    </div>
                    <p class="mt-3 float-left">
                        <button class="btn btn-default text-uppercase add_additional_domain">add domain</button>
                        <button class="btn btn-default text-uppercase  ml-2">save changes</button>
                    </p>
                </div>
            </div>
        </div>
        <div class="card-footer"></div>
    </div>

</div>


<div class="modal" id="cron_job_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="cron_data_form" role="form">
                <div class="modal-header">
                    <h5 class="modal-title text-uppercase">cron job management</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input name="update_create" value="0" type="hidden" class="update_create">
                    <input name="cron_db_id" value="" type="hidden" class="cron_db_id">
                    <div class="row">
                        <div class="col-12 form-group">
                            <label class="font-weight-normal">Common Settings</label>
                            <select name="cron_option" class="form-control border-bottom cron_setting_options">
                                <option value="0">Select common settings</option>
                                <option value="1">Every minute (* * * * *)</option>
                                <option value="2">Every 5 minutes (*/5 * * * *)</option>
                                <option value="3">Twice an hour (0,30 * * * *)</option>
                                <option value="4">Once an hour (0 * * * *)</option>
                                <option value="5">Twice a day (0 0,12 * * * *)</option>
                                <option value="6">Once a day (0 0 * * *)</option>
                                <option value="7">Once a week (0 0 * * 0)</option>
                                <option value="8">1st and 15th (0 0 1,15 * *)</option>
                                <option value="9">Once a month (0 0 1 * *)</option>
                                <option value="10">Once a year (0 0 1 1 *)</option>
                            </select>
                        </div>
                        <div class="col-12 form-group">
                            <label class="font-weight-normal">Minutes</label>
                            <input name="minutes" value="" type="text" class="form-control border-bottom minutes">
                        </div>
                        <div class="col-12 form-group">
                            <label class="font-weight-normal">Hours</label>
                            <input name="hours" value="" type="text" class="form-control border-bottom hours">
                        </div>
                        <div class="col-12 form-group">
                            <label class="font-weight-normal">Days</label>
                            <input name="days" value="" type="text" class="form-control border-bottom days">
                        </div>
                        <div class="col-12 form-group">
                            <label class="font-weight-normal">Month</label>
                            <input name="month" value="" type="text" class="form-control border-bottom month">
                        </div>
                        <div class="col-12 form-group">
                            <label class="font-weight-normal">Weeks</label>
                            <input name="week" value="" type="text" class="form-control border-bottom week">
                        </div>
                        <div class="col-12 form-group">
                            <label class="font-weight-normal">Type</label>
                            <select class="form-control border-bottom" name="cron_type">
                                <option value="1">PHP</option>
                                <option value="2">cURL</option>
                                <option value="3">Wget</option>
                            </select>
                        </div>
                        <div class="col-12 form-group">
                            <label class="font-weight-normal">Command</label>
                            <p>/qhjkstaxqr/public_html/<input name="cron_name" value="" type="text"
                                                              class="form-control border-bottom cron_name"></p>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary save_cron_btn">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="php_content" style="display:none;">
    <div class="card  card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title text-uppercase">php</h3>

            <!--<div class="card-tools">
               <a href="create-huddle.php" class="btn btn-primary">START A NEW APPLICATION</a>
            </div>-->
        </div>

        <div class="card-body">
            <p>Monitoring PHP performance is essential in ensuring a consistent quality experience of your website. This
                section presents important PHP related statistics including top Requested Pages, currently Running
                Processes, and Slow Pages, allowing you to quickly analyze and track PHP performance.</p>

            <div class="row">
                <div class="col-12">
                    <div class="card card-primary card-outline card-outline-tabs">
                        <div class="card-header p-0 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-for-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active text-uppercase" id="custom-tabs-for-requested-pages-tab"
                                       data-toggle="pill" href="#custom-tabs-for-requested-pages" role="tab"
                                       aria-controls="custom-tabs-for-requested-pages" aria-selected="true">Requested
                                        Pages</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" id="custom-tabs-for-running-processes-tab"
                                       data-toggle="pill" href="#custom-tabs-for-running-processes" role="tab"
                                       aria-controls="custom-tabs-for-running-processes" aria-selected="false">Running
                                        Processes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" id="custom-tabs-for-slow-pages-tab"
                                       data-toggle="pill" href="#custom-tabs-for-slow-pages" role="tab"
                                       aria-controls="custom-tabs-for-slow-pages" aria-selected="false">Slow Pages</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-for-tabContent">
                                <div class="tab-pane fade show active" id="custom-tabs-for-requested-pages"
                                     role="tabpanel" aria-labelledby="custom-tabs-for-requested-pages-tab">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-8"><span class="text-uppercase"><b>TOP REQUESTED PHP PAGES</b></span><a
                                                            href="#"><i class="fa fa-redo ml-2"></i></a></div>
                                                <div class="col-md-4">
                                                    <select class="form-control border-bottom">
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
                                                            <td class="p-2">Avg. Duration
                                                                <small>(in sec)</small>
                                                            </td>
                                                            <td class="p-2">Request Count</td>
                                                        </tr>
                                                        </thead>
                                                        <tbody id="requested_page">

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="custom-tabs-for-running-processes" role="tabpanel"
                                     aria-labelledby="custom-tabs-for-running-processes-tab">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-8"><span class="text-uppercase"><b>CURRENTLY RUNNING PHP PROCESSES</b></span><a
                                                            href="#"><i class="fa fa-redo ml-2"></i></a></div>

                                                <div class="col-md-12">
                                                    <table class="w-100 mt-3">
                                                        <thead class="font-weight-bold bg-gray">
                                                        <tr>
                                                            <td class="p-2">Process Name</td>
                                                            <td class="p-2">CPU%</td>
                                                            <td class="p-2">Memory%</td>
                                                            <td class="p-2">Duration
                                                                <small>(in sec)</small>
                                                            </td>
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
                                <div class="tab-pane fade" id="custom-tabs-for-slow-pages" role="tabpanel"
                                     aria-labelledby="custom-tabs-for-slow-pages-tab">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-8"><span class="text-uppercase"><b>SLOW REQUESTED PHP PAGES</b></span><a
                                                            href="#"><i class="fa fa-redo ml-2"></i></a></div>
                                                <div class="col-md-4">
                                                    <select class="form-control border-bottom">
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
                                                            <td class="p-2">Max Time
                                                                <small>(in sec)</small>
                                                            </td>
                                                            <td class="p-2">Avg. Time
                                                                <small>(in sec)</small>
                                                            </td>
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
                                <div class="tab-pane fade" id="custom-tabs-for-status-codes" role="tabpanel"
                                     aria-labelledby="custom-tabs-for-status-codes-tab">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-8"><span class="text-uppercase"><b>WEB REQUEST STATUS CODES</b></span><a
                                                            href="#"><i class="fa fa-redo ml-2"></i></a></div>
                                                <div class="col-md-4">
                                                    <select class="form-control border-bottom">
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


<div id="mysql_content" style="display:none;">
    <div class="card  card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title text-uppercase">mysql</h3>

            <!--<div class="card-tools">
               <a href="create-huddle.php" class="btn btn-primary">START A NEW APPLICATION</a>
            </div>-->
        </div>

        <div class="card-body">
            <p>This section presents database level statistics including active connections, currently-running queries,
                and queries that are taking too long to execute.</p>

            <div class="row">
                <div class="col-12">
                    <div class="card card-primary card-outline card-outline-tabs">
                        <div class="card-header p-0 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-for-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active text-uppercase" id="custom-tabs-for-summary-tab"
                                       data-toggle="pill" href="#custom-tabs-for-summary" role="tab"
                                       aria-controls="custom-tabs-for-summary" aria-selected="true">Summary</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" id="custom-tabs-for-slow-queries-tab"
                                       data-toggle="pill" href="#custom-tabs-for-slow-queries" role="tab"
                                       aria-controls="custom-tabs-for-slow-queries" aria-selected="false">Slow
                                        Queries</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-for-tabContent">
                                <div class="tab-pane fade show active" id="custom-tabs-for-summary" role="tabpanel"
                                     aria-labelledby="custom-tabs-for-summary-tab">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-8"><span
                                                            class="text-uppercase"><b>CONNECTIONS</b></span><a href="#"><i
                                                                class="fa fa-redo ml-2"></i></a></div>
                                                <div class="col-md-12 border-bottom pb-4 mb-2">
                                                    <span class="" id="active_connections">Active Connections: </span>
                                                </div>
                                                <div class="col-md-12"><span
                                                            class="text-uppercase"><b>QUERIES</b></span></div>
                                                <div class="col-md-12">
                                                    <table class="w-100 mt-3">
                                                        <thead class="font-weight-bold bg-gray">
                                                        <tr>
                                                            <td class="p-2">Host</td>
                                                            <td class="p-2">Command Type</td>
                                                            <td class="p-2">Running Time
                                                                <small>(in sec)</small>
                                                            </td>
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

                                <div class="tab-pane fade" id="custom-tabs-for-slow-queries" role="tabpanel"
                                     aria-labelledby="custom-tabs-for-slow-queries-tab">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-8"><span
                                                            class="text-uppercase"><b>Top slow queries</b></span><a
                                                            href="#"><i class="fa fa-redo ml-2"></i></a></div>
                                                <div class="col-md-4">
                                                    <select class="form-control border-bottom">
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
                                                            <td class="p-2">Execution Time
                                                                <small>(in sec)</small>
                                                            </td>
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
                                <div class="tab-pane fade" id="custom-tabs-for-slow-pages" role="tabpanel"
                                     aria-labelledby="custom-tabs-for-slow-pages-tab">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-8"><span class="text-uppercase"><b>SLOW REQUESTED PHP PAGES</b></span><a
                                                            href="#"><i class="fa fa-redo ml-2"></i></a></div>
                                                <div class="col-md-4">
                                                    <select class="form-control border-bottom">
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
                                                            <td class="p-2">Max Time
                                                                <small>(in sec)</small>
                                                            </td>
                                                            <td class="p-2">Avg. Time
                                                                <small>(in sec)</small>
                                                            </td>
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
                                <div class="tab-pane fade" id="custom-tabs-for-status-codes" role="tabpanel"
                                     aria-labelledby="custom-tabs-for-status-codes-tab">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-8"><span class="text-uppercase"><b>WEB REQUEST STATUS CODES</b></span><a
                                                            href="#"><i class="fa fa-redo ml-2"></i></a></div>
                                                <div class="col-md-4">
                                                    <select class="form-control border-bottom">
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


<div id="running_crons_content" style="display:none;">
    <div class="card  card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title text-uppercase">Running Crons</h3>

            <!--<div class="card-tools">
               <a href="create-huddle.php" class="btn btn-primary">START A NEW APPLICATION</a>
            </div>-->
        </div>

        <div class="card-body">
            <p>This section presents cron jobs that are currently running on your application.</p>

            <div class="row">
                <div class="col-md-12"><span class="text-uppercase"><b>running crons</b></span><a href="#"><i
                                class="fa fa-redo ml-2"></i></a></div>
                <div class="col-md-12">
                    <table class="w-100 mt-3">
                        <thead class="font-weight-bold bg-gray">
                        <tr>
                            <td class="p-2 w-50">Cron</td>
                            <td class="p-2">CPU%</td>
                            <td class="p-2">Memory%</td>
                            <td class="p-2">Running Time
                                <small>(in sec)</small>
                            </td>
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
        <div class="card-footer"></div>
    </div>
</div>

<div id="backup_restore_content" style="display:none;">
    <div class="card  card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title text-uppercase">BACKUP AND RESTORE</h3>
            <i class="fa fa-question-circle toastsDefaultSuccess float-right"></i>
            <!--<div class="card-tools">
               <a href="create-huddle.php" class="btn btn-primary">START A NEW APPLICATION</a>
            </div>-->
        </div>

        <div class="card-body" id="backup_restore_body">
            <p class="mb-5">This section allows you to back up and restore application data (files and database). You can create multiple on-demand backups. In addition, Cloudways offers option for scheduled and on-demand <a href="javascript:void(0)"><u>Server level backup</u></a> that backs up all the applications deployed on the server.</p>

            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <span class="text-uppercase"><b>restore</b></span>
                    <p class="mb-3">Restore your app (files and database) using one of the
                        available backups.</p>
                    <div class="col-md-6 col-sm-9">
                        <select class="form-control mb-4 border-bottom ">
                            <option>Test</option>
                            <option>Test</option>
                            <option>Test</option>
                        </select>
                    </div>
                    <a class="btn btn-info text-uppercase">Restore application now</a>
                </div>
                <div class="col-md-6 col-sm-12 border-left pl-5">
                    <span class="text-uppercase"><b>BACKUP</b></span>
                    <p>You can perform an on-demand backup of your application (files and database). This option is useful if you want to backup the application before any changes.</p>
                    <p>Last Backup Date: 26 August, 2020 - 6:52:28</p>
                    <a class="btn btn-default text-uppercase">take backup now</a>
                </div>
            </div>
        </div>
        <div class="card-footer"></div>
    </div>
</div>

<div id="application_settings_content" style="display:none;">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title text-uppercase">APPLICATION SETTINGS</h3>
            <i class="fa fa-question-circle toastsDefaultSuccess float-right"></i>
            <!--<div class="card-tools">
               <a href="create-huddle.php" class="btn btn-primary">START A NEW APPLICATION</a>
            </div>-->
        </div>

        <div class="card-body" id="application_settings_body">
            <p class="mb-5">Configure several application specific settings for your web app.</p>

            <div class="row">
                <div class="col-12">
                    <div class="card card-primary card-outline card-outline-tabs">
                        <div class="card-header p-0 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-for-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active text-uppercase" id="custom-tabs-for-general-tab"
                                       data-toggle="pill" href="#custom-tabs-for-general" role="tab"
                                       aria-controls="custom-tabs-for-general" aria-selected="true">general</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" id="custom-tabs-for-php-settings-tab" data-toggle="pill"
                                       href="#custom-tabs-for-php-settings" role="tab" aria-controls="custom-tabs-for-php-settings"
                                       aria-selected="false">php fpm settings</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" id="custom-tabs-for-varnish-settings-tab"
                                       data-toggle="pill" href="#custom-tabs-for-varnish-settings" role="tab"
                                       aria-controls="custom-tabs-for-varnish-settings" aria-selected="false">varnish settings</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-for-tabContent">
                                <div class="tab-pane fade show active" id="custom-tabs-for-general" role="tabpanel"
                                     aria-labelledby="custom-tabs-for-general-tab">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="col-12 mt-3">
                                                        <label class="text-uppercase font-weight-normal mb-0">folder <i class="fa fa-info-circle" title="This will rename your application folder by creating a symbolic link to your supplied name." data-toggle="tooltip"></i> </label>
                                                        <input class="form-control w-50" type="text" name="folder" />
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <label class="text-uppercase font-weight-normal mb-0">WEBROOT <i class="fa fa-info-circle" title="This will change the default webroot for your application to the value you provide." data-toggle="tooltip"></i> </label>
                                                        <input class="form-control w-50" type="text" name="folder" />
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <label class="text-uppercase font-weight-normal mb-0">FROM ADDRESS <i class="fa fa-info-circle" title="You can set FROM address if your using an email add-on on your server and wish to use a custom email address for the outgoing emails." data-toggle="tooltip"></i> </label>
                                                        <input class="form-control w-50" type="text" name="folder" />
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <label class="text-uppercase font-weight-normal mb-0">RESET FILE / FOLDERS PERMISSIONS <i class="fa fa-info-circle" title="THis will apply our default permissions to all your files in this application and change ownership of all these files to that of your master user or app user." data-toggle="tooltip"></i> </label>
                                                        <input class="form-control w-50" type="text" name="folder" />
                                                    </div>

                                                </div>
                                                <div class="col-md-6 col-sm-12 border-left pl-3">
                                                    <div class="col-12 mt-3">
                                                        <label class="text-uppercase font-weight-normal mb-0 d-block">VARNISH <i class="fa fa-info-circle" title="One of several layers of caching for your application(s). You could disable it while developing or testing or staging application(s)." data-toggle="tooltip"></i> </label>
                                                        <input type="checkbox" name="my-checkbox" id="varnish" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <label class="text-uppercase font-weight-normal mb-0 d-block">SSH ACCESS <i class="fa fa-info-circle" title="This will enable or disable application-level SSH access to your Application for your Team members." data-toggle="tooltip"></i> </label>
                                                        <input type="checkbox" name="my-checkbox" id="ssh_access" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <label class="text-uppercase font-weight-normal mb-0 d-block">CORS Headers <i class="fa fa-info-circle" title="Allow Cross-Origin Recource Sharing. Add the 'Access-Control-Allow-Origin: *' header to responses" data-toggle="tooltip"></i> </label>
                                                        <input type="checkbox" name="my-checkbox" id="cors_headers" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <label class="text-uppercase font-weight-normal mb-0 d-block">APPLICATION ACCESS <i class="fa fa-info-circle" title="This will enable or disable access to your Application. Once disabled, you will continue to see your Application on the Platform. However, SSH/SFTP access to the Application will be disabled, any existing crons set up for your Application will be stopped, and your Application will serve a 'Service Unavailable' status when accessed on the web. You can enable your Application at any time." data-toggle="tooltip"></i> </label>
                                                        <input type="checkbox" name="my-checkbox" id="application_access" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <label class="text-uppercase font-weight-normal mb-0 d-block">HTTPS REDIRECTION <i class="fa fa-info-circle" title="Enabling HTTPS Redirection forces your application to use HTTPS by creating a 301 Permanent Redirection for all domains mapped to the application. This enhances application security for all the domains mapped to the application." data-toggle="tooltip"></i> </label>
                                                        <input type="checkbox" name="my-checkbox" id="http_redirection" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <label class="text-uppercase font-weight-normal mb-0 d-block">GEO IP <i class="fa fa-info-circle" title="It is now possible to use GeoIP with your application. It is a method to track various things about your site visitors, such as their geographical location, organization, and other metrics. Once enabled, your application needs to have the inbuilt functionality to operate and process such functionality." data-toggle="tooltip"></i> </label>
                                                        <input type="checkbox" name="my-checkbox" id="geo_ip" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="custom-tabs-for-php-settings" role="tabpanel"
                                     aria-labelledby="custom-tabs-for-php-settings-tab">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <p>Cloudways offersbasicandadvanced options to configure PHP settings. To set the advanced options, you can use the editor below.
                                                    The allowed directives are php_flag, php_admin_flag, php_value and php_admin_value.</p>

                                                <div class="col-md-12">
                                                    <textarea class="form-control" rows="15x`x">
;php_admin_flag[log_errors] = on&#01;
;php_admin_value[memory_limit] = 32M&#013;
;php_admin_value[max_execution_time] = 120&#013;
;php_admin_value[date.timezone] = Europe/Berlin&#013;
;php_admin_value[max_input_time] = 300&#013;
;php_admin_value[post_max_size] = 25M&#013;
;php_admin_value[upload_max_filesize] = 20M&#013;
;php_admin_value[max_input_vars] = 3000&#013;
;php_admin_value[max_file_uploads] = 20&#013;
;php_admin_value[display_errors] = off&#013;
                                                    </textarea>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-for-varnish-settings" role="tabpanel"
                                     aria-labelledby="custom-tabs-for-varnish-settings-tab">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button class="btn btn-info text-uppercase addVarnishRule">Add new rule</button>
                                                </div>

                                                <div class="col-md-12">
                                                    <table class="w-100 mt-3">
                                                        <thead class="font-weight-bold bg-gray">
                                                        <tr>
                                                            <td class="p-2">Page Requests</td>
                                                            <td class="p-2">Request Count</td>
                                                            <td class="p-2">Max Time
                                                                <small>(in sec)</small>
                                                            </td>
                                                            <td class="p-2">Avg. Time
                                                                <small>(in sec)</small>
                                                            </td>
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
                                <div class="tab-pane fade" id="custom-tabs-for-status-codes" role="tabpanel"
                                     aria-labelledby="custom-tabs-for-status-codes-tab">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-8"><span class="text-uppercase"><b>WEB REQUEST STATUS CODES</b></span><a
                                                            href="#"><i class="fa fa-redo ml-2"></i></a></div>
                                                <div class="col-md-4">
                                                    <select class="form-control border-bottom">
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
        <div class="card-footer"></div>
    </div>
</div>


<!-- Access log content -->
<div id="access_log_content" style="display:none;">
    <div class="card  card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title text-uppercase">ACCESS LOGS</h3>

            <!--<div class="card-tools">
               <a href="create-huddle.php" class="btn btn-primary">START A NEW APPLICATION</a>
            </div>-->
        </div>

        <div class="card-body">
            <p>Analyzing logs is essential to understand web requests, the status of requests, visitors’ IP, and viewed
                pages and user-agents, etc.</p>
            <p>This section presents logs of Apache (for dynamic requests such as PHP requests), NGINX (for static
                assets such as images/JS/CSS), and PHP (detailed PHP process information such as files/routes, CPU and
                memory consumption).</p>

            <div class="row mt-5">
                <div class="col-12">
                    <div class="card card-primary card-outline card-outline-tabs">
                        <div class="card-header p-0 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-for-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active text-uppercase" id="custom-tabs-for-apache-tab"
                                       data-toggle="pill" href="#custom-tabs-for-apache" role="tab"
                                       aria-controls="custom-tabs-for-apache" aria-selected="true">Apache</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" id="custom-tabs-for-nginx-tab" data-toggle="pill"
                                       href="#custom-tabs-for-nginx" role="tab" aria-controls="custom-tabs-for-nginx"
                                       aria-selected="false">Nginx</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" id="custom-tabs-for-accesslog-php-tab"
                                       data-toggle="pill" href="#custom-tabs-for-accesslog-php" role="tab"
                                       aria-controls="custom-tabs-for-accesslog-php" aria-selected="false">php</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-for-tabContent">
                                <div class="tab-pane fade show active" id="custom-tabs-for-apache" role="tabpanel"
                                     aria-labelledby="custom-tabs-for-apache-tab">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-7 mb-3"><span
                                                            class="text-uppercase"><b>APACHE LOGS</b></span></div>
                                                <div class="col-md-5 mb-3">
                                                    <form action="" class="w-75 float-left">
                                                        <input type="text"
                                                               class="form-control float-left w-75 border-radius-none"
                                                               placeholder="Search" name="search">
                                                        <button type="submit" class="float-left search_btn"><i
                                                                    class="fa fa-search"></i></button>
                                                    </form>
                                                    <a href="" class="float-left font-25"><i
                                                                class="fa fa-filter mr-3"></i> </a>
                                                    <a href="" class="float-left font-25"><i class="fa fa-redo"></i>
                                                    </a>

                                                </div>
                                                <div class="col-md-12 log-container-tab border">
                                                    <p class="bg-gray p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25
                                                        +0000] "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0
                                                        (X11; Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101
                                                        Firefox/62.0"</p>
                                                    <p class="p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25 +0000]
                                                        "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0 (X11;
                                                        Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101 Firefox/62.0"</p>
                                                    <p class="bg-gray p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25
                                                        +0000] "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0
                                                        (X11; Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101
                                                        Firefox/62.0"</p>
                                                    <p class="p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25 +0000]
                                                        "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0 (X11;
                                                        Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101 Firefox/62.0"</p>
                                                    <p class="bg-gray p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25
                                                        +0000] "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0
                                                        (X11; Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101
                                                        Firefox/62.0"</p>
                                                    <p class="p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25 +0000]
                                                        "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0 (X11;
                                                        Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101 Firefox/62.0"</p>
                                                    <p class="bg-gray p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25
                                                        +0000] "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0
                                                        (X11; Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101
                                                        Firefox/62.0"</p>
                                                    <p class="p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25 +0000]
                                                        "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0 (X11;
                                                        Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101 Firefox/62.0"</p>
                                                    <p class="bg-gray p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25
                                                        +0000] "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0
                                                        (X11; Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101
                                                        Firefox/62.0"</p>
                                                    <p class="p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25 +0000]
                                                        "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0 (X11;
                                                        Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101 Firefox/62.0"</p>
                                                    <p class="bg-gray p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25
                                                        +0000] "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0
                                                        (X11; Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101
                                                        Firefox/62.0"</p>
                                                    <p class="p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25 +0000]
                                                        "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0 (X11;
                                                        Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101 Firefox/62.0"</p>
                                                    <p class="bg-gray p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25
                                                        +0000] "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0
                                                        (X11; Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101
                                                        Firefox/62.0"</p>
                                                    <p class="p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25 +0000]
                                                        "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0 (X11;
                                                        Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101 Firefox/62.0"</p>
                                                    <p class="bg-gray p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25
                                                        +0000] "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0
                                                        (X11; Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101
                                                        Firefox/62.0"</p>
                                                    <p class="p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25 +0000]
                                                        "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0 (X11;
                                                        Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101 Firefox/62.0"</p>
                                                    <p class="bg-gray p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25
                                                        +0000] "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0
                                                        (X11; Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101
                                                        Firefox/62.0"</p>
                                                    <p class="p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25 +0000]
                                                        "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0 (X11;
                                                        Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101 Firefox/62.0"</p>
                                                    <p class="bg-gray p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25
                                                        +0000] "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0
                                                        (X11; Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101
                                                        Firefox/62.0"</p>
                                                </div>
                                                <small class="w-100 text-right">Showing the recent 1000 log entries. For
                                                    full logs use <a href="javascript:void(0)">SSH/SFTP</a>.
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="custom-tabs-for-nginx" role="tabpanel"
                                     aria-labelledby="custom-tabs-for-nginx-tab">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-7 mb-3"><span
                                                            class="text-uppercase"><b>nginx LOGS</b></span></div>
                                                <div class="col-md-5 mb-3">
                                                    <form action="" class="w-75 float-left">
                                                        <input type="text"
                                                               class="form-control float-left w-75 border-radius-none"
                                                               placeholder="Search" name="search">
                                                        <button type="submit" class="float-left search_btn"><i
                                                                    class="fa fa-search"></i></button>
                                                    </form>
                                                    <a href="" class="float-left font-25"><i
                                                                class="fa fa-filter mr-3"></i> </a>
                                                    <a href="" class="float-left font-25"><i class="fa fa-redo"></i>
                                                    </a>

                                                </div>
                                                <div class="col-md-12 log-container-tab border">
                                                    <p class="bg-gray p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25
                                                        +0000] "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0
                                                        (X11; Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101
                                                        Firefox/62.0"</p>
                                                    <p class="p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25 +0000]
                                                        "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0 (X11;
                                                        Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101 Firefox/62.0"</p>
                                                    <p class="bg-gray p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25
                                                        +0000] "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0
                                                        (X11; Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101
                                                        Firefox/62.0"</p>
                                                    <p class="p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25 +0000]
                                                        "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0 (X11;
                                                        Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101 Firefox/62.0"</p>
                                                    <p class="bg-gray p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25
                                                        +0000] "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0
                                                        (X11; Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101
                                                        Firefox/62.0"</p>
                                                    <p class="p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25 +0000]
                                                        "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0 (X11;
                                                        Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101 Firefox/62.0"</p>
                                                    <p class="bg-gray p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25
                                                        +0000] "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0
                                                        (X11; Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101
                                                        Firefox/62.0"</p>
                                                    <p class="p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25 +0000]
                                                        "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0 (X11;
                                                        Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101 Firefox/62.0"</p>
                                                    <p class="bg-gray p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25
                                                        +0000] "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0
                                                        (X11; Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101
                                                        Firefox/62.0"</p>
                                                    <p class="p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25 +0000]
                                                        "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0 (X11;
                                                        Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101 Firefox/62.0"</p>
                                                    <p class="bg-gray p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25
                                                        +0000] "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0
                                                        (X11; Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101
                                                        Firefox/62.0"</p>
                                                    <p class="p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25 +0000]
                                                        "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0 (X11;
                                                        Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101 Firefox/62.0"</p>
                                                    <p class="bg-gray p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25
                                                        +0000] "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0
                                                        (X11; Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101
                                                        Firefox/62.0"</p>
                                                    <p class="p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25 +0000]
                                                        "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0 (X11;
                                                        Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101 Firefox/62.0"</p>
                                                    <p class="bg-gray p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25
                                                        +0000] "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0
                                                        (X11; Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101
                                                        Firefox/62.0"</p>
                                                    <p class="p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25 +0000]
                                                        "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0 (X11;
                                                        Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101 Firefox/62.0"</p>
                                                    <p class="bg-gray p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25
                                                        +0000] "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0
                                                        (X11; Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101
                                                        Firefox/62.0"</p>
                                                    <p class="p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25 +0000]
                                                        "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0 (X11;
                                                        Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101 Firefox/62.0"</p>
                                                    <p class="bg-gray p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25
                                                        +0000] "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0
                                                        (X11; Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101
                                                        Firefox/62.0"</p>
                                                </div>
                                                <small class="w-100 text-right">Showing the recent 1000 log entries. For
                                                    full logs use <a href="javascript:void(0)">SSH/SFTP</a>.
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-for-accesslog-php" role="tabpanel"
                                     aria-labelledby="custom-tabs-for-accesslog-php-tab">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-7 mb-3"><span class="text-uppercase"><b>php LOGS</b></span>
                                                </div>
                                                <div class="col-md-5 mb-3">
                                                    <form action="" class="w-75 float-left">
                                                        <input type="text"
                                                               class="form-control float-left w-75 border-radius-none"
                                                               placeholder="Search" name="search">
                                                        <button type="submit" class="float-left search_btn"><i
                                                                    class="fa fa-search"></i></button>
                                                    </form>
                                                    <a href="" class="float-left font-25"><i
                                                                class="fa fa-filter mr-3"></i> </a>
                                                    <a href="" class="float-left font-25"><i class="fa fa-redo"></i>
                                                    </a>

                                                </div>
                                                <div class="col-md-12 log-container-tab border">
                                                    <p class="bg-gray p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25
                                                        +0000] "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0
                                                        (X11; Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101
                                                        Firefox/62.0"</p>
                                                    <p class="p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25 +0000]
                                                        "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0 (X11;
                                                        Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101 Firefox/62.0"</p>
                                                    <p class="bg-gray p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25
                                                        +0000] "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0
                                                        (X11; Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101
                                                        Firefox/62.0"</p>
                                                    <p class="p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25 +0000]
                                                        "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0 (X11;
                                                        Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101 Firefox/62.0"</p>
                                                    <p class="bg-gray p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25
                                                        +0000] "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0
                                                        (X11; Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101
                                                        Firefox/62.0"</p>
                                                    <p class="p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25 +0000]
                                                        "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0 (X11;
                                                        Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101 Firefox/62.0"</p>
                                                    <p class="bg-gray p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25
                                                        +0000] "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0
                                                        (X11; Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101
                                                        Firefox/62.0"</p>
                                                    <p class="p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25 +0000]
                                                        "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0 (X11;
                                                        Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101 Firefox/62.0"</p>
                                                    <p class="bg-gray p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25
                                                        +0000] "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0
                                                        (X11; Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101
                                                        Firefox/62.0"</p>
                                                    <p class="p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25 +0000]
                                                        "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0 (X11;
                                                        Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101 Firefox/62.0"</p>
                                                    <p class="bg-gray p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25
                                                        +0000] "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0
                                                        (X11; Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101
                                                        Firefox/62.0"</p>
                                                    <p class="p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25 +0000]
                                                        "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0 (X11;
                                                        Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101 Firefox/62.0"</p>
                                                    <p class="bg-gray p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25
                                                        +0000] "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0
                                                        (X11; Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101
                                                        Firefox/62.0"</p>
                                                    <p class="p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25 +0000]
                                                        "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0 (X11;
                                                        Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101 Firefox/62.0"</p>
                                                    <p class="bg-gray p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25
                                                        +0000] "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0
                                                        (X11; Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101
                                                        Firefox/62.0"</p>
                                                    <p class="p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25 +0000]
                                                        "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0 (X11;
                                                        Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101 Firefox/62.0"</p>
                                                    <p class="bg-gray p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25
                                                        +0000] "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0
                                                        (X11; Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101
                                                        Firefox/62.0"</p>
                                                    <p class="p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25 +0000]
                                                        "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0 (X11;
                                                        Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101 Firefox/62.0"</p>
                                                    <p class="bg-gray p-2 m-0">162.158.167.28 - - [07/Aug/2020:07:51:25
                                                        +0000] "POST /xmlrpc.php HTTP/1.0" 200 441 "-" "Mozill a/5.0
                                                        (X11; Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101
                                                        Firefox/62.0"</p>
                                                </div>
                                                <small class="w-100 text-right">Showing the recent 1000 log entries. For
                                                    full logs use <a href="javascript:void(0)">SSH/SFTP</a>.
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-for-status-codes" role="tabpanel"
                                     aria-labelledby="custom-tabs-for-status-codes-tab">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-8"><span class="text-uppercase"><b>WEB REQUEST STATUS CODES</b></span><a
                                                            href="#"><i class="fa fa-redo ml-2"></i></a></div>
                                                <div class="col-md-4">
                                                    <select class="form-control border-bottom">
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


<!-- Error log content -->
<div id="error_log_content" style="display:none;">
    <div class="card  card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title text-uppercase">error LOGS</h3>

            <!--<div class="card-tools">
               <a href="create-huddle.php" class="btn btn-primary">START A NEW APPLICATION</a>
            </div>-->
        </div>

        <div class="card-body">
            <p>Analyzing logs is essential to understand web requests, the status of requests, visitors’ IP, and viewed
                pages and user-agents, etc.</p>
            <p>This section presents logs of Apache (for dynamic requests such as PHP requests), NGINX (for static
                assets such as images/JS/CSS), and PHP (detailed PHP process information such as files/routes, CPU and
                memory consumption).</p>

            <div class="row mt-5">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-7 mb-3"><span class="text-uppercase"><b>apache error LOGS</b></span>
                                </div>
                                <div class="col-md-5 mb-3">
                                    <form action="" class="w-75 float-left">
                                        <input type="text" class="form-control float-left w-75 border-radius-none"
                                               placeholder="Search" name="search">
                                        <button type="submit" class="float-left search_btn"><i class="fa fa-search"></i>
                                        </button>
                                    </form>
                                    <a href="" class="float-left font-25"><i class="fa fa-filter mr-3"></i> </a>
                                    <a href="" class="float-left font-25"><i class="fa fa-redo"></i> </a>

                                </div>
                                <div class="col-md-12 log-container-tab border">
                                    <p class="bg-gray p-2 m-0">[Sat Aug 01 13:35:32.563606 2020] [proxy_fcgi:error] [pid
                                        20004] [client 141.101.97.56:48030] AH01071: Got error 'PHP message: PHP Fatal
                                        error: Class 'WP_Customize_Control' not found in
                                        /home/381373.cloudwaysapps.com/nygetsxnum/public_html/wp-includes/customize/class-wp-widget-form-customize-control.php
                                        on line 17\n', referer: http://site.ru</p>
                                    <p class="p-2 m-0">[Sat Aug 01 13:35:32.563606 2020] [proxy_fcgi:error] [pid 20004]
                                        [client 141.101.97.56:48030] AH01071: Got error 'PHP message: PHP Fatal error:
                                        Class 'WP_Customize_Control' not found in
                                        /home/381373.cloudwaysapps.com/nygetsxnum/public_html/wp-includes/customize/class-wp-widget-form-customize-control.php
                                        on line 17\n', referer: http://site.ru</p>
                                    <p class="bg-gray p-2 m-0">[Sat Aug 01 13:35:32.563606 2020] [proxy_fcgi:error] [pid
                                        20004] [client 141.101.97.56:48030] AH01071: Got error 'PHP message: PHP Fatal
                                        error: Class 'WP_Customize_Control' not found in
                                        /home/381373.cloudwaysapps.com/nygetsxnum/public_html/wp-includes/customize/class-wp-widget-form-customize-control.php
                                        on line 17\n', referer: http://site.ru</p>
                                    <p class="p-2 m-0">[Sat Aug 01 13:35:32.563606 2020] [proxy_fcgi:error] [pid 20004]
                                        [client 141.101.97.56:48030] AH01071: Got error 'PHP message: PHP Fatal error:
                                        Class 'WP_Customize_Control' not found in
                                        /home/381373.cloudwaysapps.com/nygetsxnum/public_html/wp-includes/customize/class-wp-widget-form-customize-control.php
                                        on line 17\n', referer: http://site.ru</p>
                                </div>
                                <small class="w-100 text-right">Showing the recent 1000 log entries. For full logs use
                                    <a href="javascript:void(0)">SSH/SFTP</a>.
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer"></div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="showModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                Are you sure you want to change this?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Confirm</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="varnishRuleModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">ADD NEW RULE</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body varnishRuleBody">
                <div class="row">
                    <div class="col-12 form-group">
                        <label class="font-weight-normal">Type <i class="fa fa-info-circle" data-toggle="tooltip" title="You can define Varnish VCL rules for both URL and Cookie Type"></i> </label>
                        <select name="varnish_type" class="form-control border-bottom varnish_type">
                            <option value="0">Url</option>
                            <option value="1">Cookie</option>
                        </select>
                    </div>
                    <div class="col-12 form-group">
                        <label class="font-weight-normal">Method <i class="fa fa-info-circle" data-toggle="tooltip" title="Selecting 'Exclude' will not apply varnish cache to the provided URL or Cookie value. Selecting 'Include' will allow you to force Cookie removal through varnish and make pages/objects cacheable."></i></label>
                        <select name="varnish_method" class="form-control border-bottom varnish_method">
                            <option value="0">Exclude</option>
                        </select>
                    </div>
                    <div class="col-12 form-group">
                        <label class="font-weight-normal">Value <i class="fa fa-info-circle" data-toggle="tooltip" title="For URL type, this field will take relative URL paths only. For Cookie type, cookie names are supported. Regular expressions are also supported. "></i> </label>
                        <input type="text" class="form-control border-bottom varnish_value" name="" placeholder="/index.php">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Confirm</button>
            </div>
        </div>
    </div>
</div>


<div id="additional_domain_name_content" style="display:none;">
    <div class="w-100 domain_name_actions float-left mt-3">
        <span class="float-left pt-1 mt-1">Domain:</span> <input name="domain_name" type="text"
                                                                 class="border-bottom form-control w-50 float-left">
        <span class="float-left pt-1 mt-1 pl-3"><i class="fa fa-check-square"></i> <i
                    class="fa fa-window-close pl-3 delete_additional_domain"></i></span>
    </div>
</div>

<div id="overlay" style="display:none;">
    <div class="spinner"></div>
    <br/>
    Loading...
</div>
<!-- ./wrapper -->


<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="./plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="dist/js/demo.js"></script>

<script src="./plugins/flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="./plugins/flot-old/jquery.flot.resize.min.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="./plugins/flot-old/jquery.flot.pie.min.js"></script>
<script src="./plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="./plugins/sweetalert2/sweetalert2.all.js"></script>
<script src="./plugins/toastr/toastr.min.js"></script>
<script src="./plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>

<!-- Page script -->

<script>
    $(document).ready(function () {

        $(document).on("click", ".toastsDefaultSuccess", function (e) {
            var toastCount = $(document).find('.toast').length;
            if(toastCount == 0){
                $(document).Toasts('create', {
                    class: 'bg-success',
                    title: 'Toast Title',
                    subtitle: 'Subtitle',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            }
        });

        $(document).on("click", ".addVarnishRule", function (e) {
            $('#varnishRuleModal').modal('show');
        });

        $(document).on("change", ".varnish_type", function (e) {
            var selectedVal = $(this).val();
            if(selectedVal == 0){
                $(".varnish_method option[value='1']").remove();
                $('.varnish_value').attr('placeholder', '/index.php');
            }else{
                $('.varnish_method')
                    .append($("<option></option>")
                        .attr("value", 1)
                        .text('Include'));
                $('.varnish_value').attr('placeholder', 'COOKIE_NAME');
            }
        });




        $(document).on("click", ".add_additional_domain", function (e) {
            var clonedData = $('#additional_domain_name_content .domain_name_actions').clone();
            $("#additional_domain_name_container").append(clonedData);

        });

        $(document).on("click", ".delete_additional_domain", function (e) {
            var divCount = $("#additional_domain_name_container").find('.domain_name_actions').length;
            $(this).closest('.domain_name_actions').remove();
        });
    });

    $("#access_details").click(function (e) {

        $("#main_content").html($("#access_details_content").html());

        var settings = {
            "url": "system/application.php",
            "method": "GET",
            "timeout": 0,
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.token
            },
            "data": {"id": localStorage.id}

        };

        $.ajax(settings).done(function (response) {

                var response = JSON.parse(response);
                var tmp = JSON.parse(response.data.wpinfo);
                $("#wpurl").text('http://' + response.data.ip + '/wp-admin');
                $("#dbpass").text(tmp.pw);


            }
        );


    });

    jQuery(document).on('change', '.cron_setting_options', function (e) {
        var selectedOption = jQuery(this).val();
        setCronInputFieldsValues(selectedOption);
    });

    // jQuery(document).on('click', '.save_cron_btn', function () {
    //     alert();
    jQuery('#cron_data_form').validate({
        rules: {
            minutes: {
                required: true,
            },
            hours: {
                required: true,
            },
            days: {
                required: true
            },
            weeks: {
                required: true
            },
            month: {
                required: true
            },
            cron_name: {
                required: true
            }
        },
        messages: {
            minutes: {
                required: "Field Required!"
            },
            hours: {
                required: "Field Required!"
            },
            days: {
                required: "Field Required!"
            },
            weeks: {
                required: "Field Required!"
            },
            month: {
                required: "Field Required!"
            },
            cron_name: {
                required: "Field Required!"
            }
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('#cron_data_form .form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            jQuery(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            jQuery(element).removeClass('is-invalid');
        },
        submitHandler: function () {
            var data = jQuery('#cron_data_form').serializeArray();
            data.push({name: 'action_type', value: 'create'});
            var settings = {
                "url": "system/CronActions.php",
                "method": "POST",
                "timeout": 0,
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.token
                },
                "data": data
            };
            $('#overlay').show();
            $.ajax(settings).done(function (response) {
                var response = JSON.parse(response);
                $('#cron_job_modal').modal('hide');
                $("#cron_management_content .crons_row_container").html(response.cronJobsHTML);
                $("#main_content").html($("#cron_management_content").html());
                $('#overlay').hide();
                Swal.fire(
                    'Saved!',
                    'Cron data has been saved.',
                    'success'
                )
            });
        }
    });
    //});


    $("#disk_usage").click(function (e) {
        //$("#access_details_content").css('display','none');
        $("#main_content").html($("#disk_usage_details_content").html());

        var settings = {
            "url": "system/disk.php",
            "method": "GET",
            "timeout": 0,
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.token
            },

            "data": {"id": localStorage.id}

        };


        $.ajax(settings).done(function (response) {

            var response = JSON.parse(response);

            $("#total_fs").html('<b>' + response.disk_data.total + 'MB</b>');
            $("#total_dbs").html('<b>' + response.db_data.total_size + '</b>');

            for (var i = 0; i < response.disk_data.message.length; i++) {

                if (response.disk_data.message[i].folder != "") {

                    $("#files_list").append("<div class='row'><div class='col-3'><p>" + response.disk_data.message[i].folder + "</div><div class='col-3'><p class='text-right'>" + response.disk_data.message[i].size + "</p></div></div></p>");
                }
            }

            for (var i = 0; i < response.db_data.tables.length; i++) {
                $("#db_list").append("<div class='row'><div class='col-3'><p>" + response.db_data.tables[i].table_name + "</div><div class='col-3'><p class='text-right'>" + response.db_data.tables[i].size + "</p></div></div></p>");
            }


        });


    });


    $("#traffic_link").click(function (e) {
        $("#main_content").html($("#traffic_content").html());


        var settings = {
            "url": "http://localhost:5000/",
            "method": "GET",
            "timeout": 0,
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.token
            }

        };


        $.ajax(settings).done(function (response) {

            var response = JSON.parse(response);


            for (var i = 0; i < response.urls.length; i++) {

                var tmp = response.urls[i].url.split(',');

                $("#url_list").append('<tr><td class="p-2">' + tmp[0] + '</td><td class="p-2">2</td><td class="p-2">' + response.urls[i].count + '</td></tr>');

                if (parseInt(tmp[1]) > 0) {
                    $("#requested_page").append(' <tr><td class="p-2">' + tmp[0] + '</td><td class="p-2">' + tmp[1] + 'ms</td><td class="p-2">' + response.urls[i].count + '</td></tr>');
                }

            }
            for (var i = 0; i < response.data.length; i++) {
                $("#ip_list").append('<tr><td class="p-2">' + response.data[i].ip + '</td><td class="p-2">2</td><td class="p-2">' + response.data[i].count + '</td></tr>');
            }
            //asdasd

            //asdasd

            for (var i = 0; i < response.urls.length; i++) {
                $("#url_list").append('<tr><td class="p-2">' + response.urls[i].url + '</td><td class="p-2">2</td><td class="p-2">' + response.urls[i].count + '</td></tr>');
            }


            for (var i = 0; i < response.status.length; i++) {


                $("#status_list").append('<tr><td class="p-2">' + response.status[i].status + '</td><td class="p-2">2</td><td class="p-2">' + response.status[i].count + '</td></tr>');
            }

        });


    });


    $("#php_link").click(function (e) {
        $("#main_content").html($("#php_content").html());

    });

    $("#mysql_link").click(function (e) {
        $("#main_content").html($("#mysql_content").html());

        var settings = {
            "url": "system/mysql.php",
            "method": "GET",
            "timeout": 0,
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.token
            }

        };


        $.ajax(settings).done(function (response) {

            var response = JSON.parse(response);
            $("#active_connections").text("Active Connections: " + response.Threads_connected);
        });


    });
    $(document).on("click", ".delete_cron", function (e) {
        Swal.fire({
            title: 'Are you sure?',
            text: 'You will not be able to recover this cron!',
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, keep it'
        }).then((result) => {
            if (result.value) {
                var cronId = $(this).attr('data-cron-id');
                var dataToSend = 'cron_id='+cronId+'&action_type=delete';

                var settings = {
                    "url": "system/CronActions.php",
                    "method": "POST",
                    "timeout": 0,
                    "headers": {
                        "Content-Type": "application/x-www-form-urlencoded",
                        "Authorization": "Bearer " + localStorage.token
                    },
                    "data": dataToSend

                };


                $.ajax(settings).done(function (response) {
                    var response = JSON.parse(response);
                    if(response.status == 'success'){
                        Swal.fire(
                            'Deleted!',
                            'Your cron has been deleted.',
                            'success'
                        );
                        $("#cron_management_content .crons_row_container").html(response.cronJobsHTML);
                        $("#main_content").html($("#cron_management_content").html());
                        $('#overlay').hide();
                    }else{
                        Swal.fire(
                            'Deleted!',
                            response.msg,
                            'success'
                        )
                    }

                });

                // For more information about handling dismissals please visit
                // https://sweetalert2.github.io/#handling-dismissals
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                Swal.fire(
                    'Cancelled',
                    'Your cron is safe :)',
                    'error'
                )
            }
        });
    });

    $(document).on("click", ".edit_cron", function (e) {
        var cronId = $(this).attr('data-cron-id');
        var actionType = 'editCron';

        var dataToSend = 'cron_id='+cronId+'&action_type='+ actionType;

        var settings = {
            "url": "system/CronActions.php",
            "method": "POST",
            "timeout": 0,
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.token
            },
            "data": dataToSend

        };


        $.ajax(settings).done(function (response) {
            var response = JSON.parse(response);

            $('#cron_data_form').find('select.cron_setting_options option[value="'+response.cron.cron_option+'"]').prop('selected', true);
            $('#cron_data_form').find('.cron_db_id').val(response.cron.id);
            $('#cron_data_form').find('.update_create').val(1);
            $('#cron_data_form').find('.minutes').val(response.cron.minutes);
            $('#cron_data_form').find('.minutes').val(response.cron.minutes);
            $('#cron_data_form').find('.hours').val(response.cron.hours);
            $('#cron_data_form').find('.days').val(response.cron.days);
            $('#cron_data_form').find('.month').val(response.cron.month);
            $('#cron_data_form').find('.week').val(response.cron.week);
            $('#cron_data_form').find('.cron_name').val(response.cron.command);
            $('#cron_data_form').find('select.cron_name option[value="'+response.cron.cron_type+'"]').prop('selected', true);

            $('#cron_job_modal').modal('show');
        });


    });


    $("#running_crons_link").click(function (e) {
        $("#main_content").html($("#running_crons_content").html());
        $('[data-toggle="tooltip"]').tooltip();

    });
    $("#access_log_link").click(function (e) {
        $("#main_content").html($("#access_log_content").html());
        $('[data-toggle="tooltip"]').tooltip();

    });

    $("#error_log_link").click(function (e) {
        $("#main_content").html($("#error_log_content").html());
        $('[data-toggle="tooltip"]').tooltip();

    });

    $("#backup_restore_link").click(function (e) {
        $("#main_content").html($("#backup_restore_content").html());
        $('[data-toggle="tooltip"]').tooltip();

    });
    var application_settings_link_clicked = false;
    // Application Settings section
    $("#application_settings_link").click(function (e) {
        $("#main_content").html($("#application_settings_content").html());
        if(application_settings_link_clicked == false){
            $("input[data-bootstrap-switch]").each(function(){
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
                application_settings_link_clicked = true;
            });
        }
        $('[data-toggle="tooltip"]').tooltip();
    });




    // var id = '';
    // $("input[data-bootstrap-switch]").on('switchChange.bootstrapSwitch', function (e, data) {
    //     id = $(this).attr('id');
    //     $("#showModal .modal-footer .btn-primary").attr('id', id);
    //     $('#'+id).bootstrapSwitch('state', !data, true);
    //     $('#showModal').modal({
    //         backdrop: 'static',
    //         keyboard: false
    //     });
    //
    // });

    // $(".modal-footer .btn-primary").click(function(){
    //     $('#'+id).bootstrapSwitch('toggleState', true, true);
    //     $('#showModal').modal('hide')
    // });


    $("#cron_job_link").click(function (e) {
        var settings = {
            "url": "system/CronActions.php",
            "method": "GET",
            "timeout": 0,
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.token
            },

            "data": {"id": localStorage.id}

        };

        $('#overlay').show();
        $.ajax(settings).done(function (response) {
            var response = JSON.parse(response);
            $("#cron_management_content .crons_row_container").html(response.cronJobsHTML);
            $("#main_content").html($("#cron_management_content").html());
            $('#overlay').hide();
        });

    });


    $("#monitoring").click(function (e) {
        //$("#access_details_content").css('display','none');
        $("#main_content").html($("#monitoring_content").html());

    });

    $("#domain_management_link").click(function (e) {
        //$("#access_details_content").css('display','none');
        $("#main_content").html($("#domain_management_content").html());

    });


    if (localStorage.token == undefined) {
        //  window.location="login.php";
    }


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

    function setCronInputFieldsValues($option) {
        var $option = parseInt($option);
        switch ($option) {
            case 1 :
                jQuery('form#cron_data_form input.minutes').val('*');
                jQuery('form#cron_data_form input.hours').val('*');
                jQuery('form#cron_data_form input.days').val('*');
                jQuery('form#cron_data_form input.month').val('*');
                jQuery('form#cron_data_form input.week').val('*');
                break;
            case 2 :
                jQuery('form#cron_data_form input.minutes').val('*/5');
                jQuery('form#cron_data_form input.hours').val('*');
                jQuery('form#cron_data_form input.days').val('*');
                jQuery('form#cron_data_form input.month').val('*');
                jQuery('form#cron_data_form input.week').val('*');
                break;
            case 3 :
                jQuery('form#cron_data_form input.minutes').val('0,30');
                jQuery('form#cron_data_form input.hours').val('*');
                jQuery('form#cron_data_form input.days').val('*');
                jQuery('form#cron_data_form input.month').val('*');
                jQuery('form#cron_data_form input.week').val('*');
                break;
            case 4 :
                jQuery('form#cron_data_form input.minutes').val('0');
                jQuery('form#cron_data_form input.hours').val('*');
                jQuery('form#cron_data_form input.days').val('*');
                jQuery('form#cron_data_form input.month').val('*');
                jQuery('form#cron_data_form input.week').val('*');
                break;
            case 5 :
                jQuery('form#cron_data_form input.minutes').val('0');
                jQuery('form#cron_data_form input.hours').val('0,12');
                jQuery('form#cron_data_form input.days').val('*');
                jQuery('form#cron_data_form input.month').val('*');
                jQuery('form#cron_data_form input.week').val('*');
                break;
            case 6 :
                jQuery('form#cron_data_form input.minutes').val('0');
                jQuery('form#cron_data_form input.hours').val('0');
                jQuery('form#cron_data_form input.days').val('*');
                jQuery('form#cron_data_form input.month').val('*');
                jQuery('form#cron_data_form input.week').val('*');
                break;
            case 7 :
                jQuery('form#cron_data_form input.minutes').val('0');
                jQuery('form#cron_data_form input.hours').val('0');
                jQuery('form#cron_data_form input.days').val('*');
                jQuery('form#cron_data_form input.month').val('*');
                jQuery('form#cron_data_form input.week').val('0');
                break;
            case 8 :
                jQuery('form#cron_data_form input.minutes').val('0');
                jQuery('form#cron_data_form input.hours').val('0');
                jQuery('form#cron_data_form input.days').val('1,15');
                jQuery('form#cron_data_form input.month').val('*');
                jQuery('form#cron_data_form input.week').val('*');
                break;
            case 9 :
                jQuery('form#cron_data_form input.minutes').val('0');
                jQuery('form#cron_data_form input.hours').val('0');
                jQuery('form#cron_data_form input.days').val('1');
                jQuery('form#cron_data_form input.month').val('*');
                jQuery('form#cron_data_form input.week').val('*');
                break;
            case 10 :
                jQuery('form#cron_data_form input.minutes').val('0');
                jQuery('form#cron_data_form input.hours').val('0');
                jQuery('form#cron_data_form input.days').val('1');
                jQuery('form#cron_data_form input.month').val('1');
                jQuery('form#cron_data_form input.week').val('*');
                break;
            default:
                jQuery('form#cron_data_form input.minutes').val('');
                jQuery('form#cron_data_form input.hours').val('');
                jQuery('form#cron_data_form input.days').val('');
                jQuery('form#cron_data_form input.month').val('');
                jQuery('form#cron_data_form input.week').val('');
        }
    }
</script>


</body>
</html>
