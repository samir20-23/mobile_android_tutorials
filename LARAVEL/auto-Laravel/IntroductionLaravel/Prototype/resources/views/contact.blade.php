@extends('layouts.app')

@section('content')

@if(session('success'))
    <p class="alert alert-success" role="alert">{{ session('success') }}</p>
@endif
<div class="container full-height d-flex justify-content-center align-items-center p-5">
 
<form method="POST" action="{{ url('/contact') }}"  class="w-50">
    @csrf
    <h3>Contactez nous !</h3>
    <div class="form-outline mb-4">
        <label for="name" class="form-label">Nom :</label>
        <input class="form-control" type="text" name="name" id="name" required>
    </div>
    <div class="form-outline mb-4">
        <label for="email" class="form-label">Email :</label>
        <input class="form-control" type="email" name="email" id="email" required>
    </div>
    <div class="form-outline mb-4">
        <label for="message" class="form-label">Message :</label>
        <textarea class="form-control" id="message" name="msg" id="message" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
</div>

@endsection 
