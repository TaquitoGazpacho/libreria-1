@extends('templates.master')

@section('title', 'Librería Androide - Libros')

@section('contenido')
    <div class="contenido">
        <div class="container">
            @foreach ($escritores as $escritor)
                <div class="row thumbnail autor cuadrito" id="{{ str_replace(' ', '-',$escritor->apellido) }}">
                    <div class="caption col-xs-12 col-sm-6 col-md-7 col-lg-8">
                        <h3>{{ $escritor->nombre.' '.$escritor->apellido }}</h3>
                        <p>{{$escritor->nacionalidad}}, {{$escritor->fecha_nacimiento}}</p>
                        <p class="bio-autor">{!! str_replace('\n', '<br/>',$escritor->biografia) !!}</p>
                    </div>
                    <div class="image img-autor col-xs-12 col-sm-6 col-md-5 col-lg-4">
                        <img class="image col-xs-12 col-sm-10 col-md-10 col-lg-10" src="{{ asset('img/autores/'.str_replace(' ', '_', $escritor->apellido)).'.jpg' }}" alt="{{ $escritor->apellido.', '.$escritor->nombre }}">
                        <!--<div class="middle">
                            <div class="text">Más información</div>
                        </div>-->
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection