@extends('templates.master')

@section('title', 'Librería Androide - Libros')

@section('contenido')
    <div class="contenido">
        <div class="container">
            @foreach ($libros as $libro)
                @if ($loop->iteration %3==0)
                    <div class="row">
                @endif
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail cuadrito">
                            <img src="{{ asset('img/portadasNovelas/'.str_replace(' ', '_', strtolower(str_replace('?', '', str_replace('¿', '',$libro->titulo))))).'.jpg' }}" alt="{{ $libro->titulo }}">
                            <div class="caption">
                                {{--<h3><a href="{{ route('libroIndividual', ['titulo' => $libro->titulo]) }}">{{ $libro->titulo }}</a></h3>--}}
                                <h3>{{ $libro->titulo }}</h3>
                                <p><a href="{{ route('autores') }}#{!! str_replace('¿', '',$libro->apellido) !!}">{{ $libro->nombre.' '.$libro->apellido }}</a>, {{$libro->year}}</p>
                                <div class="sinopsis">
                                    <p>{!! str_replace('\n', '<br/>', $libro->descripcion) !!}</p>
                                </div>

                                <a class="fa fa-download" href="{{ asset('ebooks').'/'.$libro->ebook }}">Descargar</a>
                            </div>
                        </div>
                    </div>
                @if ($loop->iteration %3 ==0)
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection