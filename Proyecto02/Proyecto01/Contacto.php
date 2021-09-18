<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/Contacto.css">
</head>
<body>
    <!-- -->
	<!-- seccion del nav bar-->
	<div>
		<nav>
			<div id="contenedor-ul" class="nav-wrapper">
				<ul id="cont-li" class="left">
					
					<li><img id="logo" src="imgs/Vidriria_Mana.jpg" alt="logo"></li>
					<div id="item-li">
					<li id="right-item"><a href="index.html"><strong>Inicio</strong></a></li>
					<li id="right-item"><a href="Nosotros.html"><strong>Nosotros</strong></a></li>
					<li id="right-item"><a href="Contacto.html"><strong>Contacto</strong></a></li>
				<!-- <li id="right-item"><a href="Producto.html"><strong>Producto</strong> </a></li>-->
					<li id="right-item"><a href="Catalogo.html"><strong>Catalogo</strong></a></li>
				</div>
				</ul>
			</div>
		</nav>

	</div>
    <!-- seccion del nav bar-->
    <!--titulo de la pagina  -->
    <div class="titulo">
        <h1>Nuestros Contactos</h1>
    </div>
    <div class="row">
    <form method="post" class="col s12">
                    <div class="row">
                    <div class="input-field col s6">
                      <i class="material-icons prefix">account_circle</i>
                      <input id="first_name" type="text" name="nombre"  class="validate">
                     <label for="first_name">Nombre</label>
                    </div>
                    <div class="input-field col s6">
                      <i class="material-icons prefix">account_circle</i>
                      <input id="last_name" type="text"  name="apellido" class="validate">
                      <label for="last_name">Apellido</label>
                    </div>
                     <div class="input-field col s6">
                          <i class="material-icons prefix">email</i>
                          <input id="correo" type="text"  name="correo" class="validate">
                          <label for="correo">Correo</label>
                        </div>
                        <div class="input-field col s6">
                          <i class="material-icons prefix">phone</i>
                          <input id="numero" type="text"  name="numero" class="validate">
                          <label for="numero">Numero</label>
                        </div>
                        <div class="input-field col s6">
                         <i class="material-icons prefix">messaje</i>
                          <textarea name="mensaje" cols="30" rows="10"></textarea>
                          <label for="mensaje">Mensake</label>
                        </div>
                        <div class="input-field col s6">
                         <button class="waves-effect btn" name="enviar" type="submit"><i class="material-icons">send</i>Enviar</button>
                        </div>
          </div>
        </form>
    <?php 
    require("email.php");
    ?>
      </div>
    <div class="contendor_contactos">
        <div class="red1" ><a href="#"id="link_red" class="waves-effect blue lighten-3 btn"><h3>FACEBOOK</h3></a></div>
        <div class="red2" ><a href="#"id="link_red" class="waves-effect blue lighten-3 btn"><h3>WHATSAPP</h3></a></div>
        <div class="red3" ><a href="#"id="link_red" class="waves-effect blue lighten-3 btn"><h3>INSTAGRAM</h3></a></div>
    </div>
    
</body>
<script src="js/materialize.js"></script>
</html>