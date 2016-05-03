<?php
session_start (); 
if(isset( $_SESSION['Username'])){
  echo 'welcome' .$_SESSION['Username'];  
}
else{
 // echo'you are not autorized to view this page'; 
    header('Location : index.php');
    exit();
}