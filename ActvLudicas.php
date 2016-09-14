<html>
<head>
<head>
  <title>Un proyecto sin Nombre</title>
  <link rel="stylesheet" href="Estilos.css">
  <meta charset="UTF-8">
</head>

<body>



<header>

<span class="classy"><INPUT type="text" placeholder="Contraseña"></span>
<span class="classy"><input type="email" placeholder="Correo Electronico"></span>

<p> </p>


<div class="grad-nex">
</div>
	<nav>
	

	
	<ul id="menu">
			<li class="dropdown"><a  href="ActvLudicas.php" class="hvr-underline-from-right" >Inicio</a>
		
<ul class="dropdown-content">
<li><a href"#"> Mision </a> </li>
<li><a href"#"> vision </a> </li>
<li><a href"#"> Valores </a> </li>
</ul>
</li>

		<li class="dropdown"><a href="#" class="hvr-underline-from-right">Tutoriales</a>
<ul class="dropdown-content">
<li><a href"#"> ¿Como usar el leap motion? </a> 
<li><a href"#"> Conceptos </a> 
<li><a href"#"> Puntaje </a> 
</ul>			
</li>
			<li ><a href="cursos.php" class="hvr-underline-from-right">Cursos</a></li>
			<li class="dropdown"><a href="#" class="hvr-underline-from-right">Preguntame algo</a>
			<ul class="dropdown-content">
			<li><a href="ventas.php" class="boton">Comprar</a>
			</ul>			
</li>
			
			<li><a href="#" class="hvr-underline-from-right">Contacto</a></li>
			</ul>			
</li>
		</ul>
		
	</nav>
<img id="destacada" src="logo.png" />	
	</header>

<section class="contenido wrapper">
    <div class="contenido wrapper inicio">
	
	
            <div id="slide">
	
	<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="leap3.png" style="width:100%;height:320px">

  <img class="mySlides" src="esta.png" style="width:100%;height:320px">
  <img class="mySlides" src="robots.png" style="width:100%;height:320px">
</div>
</div>

	
	
	
	
	
	
	
	
            <div class="contenido wrapper inicio iniciox">
        <h1>Leap Motion</h1>
<p>Software de actividades ludicas</p>
<a href="ventas.php" class="boton">Comprar</a>
    </div>
    </div>
</section>
    <section class="contenido wrapper">
    <div class="contenido wrapper contacto">
            <div class="contenido wrapper inicio contacto">
        <h1></h1>
<p>Contacto:<br>
carlos_rc97@outlook.es <br> brendasamant@hotmail.com</p>
    </div>
    </div>
</section>

















<script>


var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>





</body>

  
  
</html> 