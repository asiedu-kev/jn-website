<div class="container d-flex justify-content-between py-3">
    <h3 class="fs-16 font-bold color-primary text-uppercase">JUNIOR NATABOU</h3>
    <button class="btn btn-icone-menu" id="btn-menu"> Menu &nbsp;
         <img src="{{asset('icons/icone-menu.svg')}}" alt="" class="icone-menu">
    </button>
</div>


<div class="menu-overlay" id="menu-overlay">
    <span class="closebtn cursor-pointer" id="close-menu"> &times;</i> </span>

    <div class="container menu-overlay-content">
    <div> <nav class="nav flex-column">
        <a href="{{ route('home')}}" class="nav-link menu-overlay-link   @if (Request::routeIs('home')) active @endif">Home</a>
        <a href="{{ route('get_started')}}" class="nav-link menu-overlay-link @if (Request::routeIs('get_started')) active @endif">Getting Started</a>
        <a href="{{ route('training')}}" class="nav-link menu-overlay-link @if (Request::routeIs('training')) active @endif" >Trainings</a>
        <a href="{{ route('ressources')}}" class="nav-link menu-overlay-link @if (Request::routeIs('ressources')) active @endif">Ressources</a>

    </nav></div>

        <p class="menu-overlay-title text-uppercase">JUnior Natabou</p>

    </div>
</div>
