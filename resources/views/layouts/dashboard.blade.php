<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title') - Eventos</title>
    <!-- Bootstrap Styles-->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="{{ asset('js/morris/morris-0.4.3.min.css') }}" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="{{ asset('css/custom-styles.css') }}" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Menú</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Dashboard</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Profesor Erick</strong>
                                    <span class="pull-right text-muted">
                                        <em>Hoy</em>
                                    </span>
                                </div>
                                <div>
                                    Ha calificado con 100 puntos al equipo 1
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="#">
                                <i class="fa fa-user fa-fw"></i>
                                @auth
                                    {{ auth()->user()->name }}
                                @endauth
                            </a>
                        </li>
                        <li><a href="dashboard/mi-cuenta"><i class="fa fa-gear fa-fw"></i> Configuración</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ route('login.destroy') }}" class="nav-link">
                                Cerrar sesión
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="/dashboard"><i class="fa fa-dashboard"></i> Home</a>
                    </li>
                    <li>
                        <a href="/dashboard/usuarios"><i class="fa fa-desktop"></i> Usuarios</a>
                    </li>
                    <li>
                        <a href="/dashboard/eventos"><i class="fa fa-bar-chart-o"></i> Eventos</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                @yield('content')


                <footer>
                    <p>Todos los derechos reservados: <a href="/students">Equipo 1 LDAW </a></p>
                </footer>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="{{ asset('js/jquery-1.10.2.js') }}"></script>
    <!-- Bootstrap Js -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Metis Menu Js -->
    <script src="{{ asset('js/jquery.metisMenu.js') }}"></script>
    <!-- Morris Chart Js -->
    <script src="{{ asset('js/morris/raphael-2.1.0.min.js') }}"></script>
    <script src="{{ asset('js/morris/morris.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{ asset('js/custom-scripts.js') }}"></script>


</body>

</html>
