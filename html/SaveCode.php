<?php
   session_start();
include('DBconnection.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
     
      $js = $_POST['js'];
      $html = $_POST['html'];
      echo " JS is ".$js." and HTML is ".$html;
   
}
?>
