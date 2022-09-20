<?php
session_start();
 error_reporting(E_ERROR | E_WARNING | E_PARSE); 
 

include("config.php");  
$get=$_POST['checked'];

$p_id=$_POST['p_id'];

 $user=$_SESSION['user'];

if ($get=='0') 
 {
   
     $sql1="delete from user_favorites where user_id='$user' and p_id='$p_id'"; 
     if($con->query($sql1)===TRUE){

     }
      
}

if ($get=='1') {
   
       $sql="insert into user_favorites(user_id, p_id) values('".$user."','".$p_id."')"; 
      
       if ($con->query($sql) === TRUE) {
  
           } 
}

$con->close();
?>
