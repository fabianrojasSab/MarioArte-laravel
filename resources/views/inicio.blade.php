@extends('dashboard_master')

@section('seccion_child')

    <div class="container-fluid content-wrapper">
        {{-- ---------------------- SLIDER ------------------------------------------------ --}}
        <div class="row">
            <div id="home-slider" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                <button type="button" data-bs-target="#home-slider" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#home-slider" data-bs-slide-to="1" aria-label="Slide 2" aria-current="true"></button>
                <button type="button" data-bs-target="#home-slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#home-slider" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#home-slider" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#home-slider" data-bs-slide-to="5" aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#home-slider" data-bs-slide-to="6" aria-label="Slide 7"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/banner-1.jpeg') }}" class="carousel-img" alt="...">
                </div>
        
                <div class="carousel-item">
                    <img src="{{ asset('img/banner-2.jpeg') }}" class="carousel-img" alt="...">
        
                    <div class="container">
                        <div class="carousel-caption">
                        <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                        </div>
                    </div>
                </div>
        
                <div class="carousel-item">
                    <img src="{{ asset('img/banner-3.jpeg') }}" class="carousel-img" alt="...">
        
                    <div class="container">
                        <div class="carousel-caption text-end">
                        <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
        
                <div class="carousel-item">
                    <img src="{{ asset('img/banner-4.jpeg') }}" class="carousel-img" alt="...">
        
                    <div class="container">
                        <div class="carousel-caption text-end">
                        <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
        
                <div class="carousel-item">
                    <img src="{{ asset('img/banner-5.jpeg') }}" class="carousel-img" alt="...">
        
                    <div class="container">
                        <div class="carousel-caption text-end">
                        <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
        
                <div class="carousel-item">
                    <img src="{{ asset('img/banner-6.PNG') }}" class="carousel-img" alt="...">
        
                    <div class="container">
                        <div class="carousel-caption text-end">
                        <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
        
                <div class="carousel-item">
                    <img src="{{ asset('img/banner-7.jpeg') }}" class="carousel-img" alt="...">
        
                    <div class="container">
                        <div class="carousel-caption text-end">
                        <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#home-slider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#home-slider" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
        {{-- ---------------------- FIN SLIDER ------------------------------------------------ --}}

    </div>

@stop