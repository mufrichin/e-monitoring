<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{!! asset ('img/apple-icon.png')!!}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{!! asset ('img/favicon.png')!!}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>E-Monitoring Kontrak Kinerja Universitas Negeri Malang</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{!! asset ('css/bootstrap.min.css')!!}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{!! asset ('css/animate.min.css')!!}" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="{!! asset ('css/paper-dashboard.css')!!}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{!! asset ('css/demo.css')!!}" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="{!! asset ('css/themify-icons.css')!!}" rel="stylesheet">
    </head>
    <body>
       
<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->

        <div class="sidebar-wrapper">
            <div class="logo">
               <a href="#" class="simple-text">
                   <img src="{{asset('img/um_logo_blue_text.png')}}" width="80">
                </a>
            </div>

            <ul class="nav">
                <li class="@yield('menu-1')">
                    <a href="{{url ("/")}}">
                        <i class="ti-search"></i>
                        <p>Monitoring</p>
                    </a>
                </li>
                <li class="@yield('menu-2')" >
                    <a href="{{url ("/data")}}">
                        <i class="ti-plus"></i>
                        <p>Tambah Data</p>
                    </a>
                </li>
                <li class="@yield('menu-3')">
                    <a href="#">
                        <i class="ti-view-list-alt"></i>
                        <p>Kontrak Kinerja</p>
                    </a>
                </li>
                <li class="@yield('menu-4')">
                    <a href="#">
                        <i class="ti-settings"></i>
                        <p>Pengaturan</p>
                    </a>
                </li>
                
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">@yield('title')</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#">
                                <i class="ti-user"></i>
                                <p>Profil User</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

 @yield('content')

        <footer class="footer">
            <div class="container-fluid">
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> developed by <a href="http://ptik.um.ac.id">PTIK UM</a>
                </div>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="{!! asset ('js/jquery.min.js')!!}" type="text/javascript"></script>
    <script src="{!! asset ('js/bootstrap.min.js')!!}" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="{asset ('js/bootstrap-checkbox-radio.js')"}></script>

    <!--  Charts Plugin -->
    <script src="{!! asset ('js/chartist.min.js')!!}"></script>

    <!--  Notifications Plugin    -->
    <script src="{!! asset ('js/bootstrap-notify.js')!!}"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
    <script src="{!! asset ('js/paper-dashboard.js')!!}"></script>

    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="{!! asset ('js/demo.js')!!}"></script>

@yield ('style')

</html>

