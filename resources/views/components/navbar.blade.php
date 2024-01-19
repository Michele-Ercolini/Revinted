
    <nav id="nav" class="navbar navbar-expand-lg navCustom fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="./media/Revinted_Color_with_background.png" class="navLogo img-fluid" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav d-flex justify-content-end w-100 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route("homepage")}}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Prodotti
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Tutti i prodotti</a></li>
                            <li><a class="dropdown-item" href="#">Categoria 1</a></li>
                            <li><a class="dropdown-item" href="#">Categoria 2</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Vendi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contatti</a>
                    </li>
                </ul>
                <div class="d-flex justify-content-end me-3 w-100">
                    <div class="d-flex searchBox">
                        <form class="searchForm" method="GET" action="" role="search">
                            @csrf
                            <input class="search" placeholder="Search" aria-label="Search">
                            <button class="" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                    </div>
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Utente
                            </a>
                            <ul class="dropdown-menu">
                                @auth
                                <li><hr class="dropdown-divider"></li>
                                <li><a href="" class="dropdown-item" onclick="event.preventDefault();document.querySelector('#form-logout').submit();">Logout</a></li>
                                <form id="form-logout" action="{{route('logout')}}" method="POST">
                                    @csrf
                                </form>
                                @else
                                <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
                                <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
                                @endauth
                            </ul>
                        </li>
                    </ul>
                    <i class="fa-solid fa-basket-shopping"></i>
                </div>
            </div>
        </div>
    </nav>
