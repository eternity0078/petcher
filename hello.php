

<?php if ( isset ($_SESSION['logged_user']) ) : ?>
<?php echo $_SESSION['logged_user']->login; ?>!<br/>

    <a href="logout.php"></a>
    
    <?php else : header("Location: /index.php");?>

<?php endif; ?>
