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
                <a href="./index.html" class="nav-link">
               
                  <p>Traffic</p>

                </a>

              </li>

               <li class="nav-item">
                <a href="./index.html" class="nav-link">
               
                  <p>PHP</p>

                </a>
            

             
              </li>



               <li class="nav-item">
                <a href="./index.html" class="nav-link">
               
                  <p>MySQL</p>

                </a>
            
              </li>

      <li class="nav-item">
                <a href="./index.html" class="nav-link">
               
                  <p>Running Crons</p>

                </a>
            
              </li>

  <li class="nav-item">
                <a href="./index.html" class="nav-link">
               
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
          
          <div id="main_content" class="col-12">







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

                  <div class="card-footer">
                   
                  </div>
                 
                 </div>
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

$("#monitoring").click(function(e){
  //$("#access_details_content").css('display','none');
 $("#main_content").html( $("#monitoring_content").html());

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
