<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Portada</title>
    <link rel="stylesheet" href="../public/css/main.css" type="text/css">
    
</head>

<body>

    @include('barraNavegadora')
    
    <div class="c-seccion">
        <div class="c-seccion__titulo">
            <h1>National Basketball Asociation</h1>
        </div>
        <div class="c-seccion__contenido">
            <img src="{{ asset('/images/logoNBA.png') }}" alt="NBA" width=800px height=400px>
        </div>

    </div>
    

    
    
    

</body>

</html>