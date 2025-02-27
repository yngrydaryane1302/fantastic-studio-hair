<header class="site-header">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12 d-flex flex-wrap">
                <p class="d-flex me-4 mb-0">
                    <i class="bi-person custom-icon me-2"></i>
                    <strong class="text-dark">Bem Vindo</strong>
                </p>
            </div>

        </div>
    </div>
</header>


<nav class="navbar navbar-expand-lg">
    <div class="container">


        <a href="ticket.html" class="btn custom-btn d-lg-none ms-auto me-4">Login</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_1">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_2">Conheça</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_3">Serviços</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_4">Schedule</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_5">Ajuda</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_6">Login</a>
                </li>
            </ul>

           <a href="{{ route('saloes.create') }}" class="btn custom-btn d-lg-block d-none">Cadastro</a>
        </div>
    </div>
</nav>
