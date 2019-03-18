<?php 
    require_once("includes/connection.php"); 
?>
<html>
<head>
    <link rel="stylesheet" href="css/styles.css" type="text/css" />
    <link href="js/jquery_confirm/jquery_confirm.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="js/click-carousel.js"></script> 
    <script type="text/javascript" src="js/script.js"></script> 
    <script type="text/javascript" src="js/jquery_confirm/jquery_confirm.js"></script>
    <link rel="icon" type="image/png" href="images/favicon.ico"/>
    <title>PetCher</title> 
</head>
<body>


<?php if ( isset ($_SESSION['logged_user']) ) : ?>
<!--хедер-->
<div class="container">
    <?php
        include("includes/header.php");
    ?>
</div>

<!--Основная часть-->
<div class="main">
  <div class="container">
    <div class="row">
      <div class="col-1-3"> Тут будет меню</div>
      <div class="col-2-3">ваыв</div>
    </div>
    <div class="row">
      <div class="col-1-2">вфыафыва</div>
      <div class="col-1-2">фывафыва</div>
    </div>
    <div class="row">
      <div class="col-1-4">фываыфва</div>
      <div class="col-1-4">ыфвафы</div>
      <div class="col-1-2">ыфвафы</div>
    </div>
  </div>
</div>






<!--Футер -->
<footer>
    <div class="container">
        <?php 
            include("includes/footer.php");
        ?> 
    </div>
</footer>

</body>





<!--для тех кто не залогинился -->
<?php else : ?>
    ACESS DENIED
    
<?php endif; ?>
<!--для тех кто не залогинился -->


</html>

