<?php
class CDefault {

public function default_action()
{
    $container =
     '<div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1>Bienvenidos a mi página!</h1>
                <p>Aquí podrás ver mis poryectos personales. Prueba a redimiensinar el 
	    navegador y comprobará como se adapta el diseño al nuevo tamaño.</p>
	  <p><a class="btn btn-primary btn-large">Más información</a></p>
	<ol>
	  <li>Firefly</li>
	  <li>Otra serie...</li>
	</ol>

            </div>
        </div>

    </div>
    <!-- /.container -->';


    require('vistas/default/default.php');
}

};

$default = new CDefault();
