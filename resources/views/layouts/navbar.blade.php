<div class="container-fluid">
  <div class="row primary-color" id="navbarSupportedContentUp">
    <div class="col-9">
      <marquee behavior="scroll" direction="left"> 319 7189 616&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cll 83 # 13 - 13&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;marioesculturas@yahoo.es     </marquee>
    </div>
    <div class="col-2">
      <a href="{{ route('contact') }}">Contactenos</a>
    </div>
  </div>
</div>

<nav class="navbar navbar-expand-lg" id="nav-container">
  <div class="container-fluid" id="nav">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="row collapse navbar-collapse" id="navbarSupportedContent">
      <div class="col-2">
        <a href="{{ route('inicio') }}"><img src="{{ asset('img/logo.jpg') }}" id="logo" alt="..."></a>
      </div>
      <ul class="col-10 navbar-nav me-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" aria-current="page" href="{{ route('aboutMe') }}">¿Quien es MarioArte?</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" aria-current="page" href="{{ route('services') }}">Servicios</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" aria-current="page" href="{{ route('breifcase') }}">Portafolio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" aria-current="page" href="{{ route('appreciations') }}">Reconocimientos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" aria-current="page" href="{{ route('contact') }}">Contacto</a>
        </li>
      </ul>
    </div>
  </div>
</nav>  