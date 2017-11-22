@extends('templates.master')

@section('title', 'Librería Androide')

@section('contenido')
    <header>
        <div class="banner">
            <h1>Librería Androide / Blade Runner</h1>
            <h2>Permitido acceso a replicantes y ovejas eléctricas</h2>
        </div>
        <div class="desc">
            <h3>Librería especializada en los autores de ciencia ficción más reconocidos del siglo XX</h3>
        </div>
    </header>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">A tu disposición</h2>
                    <hr class="my-4">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fa fa-4x fa-download text-primary mb-3 sr-icons"></i>
                        <h3 class="mb-3">Descarga directa</h3>
                        <p class="text-muted mb-0">¡Descarga tus libros favoritos en un solo click!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fa fa-4x fa-subway text-primary mb-3 sr-icons"></i>
                        <h3 class="mb-3">Libros donde quieras</h3>
                        <p class="text-muted mb-0">¡Descarga y lee cuando quieras y desde cualquier sitio!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fa fa-4x fa-user text-primary mb-3 sr-icons"></i>
                        <h3 class="mb-3">Opción de ser miembro</h3>
                        <p class="text-muted mb-0">¡Únete a nosotros para información exclusiva!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fa fa-4x fa-book text-primary mb-3 sr-icons"></i>
                        <h3 class="mb-3">Información</h3>
                        <p class="text-muted mb-0">¡Infórmate sobre tus libros o autores cuando quieras!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="seccion-libro">

    </section>


@endsection


<script src="{{URL::asset('/js/index.js')}}"></script>
