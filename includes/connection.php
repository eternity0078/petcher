<?php 
require 'includes/rb.php';
require("config.php");
R::setup( 'mysql:host=localhost;dbname=1372229','root', '' ); 

if ( !R::testconnection() )
{
        exit ('Нет соединения с базой данных');
}

session_start();


/*
<?php
require("config.php");
$con = mysql_connect(DB_SERVER,DB_USER, DB_PASS) or die(mysql_error());
mysql_select_db(DB_NAME) or die("Cannot select DB");    
?>*/