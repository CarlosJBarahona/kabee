
<!DOCTYPE html>
<html lang="es">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>inicio</title>
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
      <div class="imagenhome"><img class="imagenhome img-responsive" src="img/home/foto_header.jpg"><div class="linetriangulos"></div></div>
      <div class="artesanos"><!--artesanos-->
        <div class="flechaart"><img class="artflecha" src="img/home/flecha.png"></div>
        <div class="textartg"><h3>ARTESANOS</h3></div>
        <div class="lineart"></div>
        <div class="textart"><h5>THIS PHOTOSHOP VERSION</h5></div>
      </div><!--artesanos-->

     
 <div id="owl-demo" class="owl-carousel owl-theme"><!--Slider-->

  <div class="item imgart"><img  src='img/home/artesano1.jpg' alt="Owl Image"></div>
  <div class="item imgart"><img  src='img/home/artesano2.jpg' alt="Owl Image"></div>
  <div class="item imgart"><img  src='img/home/artesano1.jpg' alt="Owl Image"></div>
  <div class="item imgart"><img  src='img/home/artesano2.jpg' alt="Owl Image"></div>
  <div class="item imgart"><img  src='img/home/artesano1.jpg' alt="Owl Image"></div>
  <div class="item imgart"><img  src='img/home/artesano2.jpg' alt="Owl Image"></div>

</div><!--Slider-->
<div class="contbotones"><!--contbotones-->
    <div class="botones">
        <div class="bizq prev">
            <img class="imgbizq " src="img/home/flecha_naranja_1.png">
        </div>
        <div class="bder next">
            <img class="imgbder" src="img/home/flecha_naranja_2.png">
        </div>
    </div>    
<div class="container indexcontpro "><!--container-->
  
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><!--contpro-->
  
<div class="col-sm-4 col-md-4 col-lg-3 imgpro"><img class="img-responsive" src="img/home/todos.jpg"></div>
<div class="col-sm-4 col-md-4 col-lg-3 imgpro"><img class="img-responsive" src="img/home/jipi.jpg"></div>
<div class="col-sm-4 col-md-4 col-lg-3 imgpro"><img class="img-responsive" src="img/home/mermelada.jpg"></div>
<div class="col-sm-4 col-md-4 col-lg-3 imgpro"><img class="img-responsive" src="img/home/bordado.jpg"></div>
<div class="col-sm-4 col-md-4 col-lg-3 imgpro"><img class="img-responsive" src="img/home/spa.jpg"></div>
<div class="col-sm-4 col-md-4 col-lg-3 imgpro"><img class="img-responsive" src="img/home/dulces_tipicos.jpg"></div>
<div class="col-sm-4 col-md-4 col-lg-3 imgpro"><img class="img-responsive" src="img/home/henequen.jpg"></div>
<div class="col-sm-4 col-md-4 col-lg-3 imgpro"><img class="img-responsive" src="img/home/miel.jpg"></div>
<div class="col-sm-4 col-md-4 col-lg-3 imgpro"><img class="img-responsive" src="img/home/madera.jpg"></div>
<div class="col-sm-4 col-md-4 col-lg-3 imgpro"><img class="img-responsive" src="img/home/muneca.jpg"></div>
<div class="col-sm-4 col-md-4 col-lg-3 imgpro"><img class="img-responsive" src="img/home/otros_productos.jpg"></div>
<div class="col-sm-4 col-md-4 col-lg-3 imgpro"><img class="img-responsive" src="img/home/kabee.jpg"></div>
</div><!--contpro-->
</div><!--container-->
<?php
include("template/footer.html");
?>  
</body>
</html>