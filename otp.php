<?php
session_start();
if($_SESSION['user']){
    header("location:homepage.php");
 }
 include("config.php");
 
 $_SESSION['username']="";
 $_SESSION['fname']="";
 $_SESSION['lname']="";
 $_SESSION['email']="";
 $_SESSION['phone']="";
 $_SESSION['addr']="";
 $_SESSION['city']="";
 $_SESSION['state']="";
 $_SESSION['pass']="";
 
if(isset($_POST["registerbtn"])){
    
   
 $_SESSION['username']=($_POST['username']);
 $_SESSION['fname']=($_POST['fname']);
 $_SESSION['lname']=($_POST['lname']);
 $_SESSION['email']=($_POST['email']);
 $_SESSION['phone']=($_POST['phone']);
 $_SESSION['addr']=($_POST['address']);
 $_SESSION['city']=($_POST['city']);
 $_SESSION['state']=($_POST['state']);
 $_SESSION['pass']=($_POST['pass']);

    function generateNumericOTP($n) { 
      
        $generator = "1357902468"; 
      
       
        $result = ""; 
      
        for ($i = 1; $i <= $n; $i++) { 
            $result .= substr($generator, (rand()%(strlen($generator))), 1); 
        } 
      
        
        return $result; 
    }   
    $n = 4; 
    $otpnumber=generateNumericOTP($n); 
    $connection = mysqli_connect("localhost","root","","olx");
    $query="INSERT INTO otp (otp) VALUES ('$otpnumber')";
    $query_run=mysqli_query($connection,$query);

require 'phpmailer/PHPMailerAutoload.php';
$email= $_POST["email"];
$_SESSION['email']=$email;

$mail = new PHPMailer;

// $mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'Your email id';                 // SMTP username
$mail->Password = 'Email Password';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('Email id', 'TEST OTP');
$mail->addAddress($email, 'Sender');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'OTP TESTER';
$mail->Body    = 'Your OTP IS '.$otpnumber;
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} 

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
                <h1>OTP VERIFICATION</h1>
                <form action="otpverify.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">ENTER THE RECIEVED OTP:</label>
                        <input type="text" class="form-control rounded-pill" name="rotp" id="exampleInputEmail1"
                            aria-describedby="emailHelp" required>

                    </div>
                    <button type="submit" name="rbtn" class="btn btn-success rounded-pill disable">Check OTP</button>
                </form>
            </div>
            <div class="col d-none d-lg-block col-lg-7">
                <img style="width: 100%;height: 80%;" src="loginimg.jpg" alt="">

            </div>
        </div>
    </div>


    <script src="jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
