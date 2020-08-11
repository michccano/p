<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Parvaty Cloud</title>

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
            <div class="col-sm-6 float-sm-left login-page-fields">
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
            alert(tmp.message);
            if (tmp.message == "god") {
                window.location = 'applications.php';
            }

        });
    }


    jQuery(document).ready(function () {
        jQuery('#login-carousel').carousel({
            interval: 5000,
        });

        var isMobile = false; //initiate as false
        if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)
            || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) {
            isMobile = true;
        }

        if (isMobile == true) {
            jQuery('div.login-page-fields').insertBefore(jQuery('div.login-page-slider-container'));
        }else{
            jQuery('div.login-page-slider-container').insertBefore(jQuery('div.login-page-fields'));
        }
        
        jQuery('#login-carousel .carousel-item').css('min-height', jQuery( window ).height());
    });


</script>
</body>
</html>
