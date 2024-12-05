@extends('layouts.app')

@section('content')
<h1>Article {{$article['id']}}</h1>

    <form action="/articles/{{$article['id']}}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Titre :</label>
        <input type="text" name="title" value="{{$article['title']}}" required>
        <label for="content">Contenu :</label>
        <textarea name="content" required>{{$article['content']}}</textarea>
        <button type="submit">Edit</button>
    </form>
@endsection