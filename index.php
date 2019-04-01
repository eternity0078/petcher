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
    <script src="js/photo1.js"></script>
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
            <div class="col-1-3">
                <div class="leftside">
                    <?php
                        include("includes/menu.php");
                    ?> 
                </div>
            </div>
            <div class="col-2-3">
                <div class="adm">
                    <div class="photo">
                        <? $img = $_SESSION['logged_user']['photo'];
                        //echo $img;
                        echo '<img src="'.$img.'"/>';
                        ?>
                    <button>Редактировать</button>
                    </div>
                    
                    <div class="info">
                        <?php 
                        echo '<h3>';
                        $fio = $_SESSION['logged_user']['fio'];
                        echo $fio;
                        'echo </h3>'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






<!--Футер -->
<footer>

        <?php 
            include("includes/footer.php");
        ?> 

</footer>

</body>





<!--для тех кто не залогинился -->
<?php else : include("/403.php");?>

<?php endif; ?>
<!--для тех кто не залогинился -->


</html>

