<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/coming-sssoon.css') }}" rel="stylesheet">
    <!--     Fonts     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-transparent navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{ asset('images/flags/ES.png') }}"/>
                            Español(ES)
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="divider"></li>
                            <li><a href="#"><img src="{{ asset('images/flags/ES.png') }}"/> Español <span class="label label-default">soon</span></a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="{{ url('/') }}">
                            Inicio
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}">
                            Registrarse
                        </a>
                    </li>
                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
    <div class="main" style="background-image: url('{{ asset('images/home2.jpg') }}')">
        <!--    Change the image source '/images/default.jpg' with your favourite image.     -->
        <div class="cover black" data-color="black"></div>
        @yield('content')
        <div class="footer">
            <div class="container">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">
                            <i class="fa fa-facebook-square"></i>
                            Facebook
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-twitter"></i>
                            Tweet
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-envelope-o"></i>
                            Email
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Scripts -->
<script src="{{ asset('js/jquery-1.10.2.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
