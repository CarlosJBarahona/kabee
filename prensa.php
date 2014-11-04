
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

<div class="container contprensa">     
</div><!--contprensa-->
<?php
include("template/footer.html");
?>  
</body>
</html>