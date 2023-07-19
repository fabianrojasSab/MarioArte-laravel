@extends('dashboard_master')

@section('seccion_child')

    <div class="container-fluid content-wrapper">
        {{-- ---------------------- SLIDER ------------------------------------------------ --}}
        <div class="row">
            <div class="col-lg-2 col-sm-12">
                <h2 class="tittle-black">Mario Suarez</h2>
                <p>
                Artista plástico nacido en Pitalito Huila en Julio de 1984, autodidacta con 21 años de experiencia en dibujo, pintura y escultura, en su obra al carboncillo se destaca el retrato, en su pintura podemos observar un universo infinito compuesto de figuras orgánicas en una danza de colores vibrantes en una narrativa acerca de la complejidad de la mente de su propio ser, en su escultura se destaca la figura humana cómo elemento principal, entre sus obras se encuentran monumentos públicos, monumentos en colecciones privadas.
                Su obra se encuentra en países como estados unidos, México, argentina, panamá, España y londres.
                </p>
                </div>
                <div class="col-lg-10 col-sm-12">
                    <img src="{{ asset('img/img_1.jpg') }}" class="img-style" alt='foto' />
                </div>
        </div>
        {{-- ---------------------- FIN SLIDER ------------------------------------------------ --}}

    </div>

@stop