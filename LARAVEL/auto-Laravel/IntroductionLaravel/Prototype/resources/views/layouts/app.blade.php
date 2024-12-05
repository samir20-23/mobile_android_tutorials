<!DOCTYPE html>

<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Prototype</title>
</head>
<body>
    <header>
<!-- nav bar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary bg-color- ">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{url('/')}}">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Accueil</a>
        </li>
       <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('/about') }}">A propos</a>
        </li>
        </li>       
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('/contact') }}">Contact</a>
        </li>
        
      </ul>
     
    </div>
  </div>
</nav>
    </header>

<!-- content -->
    @yield('content')

<!-- footer -->
<footer class="bg-body-tertiary text-center text-lg-start">

  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2024 Copyright:
  </div>
 
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>