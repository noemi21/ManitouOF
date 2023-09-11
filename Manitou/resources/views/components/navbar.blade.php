{{$slot}}

<nav class="navbar navbar-expand-lg text-dark bg-light fixed">
    <div class="container fluid">
        <a class="navbar-brand" href="{{route('home')}}"> <img class="logo" src="/media/logoCarolis2.png" alt="" style="width: 200px", height="44px"></a><img class="logo" src="/media/logoManitou.png" alt="" style="width: 220px", height="34px">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <div class="dropdown">
                    <button class="btn px-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">SOLUZIONI</button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('macchine')}}">Macchine</a></li>
                        <li><a class="dropdown-item" href="{{route('servizi')}}"> I nostri Servizi</a></li>
                    </ul>
                </div>
                    <li class="nav-item active px-2"><a class="nav-link , fs-6" href="{{route('chiSiamo')}}">CHI SIAMO</a></li>
                    <li class="nav-item px-2">
                        <a class="nav-link , fs-6" href="{{route('contatti')}}">CONTATTI</a>
                    </li>
            </ul>
        </div>
    </div>
</nav>