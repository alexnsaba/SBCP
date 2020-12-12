<!DOCTYPE html>
<html lang="en">

<head>
    <title>SBCP | @yield('title')</title>

    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
          content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords"
          content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="colorlib" />
    <script src="https://code.highcharts.com/highcharts.js"></script>

    <link rel="icon" href="../files/assets/images/logo.ico" type="image/x-icon">

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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <style>
        .fabutton {
            background: none;
            padding: 0px;
            border: none;
        }

    </style>

    <script src="https://kit.fontawesome.com/5ed7aa1b5d.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>



    <script>
        function previewFile(input) {
            var file = $("input[type=file]").get(0).files[0];

            if (file) {
                var reader = new FileReader();

                reader.onload = function() {
                    $("#previewImg").attr("src", reader.result);
                }

                reader.readAsDataURL(file);
            }
        }

    </script>

    <!--Styles for the time range picker -->
    <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="dist/daterangepicker.min.css" />
    <style type="text/css">
        #wrapper {
            width: 800px;
            margin: 0 auto;
            color: #333;
            font-family: Tahoma, Verdana, sans-serif;
            line-height: 1.5;
            font-size: 20px !important;
        }

        .demo {
            margin: 30px 0;
        }

        .date-picker-wrapper .month-wrapper table .day.lalala {
            background-color: orange;
        }

        .options {
            display: none;
            border-left: 6px solid #8ae;
            padding: 10px;
            font-size: 20px;
            line-height: 1.4;
            background-color: #eee;
            border-radius: 4px;
        }

        .date-picker-wrapper.date-range-picker19 .day.first-date-selected {
            background-color: red !important;
        }

        .date-picker-wrapper.date-range-picker19 .day.last-date-selected {
            background-color: orange !important;
        }



    /*    css for button loading*/
        /* Make sure nothing inside buttons can send click events so we can catch button clicks with delegated events. */
        button #btnFetch {
            pointer-events: none;
        }

        /* Just a really naive css example to swap the button contents with the spinner. Bring your own spinner & styles. */
        .loading {
            opacity: .5;
        }
        .loading span {
            display: none;
        }

        /* Side note: I'm using opacity here to make the button look disabled. But you probably shouldn't set disable=true for the button on submit, even to prevent multiple clicks. There could be a server error, network problem or whatever. The user should be able to try to submit the form again any time without reloading the page. Also remember to have screen reader accessible text on your spinner. Take care of accessiblity! */

    /*new spinner*/

        /*.loading2 {*/
        /*    display: flex;*/
        /*    justify-content: center;*/
        /*    margin: 2rem;*/
        /*}*/
        /*.loading2::after {*/
        /*    content: "";*/
        /*    width: 70px;*/
        /*    height: 70px;*/
        /*    border: 10px solid #dddddd;*/
        /*    border-top-color: #60d460;*/
        /*    !* border-bottom-color: #60d460;  -- optional *!*/
        /*    border-radius: 50%;*/
        /*    !* animation: spin 0.6s 0.1s linear infinite both; -- optional *!*/
        /*    animation: spin 0.8s 0.1s ease-in-out infinite both;*/
        /*}*/

        /*@keyframes spin {*/
        /*    from {*/
        /*        transform: rotate(0);*/
        /*    }*/
        /*    to {*/
        /*        transform: rotate(360deg);*/
        /*    }*/
        /*}*/

        /*@keyframes bounce {*/
        /*    to {*/
        /*        opacity: 1;*/
        /*        transform: scale(1.75);*/
        /*    }*/
        /*}*/

    </style>
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

                        <li>
                            <a href="#!"
                               onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:toggleFullScreen()"
                               class="waves-effect waves-light" data-cf-modified-da54ea6e450b9f28d7f87301-="">
                                <i class="full-screen feather icon-maximize"></i>
                            </a>
                        </li>
                        <li>

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
                                    <img src="../files/assets/images/alex.png" class="img-radius"
                                         alt="User-Profile-Image">
                                    <span> {{ Auth::user()->name }}</span>
                                    <i class="feather icon-chevron-down"></i>
                                </div>
                                <ul class="show-notification profile-notification dropdown-menu"
                                    data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <li>
                                        <a href="#!">
                                            <i class="feather icon-settings"></i> Settings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/userProfile">
                                            <i class="feather icon-user"></i> Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="feather icon-lock"></i> Lock Screen
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="feather icon-log-out"></i> Logout

                                            {{--
                                            {{ __('Logout') }}--}}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              class="d-none">
                                            @csrf
                                        </form>

                                        {{-- <a
                                            href="{{ route('logout') }}">--}}
                                        {{-- <i class="feather icon-log-out"></i>
                                        Logout--}}
                                        {{-- </a>--}}
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
                                <li class="pcoded-hasmenu active">
                                    <a href="Predictions" class="waves-effect waves-dark">
                                        <!-- <i class="feather icon-home"> -->
                                        <span class="pcoded-micon" style="font-size:20pt"><i
                                                class="fa fa-stethoscope"></i></span>
                                        <span class="pcoded-mtext" style="font-size:16pt"> &nbsp; Predictions</span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu active pcoded-trigger">
                                    <a href="Visualisations" class="waves-effect waves-dark">
                                            <span class="pcoded-micon" style="font-size:20pt"><i
                                                    class="fa fa-chart-line"></i></span>
                                        <span class="pcoded-mtext" style="font-size:16pt"> &nbsp;Analysis</span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu active pcoded-trigger">
                                    <a href="managepatients" class="waves-effect waves-dark">
                                            <span class="pcoded-micon" style="font-size:20pt"><i class="fa fa-users"
                                                                                                 aria-hidden="true"></i></span>
                                        <span class="pcoded-mtext" style="font-size:16pt"> &nbsp; Manage
                                                Patients</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav><br />
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


                <script type="26dfe7f3f4fe4ac076b34b38-text/javascript"
                        src="../files/bower_components/jquery/js/jquery.min.js"></script>
                <script type="26dfe7f3f4fe4ac076b34b38-text/javascript"
                        src="../files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
                <script type="26dfe7f3f4fe4ac076b34b38-text/javascript"
                        src="../files/bower_components/popper.js/js/popper.min.js"></script>
                <script type="26dfe7f3f4fe4ac076b34b38-text/javascript"
                        src="../files/bower_components/bootstrap/js/bootstrap.min.js"></script>

                <script src="../files/assets/pages/waves/js/waves.min.js"
                        type="26dfe7f3f4fe4ac076b34b38-text/javascript"></script>

                <script type="26dfe7f3f4fe4ac076b34b38-text/javascript"
                        src="../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

                <script src="../files/assets/pages/waves/js/waves.min.js"
                        type="26dfe7f3f4fe4ac076b34b38-text/javascript"></script>

                <script type="26dfe7f3f4fe4ac076b34b38-text/javascript"
                        src="../files/bower_components/modernizr/js/modernizr.js"></script>
                <script type="26dfe7f3f4fe4ac076b34b38-text/javascript"
                        src="../files/bower_components/modernizr/js/css-scrollbars.js"></script>

                <script type="26dfe7f3f4fe4ac076b34b38-text/javascript" src="../files/assets/js/animation.js">
                </script>
                <script src="../files/assets/js/pcoded.min.js" type="26dfe7f3f4fe4ac076b34b38-text/javascript">
                </script>
                <script src="../files/assets/js/vertical/vertical-layout.min.js"
                        type="26dfe7f3f4fe4ac076b34b38-text/javascript"></script>
                <script src="../files/assets/js/jquery.mCustomScrollbar.concat.min.js"
                        type="26dfe7f3f4fe4ac076b34b38-text/javascript"></script>
                <script type="26dfe7f3f4fe4ac076b34b38-text/javascript" src="../files/assets/js/script.js"></script>

                <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
                        type="26dfe7f3f4fe4ac076b34b38-text/javascript"></script>
                <script type="26dfe7f3f4fe4ac076b34b38-text/javascript">
                        window.dataLayer = window.dataLayer || [];

                        function gtag() {
                            dataLayer.push(arguments);
                        }
                        gtag('js', new Date());

                        gtag('config', 'UA-23581568-13');

                    </script>
                <script src="../ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js"
                        data-cf-settings="26dfe7f3f4fe4ac076b34b38-|49" defer="">
                </script>
                <!--Scripts for the time range picker -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"
                        type="text/javascript"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.16.0/moment.min.js"
                        type="text/javascript"></script>
                <script src="src/jquery.daterangepicker.js"></script>
                <script src="demo.js"></script>

                <script>
                    $(function() {
                        $('a.show-option').click(function(evt) {
                            evt.preventDefault();
                            $(this).siblings('.options').slideToggle();
                        });
                    })

                </script>
{{--                script for loading button --}}
                <script>
                    /* Example on how to use this at the bottom here. Implementation first. */

                    function LoadingSpinner (form, spinnerHTML) {
                        form = form || document

                        //Keep track of button & spinner, so there's only one automatic spinner per form
                        var button
                        var spinner = document.createElement('div')
                        spinner.innerHTML = spinnerHTML
                        spinner = spinner.firstChild

                        //Delegate events to a root element, so you don't need to attach a spinner to each individual button.
                        form.addEventListener('click', start)

                        //Stop automatic spinner if validation prevents submitting the form
                        //Invalid event doesn't bubble, so use capture
                        form.addEventListener('invalid', stop, true)

                        //Start spinning only when you click a submit button
                        function start (event) {
                            if (button) stop()
                            button = event.target
                            if (button.type === 'submit'&& button.id ==='btnFetch') {
                                LoadingSpinner.start(button, spinner)
                            }
                        }

                        function stop () {
                            LoadingSpinner.stop(button, spinner)
                        }

                        function destroy () {
                            stop()
                            form.removeEventListener('click', start)
                            form.removeEventListener('invalid', stop, true)
                        }

                        return {start: start, stop: stop, destroy: destroy}
                    }

                    //I guess these would be called class methods. They're useable without instantianing a new LoadingSpinner so you can start & stop spinners manually on any elements, for ajax and stuff.
                    LoadingSpinner.start = function (element, spinner) {
                        element.classList.add('loading')
                        return element.appendChild(spinner)
                    }

                    LoadingSpinner.stop = function (element, spinner) {
                        element.classList.remove('loading')
                        return spinner.remove()
                    }
                    //Example on how to use LoadingSpinner

                    //Bring your own spinner. You can use any html as the spinner. You can find lots of cool spinners for example here on Codepen. I'm using just plain text. Maybe technically not a spinner, but this is more about the script than graphics.
                    var exampleForm = document.querySelector('#example')
                    // var exampleForm = document.querySelector('.loading2')
                    // var exampleLoader = new LoadingSpinner(exampleForm)

                    var exampleLoader = new LoadingSpinner(exampleForm, 'ion processing...')
                    // var exampleLoader = new LoadingSpinner('Predicting')

                    //Delay submit so you can see the spinner spinning, then stop the loading spinner instead of submitting because we're on Codepen.
                    // exampleForm.addEventListener('submit', function (event) {
                    //     event.preventDefault()
                    //     setTimeout(function () {
                    //         exampleLoader.stop()
                    //     }, 2000)
                    // })

                </script>
</body>


</html>
