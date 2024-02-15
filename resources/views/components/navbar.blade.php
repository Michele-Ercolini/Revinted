
    <nav id="nav" class="navbar navbar-expand-lg navCustom fixed-top">
        <div class="container-fluid">
            <div class="row w-100">
                <div class="col-4">
                    <a class="navbar-brand" href="#"><img src="./media/Revinted_Color_with_background.png" class="navLogo img-fluid" alt="Logo"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse col-8" id="navbarSupportedContent">
                    <div class="col-6 d-flex justify-content-center">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link fs-5 active" aria-current="page" href="{{route("homepage")}}">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link fs-5 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Prodotti
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Tutti i prodotti</a></li>
                                    <li><a class="dropdown-item" href="#">Categoria 1</a></li>
                                    <li><a class="dropdown-item" href="#">Categoria 2</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-5" href="#">Vendi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-5" href="#">Contatti</a>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex justify-content-end align-items-center me-3 vw50">
                        <div class="searchBox ms-5">
                            <input id="searchInput" type="text" placeholder="Search">
                            <div class="searchBtn">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </div>
                            <div class="cancelBtn">
                                <i class="fa-solid fa-xmark"></i>
                            </div>
                            <form id="form-search" class="searchForm" method="GET" action="" role="search">
                                @csrf
                            </form>
                        </div>
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item dropdown ms-5">
                                <a class="nav-link fs-5 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                        <div class="d-flex justify-content-center align-items-center ms-3">
                            <a class="decoration-none" href="">
                                <i class="fa-solid fa-basket-shopping"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
