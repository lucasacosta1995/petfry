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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <!--     Fonts     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
</head>
<body>
<style>
    .navbar-brand{
        font-family: 'Grand Hotel',cursive;
        font-size: 32px;
    }

    .navbar-default {
        background-color: #1f1f1f;
        border-color: #ababab;
    }
    .navbar-default .navbar-brand {
        color: #fff;
    }
    .navbar-default .navbar-nav>li>a, .navbar-default .navbar-text {
        color: #fff;
    }
    .navbar-default .navbar-nav>li>a:focus, .navbar-default .navbar-nav>li>a:hover {
        color: #cce7f7;
        background-color: transparent;
    }
    .navbar-default .navbar-brand:focus, .navbar-default .navbar-brand:hover {
        color: #cce7f7;
        background-color: transparent;
    }
    html, body{
        background: #f6f7fa;
        height: 100%;
    }
    .panel_izquierdo {
        float: left;
    }
    .panel_izquierdo_imagen{
        max-width: 90%;
        min-width: 90%;
        width: 90%;
        max-height: 280px;
        min-height: 280px;
        height: 280px;
    }
    .img-responsive-panel{
        width: 93px;
        max-width: 93px;
        min-width: 93px;
        max-height: 80px;
        min-height: 80px;
        height: 80px;
        /* text-align: center; */
        padding: 0 0 0 0px;
        /* left: 72%; */
        margin-left: 40px;
    }
    .navbar-left {
        float: left;
        position: relative;
        left: 32%;
    }
    #app-navbar-collapse>ul:hover {
        padding: 0 0 7px 0;
        border-bottom: 2px solid #1c94e0;
    }
    .navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus {
        color: #555555;
        /* border: 1px; */
        background-color: #e7e7e700;
    }
</style>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container nav-actions">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>
                <form class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search" style="padding: 0 50px 0 1px;">
                    </div>
                    <button type="submit" class="btn btn-default" style="margin-left: -43px;border: none;"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="padding: 9px 0 0 0;">
                                    <img src="{{ asset('images/rick.jpg') }}" class="img-responsive img-circle " alt="Responsive image" style="height: 32px;width: 32px;">
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-3 panel_izquierdo">
                    <div class="panel panel-default panel_izquierdo_imagen">
                        <div class="panel-body">
                            <div class="col-lg-2">
                                <img src="{{ asset('images/rick.jpg') }}" class="img-responsive img-circle img-responsive-panel" alt="Responsive image">
                            </div>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 panel_izquierdo">
                    <div class="panel panel-default">
                        <div class="panel-heading">Dashboard</div>
                        <div class="panel-body">
                            @yield('content')
                        </div>
                    </div>
                </div>
                <div class="col-md-3 panel_izquierdo">
                    <div class="panel panel-default">
                        <div class="panel-heading">Dashboard</div>
                        <div class="panel-body">
                            @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                            @endif
                            You are logged in!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
