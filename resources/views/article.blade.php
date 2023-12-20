@extends('template')

@section('css')
    <link rel="stylesheet" href="style.css">
@endsection

@section('titre')
    Article
@endsection

@section('contenu')
<p>c'est l'artile numero : {{$numero}}</p>
@endsection