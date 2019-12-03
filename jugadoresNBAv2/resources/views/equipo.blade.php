<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Jugadores</title>
    <link rel="stylesheet" href="../css/main.css" type="text/css">
</head>

<body>

    @include('barraNavegadora')
    
    <div class="c-seccion">
        <div class="c-seccion__titulo">
            <h1>JUGADORES EQUIPO</h1>
        </div>
        <div class="c-seccion__contenido">
            <?php
                //var_dump($jugadores);

                echo "<table class='c-tabla'>";
                echo "<tr>";
                echo "<th> Codigo </th>";
                echo "<th> Nombre </th>";
                echo "<th> Procedencia </th>";
                echo "<th> Altura </th>";
                echo "<th> Peso </th>";
                echo "<th> Posicion </th>";
                echo "</tr>";

                foreach($jugadoresEquipo as $jugador) {
                    echo '<tr>';       
                    echo '<td>' . '<a href= "../jugador/'. $jugador->Codigo .'">' . $jugador->Codigo . '</a>' . '</td>';
                    echo '<td>' . $jugador->Nombre . '</td>';
                    echo '<td>' . $jugador->Procedencia . '</td>';
                    echo '<td>' . $jugador->Altura . '</td>';
                    echo '<td>' . $jugador->Peso . '</td>';
                    echo '<td>' . $jugador->Posicion . '</td>';

                    echo '</tr>';
                } 

                echo "</table>";
            ?>
        </div>
    </div>

</body>

</html>