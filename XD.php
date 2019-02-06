<!doctype html>
  <?php 
  mb_internal_encoding("UTF-8");
  $respuesta = "";
  try {
    $autor = trim(filter_input(INPUT_GET, "autor"));
    $libro = trim(filter_input(INPUT_GET, "libro"));
    if (!$autor) {
      throw new Exception("Falta El Autor");
    } elseif (!$libro) {
      throw new Exception("Falta El Titulo");
    }
    $respuesta = "Se encontro a $autor y el titulo de $libro ";
  } catch (Exception $e) {
    $respuesta = $e->getMessage();
  }
  $autorEsc = htmlentities($autor, ENT_QUOTES | ENT_HTML5, 'UTF-8');
  $libroEsc = htmlentities($libro, ENT_QUOTES | ENT_HTML5, 'UTF-8');
  $respuestaEsc = htmlentities($respuesta, ENT_QUOTES | ENT_HTML5, 'UTF-8');
  ?>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta charset="iso-8859-1">
		<meta name="description">
		<meta name="keywords" content="HTML5, CSS3, JavaScript">
		<title>Aplicación Web 1</title>
		<link rel="shortcut icon" href="Recursos/wolf.ico" />
		<link rel="stylesheet" href= "CSS/pag.css">
	</head>
	<body>
		<div id="agrupar">
			<header id="cabecera">
				<hgroup>
					<h1>Biblio Tec  </h1>
					<h2>» » » Tu Mejor Opción« « «</h2>
				<div class="der">
					<a href="http://www.utn.edu.mx/"><img src="IMAGENES/utn.gif" class="imagen4"></a>
				</div>
				</hgroup>
			</header>
			<section>
				<nav id="menu">
					<ul class="nave">
            <li> <a href="index.html"> <h2>Inicio</h2> </a> </li>
            <li> <a href="AS.PHP"> <h2>Busqueda de Bibliotecas</h2> </a></li> 
            <li> <a href="indexserv.html"><h2>Busqueda Avanzada</h2></a></li>
					</ul>
        </nav>
      </section>
			<section id="seccion">
				<br>
      <img class="imagen5" src="IMAGENES/nig.png"/>
      <br>
      <br>
            <h2>Busca Algún Libro Disponible Por Autor y Titulo</h2>
                  <br>  
    <form>
      <p>
        <center>
        <input type="text" name="autor" placeholder="Autor"
                accesskey="1" value="<?= $libroEsc ?>">
      </p>
      <p>
        <br>
        <center>
        <input type="text" name="libro" placeholder="Titulo"
                accesskey="2" value="<?= $libro1Esc ?>">
      </p>
      <br>
      <p>
        <center>
        <button type="submit">Buscar</button>
      </p>
      <br>
      <br>
            <p>
              <center>
       <h2> <output><?= $respuestaEsc ?></output></h2>
      </p>
			</section>
			<aside id="columna">
			<a href="index.html"> <img class="imagen6" src="IMAGENES/v.png" /></a>
			</aside>
			<aside id="columna">
				<h4> Redes sociales </h4><br>
				<h2>Facebook</h2>
				<a href="https://www.facebook.com"> <img  class="imagen4" src="IMAGENES/f.png" /></a>
				<br><br><h2>Instagram</h2><br>
				<a href="https://www.instagram.com/yoyo_y_yo_/"> <img  class="imagen4" src="IMAGENES/i.png" /></a>
				<br><br><h2>Twitter</h2>
				<a href="https://twitter.com/"> <img class="imagen4" src="IMAGENES/t.png" ></a>
			</aside>
			<footer id="pie">
				Derechos reservados Nigthwolf Tec &copy; 2019
			</footer>
		</div>
	</body>
</html>
