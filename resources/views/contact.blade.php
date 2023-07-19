@extends('dashboard_master')

@section('seccion_child')

    <div class="container">
        <div class="row">
            <div class="row">
                <div><img src="{{ asset('img/logo.jpg') }}"  width="60"  height="60" alt="Logo" className="contact-img" /></div>
                <div>MarioArte</div>
            </div class="row"> 
            <div class="row">
                <div> marioesculturas@yahoo.es </div>
            </div class="row"> 
            <div class="row" className='contact-icons'>
                <div class="col-4"><a href="https://wa.me/573197189616"><img href="https://wa.me/573197189616" src="{{ asset('img/whatsapp_icon.jpeg') }}"  width="40"  height="40" alt="Logo" className="contact-img" /></a></div>
                <div class="col-4"><a href="https://www.facebook.com/Artvid.arteypublicidad" ><img src="{{ asset('img/facebook_icon.jpeg') }}"  width="40"  height="40" alt="Logo" className="contact-img" /></a></div>
                <div class="col-4"><a href="https://www.instagram.com/mario.suarez_art.studio"><img  src="{{ asset('img/instagram_icon.jpeg') }}"  width="40"  height="40" alt="Logo" className="contact-img" /></a></div>
            </div class="row"> 
        </div>
    </div>

@stop