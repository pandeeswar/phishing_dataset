<?php
session_start();

    if(isset($_POST["pbtn"])){
        include("config.php");
        $verifyotp=$_POST['potp'];
    $sql="SELECT *from otp where otp='$verifyotp'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count=mysqli_num_rows($result);
    if($count==1){ 
        ?>
       
            <!-- //     $con = mysqli_connect($host, $user, $password, $db_name);  
            // if(mysqli_connect_errno()) {  
            //    die("Failed to connect with MySQL: ". mysqli_connect_error());  
            // }  
            // $user=($_POST['username']);
            // $fname=($_POST['fname']);
            // $lname=($_POST['lname']);
            // $email=($_POST['email']);
            // $phone=($_POST['phone']);
            // $addr=($_POST['address']);
            // $city=($_POST['city']);
            // $state=($_POST['state']);
            // $pass=($_POST['pass']);
            
            
            
            
           // $sql1="insert into user_details(username, first_name, last_name, email, phone, address, city, state, pass) values('".$_SESSION['username']."','".$_SESSION['fname']."','".$_SESSION['lname']."','".$_SESSION['email']."','".$_SESSION['phone']."','".$_SESSION['addr']."','".$_SESSION['city']."','".$_SESSION['state']."','".$_SESSION['pass']."')"; 
             
            
             
              // if(mysqli_query($con,$sql1))
              //{
                //header("location:newpass.php"); -->
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>New Password</title>
                    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
                    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
                        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
                    <link rel="preconnect" href="https://fonts.gstatic.com">
                    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
                    <style>
                        body {
                            font-family: 'Roboto', sans-serif;
                            color: #002f34;
                            font-weight: 700;
                
                        }
                
                        h1 {
                            font-weight: 700;
                        }
                
                        .form-control,
                        button {
                
                            width: 70%;
                
                        }
                    </style>
                
                </head>
                
                <body>
                
                    <div class="container">
                        <div class="row">
                
                
                            <div style="margin-top: 15%;" class="col col-12 col-lg-5  ">
                                <h1> </h1>
                                <form action="newpass.php" method="POST">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">ENTER NEW PASSWORD:</label>
                                        <input type="password"  class="form-control rounded-pill" name="npotp" id="Inputpass1"
                                            aria-describedby="emailHelp" required>
                
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">CONFIRM NEW PASSWORD:</label>
                                        <input type="password"  class="form-control rounded-pill" name="ncpotp" id="Inputpass2"
                                            aria-describedby="emailHelp" required>
                
                                    </div>
                                    <button type="submit" name="npbtn" class="btn btn-success rounded-pill disable" onclick="return Validate()">SUBMIT</button>
                                </form>
                            </div>
                            <div class="col d-none d-lg-block col-lg-7">
                                <img style="width: 100%;height: 80%;" src="loginimg.jpg" alt="">
                
                            </div>
                        </div>
                    </div>
                     <script>
                         function Validate() {
                        var password = document.getElementById("Inputpass1").value;
                        var confirmPassword = document.getElementById("Inputpass2").value;
                       if (password != confirmPassword) {
                          alert("Passwords do not match.");
                          document.getElementById("Inputpass1").value="";
                          document.getElementById("Inputpass2").value="";
                               return false;
                            }
                           return true;
                         }
                     </script>
                
                    <script src="jquery.js"></script>
                    <script src="assets/js/bootstrap.min.js"></script>
                </body>
                </html>
               <!-- // }
                //else {
                    // $_SESSION['isloggedin']=false;
                  // $err="unable to register";
                  
            
               // } -->
            
          <?php  }
    
    
        }


?>