@extends('layouts.petfry_register')

@section('content')
<style>
    .col-lg-offset-5 {
        margin-left: 37.666667%;
    }
    .form-group {
        margin-bottom: 5px;
    }
    .form-group-btn-register{
        margin-top: 25px;
        padding: 0 0 0 0;
    }
    .padding_btn_register{
        padding: 0;
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
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="col-lg-3 col-lg-offset-5 col-xs-6 col-xs-offset-3 margin-form">
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="font-color-label"></label>
                            <input type="text" class="form-control transparent" name="name" value="{{ old('name') }}" required autofocus placeholder="Ingrese su nombre">
                        @if ($errors->has('name'))
                        <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="username" class="font-color-label"></label>
                            <input type="text" class="form-control transparent" name="email" value="{{ old('email') }}" required autofocus placeholder="Ingrese un email">
                        @if ($errors->has('email'))
                        <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="font-color-label"></label>
                            <input type="password" class="form-control transparent" name="password" required placeholder="Ingrese una contraseña">
                        @if ($errors->has('password'))
                        <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="password" class="font-color-label"></label>
                            <input type="password" id="password-confirm" class="form-control transparent" name="password_confirmation" required placeholder="Vuelva a ingresar la contraseña">
                    </div>
                    <div class="form-group form-group-btn-register">
                        <div class="col-lg-12 col-xs-12 padding_btn_register">
                            <button type="submit" class="btn btn-success col-lg-12 col-xs-12">Ingresar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection