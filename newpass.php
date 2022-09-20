<?php
session_start();
include("config.php");
if(isset($_POST["npbtn"])){
    $newpass=$_POST['npotp'];
    $confirmpass=$_POST['ncpotp'];
    $sql="UPDATE user_details SET pass ='$newpass' WHERE username = ('".$_SESSION['username']."')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
       header("location:login.php");
    }
}
?>