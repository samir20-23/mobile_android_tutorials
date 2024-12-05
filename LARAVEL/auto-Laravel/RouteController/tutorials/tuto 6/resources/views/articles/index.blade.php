@extends('layouts.app')

@section('content')

<button><a href="/articles/create">Créer un nouvel article</a></button>

<h1>Liste des Articles</h1>
 
    <ul>
        @foreach($articles as $article)
            <li>
                {{$article['title']}}
                <p>
                    {{ $article['content'] }}
                </p>
                <button><a href="/articles/{{$article['id']}}">Afficher details</a></button>
            </li>
        @endforeach
    </ul>
       
@endsection

