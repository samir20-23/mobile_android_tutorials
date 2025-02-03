@extends('layouts.app')

@section('content')

<div class="bg-white">
  <div class="py-5"> <h2 class="visually-hidden">Nos produits</h2>
    <div class="container bg-white">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 g-4 py-4">
        @foreach ($products as $product)
        <div class="col">
          <a href="#" class="card h-100 text-decoration-none">
            <img src="https://images.unsplash.com/photo-1493799582117-9a58bc07a8de?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="card-img-top img-fluid object-fit-cover" style="height: 250px;">
            <div class="card-body d-flex space-between">
              <h3 class="card-title fs-6 text-dark">{{ $product->name }}</h3>
              <p class="card-text fs-5 fw-bold text-dark">{{ $product->price }}</p>
            </div>
          </a>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>

  
  </div>
</div>
@once
@endonce

@endsection
