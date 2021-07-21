<!DOCTYPE html>
<html lang="en" class="fixed accounts sign-in">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>w3apex</title>
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="icon" type="image/png" sizes="192x192" href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <!--BASIC css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="http://localhost/batch/PHP MVC Blog/public/backend/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="http://localhost/batch/PHP MVC Blog/public/backend/vendor/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="http://localhost/batch/PHP MVC Blog/public/backend/vendor/animate.css/animate.css">
    <!--SECTION css-->
    <!-- ========================================================= -->
    <!--TEMPLATE css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="http://localhost/batch/PHP MVC Blog/public/backend/stylesheets/css/style.css">
</head>

<body>
<div class="wrap">
    <!-- page BODY -->
    <!-- ========================================================= -->
    <div class="page-body animated slideInDown">
        <!--LOGO-->
        <div class="logo">
            <img alt="logo" src="http://localhost/batch/PHP MVC Blog/public/backend/images/logo-dark.png" />
        </div>
        <div class="box">
            <!--SIGN IN FORM-->
            <div class="panel mb-none">
                <div class="panel-content bg-scale-0">
                    <form action="<?php echo BASE_URL; ?>/Login/adminLoginAct" method="POST">
                        <div class="form-group mt-md">
                            <span class="input-with-icon">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                                <i class="fa fa-envelope"></i>
                            </span>
                        </div>

                        <div class="form-group">
                            <span class="input-with-icon">
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                <i class="fa fa-key"></i>
                            </span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--BASIC scripts-->
<script src="http://localhost/batch/PHP MVC Blog/public/backend/vendor/jquery/jquery-1.12.3.min.js"></script>
<script src="http://localhost/batch/PHP MVC Blog/public/backend/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="http://localhost/batch/PHP MVC Blog/public/backend/vendor/nano-scroller/nano-scroller.js"></script>
<!--TEMPLATE scripts-->
<!-- ========================================================= -->
<script src="http://localhost/batch/PHP MVC Blog/public/backend/javascripts/template-script.min.js"></script>
<script src="http://localhost/batch/PHP MVC Blog/public/backend/javascripts/template-init.min.js"></script>
<!-- SECTION script and examples-->
<!-- ========================================================= -->
</body>

</html>

