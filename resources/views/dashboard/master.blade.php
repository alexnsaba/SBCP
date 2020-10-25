<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/polygon/admindek/default/animation.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Dec 2019 13:02:24 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>SBCP | @yield('title')</title>


<!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
<meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
<meta name="author" content="colorlib" />
<script src="https://code.highcharts.com/highcharts.js"></script>

<link rel="icon" href="https://colorlib.com/polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="../files/bower_components/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="../files/assets/pages/waves/css/waves.min.css" type="text/css" media="all">

<link rel="stylesheet" type="text/css" href="../files/assets/icon/feather/css/feather.css">

<link rel="stylesheet" type="text/css" href="../files/assets/icon/themify-icons/themify-icons.css">

<link rel="stylesheet" type="text/css" href="../files/bower_components/animate.css/css/animate.css">

<link rel="stylesheet" type="text/css" href="../files/assets/icon/icofont/css/icofont.css">

<link rel="stylesheet" type="text/css" href="../files/assets/icon/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="../files/assets/css/style.css">
<link rel="stylesheet" type="text/css" href="../files/assets/css/pages.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/5ed7aa1b5d.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>



  <script>
    function previewFile(input){
        var file = $("input[type=file]").get(0).files[0];

        if(file){
            var reader = new FileReader();

            reader.onload = function(){
                $("#previewImg").attr("src", reader.result);
            }

            reader.readAsDataURL(file);
        }
    }
</script>
</head>
<body>

<div class="loader-bg">
<div class="loader-bar"></div>
</div>

<div id="pcoded" class="pcoded">
<div class="pcoded-overlay-box"></div>
<div class="pcoded-container navbar-wrapper">

<nav class="navbar header-navbar pcoded-header">
<div class="navbar-wrapper">
<div class="navbar-logo">

<h1 style="color:#f7fafa">SBCP</h1>


<a class="mobile-menu" id="mobile-collapse" href="#!">
<i class="feather icon-menu icon-toggle-right"></i>
</a>
<a class="mobile-options waves-effect waves-light">
<i class="feather icon-more-horizontal"></i>
</a>
</div>
<div class="navbar-container container-fluid">
<ul class="nav-left">
<li class="header-search">
<div class="main-search morphsearch-search">
<div class="input-group">
<span class="input-group-prepend search-close">
<i class="feather icon-x input-group-text"></i>
</span>
<input type="text" class="form-control" placeholder="Enter Keyword">
<span class="input-group-append search-btn">
<i class="feather icon-search input-group-text"></i>
</span>
</div>
</div>
</li>
<li>
<a href="#!" onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:toggleFullScreen()" class="waves-effect waves-light" data-cf-modified-da54ea6e450b9f28d7f87301-="">
<i class="full-screen feather icon-maximize"></i>
</a>
</li>
<li>
  <!--
<h3 style="color:#f7fafa">Smart Breast Cancer Predictor</h3>
-->
</li>
</ul>
<ul class="nav-right">
<li class="header-notification">
<div class="dropdown-primary dropdown">
</div>
</li>

<li class="user-profile header-notification">
<div class="dropdown-primary dropdown">
<div class="dropdown-toggle" data-toggle="dropdown">
<img src="../files/assets/images/alex.png" class="img-radius" alt="User-Profile-Image">
<span>Niyonsaba Alex</span>
<i class="feather icon-chevron-down"></i>
</div>
<ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
<li>
<a href="#!">
<i class="feather icon-settings"></i> Settings
</a>
</li>
<li>
<a href="#">
<i class="feather icon-user"></i> Profile
</a>
</li>
<li>
<a href="#">
<i class="feather icon-lock"></i> Lock Screen
</a>
</li>
<li>
<a href="#">
<i class="feather icon-log-out"></i> Logout
</a>
</li>
</ul>
</div>
</li>
</ul>
</div>
</div>
</nav>

<div class="pcoded-main-container">
<div class="pcoded-wrapper">

<nav class="pcoded-navbar">
<div class="nav-list">
<div class="pcoded-inner-navbar main-menu">

<ul class="pcoded-item pcoded-left-item">
<li class="pcoded-hasmenu active pcoded-trigger">
<a href="Predictions" class="waves-effect waves-dark">
<!-- <i class="feather icon-home"> -->
<span class="pcoded-micon" style="font-size:20pt"><i class="fa fa-stethoscope"></i></span>
<span class="pcoded-mtext" style="font-size:16pt"> &nbsp; Predictions</span>
</a>
</li>
<li class="pcoded-hasmenu active pcoded-trigger">
<a href="Visualisations" class="waves-effect waves-dark">
<span class="pcoded-micon" style="font-size:20pt"><i class="fa fa-chart-line"></i></span>
<span class="pcoded-mtext" style="font-size:16pt"> &nbsp;Analysis</span>
</a>
</li>
</ul>
</div>
</div>
</nav><br/>
<div class="pcoded-content">
<div class="page-header card">
<div class="row align-items-end">
<div class="col-lg-8">
<div class="page-header-title">
<div class="d-inline">
@yield('pageHeader')
</div>
</div>
</div>
</div>
</div>
<div class="pcoded-inner-content">
<div class="main-body">
<div class="page-wrapper">
<div class="page-body navbar-page">
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-block">
@yield('content')
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


<script type="26dfe7f3f4fe4ac076b34b38-text/javascript" src="../files/bower_components/jquery/js/jquery.min.js"></script>
<script type="26dfe7f3f4fe4ac076b34b38-text/javascript" src="../files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="26dfe7f3f4fe4ac076b34b38-text/javascript" src="../files/bower_components/popper.js/js/popper.min.js"></script>
<script type="26dfe7f3f4fe4ac076b34b38-text/javascript" src="../files/bower_components/bootstrap/js/bootstrap.min.js"></script>

<script src="../files/assets/pages/waves/js/waves.min.js" type="26dfe7f3f4fe4ac076b34b38-text/javascript"></script>

<script type="26dfe7f3f4fe4ac076b34b38-text/javascript" src="../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

<script src="../files/assets/pages/waves/js/waves.min.js" type="26dfe7f3f4fe4ac076b34b38-text/javascript"></script>

<script type="26dfe7f3f4fe4ac076b34b38-text/javascript" src="../files/bower_components/modernizr/js/modernizr.js"></script>
<script type="26dfe7f3f4fe4ac076b34b38-text/javascript" src="../files/bower_components/modernizr/js/css-scrollbars.js"></script>

<script type="26dfe7f3f4fe4ac076b34b38-text/javascript" src="../files/assets/js/animation.js"></script>
<script src="../files/assets/js/pcoded.min.js" type="26dfe7f3f4fe4ac076b34b38-text/javascript"></script>
<script src="../files/assets/js/vertical/vertical-layout.min.js" type="26dfe7f3f4fe4ac076b34b38-text/javascript"></script>
<script src="../files/assets/js/jquery.mCustomScrollbar.concat.min.js" type="26dfe7f3f4fe4ac076b34b38-text/javascript"></script>
<script type="26dfe7f3f4fe4ac076b34b38-text/javascript" src="../files/assets/js/script.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="26dfe7f3f4fe4ac076b34b38-text/javascript"></script>
<script type="26dfe7f3f4fe4ac076b34b38-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="../ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="26dfe7f3f4fe4ac076b34b38-|49" defer=""></script></body>

<!-- Mirrored from colorlib.com/polygon/admindek/default/animation.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Dec 2019 13:02:24 GMT -->
</html>
