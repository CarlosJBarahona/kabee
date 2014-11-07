<!DOCTYPE html>
<html lang="es">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contacto</title>

  <?php
  include("scripts.php")
  ?>

  
</head>
<body>
  <?php
  include("template/menu.html");
  ?>  
  <div class="contenidocontac "><!--contenedor-->
   <div class="headercontactos visible-md visible-lg">

    <div class="contmensajecontactos  col-md-push-3 col-lg-push-3 col-md-6 col-lg-6 ">

      <div class="mensajecontactos col-md-12 col-lg-12">
        <div class="col-md-push-1 col-lg-push-1 col-md-10 col-lg-10"> 
          <h5 class="titulocontactos">¡CONTACTANOS!</h5>
          <h5 class="infocontactos">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, </h5>
          </div>
        </div>

      </div>

    </div>
    <div class="headercontactos visible-sm ">

      <div class="contmensajecontactos col-sm-push-3 col-sm-6 ">

        <div class="mensajecontactos col-sm-12">
          <div class=" col-sm-12">
            <h5 class="titulosmcontactos">¡CONTACTANOS!</h5>
            <h5 class="infosmcontactos">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
             Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, </h5>
           </div>
         </div>

       </div>

     </div>
     <div class="headercontactos visible-xs ">

      <div class="contmensajecontactos   col-xs-push-2 col-xs-8">

        <div class="mensajecontactos col-xs-12">

          <h5 class="tituloxscontactos">¡CONTACTANOS!</h5>
          <h5 class="infoxscontactos">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
           Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, </h5>

         </div>

       </div>

     </div>
     <div class="col-sm-push-1 col-md-push-2 col-lg-push-2 col-sm-8 col-md-7 col-lg-8 contformulario">

<div class="formcont">

       <div class="conttextdatos">
        <div class="textdatos ">
          <div class="datos">NOMBRE</div>
          <div class="datos">E-MAIL</div>
          <div class="datos">ASUNTO</div>
          <div class="datos">MENSAJE</div>
        </div><!--conttextdatos-->
     </div>
    
    <div class="formulario">

      <form metod="POST" action="">
            <input class="nombre" type="text" name="nombre" id="nombre">
            <input class="mail" type="text" name="email" id="email">
            <input class="asunt" type="text" name="asunto" id="asunto">  
            <textarea class="mensajeform" name="mensaje" ></textarea>
            <input class="enviarbtn" type="submit" value="ENVIAR" id="botonenviar">
        </form>

    </div>

</div>

  </div><!--contformulario-->



</div><!--contenedor-->


<?php
include("template/footer.html");
?>  
</body>
</html>