@extends('layouts.petfry_basic')

@section('content')
<!--   You can change the black color for the filter with those colors: blue, green, red, orange       -->
<div class="container">
    <h1 class="logo cursive">
        Petfry
    </h1>
    <!--  H1 can have 2 designs: "logo" and "logo cursive"           -->
    <div class="content">
        <h4 class="motto">Donde tu mascota es nuestra comunidad.</h4>
        <div class="subscribe">
            <h5 class="info-text">
                Quieres buscar algo?
            </h5>
            <div class="row">
                <div class="col-md-4 col-md-offset-4 col-sm6-6 col-sm-offset-3 ">
                    <form class="form-inline" role="form">
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputEmail2">¿</label>
                            <input type="text" class="form-control transparent" placeholder="Veterinarios, Locales...">
                        </div>
                        <button type="submit" class="btn btn-danger btn-fill">Buscar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection