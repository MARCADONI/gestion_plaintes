@extends('layouts.app')

@section('content')
    <h1>Liste des articles</h1>

    @foreach ($posts as $post)
        <h2><a href="#">{{ $post->title }}</a></h2>
    @endforeach
@endsection
