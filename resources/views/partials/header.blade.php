<header>
    <!--Topbar start-->
    <div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center text-white">
                    <small><i class="bi bi-telephone-outbound-fill mx-2"></i></i>+225 07 5965 6848</small>
                    <small class="px-3">|</small>
                    <small><i class="bi bi-envelope-fill mx-2"></i>marcadoni4425@gmail.com</small>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-2 " href="">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="bi bi-twitter"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="bi bi-linkedin"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="bi bi-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--Topbar end-->

    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-success navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-5">
            <a href="index.html" class="navbar-brand d-flex d-lg-none">
                <h1 class="m-0 display-4 text-secondary"><span class="text-white">E.</span>PLAINTE</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="\"
                        class="nav-item nav-link active text-light text-uppercase
                        mx-2"><i class="bi bi-house-fill mx-2"></i>Acceuil</a>
                    <a href="{{ route('plainte.create') }}" class="nav-item nav-link text-light text-uppercase mx-2"><i
                            class="bi bi-file-text-fill mx-2"></i>Soumettre la
                        plainte</a>
                    <a href="" class="nav-item nav-link text-light text-uppercase mx-2"><i
                            class="bi bi-graph-down mx-2"></i>Statistique</a>
                    <a href="{{ route('contacts') }}" class="nav-item nav-link  text-light  text-uppercase mx-2"><i
                            class="bi bi-telephone-fill mx-2"></i>Contactez-nous</a>
                    <a href="{{ route('login') }}" class="nav-item nav-link text-light mx-2"><i
                            class="bi bi-person-circle mx-2"></i>Connexion</a>

                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

</header>
