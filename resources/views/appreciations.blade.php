@extends('dashboard_master')

@section('seccion_child')

    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Reconocimientos</h2>
            </div>
        </div> 
        <div class="row">
            <div class="col-6">
                <img class="img-style" src="{{ asset('img/appreciations_img_1.jpeg') }}"/>
            </div>
            <div class="col-6">
                <img class="img-style" src="{{ asset('img/appreciations_img_2.jpeg') }}"/>
                <p>
                    Al conocer a la Sra. Martínez, en un centro comercial, ella es la cabeza de una función en la 
                    cual ayuda a perritos en estado de abandono y callejeros, ese fue un evento organizado por la 
                    alcaldía de Ibagué. fue la última rendición de cuenta del entonces alcalde Guillermo Alfonso Jaramillo, 
                    ese dibujo fue un retrato de su mascota Pinky y fue un obsequio en agradecimiento por su labor 
                    en cuanto a la creación de espacios para nuestras mascotas en la ciudad.
                </p>
            </div>
        </div> 
        <div class="row" >
            <div class="col-5"> 
                <p>Al participar del negocio de Amway me di a conocer como artista y asistí a muchos eventos en los 
                    cuales mi boleto de entrada fueron los retratos de los oradores de cada evento. en este caso los 
                    oradores de ese evento fueron Jerónimo Vásquez (Diamante de Amway), Eliana Chacón (Esmeralda de Amway),
                    ambos Colombia de esta forma mis obras viajaron a sur, centro y norte América </p> </div>
            <div class="col-7">
                <img class="img-style" src="{{ asset('img/appreciations_img_3.jpeg') }}"/>
                <img class="img-style" src="{{ asset('img/appreciations_img_4.jpeg') }}"/>
                <img class="img-style" src="{{ asset('img/appreciations_img_5.jpeg') }}"/>
            </div>
        </div> 
    </div>

@stop