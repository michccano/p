<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pavarty</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="./dist/css/style.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">

<div class="register-box" style="width: 40%;">
    <div class="register-logo">
        <a href="../../index2.html" class=""><b>Pavarty</a>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <h3 class="login-box-msg">Get Started Absolutely Free</h3>
            <p class="login-with-socialmedia">SignUp Using
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
            <form action="../../index.html" method="post">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="First Name" id="first_name">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="input-group mb-3">
                                <input type="text" id="last_name" class="form-control" placeholder="Last Name">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Email" id="email">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Password" id="password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Retype Password" id="confirm_password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <select class="form-control " id="industry" >
                                <option>I would best describe myself as</option>
                                <option>Digital Agency</option>
                                <option>Ecommerce</option>
                                <option>Other Businesses</option>
                                <option>Blogger</option>
                                <option>Freelance Developer/Designer</option>
                            </select>
                        </div>

                        <div class="col-12 mb-3">
                            <select class="form-control" id="spending">
                                <option>My monthly hosting spending is</option>
                                <option>0 - $50</option>
                                <option>$50 - $250</option>
                                <option>$250 - $1000</option>
                                <option>$1000 - $5000</option>
                                <option>$5000 - above</option>
                            </select>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12  font-weight-lighter"><p><a href="javascript:void(0)">Got a Promo Code?</a> </p></div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                <label for="agreeTerms" class="font-weight-lighter">
                                    I agree to the Parvaty <a href="javascript:void(0)">Terms of Service</a> & <a href="javascript:void(0)">Privacy Policy</a>
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-12">
                            <button type="button" onclick="register()" class="btn btn-primary btn-block text-uppercase mt-2 mb-2">Register</button>
                        </div>
                        <!-- /.col -->

                        <div class="col-12 text-center font-weight-lighter">
                            <p>Already have an account? <a href="javascript:void(0)">Login here</a></p>
                        </div>
                    </div>
            </form>
        </div>
    </div>

</div>
<!-- /.form-box -->
</div><!-- /.card -->
</div>
<!-- /.register-box -->

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

<script>

    function register() {

        var settings = {
            "url": "system/register.php",
            "method": "POST",
            "timeout": 0,
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded"
            },

            "data": {
                "name": $("#first_name").val()+" "+$("#last_name").val(),
                "email": $("#email").val(),
                "password": $("#password").val(),
                "password_confirmation": $("#password_confirmation").val()
            }
        };

        $.ajax(settings).done(function (response) {
            Swal.fire(
                'Registered',
                '',
                'success'
            ).then(function () {
                window.location = "login.php";
            }, function (dismiss) {
                return false;
            });

            $('.swal2-container').css({'z-index': '555555'});


        });

    }
</script>
</body>
</html>
