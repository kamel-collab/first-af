@extends('template')
@section('titre')
    list films
@endsection
@section('contenu')
     @if (session()->has('info'))
         <div class="alert alert-success">{{session('info')}}</div>
     @endif
    <div class="card">
        <a class="btn btn-outline-primary m-3" href="{{route('films.create')}}">ajouter</a>
        <header class="card-header">
            <h3>Films</h3>
        </header>
        <div class="card-body">

            <table class="tableis-hoverable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Titre</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($films as $f)
                        <tr>
                            <td>{{$f->id}}</td>
                            <td><strong>{{$f->title}}</strong></td>
                            <td><a href="{{route('films.show',$f->id)}}" class="btn btn-primary">Voir</a></td>
                            <td><a href="" class="btn btn-warning">Modifier</a></td>
                            <td>
                                <form action="{{route('films.destroy',$f->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="supprimé" class="btn btn-danger">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
        @endsection
