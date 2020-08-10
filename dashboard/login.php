<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../../dist/css/style.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition">
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 login-page-slider-container">
                <div id="login-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#login-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#login-carousel" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active pt-5">
                            <h1 class="font-weight-bold w-75 m-auto">Uninterrupted Parvati Service & Support </h1>
                            <p class="w-75  m-auto pt-3">Our commitment towards Our  Customers and Communities During COVID-19</p>
                            <p><img src="../../dist/img/corona-img.png" class="mt-4" alt=""></p>
                            <a href="" class="btn btn-outline-info mt-5">Read More</a>
                        </div>
                        <div class="carousel-item pt-5">
                            <h1 class="font-weight-bold w-75 m-auto">Bot Protection for your Peace of Mind </h1>
                            <p class="w-75 m-auto pt-3">Experience how Bot Protection shields your servers from Web Scraper, Brute Force Login Cracks and DoS Attacks.</p>
                            <p><img src="../../dist/img/bot-protection.png" class="mt-4" alt=""></p>
                            <a href="" class="btn btn-outline-info mt-5">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="login-box m-auto">
                    <div class="login-logo mt-5">
                        <a href="../../index2.html"><b>Parvaty</b></a>
                    </div>
                    <!-- /.login-logo -->
                    <div class="card shadow-none">
                        <div class="card-body login-card-body">
                            <h4 class="login-box-msg ">Hello Again</h4>
                            <p class="login-with-socialmedia">Login With
                                <span class="border ml-2">
                                    <i class="fab fa-linkedin-in"></i>
                                </span>
                                <span class="border">
                                    <i class="fab fa-github"></i>
                                </span>
                                <span class="border">
                                    <i class="fab fa-google-plus-g"></i>
                                </span>
                            </p>
                            <p class="register-divider"><span>OR</span></p>
                            <form action="../../index3.html" method="post">
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control" id="email" placeholder="Email">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-envelope"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control" id="password" placeholder="Password">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- /.col -->
                                    <div class="col-12">
                                        <button type="button" onclick="login()" class="btn btn-primary btn-block text-uppercase">login now</button>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-6">
                                        <p class="mb-1 font-weight-lighter un">
                                            <a href="forgot-password.html"><small><u>Forgot Password?</u></small></a>
                                        </p>
                                    </div>
                                    <div class="col-6">
                                        <p class="mb-0 font-weight-lighter">
                                            <a href="register.html" class="text-center"><small><u>New to Parvaty? SignUp</u></small></a>
                                        </p>
                                    </div>
                                </div>
                            </form>




                        </div>
                        <!-- /.login-card-body -->
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<script>
    function login() {
        var settings = {
            "url": "system/login.php",
            "method": "POST",
            "timeout": 0,
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer 8181eecdf383dc2f28484a441a5ca5c4ef91c9cff6cb94909d0d9c1848e2924c"
            },
            "data": {
                "email": $("#email").val(),
                "password": $("#password").val()
            }
        };

        $.ajax(settings).done(function (response) {
            localStorage.email = $("#email").val();
            // localStorage.token = response.access_token;
            var tmp = JSON.parse(response);

            if (tmp.message == "god") {
                window.location = 'applications.php';
            }

        });
    }

    jQuery(document).ready(function () {
        jQuery('#login-carousel').carousel({
            interval: 5000,
        })
    });

    jQuery('#login-carousel .carousel-item').css('min-height', jQuery( window ).height());

</script>
</body>
</html>
