<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Jugador</title>
    <link rel="stylesheet" href="../css/main.css" type="text/css">
</head>

<body>

    @include('barraNavegadora')
    
    <div class="c-seccion">
        <div class="c-seccion__titulo">
            <h1>JUGADOR </h1>
        </div>
        <div class="c-seccion_contenido">
            <?php
    
                echo "<table class='c-tabla'>";
                echo "<tr>";
                echo "<th> Codigo </th>";
                echo "<th> Nombre </th>";
                echo "<th> Procedencia </th>";
                echo "<th> Altura </th>";
                echo "<th> Peso </th>";
                echo "<th> Posicion </th>";
                echo "</tr>";
                foreach($jugadorDatos as $jugador) {
                    echo '<tr>';       
                    echo '<td>' . $jugador->Codigo . '</td>';
                    echo '<td>' . $jugador->Nombre . '</td>';
                    echo '<td>' . $jugador->Procedencia . '</td>';
                    echo '<td>' . $jugador->Altura . '</td>';
                    echo '<td>' . $jugador->Peso . '</td>';
                    echo '<td>' . $jugador->Posicion . '</td>';

                    echo '</tr>';
                } 

                echo "</table>";

                echo "<table class='c-tabla'>";
                echo "<tr>";
                echo "<th> Temporada </th>";
                echo "<th> Puntos x Partido </th>";
                echo "<th> Asistencias x Partido </th>";
                echo "<th> Tapones x Partido </th>";
                echo "<th> Rebotes x Partido </th>";
                echo "</tr>";
                foreach($jugadorEstadisticas as $jugadorEst) {
                    echo '<tr>';       
                    echo '<td>' . $jugadorEst->temporada . '</td>';
                    echo '<td>' . $jugadorEst->Puntos_por_partido . '</td>';
                    echo '<td>' . $jugadorEst->Asistencias_por_partido . '</td>';
                    echo '<td>' . $jugadorEst->Tapones_por_partido . '</td>';
                    echo '<td>' . $jugadorEst->Rebotes_por_partido . '</td>';
                    echo '</tr>';
                } 

                echo "</table>";


            ?>
        </div>
    </div>

</body>

</html>