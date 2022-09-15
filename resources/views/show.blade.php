<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    <div class="container-fluid" id="grad1">
        <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-11 col-md-10 col-lg-9 text-center p-0 mt-3 mb-2 w-75">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <h2><strong>DETAILS ET SUIVI DE LA PLAINTE</strong></h2>
                    <p></p>
                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <fieldset>
                                <div class="form-card">


                                    <div class="" id="">
                                        <div class="col-xs-12 col-md-12">
                                            <!-- -->
                                            <h2 class="fs-title my-3" style="text-align: center">Niveau de traintement
                                            </h2>
                                            <div class="row" style="background-color:#FF9933;">
                                                <div class="col-md-2">
                                                    <h5>Ouverte:</h5>
                                                    {{ $plainte->updated_at }}
                                                </div>
                                                <div class="col-md-2">
                                                    <h5>Statue:</h5>
                                                </div>
                                                <div class="col-md-2">
                                                    <h5> Debut de l'Enquete judiciaire</h5>
                                                </div>
                                                <div class="col-md-2">
                                                    <h5>Fin de l'Enquete judiciaire </h5>
                                                </div>
                                                <div class="col-md-2">
                                                    <h5>En attente de la orientation</h5>
                                                </div>
                                                <div class="col-md-2">
                                                    <h5>Terminer</h5>
                                                </div>

                                            </div>
                                            <!---->
                                            <h2 class="fs-title my-3" style="text-align: center">Information du
                                                plaignant
                                            </h2>
                                            <div class="row ">
                                                <div class="col-md-3">
                                                    <h5>Nom et prenoms:</h5>
                                                    {{ $plainte->plaignant->civilite . '' . $plainte->plaignant->nom . ' ' . $plainte->plaignant->prenoms }}
                                                </div>

                                                <div class="col-md-3">
                                                    <h5>Adress geo</h5>
                                                    {{ $plainte->plaignant->address_geo }}
                                                </div>
                                                <div class="col-md-3">
                                                    <h5>Numero de telephone</h5>
                                                    {{ $plainte->plaignant->num_phone2 }}
                                                </div>
                                                <div class="col-md-3">
                                                    <h5>Email</h5>
                                                    {{ $plainte->plaignant->email }}
                                                </div>

                                            </div>
                                            <!---->
                                            <h2 class="fs-title my-3" style="text-align: center">Information du mis en
                                                cause
                                            </h2>
                                            <div class="row ">
                                                <div class="col-md-4">
                                                    <h5>Nom et prenoms:</h5>
                                                    {{ $plainte->nom_susp . '' . $plainte->prenom_susp }}
                                                </div>

                                                <div class="col-md-4">
                                                    <h5>Adress geo</h5>
                                                    {{ $plainte->docimile_susp }}
                                                </div>
                                                <div class="col-md-4">
                                                    <h5>Contact</h5>
                                                    {{ $plainte->contact_susp }}
                                                </div>

                                            </div>
                                            <!---->
                                            <h2 class="fs-title my-3" style="text-align: center">Details du prejudice
                                            </h2>
                                            <div class="row bg-success">
                                                <div class="col-md-6">
                                                    <h5>Ojet:</h5>
                                                    {{ $plainte->objet }}
                                                </div>

                                                <div class="col-md-6">
                                                    <h5>Date du prejudice:</h5>
                                                    {{ $plainte->date_prejudice }}
                                                </div>

                                            </div>
                                            <div class="row bg-success">
                                                <div class="col-md-12">
                                                    <h5>Description</h5>
                                                    {{ $plainte->detaille_prejudice }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
