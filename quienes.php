
<!DOCTYPE html>
<html lang="es">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Quienes somos</title>
<?php
include("scripts.php")
?>


      <script type="text/javascript">



    $(document).ready(function() {
     
    var owl = $("#owl-demo");
     
    owl.owlCarousel({
    items : 2, //10 items above 1000px browser width
    itemsDesktop : [1000,2], //5 items between 1000px and 901px
    itemsDesktopSmall : [900,2], // betweem 900px and 601px
    itemsTablet: [600,2], //2 items between 600 and 0
    itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
    });
     
    // Custom Navigation Events
    $(".next").click(function(){
    owl.trigger('owl.next');
    })
    $(".prev").click(function(){
    owl.trigger('owl.prev');
    })
     
    });



      </script>

    </head>
    <body>
      <?php
      include("template/menu.html");
      ?>  
  <div class="contenidoquienes"><!--contenedor-->
    <div class="headerquienes visible-md visible-lg">

      <div class="contmensajequienes  col-md-push-3 col-lg-push-3 col-md-6 col-lg-6 ">

        <div class="mensajequienes col-md-12 col-lg-12">

          <h5 class="tituloqlg">¿QUIENES SOMOS?</h5>
          <h5 class="infoqlg">Kabee nace del amor a los colores y a los materiales organicos que los sabios artesanos en los que sus corazones expresan atraves de sus manos y de la historia que han escuchado y preservan por muchas generaciones</h5>

        </div>

      </div>

    </div>
    <div class="headerquienes visible-sm ">

      <div class="contmensajequienes col-sm-push-3 col-sm-6 ">

        <div class="mensajequienes col-sm-12">

          <h5 class="tituloqsm">¿QUIENES SOMOS?</h5>
          <h5 class="infoqsm">Kabee nace del amor a los colores y a los materiales organicos que los sabios artesanos en los que sus corazones expresan atraves de sus manos y de la historia que han escuchado y preservan por muchas generaciones</h5>

        </div>

      </div>

    </div>
    <div class="headerquienes visible-xs ">

      <div class="contmensajequienes col-xs-12">

        <div class="mensajequienes col-xs-12">

          <h5 class="tituloqxs">¿QUIENES SOMOS?</h5>
          <h5 class="infoqxs">Kabee nace del amor a los colores y a los materiales organicos que los sabios artesanos en los que sus corazones expresan atraves de sus manos y de la historia que han escuchado y preservan por muchas generaciones</h5>

        </div>

      </div>

    </div>
<div class="infoquien">
<img class="flechaquienes" src="img/quienes/flecha.png">
<div class="visible-sm visible-md visible-lg  col-md-push-2 col-lg-push-2  col-sm-12 col-md-8 col-lg-8 textquien2 textquien" >
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. 
pus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo.  </p>
</div><!--textquiens-->
<div class="visible-xs col-xs-12 textquien2xs" >
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. 
pus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo.  </p>
</div><!--textquiens-->
</div><!--infoquien-->

 <img class="imgquienes img-responsive" src="img/quienes/2.jpg"> 

 <div class="textnaranja">
<div class="visible-sm visible-md visible-lg col-md-push-2 col-lg-push-2  col-sm-12 col-md-8 col-lg-8 textquien2 textquien2" >
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. 
pus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo.  </p>
 </div><!--textquien2-->
<div class="visible-xs col-xs-12 textquien2xs" >
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. 
pus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo.  </p>
</div><!--xs-->

  </div><!--contenedor-->
<div class="contfoter">
<?php
include("template/footer.html");
?>  
</div>
</body>
</html>