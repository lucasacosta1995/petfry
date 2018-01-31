@extends('layouts.petfry_login')

@section('content')
<style>
    .col-lg-offset-5{
        margin-left: 38.166667%
    }
    .font-color-label{
        color: white;
    }
    .form-group {
        margin-bottom: 0px;
    }
    .padding_btn_login{
        padding:20px 0 0 0;
    }
    .margin-form{
        margin-top: 20px;
    }
</style>
<div class="container">
    <h1 class="logo cursive">
        Petfry
    </h1>
    <div class="content">
        <div class="row">
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="col-lg-3 col-lg-offset-5 col-xs-6 col-xs-offset-3 margin-form">
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="username" class="font-color-label"></label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control transparent" name="email" value="{{ old('email') }}" required autofocus placeholder="Ingresa su email">
                        </div>
                        @if ($errors->has('email'))
                        <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="font-color-label"></label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
                            <input type="password" class="form-control transparent" name="password" required placeholder="Ingresa tu contraseña">
                        </div>
                        @if ($errors->has('password'))
                        <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12 col-xs-12 padding_btn_login">
                            <button type="submit" class="btn btn-success col-lg-12 col-xs-12">Ingresar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection