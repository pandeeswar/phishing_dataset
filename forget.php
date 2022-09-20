<<?php
            session_start();
 

  error_reporting(E_ERROR | E_WARNING | E_PARSE); 
if($_SESSION['user']){
   header("location:homepage.php");
}?>
!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORGET PASSWORD</title>
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
                <h1>FORGOT PASSWORD</h1>
                <form action="forget_otp.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Enter Your Username:</label>
                        <input type="text" class="form-control rounded-pill" name="user" id="exampleInputEmail1"
                            aria-describedby="emailHelp" required>

                    </div>
                    <button type="submit" name="fbtn" class="btn btn-success rounded-pill disable">SUBMIT</button>
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
