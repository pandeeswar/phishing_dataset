<?php      
 session_start();
    // $host = "localhost";  
    // $user = "root";  
    // $password = '';  
    // $db_name = "olx";  

  if(!$_SESSION['user']){
    header("location:login.php");
 }
include("config.php"); 
//echo $_SESSION['user'];
$name=$_SESSION['user'];
$sql="SELECT * from user_details where username='$name'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
     $username=$row['username'];
     $fname=$row['first_name'];
     $lname=$row['last_name'];
     $email=$row['email'];
     $phone=$row['phone'];
     $addr=$row['address'];
     $city=$row['city'];
     $state=$row['state'];
     $pass=$row['pass'];
}
   
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        // $con = mysqli_connect($host, $user, $password, $db_name);  
    // if(mysqli_connect_errno()) {  
    //     die("Failed to connect with MySQL: ". mysqli_connect_error());  
    // }  
     //$user=($_POST['username']);
     $fname=($_POST['fname']);
     $lname=($_POST['lname']);
     $email=($_POST['email']);
     $phone=($_POST['phone']);
     $addr=($_POST['address']);
     $city=($_POST['city']);
     $state=($_POST['state']);
     $pass=($_POST['pass']);

     
     

     //$sql="insert into user_details(username, first_name, last_name, email, phone, address, city, state, pass) values('".$user."','".$fname."','".$lname."','".$email."','".$phone."','".$addr."','".$city."','".$state."','".$pass."')"; 
     $sql="update user_details SET first_name='$fname',last_name='$lname',email='$email', phone='$phone', address='$addr', city='$city', state='$state', pass='$pass' where username='$name' ";

      
        if(mysqli_query($con,$sql))
       {

            
             header("location:homepage.php");
            

         }
         else {
             // $_SESSION['isloggedin']=false;
            $err="unable to register";
           

         }

    }

?> 




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
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

            width: 40%;

        }
    </style>

</head>

<body>

    <div class="container">
        <div class="row">


            <div style="margin-top: 2%;" class="col col-12 col-lg-6  ">

                <?php
                 error_reporting(E_ERROR |  E_PARSE); 
                  if($err): ?>
                <div style="width: 40%;" class="alert alert-danger" role="alert">
                    <?php echo $err; ?>
                </div>
                <?php endif; ?>
                <h1>EDIT MY PROFILE</h1>
                <form action="" method="POST">
                    <div class="form-group ">
                        <label for="exampleInputEmail1">Fullname</label>
                        <div class="d-flex mb-2">
                            <input style="width: 25%;" type="text" class="form-control rounded-pill mr-1" name="fname"
                                id="exampleInputEmail1" placeholder="First Name" value="<?php echo  $fname; ?>" required>
                            <input style="width: 25%;" type="text" class="form-control rounded-pill" name="lname"
                                id="exampleInputEmail1" placeholder="Last Name" value="<?php echo  $lname; ?>" required>

                        </div>


                        <div class="form-group">
                            <label class="mr-5" for="exampleInputPassword1">Email</label>
                            <input type="email" value="<?php echo  $email; ?>" class="form-control rounded-pill" required name="email"
                                id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <label class="mr-5" for="exampleInputPassword1">Phone</label>
                            <input type="text" value="<?php echo  $phone; ?>"  class="form-control rounded-pill" required name="phone"
                                id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <label class="mr-5" for="exampleInputPassword1">Address</label>
                            <textarea type="text"  class="form-control rounded" rows="5" columns="10" required
                                name="address" id="exampleInputPassword1"><?php echo  $addr; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label class="mr-5" for="exampleInputPassword1">City</label>
                            <input type="text" value="<?php echo  $city; ?>" class="form-control rounded-pill" required name="city"
                                id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <label class="mr-5" for="exampleInputPassword1">State</label>
                            <input type="text" value="<?php echo  $state; ?>" class="form-control rounded-pill" required name="state"
                                id="exampleInputPassword1">
                        </div>








                    </div>
                    <div class="form-group">
                        <label class="mr-5" for="exampleInputPassword1">Password</label>

                        <input type="password" value="<?php echo  $pass; ?>" class="form-control rounded-pill" required name="pass"
                            id="exampleInputPassword1">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input rounded-pill" required id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">I accept the <a class="font-weight-light"
                                href="">terms and
                                conditions</a></label>
                    </div>

                    <button type="submit" name="registerbtn" class="btn btn-success rounded-pill disable">UPDATE</button>
                </form>




            </div>
            <div class="col d-none d-lg-block col-lg-6">
                <img style="width: 100%;" src="regimg.jpg" alt="">

            </div>
        </div>
    </div>


    <script src="jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>