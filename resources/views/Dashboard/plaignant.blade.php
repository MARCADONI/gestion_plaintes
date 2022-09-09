<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/Style_dash_plaignant.css') }}" />
    <title>Profile plaignant</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-success" id="sidebar-wrapper">
            <div class="sidebar-heading primary-text fw-bold  border-bottom"><i
                    class="fas fa-user-secret me-2"></i>Espace Plaignant</div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text"><i
                        class="fas fa-home me-2"></i>Acceuil</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-clipboard-list me-2"></i>>Nouvelle plainte</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-chart-line me-2"></i>Statistique</a>
                <a href="{{ route('contacts') }}"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-id-card me-2"></i>Contactez-nous</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-user-edit me-2"></i>Mes infos</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-warehouse me-2"></i>Mes recours</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-list-ol me-2"></i>Mes plaintes</a>

            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Afficher mes plaintes</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>{{ Auth::user()->plaignant->nom }}
                                {{ explode(' ', Auth::user()->plaignant->prenoms)[0] }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Plaignant</a></li>

                                <li><a class="dropdown-item" href="#">
                                        <form action="{{ route('logout') }}" method="post">
                                            @csrf
                                            <button class="dropdown-item" type="submit"> <i
                                                    class="fas fa-power-off"></i> Se déconnecter</button>
                                        </form>
                                    </a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">


                <div class="row my-5">
                    <h3 class="fs-4 mb-3">Liste des plaintes</h3>
                    <div class="col">
                        <table class="table table-responsive table-bordered">
                            <thead>
                                <tr style="background-color: rgb(255, 168, 6)">
                                    <th scope="col">Numero de la plainte</th>
                                    <th scope="col">Nom et Prénoms</th>
                                    <th scope="col">Objet</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Statue</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (App\Models\Plainte::all() as $plainte)
                                    <tr>
                                        <td>{{ $plainte->numéro_rp }}</td>
                                        <td>{{ $plainte->plaignant->nom . ' ' . $plainte->plaignant->prenoms }}</td>
                                        <td>{{ $plainte->objet }}</td>
                                        <td>{{ $plainte->created_at }}</td>
                                        <td></td>
                                        <td><a class=" d-flex justify-content-center"
                                                href="{{ route('plainte.show', $plainte->id) }}"><span
                                                    style="color: red" class=""><i
                                                        class="fas fa-eye"></i></span></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function() {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>
