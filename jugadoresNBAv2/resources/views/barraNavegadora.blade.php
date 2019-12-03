<!-- <div class="c-seccion c-seccion--background-color-blanco">
    <div class="c-seccion__contenido">
        <div class="c-menu">
            <a href="{{ action('PagesController@index') }}"><div class="c-menu__elemento">Inicio</div></a>
            <a href="{{ action('PagesController@historia') }}"><div class="c-menu__elemento">Historia</div></a>
            <a href="{{ action('PagesController@jugadores') }}"><div class="c-menu__elemento">Jugadores</div></a>
        </div>
    </div>
</div> -->

<!-- <script src="../public/js/barraNavegadora.js"></script> -->

<script src="{{ asset('/js/barraNavegadora.js') }}"></script>

<!--<script src="{{ url('/js/barraNavegadora.js') }}"></script>-->

<div class="c-seccion c-seccion--background-color-negro">
    <div class="c-seccion__contenido">
        <div class="c-menu">
            <div class="c-menu__elemento">
                <a class="c-menu__enlace" href="{{ action('PagesController@index') }}">Inicio</a>
            </div>
            <div class="c-menu__elemento">
                <a class="c-menu__enlace" href="{{ action('PagesController@historia') }}">Historia</a>
            </div>
            <div class="c-menu__elemento">
                <a class="c-menu__enlace" href="{{ action('PagesController@jugadores') }}">Jugadores Lakers</a>
            </div>
            <div class="c-menu__elemento">
                <button onclick="myFunction()" class="dropbtn">Equipos</button>
                <div id="myDropdown" class="dropdown-content">

                    <?php
                        $equipos = \DB::table('equipos')->select('Nombre')->get();
                        foreach ($equipos as $equipo) {
                            echo '<a href= "../public/equipo/'. $equipo->Nombre .'">' . $equipo->Nombre . '</a>';
                        }
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>