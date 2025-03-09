
        <?php
            if(isset($_POST['submit'])){
                session_start();
                include 'db.php';

                $user = $_POST['user'];
                $pass = $_POST['pass'];

                $cek = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username = '".$user."' AND password = '".($pass)."'");
                if(mysqli_num_rows($cek) >0){
                    $d = mysqli_fetch_object($cek);
                    $_SESSION['status_login'] = true;
                    $_SESSION['a_global'] = $d;
                    $_SESSION['id'] = $d->id_admin;
                    $_SESSION['admin_name'] = $user;

                    echo '<script>window.location= "dashboard.php"</script>';
                }else{
                    echo '<script>alert("username atau password anda salah")</script>';
                }
            }
        ?>
        <!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>IBNU SINA | Medical Farmasi Store Web (Tugas LSP Aktavan)</title>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='' rel='stylesheet'>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap);

        body {
            background: #f5f5f5;
        }

        @media only screen and (max-width: 767px) {
            .hide-on-mobile {
                display: none;
            }
        }

        .login-box {
            background: url(https://i.imgur.com/73BxBuI.png);
            background-size: cover;
            background-position: center;
            padding: 50px;
            margin: 50px auto;
            min-height: 700px;
            -webkit-box-shadow: 0 2px 60px -5px rgba(0, 0, 0, 0.1);
            box-shadow: 0 2px 60px -5px rgba(0, 0, 0, 0.1);
        }

        .logo {
            font-family: "Script MT";
            font-size: 54px;
            text-align: center;
            color: #888888;
            margin-bottom: 50px;
        }

        .logo .logo-font {
            color: #3BC3FF;
        }

        @media only screen and (max-width: 767px) {
            .logo {
                font-size: 34px;
            }
        }

        .header-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .login-form {
            max-width: 300px;
            margin: 0 auto;
        }

        .login-form .form-control {
            border-radius: 0;
            margin-bottom: 30px;
        }

        .login-form .form-group {
            position: relative;
        }

        .login-form .form-group .forgot-password {
            position: absolute;
            top: 6px;
            right: 15px;
        }

        .login-form .btn {
            border-radius: 0;
            -webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .login-form .btn.btn-primary {
            background: #3BC3FF;
            border-color: #31c0ff;
        }

        .slider-feature-card {
            background: #fff;
            max-width: 280px;
            margin: 0 auto;
            padding: 30px;
            text-align: center;
            -webkit-box-shadow: 0 2px 25px -3px rgba(0, 0, 0, 0.1);
            box-shadow: 0 2px 25px -3px rgba(0, 0, 0, 0.1);
        }

        .slider-feature-card img {
            height: 80px;
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .slider-feature-card h3,
        .slider-feature-card p {
            margin-bottom: 30px;
        }

        .carousel-indicators {
            bottom: -50px;
        }

        .carousel-indicators li {
            cursor: pointer;
        }
    </style>
    <script type='text/javascript' src=''></script>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
</head>

<body oncontextmenu='return false' class='snippet-body'>
    <section class="body">
        <div class="container">
            <div class="login-box">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="logo">
                            <img src="img/logo lsp web crop.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <br>

                        <body id="bg-login">
                            <div class="box-login">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <br>
                                        <h3 class="header-title">LOGIN ADMIN</h3>
                                        <form class="login-form" method="POST" action="">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="user" placeholder="Email or UserName">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="pass" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" name="submit" class="btn btn-primary btn-block" value="LOGIN">
                                            </div>
                                            <div class="form-group">
                                                <div class="text-center"><a href="index.php"type="button" class="btn btn-primary text-white"style="background-color: #00BFFF;color: white;">
        <i class="fa fa-plus" aria-hidden="true"></i>
    </button>Kembali</a></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </body>

</html>
    </div>
</body>
</html>