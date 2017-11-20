@extends('templates.master')

@section('contenido')
<div class="container" style="margin-top: 100px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Zona en Desarrollo</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <img style="display: block; margin: auto;" src="{{ asset('img/sheep.jpg') }}" alt="Zona en desarrollo">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
