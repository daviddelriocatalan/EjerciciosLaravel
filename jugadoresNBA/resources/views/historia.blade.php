<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Historia</title>
    <link rel="stylesheet" href="../public/css/main.css" type="text/css">
</head>

<body>

    @include('barraNavegadora')
    
    <div class="c-seccion">
        <div class="c-seccion__titulo">
            <h1>HISTORIA DE LA NBA</h1>
        </div>
        <div class="c-seccion__contenido">
            <?php
                $contador = 0;

                foreach ($datos as $dato) {
                    echo "<h3>";
                    echo $dato;
                    echo "</h3>";
                    
                        
                    echo "<p>";
                    echo $descripciones[$contador];
                    echo "</p>";

                    $contador = $contador + 1;       
                }
            ?>
        </div>
    </div>
    

    

</body>

</html>