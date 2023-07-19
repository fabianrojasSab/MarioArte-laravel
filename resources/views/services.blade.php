@extends('dashboard_master')

@section('seccion_child')

    <div class="container">
        <div class="row">
            <!--tarjeta ESCULTURAS-->
            <div class="col">
                <div class="card_dashboard">
                    <div class="card-image">
                        <img src="{{ asset('img/services_bg_1.jpeg') }}" alt="Imagen de la tarjeta">
                    </div>
                    <div class="card-content">
                        <h1 class="card-title">ESCULTURAS</h1>
                    </div>
                    <div class="card-actions primary-color">
                        <a href="" class="card-button">Ver más</a>
                    </div>
                </div>
            </div>

            <!--tarjeta CONSULTA REMISIONES-->
            <div class="col">
                <div class="card_dashboard">
                    <div class="card-image">
                        <img src="{{ asset('img/services_bg_2.jpg') }}" alt="Imagen de la tarjeta">
                    </div>
                    <div class="card-content">
                        <h1 class="card-title">RETRATOS</h1>
                    </div>
                    <div class="card-actions primary-color">
                        <a href="#" class="card-button">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop