<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atelier</title>
</head>
<body>
    <!-- afficher data -->
     {{-- comments --}}
    <h1>Hello {{ $name}}</h1>
    <p>the currnt time is : {{ time() }}</p>

    <!-- coding html -->
    {{ '<script>alert("XSS")</script>' }}

    <!-- blade and js framework -->
     <h1>blade and js framework</h1>
    <h1>Hello @{{ name}}</h1>
   

   
    <!-- rendering json -->
     <h1>rendering json</h1>
    <script>
    //{{-- var app = <?php echo json_encode($array); ?> --}} ;
    //var app = {{ Illuminate\Support\Js::from($array) }};
    var app = {{ Js::from($array) }};
    console.log(app)
    let name = "John Doe"
    </script>
    
    <!-- @verbatim -->
    @verbatim
    <script>
        var userName = "{{ userName }}";  // Ceci ne sera pas interprété par Blade
        console.log("Hello, " + userName);
    </script>
    @endverbatim

    @php
    $isActive = false;
    $hasError = true;
@endphp
<div>
    <span @class([
        'p-4',
        'font-bold' => $isActive,
        'text-gray-500' => ! $isActive,
        'bg-red' => $hasError,
        ])>erreur
    </span>
 
    <span class="p-4 text-gray-500 bg-red">erreur</span>
</div>

</body>
</html>