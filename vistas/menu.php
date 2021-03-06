<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

	<nav class="navbar navbar-default" role="navigation">
	  <!-- El logotipo y el icono que despliega el menú se agrupan
	       para mostrarlos mejor en los dispositivos móviles -->
	  <div class="navbar-header">
	    <button type="button" class="navbar-toggle" data-toggle="collapse"
		    data-target=".navbar-ex1-collapse">
	      <span class="sr-only">Desplegar navegación</span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </button>
	    <a class="navbar-brand  logo-nav" rel="home" href="/index.php" title="Proyectos Juandows"><img src="/img/logo.jpg" alt="Juandows" class="img-responsive img-thumbnail"></a>
	  </div>
	 
	  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
	       otro elemento que se pueda ocultar al minimizar la barra -->
	  <div class="collapse navbar-collapse navbar-ex1-collapse">
	    <ul class="nav navbar-nav">
	      <li class="dropdown active">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
		  Edificio Sol <b class="caret"></b>
		</a>
		<ul class="dropdown-menu">
		  <li><a href="/index.php?/sol/cuotas2014">Cuotas 2014</a></li>
		  <li><a href="/index.php?/sol/IBI2000_2014">IBI 2000-2014</a></li>
		  <li><a href="#">Acción #3</a></li>
		  <li class="divider"></li>
		  <li><a href="#">Acción #4</a></li>
		  <li class="divider"></li>
		  <li><a href="#">Acción #5</a></li>
		</ul>
	      </li>
	      <li><a href="#">Enlace #2</a></li>
	      <li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
		  Menú #1 <b class="caret"></b>
		</a>
		<ul class="dropdown-menu">
		  <li><a href="#">Acción #1</a></li>
		  <li><a href="#">Acción #2</a></li>
		  <li><a href="#">Acción #3</a></li>
		  <li class="divider"></li>
		  <li><a href="#">Acción #4</a></li>
		  <li class="divider"></li>
		  <li><a href="#">Acción #5</a></li>
		</ul>
	      </li>
	    </ul>
	 
	    <form class="navbar-form navbar-left" role="search">
	      <div class="form-group">
		<input type="text" class="form-control" placeholder="Buscar">
	      </div>
	      <button type="submit" class="btn btn-default">Enviar</button>
	    </form>
	 
	    <ul class="nav navbar-nav navbar-right">
	      <li><a href="#">Enlace #3</a></li>
	      <li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
		  Menú #2 <b class="caret"></b>
		</a>
		<ul class="dropdown-menu">
		  <li><a href="#">Acción #1</a></li>
		  <li><a href="#">Acción #2</a></li>
		  <li><a href="#">Acción #3</a></li>
		  <li class="divider"></li>
		  <li><a href="#">Acción #4</a></li>
		</ul>
	      </li>
	    </ul>
	  </div>
	</nav>

