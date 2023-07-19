@extends('master')

@section('seccion_principal')

  {{-- se agregan las seciones llamadas "js", que se extiendan de dashboard_master.blade --}}
  @yield('js')
  {{-- se agregan las seciones llamadas "js", que se extiendan de dashboard_master.blade --}}

  <!-- Seccion principal -->
  <section class="home-section">


    <!-- Incluye header -->
    @include('layouts.navbar')
    
        
    @yield('seccion_child')
    

  </section>
  <!-- Incluye footer -->
  @include('layouts.footer')
  
@stop

