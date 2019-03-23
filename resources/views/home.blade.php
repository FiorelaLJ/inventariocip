@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" aling="center" style="color: #d34848 font-weight: 800">Bienvenido(a) &nbsp{{auth()->user()->name}}&nbsp{{auth()->user()->apellido}}</div>

                <div class="card-body" aling="center" style="color: #d34848 font-weight: 800">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    ¡Usted ha ingresado!

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
