<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/PageAcceuil.css') }}">
    <!--importer la bibliothèque icons de boostrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

</head>

<body>
    @include('partials.header')

    @yield('content')

    @include('partials.footer')

    <script src="{{ asset('js/app.js') }}"></script>

    <!-- JavaScript Libraries -->


    <script src={{ asset('js/PageSoumettre.js') }}></script>

</body>

</html>
