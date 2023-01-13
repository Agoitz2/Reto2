
@section('nav')

<nav class="navbar navbar-expand-lg bg-body-tertiary navegador">
    
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/home"><img src="{{asset('img/logos/Logo_dos_colores_fondo_negro.png')}}" class="logo" alt="..."></a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item ">
                <a class="nav-link botonNav btn" aria-current="page" href="#">Anuncios</a>
                </li>

                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle botonNav btn" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Eventos
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>

                <li class="nav-item">
                <a class="nav-link botonNav btn">Disabled</a>
                </li>
                <li class="nav-item d-flex">
                <a class="nav-link botonNav btn" aria-current="page" href="#">Anuncios</a>
                </li>

            </ul>
            
            <form class="d-flex" role="search">
                
                
                <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Search">
                <button class="btn  botonNav" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </button>
            </form>

            </div>
        </div>

    
</nav>

   
@endsection