<?php

if(isset($_SESSION['id']) OR isset($_COOKIE['id'])){

   /*  
    include('DBconnection.php');
    $html = $_POST['html'] ;
    $css = $_POST['css'];
    $javascript =$_POST['javascript'];
    
    $query = 'UPDATE `users details` SET `HTML` = "'.$html.'" WHERE `id`= "'.$_SESSION['id'].'"LIMIT 1';
       */
      echo "It works";

}



?>