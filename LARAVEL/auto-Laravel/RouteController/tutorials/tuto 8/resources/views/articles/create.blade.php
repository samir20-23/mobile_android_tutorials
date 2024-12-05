@extends('layouts.app')

@section('content')
    <h1> un Article</h1>
    <form action="/articles" method="POST" class="form">
        @csrf
        @if(isset($article))
            @method('PUT')
        @endif
        <label for="title">Titre :</label>
        <input type="text" name="title" value="" required>
        <label for="content">Contenu :</label>
        <textarea name="content" required></textarea>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
@endsection