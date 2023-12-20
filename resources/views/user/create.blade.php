@extends('template')

@section('css')
    <link rel="stylesheet" href="style.css">
@endsection

@section('titre')
    Ajouter un utilisateur
@endsection

@section('contenu')
<script>print()</script>
    <h3>add user</h3>
    <form action="{{ url('users') }}" method="POST">
        @csrf
        <label for="nom">Entrez votre nom : </label>
        <input type="text" name="nom" id="nom" value="{{old("nom")}}">
        @error('nom')
            {{ $message }}
        @enderror
        <br>
        <label for="email">Entrez votre email : </label>
        <input type="text" name="email" value="{{old("email")}}" id="email">
        @error('email')
            {{ $message }}
        @enderror
        <br>
        <input type="submit" value="Envoyer !">
    </form>
@endsection
