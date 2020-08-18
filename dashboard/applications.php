<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Parvaty Cloud</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./dist/css/adminlte.min.css">
    <link rel="stylesheet" href="./dist/css/style.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-boxed">
<!-- Site wrapper -->
<div class="container-fluid p-0">


    <?php include("navbar.php"); ?>
    <!-- /.navbar -->
    <?php include("sidebar.php"); ?>

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
                    <div class="col-12">
                        <!-- Default box -->
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <div class="col-3 float-left">
                                    <a href="createapplication.php" class="btn btn-primary">START A NEW APPLICATION</a>
                                </div>
                                <div class="float-right">
                                    <i class="fa fa-step-backward"></i>&nbsp;
                                    <i class="fa fa-chevron-left"></i>&nbsp;
                                    <span>1 to 3 of 3 Applications</span>&nbsp;
                                    <i class="fa fa-chevron-right"></i>&nbsp;
                                    <i class="fa fa-step-forward"></i>
                                </div>
                                <div class="col-3 float-right pt-1">
                                    <div class="btn-group pl-3 float-right">
                                        <i class="fas fa-bars" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false"></i>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Name</a>
                                            <a class="dropdown-item" href="#">Created Date</a>
                                            <a class="dropdown-item" href="#">Projects</a>
                                            <a class="dropdown-item" href="#">Servers</a>
                                            <a class="dropdown-item" href="#">Staging</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="col-12 application_page_cards">
                                    <div class="card card-outline">
                                        <div class="card-body">
                                            <div class="row mb-2">
                                                <div class="col-10 application_page_card_info">
                                                    <a href="application.php">
                                                        <div class="row">
                                                            <div class="col-1">
                                                                <img src="./dist/img/wordpress.png" />
                                                            </div>
                                                            <div class="col-11">
                                                                <h6><b>LifeHack</b></h6>
                                                                <p class="m-0">Server: Lifehacks Server</p>
                                                                <p class="m-0">Project: Lifehacks World Conquering</p>
                                                                <p class="mt-3"><small>Created: 12 March, 2020</small></p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-2 text-right application_page_card_actions">
                                                    <a href="" class="pl-3"><i class="fa fa-external-link-square-alt"></i></a>
                                                    <a href="" class="pl-3"><i class="fa fa-user">&nbsp<span class="number_of_users">0</span></i></a>
                                                    <!-- Small button group -->
                                                    <div class="btn-group pl-3 dropleft">
                                                        <i class="fas fa-ellipsis-v" data-toggle="dropdown"
                                                           aria-haspopup="true" aria-expanded="false"></i>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#"><i class="fa fa-trash danger"></i>&nbsp;Delete</a>
                                                            <a class="dropdown-item" href="#"><i class="fa fa-clone info"></i>&nbsp;Clone App/Create Staging</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-outline">
                                        <div class="card-body">
                                            <div class="row mb-2">
                                                <div class="col-10 application_page_card_info">
                                                    <a href="application.php">
                                                        <div class="row">
                                                            <div class="col-1">
                                                                <img src="./dist/img/wordpress.png" />
                                                            </div>
                                                            <div class="col-11">
                                                                <h6><b>Test</b></h6>
                                                                <p class="m-0">Server: Lifehacks Server</p>
                                                                <p class="m-0">Project: Lifehacks World Conquering</p>
                                                                <p class="mt-3"><small>Created: 12 March, 2020</small></p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-2 text-right application_page_card_actions">
                                                    <a href="" class="pl-3"><i class="fa fa-external-link-square-alt"></i></a>
                                                    <a href="" class="pl-3"><i class="fa fa-user">&nbsp<span class="number_of_users">0</span></i></a>
                                                    <div class="btn-group pl-3 dropleft">
                                                        <i class="fas fa-ellipsis-v" data-toggle="dropdown"
                                                           aria-haspopup="true" aria-expanded="false"></i>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#"><i class="fa fa-trash danger"></i>&nbsp;Delete</a>
                                                            <a class="dropdown-item" href="#"><i class="fa fa-clone info"></i>&nbsp;Clone App/Create Staging</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer"></div>
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!--/.direct-chat -->
                </div>
                <!-- /.col -->

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


<!-- Page script -->
<script>

    if (localStorage.token == undefined) {
        //  window.location="login.php";
    }

    var settings = {
        "url": "system/droplet.php",
        "method": "GET",
        "timeout": 0,
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.token
        },

    };


    //asdasd

    $.ajax(settings).done(function (response) {

        var response = JSON.parse(response);

        for (var i = 0; i < response.data.length; i++) {

            $("#huddles").append('<div onclick="goto_app(' + response.data[i].id + ')" class="row"><div class="col-md-12"><!-- DIRECT CHAT --><div class="card direct-chat direct-chat-warning card-primary card-outline"><div class="card-header"><div class="row"><div class="col-9"><h3 class="card-title">' + response.data[i].droplet_name + '</h3></div><div class="col-3"><ul class="navbar-nav ml-auto"><!-- Messages Dropdown Menu --><li class="nav-item dropdown"><a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false"><i class="far fa-comments"></i></a><div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;"><a href="#" class="dropdown-item"><!-- Message Start --><div class="media"><img src="../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle"><div class="media-body"><h3 class="dropdown-item-title">Brad Diesel<span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span></h3><p class="text-sm">Call me whenever you can...</p><p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p></div></div><!-- Message End --></a><div class="dropdown-divider"></div><a href="#" class="dropdown-item"><!-- Message Start --><div class="media"><img src="../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3"><div class="media-body"><h3 class="dropdown-item-title">John Pierce<span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span></h3><p class="text-sm">I got your message bro</p><p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p></div></div><!-- Message End --></a><div class="dropdown-divider"></div><a href="#" class="dropdown-item"><!-- Message Start --><div class="media"><img src="../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3"><div class="media-body"><h3 class="dropdown-item-title">Nora Silvester<span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span></h3><p class="text-sm">The subject goes here</p><p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p></div></div><!-- Message End --></a><div class="dropdown-divider"></div><a href="#" class="dropdown-item dropdown-footer">See All Messages</a></div></li></ul></div></div></div><div class="card-header">sdfsdf</div></div></br></br>');

        }
    });


    function goto_app(id) {
        localStorage.id = id;
        window.location = 'application.php';
    }


    $(function () {
        /*
         * Flot Interactive Chart
         * -----------------------
         */
        // We use an inline data source in the example, usually data would
        // be fetched from a server
        var data = [],
            totalPoints = 100

        function getRandomData() {

            if (data.length > 0) {
                data = data.slice(1)
            }

            // Do a random walk
            while (data.length < totalPoints) {

                var prev = data.length > 0 ? data[data.length - 1] : 50,
                    y = prev + Math.random() * 10 - 5

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
        var realtime = 'on' //If == to on then fetch data every x seconds. else stop fetching
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
            data: sin,
            color: '#3c8dbc'
        }
        var line_data2 = {
            data: cos,
            color: '#00c0ef'
        }
        $.plot('#line-chart', [line_data1, line_data2], {
            grid: {
                hoverable: true,
                borderColor: '#f3f3f3',
                borderWidth: 1,
                tickColor: '#f3f3f3'
            },
            series: {
                shadowSize: 0,
                lines: {
                    show: true
                },
                points: {
                    show: true
                }
            },
            lines: {
                fill: false,
                color: ['#3c8dbc', '#f56954']
            },
            yaxis: {
                show: true
            },
            xaxis: {
                show: true
            }
        })
        //Initialize tooltip on hover
        $('<div class="tooltip-inner" id="line-chart-tooltip"></div>').css({
            position: 'absolute',
            display: 'none',
            opacity: 0.8
        }).appendTo('body')
        $('#line-chart').bind('plothover', function (event, pos, item) {

            if (item) {
                var x = item.datapoint[0].toFixed(2),
                    y = item.datapoint[1].toFixed(2)

                $('#line-chart-tooltip').html(item.series.label + ' of ' + x + ' = ' + y)
                    .css({
                        top: item.pageY + 5,
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
            grid: {
                borderWidth: 0
            },
            series: {
                shadowSize: 0, // Drawing is faster without shadows
                color: '#00c0ef',
                lines: {
                    fill: true //Converts the line chart to area chart
                },
            },
            yaxis: {
                show: false
            },
            xaxis: {
                show: false
            }
        })

        /* END AREA CHART */

        /*
         * BAR CHART
         * ---------
         */

        var bar_data = {
            data: [[1, 10], [2, 8], [3, 4], [4, 13], [5, 17], [6, 9]],
            bars: {show: true}
        }
        $.plot('#bar-chart', [bar_data], {
            grid: {
                borderWidth: 1,
                borderColor: '#f3f3f3',
                tickColor: '#f3f3f3'
            },
            series: {
                bars: {
                    show: true, barWidth: 0.5, align: 'center',
                },
            },
            colors: ['#3c8dbc'],
            xaxis: {
                ticks: [[1, 'January'], [2, 'February'], [3, 'March'], [4, 'April'], [5, 'May'], [6, 'June']]
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
                data: 30,
                color: '#3c8dbc'
            },
            {
                label: 'Series3',
                data: 20,
                color: '#0073b7'
            },
            {
                label: 'Series4',
                data: 50,
                color: '#00c0ef'
            }
        ]
        $.plot('#donut-chart', donutData, {
            series: {
                pie: {
                    show: true,
                    radius: 1,
                    innerRadius: 0.5,
                    label: {
                        show: true,
                        radius: 2 / 3,
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
