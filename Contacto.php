<!DOCTYPE html>
 <html lang="es">
 <head>
    <link rel="stylesheet" href="sty.css">
    <script src="validacion.js"></script>
    <title>formulario</title>
 </head>
 <body>
   <h1><center>Mi Biografia</h1></center>
   <form method="POST" action="registrar.php" Alta onsubmit= "return validar()" ;>
    <section class="form-register">
     <h4>Contacto</h4>
     <input class="controls" type="text" name="nombre" id="nombre" placeholder="Ingrese su Nombre (solo M+)" pattern="[A-Z]+" required>
     <input class="controls" type="text" name="telefono" id="telefono" placeholder="Ingrese su Telefono +52" minlength="10" maxlength="10" required >
     <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su Correo ..@..." required>
     <input class="controls" type="comentarios" name="comentarios" id="comentarios" placeholder="Comentarios (solo M+)" pattern="[A-Z]+" required >
     <input class="botons" name="register" type="submit" value="Registrar">
     
     </selection>
     <h1><p> Ingresar a la bio de Danna</p></h1>
     <a href="Bienvenido.html">Entrar</a>
   </form>
   <?php
   include("registrar.php");
   ?>
 </body>
 </htmL> 