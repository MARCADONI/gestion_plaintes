@extends('layouts.app1')

@section('content')
    <div
        class="bg-image"style="background-image: url(https://www.communautesaintmartin.org/wp-content/uploads/2018/04/Justice-Photo.jpg); height:100vh;background-size:cover;background-position:center">
        <div class="jumbotron jumbotron-fluid mb-5">
            <div class="container text-center py-5">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-9">
                        <h1 class="text-success mb-4 " style="font-size: 30px; font-weight:bold!important">BIENVENUE
                            SUR LA PLATEFORME DE DEPOT DE PLAINTE AU TRIBUNAL
                            DE PREMIERE
                            INSTANCE
                            DE
                            YOPOUGON</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5"></div>
                    <div class="col-md-7">
                        <h4 class="text-light" style="font-size: 20px; font-weight:bold!important">
                            AVEZ - VOUS DEJA SOUMIS UNE PLAINTE ?
                            <ul class="my-2">
                                <li>Si oui, vous devez vous connecter pour accéder à votre espace afin de soumettre une
                                    autre
                                    plainte.</li>
                                <li>Si non, cliquez sur « Soumettre plainte » pour transmettre une nouvelle plainte.
                                </li>
                            </ul>
                        </h4>


                    </div>
                </div>


            </div>

        </div>
    </div>
@endsection
