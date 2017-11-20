@extends('templates.master')

@section('title', 'Librería Androide - Libros')

@section('contenido')
    <div class="contenido">
        <div class="container">
            @foreach ($escritores as $escritor)
                <div class="row thumbnail autor cuadrito" id="{{ str_replace(' ', '-',$escritor->apellido) }}">
                    <div class="caption col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h3>{{ $escritor->nombre.' '.$escritor->apellido }}</h3>
                        <p>{{$escritor->nacionalidad}}, {{$escritor->fecha_nacimiento}}</p>
                        <div class="bio-autor">
                            <img class="image pull-right" src="{{ asset('img/autores/'.str_replace(' ', '_', $escritor->apellido)).'.jpg' }}" alt="{{ $escritor->apellido.', '.$escritor->nombre }}">
                            <p>{!! str_replace('\n', '<br/>',$escritor->biografia) !!}</p>
                        </div>
                    </div>
                    {{--<div class="image img-autor col-xs-12 col-sm-6 col-md-5 col-lg-4">--}}
                        {{--<img class="image col-xs-12 col-sm-10 col-md-10 col-lg-10" src="{{ asset('img/autores/'.str_replace(' ', '_', $escritor->apellido)).'.jpg' }}" alt="{{ $escritor->apellido.', '.$escritor->nombre }}">--}}
                    {{--</div>--}}
                </div>
            @endforeach
        </div>
    </div>
@endsection