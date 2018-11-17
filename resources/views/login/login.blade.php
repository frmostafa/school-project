<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>سامانه ورود به مدرسه</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-reset.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="{{asset('/js/html5shiv.js')}}"></script>
    <script src="{{asset('/js/respond.min.js')}}"></script>
    <![endif]-->
</head>

  <body class="login-body">

    <div class="container">

      <form class="form-signin" action="">
        <h2 class="form-signin-heading">همین حالا وارد شوید</h2>
        <div class="login-wrap">
            <input type="text" class="form-control" placeholder="نام کاربری" autofocus>
            <input type="password" class="form-control" placeholder="کلمه عبور">
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> مرا به خاطر بسپار
                <span class="pull-right"> <a href="#"> کلمه عبور را فراموش کرده اید؟</a></span>
            </label>
            <button class="btn btn-lg btn-login btn-block" type="submit">ورود</button>
            <p>یا توسط یکی از حسابهای شبکه اجتماعی خود وارد شوید</p>
            <div class="login-social-link">
                <a href="index.html" class="facebook">
                    <i class="icon-facebook"></i>
                    Facebook
                </a>
                <a href="index.html" class="twitter">
                    <i class="icon-twitter"></i>
                    Twitter
                </a>
            </div>

        </div>

      </form>

    </div>


  </body>
</html>
