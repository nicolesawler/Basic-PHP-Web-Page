<!DOCTYPE html>
<html>
  <head>
    <title>Nicole Sawler - Assignment 2</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aboreto&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width">
    <script type="text/javascript">
      $(document).ready(function() {
        $(".b1").click(function() {
          $(".p1").slideDown("fast");
        });
        $(".b2").click(function() {
          $(".p2").slideDown("fast");
        });
        $(".b3").click(function() {
          $(".p3").slideDown("fast");
        });
        $(".menu").click(function() {
          $(".navmobile").slideToggle();
        });
        $(".bb1").click(function() {
          $(".read1").slideToggle();
        });
             $(".bb2").click(function() {
          $(".read2").slideToggle();
        });
             $(".bb3").click(function() {
          $(".read3").slideToggle();
        });
        $(".price,.navmobile,.read1,.read2,.read3").hide();
      });
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
  </head>
  <body>
   
<?php


include 'includes/header.php';

include 'includes/nav.php';

include 'includes/search.php';

?>
    
    <div class="container">
      <div class="row">
        <div class="col-5">
          <img src="images/5.jpeg" class="image" />
        </div>
        <div class="col-5">
          <h2>Relentless Performance</h2>
          <p>Staggered, performance wheels and tires keep the car planted and help transfer maximum power down to the road.</p>
          <button class="b1">Price</button>
          <div class="price p1">34,000 CAD</div>
        </div>
        <div class="col-5">
          <img src="images/4.jpeg" class="image" />
        </div>
        <div class="col-5">
          <h2>Optimized Aerodynamics </h2>
          <p>Attention to detail on all exterior surfaces makes Model S the most aerodynamic production car on Earth.</p>
          <button class="b2">Price</button>
          <div class="price p2">39,000 CAD</div>
        </div>
        <div class="col-5">
          <img src="images/3.jpeg" class="image" />
        </div>
        <div class="col-5">
          <h2>Refined Styling </h2>
          <p>An iconic silhouette meets refreshed, elegant proportions.</p>
          <button class="b3">Price</button>
          <div class="price p3">48,000 CAD</div>
        </div>
      </div>
    
    </div>
   
   
       <div class="container"> 
    <div class="row section" >
        <div class="col-3">
          <img src="images/2.jpeg" class="image" /><br>
          <h2>Relentless Performance</h2>
          <p>Staggered, performance wheels and tires keep the car planted and help transfer maximum power down to the road.</p>
          <button class="bb1"> More</button>
          <p class="read1">Staggered, performance wheels and tires keep the car planted and help transfer maximum power down to the road.</p>
         </div>
        <div class="col-3">
          <img src="images/1.jpeg" class="image" /><br>
          <h2>Relentless Performance</h2>
          <p>Staggered, performance wheels and tires keep the car planted and help transfer maximum power down to the road.</p>
          <button class="bb2"> More</button>
         <p class="read2">Staggered, performance wheels and tires keep the car planted and help transfer maximum power down to the road.</p>
         </div>
      <div class="col-3">
          <img src="images/2.jpeg" class="image" /><br>
          <h2>Relentless Performance</h2>
          <p>Staggered, performance wheels and tires keep the car planted and help transfer maximum power down to the road.</p>
          <button class="bb3"> More</button>
         <p class="read3">Staggered, performance wheels and tires keep the car planted and help transfer maximum power down to the road.</p>
         </div>
        </div>
     </div>
    


<?php

include 'includes/footer.php';



?>
   
  </body>
</html>