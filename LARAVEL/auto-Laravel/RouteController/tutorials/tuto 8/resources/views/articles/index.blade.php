@extends('layouts.app')

@section('content')
@include('partials.flash-message')
<button ><a href="/articles/create" class="btn btn-primary">Créer un nouvel article</a></button>

<h1 class="article-card">Liste des Articles</h1>
 
    <ul>
        @foreach($articles as $article)
            <li>
                {{$article['title']}}
                <p>
                    {{ $article['content'] }}
                </p>
                <x-article-card :article="$article" />
                
                <button ><a href="/articles/{{$article['id']}}" class="btn btn-primary">Afficher details</a></button>
            </li>
        @endforeach
    </ul>
       
@endsection

@section('sidebar')
    <h3>Catégories</h3>
    <ul>
        <li>Laravel</li>
        <li>PHP</li>
        <li>Programmation Web</li>
    </ul>
@endsection

