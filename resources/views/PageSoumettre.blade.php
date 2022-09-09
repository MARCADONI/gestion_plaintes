<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Laravel 8 Livewire Wizard Form Example - Online Web Tutor</title>
    @livewireStyles
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <link href="{{ asset('css/multiform.css') }}" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="{{ asset('css/test.css') }}">

    <link rel="stylesheet" href="{{ asset('css/PageAcceuil.css') }}">
    <!--importer la bibliothèque icons de boostrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">


</head>

<body>
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
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="\"
                            class="nav-item nav-link text-light text-uppercase
                            mx-2"><i class="bi bi-house-fill mx-2"></i>Acceuil</a>
                        <a href="{{ route('plainte.create') }}"
                            class="nav-item nav-link active text-light text-uppercase mx-2"><i
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

    <div class="container-fluid" id="grad1">
        <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-11 col-md-10 col-lg-9 text-center p-0 mt-3 mb-2 w-75">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <h2><strong>FORMULAIRE DE PLAINTE</strong></h2>
                    <p>Remplissez tous les champs du formulaire pour passer à l'étape suivante</p>
                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <form id="msform">
                                <livewire:form.wizard />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
@livewireScripts
<script src={{ asset('js/PageSoumettre.js') }}></script>

</html>
