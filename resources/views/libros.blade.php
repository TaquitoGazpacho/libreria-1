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


                                <div class="modal fade" id="{!! str_replace(str_split(' ?¿,'), '_',$libro->titulo) !!}" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">{{$libro->nombre." ".$libro->apellido}}</h4>
                                            </div>
                                            <div class="modal-body">
                                                <h4>{{$libro->titulo}}.</h4>
                                                <h5>{{$libro->nombre.' '.$libro->apellido.', '.$libro->year}}</h5>
                                                <h5>ISBN: {{$libro->isbn}}</h5>
                                                <p>{{$libro->descripcion}}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <button type="button" class="btn btn-info btn-descarga" data-toggle="modal" data-target="#{!! str_replace(str_split(' ?¿,'), '_',$libro->titulo) !!}">Leer Mas</button>

                                <button type="button" class="btn btn-warning btn-descarga" data-target="#modalLogin" data-toggle="modal">Comprar</button></a>
                            </div>
                        </div>
                    </div>
                @if ($loop->iteration %3 ==0)
                    </div>
                @endif
            @endforeach
                <div id="modalLogin" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content" id="contenidoModal">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 id="modalHeader" class="modal-title">Datos de compra</h4>
                            </div>
                            <form id="continuarCompra" method="post" action={{env('URL_LOCKBOX')."/checkLogin"}}>
                                {{ csrf_field() }}
                                <div id="modalBody" class="modal-body">
                                    <div class="form-group">
                                        <label for="userNombre">Nombre</label>
                                        <input type="text" class="form-control" id="userNombre" placeholder="Nombre" name="nombre">
                                    </div>
                                    <div class="form-group">
                                        <label for="userApellido">Apellido</label>
                                        <input type="text" class="form-control" id="userApellido" placeholder="Apellido" name="apellido">
                                    </div>
                                    <div class="form-group">
                                        <label for="userEmail">Número de tarjerta</label>
                                        <input type="text" class="form-control" id="userEmail" placeholder="Nº Tarjeta" name="tarjeta">
                                    </div>
                                    <div class="form-group">
                                        <label for="userSex">Servicio de envío:</label><br/>
                                        <label><input type="radio"> Correo ordinario</label><br/>
                                        <label><input type="radio"> Correo express</label><br/>
                                        <label><input type="radio"> LockBox</label>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-error" data-dismiss="modal">Cerrar</button>
                                    <input type="submit" class="btn btn-warning" value="Continuar">
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
        </div>
    </div>
@endsection
