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
    <!--importer la bibliothèque icons de boostrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">


</head>

<body>

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


</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>

@livewireScripts

</html>
