<div class="container d-flex justify-content-between align-items-center py-3">
    <a href="{{ route('home') }}" class="text-decoration-none color-primary">
        <h3 class="fs-16 font-bold color-primary text-uppercase mb-0">JUNIOR NATABOU</h3>
    </a>

    <button class="btn btn-icone-menu p-0" id="btn-menu"> Menu &nbsp;
        <img src="{{ asset('icons/icone-menu.svg') }}" alt="" class="icone-menu">
    </button>
</div>


<div class="menu-overlay" id="menu-overlay">
    <span class="closebtn cursor-pointer" id="close-menu"> &times;</span>
    <p class="menu-overlay-title text-uppercase">JUnior Natabou</p>

    <div class="container menu-overlay-content">
        <div>
            <nav class="nav flex-column">
                <a href="{{ route('home') }}"
                    class="nav-link menu-overlay-link   @if (Request::routeIs('home')) active @endif">Home</a>
                <a href="{{ route('get_started') }}"
                    class="nav-link menu-overlay-link @if (Request::routeIs('get_started')) active @endif">Getting
                    Started</a>
                <a href="{{ route('training') }}"
                    class="nav-link menu-overlay-link @if (Request::routeIs('training')) active @endif">Trainings</a>
                <a href="{{ route('ressources') }}"
                    class="nav-link menu-overlay-link @if (Request::routeIs('ressources')) active @endif">Ressources</a>

            </nav>
        </div>


    </div>
</div>
