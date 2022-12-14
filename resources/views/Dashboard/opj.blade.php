<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/fichier_css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/fichier_css/dataTables.bootstrap5.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/fichier_css/style.css') }}" />
    <title>Espace OPJ</title>
</head>

<body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
                aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
            </button>
            <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold"href="#"><span>E.</span>PLAINTE TPI
                de YOPOUGON</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar"
                aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="topNavBar">
                <form class="d-flex ms-auto my-3 my-lg-0">
                    <div class="input-group">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
                        <button class="btn btn-primary" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="bi bi-person-fill"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Agent OPJ</a></li>
                            <li><a class="dropdown-item" href="#">{{ Auth::user()->officiers_police->name }}</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button class="dropdown-item" type="submit"> <i class="fas fa-power-off "></i>
                                            Se d??connecter</button>
                                    </form>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div class="offcanvas offcanvas-start sidebar-nav bg-dark" tabindex="-1"id="sidebar">
        <div class="offcanvas-body p-0">
            <nav class="navbar-dark">
                <ul class="navbar-nav">

                    <li>
                        <a class="nav-link px-3 my-2">
                            <span class="me-2"><i class="bi bi-graph-down"></i></span>
                            <span>Statistique</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-3 my-2 active">
                            <span class="me-2"><i class="bi bi-house-fill"></i></span>
                            <span>Espace OPJ</span>
                        </a>
                    </li>


                    <li>
                        <a href="#" class="nav-link px-3 my-2">
                            <span class="me-2"><i class="bi bi-bookmark-check-fill"></i></span>
                            <span>Mes infos</span>
                        </a>
                    </li>

                </ul>
            </nav>
        </div>
    </div>
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h4>Afficher les Plaintes Affect??es</h4>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <span><i class="bi bi-table me-2"></i></span> Liste des Plaintes
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-striped data-table" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>Numero RP</th>
                                            <th>Nom et Prenoms</th>
                                            <th>Objet</th>
                                            <th>Date</th>

                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>0001|2022</td>
                                            <td>Adoni Kouadio</td>
                                            <td>Viole</td>
                                            <td>2011/05/03</td>

                                            <td>
                                                <button type="button" class="btn btn-primary">Voir</button>
                                                <button type="button" class="btn btn-success">PV</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>0002|2022</td>
                                            <td>Kouassi marc</td>
                                            <td>Meutre</td>
                                            <td>2011/05/03</td>

                                            <td><button type="button" class="btn btn-primary">Voir</button>
                                                <button type="button" class="btn btn-success">PV</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>0003|2022</td>
                                            <td> Kon?? ali</td>
                                            <td>racisme</td>
                                            <td>2011/05/03</td>

                                            <td><button type="button" class="btn btn-primary">Voir</button>
                                                <button type="button" class="btn btn-success">PV</button>
                                            </td>
                                        </tr>



                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Num??ro RP</th>
                                            <th>Nom et Prenoms</th>
                                            <th>Objet</th>
                                            <th>Date</th>

                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="{{ asset('js/ficher_js/bootrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="{{ asset('js/ficher_js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('js/ficher_js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/ficher_js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/ficher_js/script.js') }}"></script>
</body>

</html>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
