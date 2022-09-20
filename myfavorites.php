<?php
session_start();
 error_reporting(E_ERROR | E_WARNING | E_PARSE); 
if(!$_SESSION['user']){
   header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['user']?> | Favourites</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        crossorigin="anonymous">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
    
<script>
        function myfav(product_id) {
            var check = document.getElementById(product_id).checked ? '1' : '0';
            
            $.post('ajax.php', { checked: check, p_id: product_id });

        }
    </script>

    <style>
        .bg-light {
            background-color: rgba(0, 47, 52, .03)
        }

        body {
            font-family: 'Roboto', sans-serif;

            padding-top: 90px;


        }





        .bor {
            border: 2px solid #002f34 !important;
            border-radius: 4px;
        }



        .bor:hover {
            border: 2px solid #42f5ef !important;
            border-radius: 4px;
        }

        .log {
            text-decoration: underline;
            text-underline-position: under;
            border: none;
            background-color: #f8f9fa;
            color: #002f34;
            font-size: 16px;
            font-weight: 700;
        }

        /* .bo{
         border: 5px solid;
        
        border-image:   linear-gradient(to right,#3a77ff 33%, #23e5db 66%, #ffce32 99%) 3;
        } */
        h5 {
            font-weight: bolder;
        }

        .form-control {
            height: 50px;
        }

        .navbar-nav {
            font-weight: 700;
            cursor: pointer;
            color: #002f34;
        }

        .navbar-light .navbar-nav .nav-link {
            color: #002f34;

        }

        .item1 {
            font-weight: 700;
            cursor: pointer;
            color: #002f34;
        }

        .item {
            text-transform: capitalize;
            font-weight: 400;
            font-size: 14px;
            color: #002f34;
        }

        .item:hover {
            color: #42ddf5;
            text-transform: none;
        }

        .login_img {
            margin-left: 38%;
        }

        .login_btn {
            color: #002f34;
            display: flex;
            border-radius: 4px;
            border: 2px solid #002f34;
            font-size: 16px;
            height: 48px;
            background-color: white;
            width: 70%;
            font-weight: 700;
            justify-content: left;
        }




        #myBtn {
            display: none;
            position: fixed;
            top: 15%;
            left: 46%;
            z-index: 99;
            /* Make sure it does not overlap */
            border: none;
            /* Remove borders */
            outline: none;
            /* Remove outline */
            background-color: #fff;
            /* Set a background color */
            /* Text color */
            cursor: pointer;
            /* Add a mouse pointer on hover */
            padding: 5px 10px;
            font-size: 14px;
            height: 40px;
            color: #002f34;
            border-radius: 50px;
            box-shadow: 0 2px 8px 0 rgb(0 0 0 / 15%);
            /* Increase font size */
            font-weight: 700;
        }


        .fav input[type=checkbox] {
            visibility: hidden;
        }

        .fav input[type=checkbox]+label:before {
            font-family: FontAwesome;
            display: inline-block;
            content: "\f08a";
            font-size: 25px;

        }

        .fav input[type=checkbox]:checked+label:before {
            content: "\f004";
            color: red;

        }

        .fav input[type=checkbox]+label:hover {
            color: grey;
        }

        .mylink {

            height: 48px;
            line-height: 48px;
            display: block;
            text-transform: uppercase;
            color: rgb(0, 47, 52);

        }

        .mylink:hover {
            color: rgb(0, 47, 52);
        }

        .container-fluid {
            padding-left: 45px;
            padding-right: 45px;
        }
    </style>
</head>

<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-up mr-1"></i>Back to
        top</button>



    <nav class="navbar fixed-top navbar-expand-md navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="homepage.php"><img src="olx-logo-vector.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav mr-auto my-2 my-lg-0 navbar-nav-scroll " style="max-height: 100px;">
                    <form class="d-flex mt-2">
                        <span class="fas fa-search feed" style="position: absolute;
                    z-index: 2;
                    display: block;
                    padding: 15px;
                  margin-right: 5px;
                  
                    text-align: center;
                    pointer-events: none
                    ;
                    color: black;"><button style="border: none;background: none;"></button>

                        </span>

                        <input style="text-indent: 18px;" class="form-control mr-3 border bor border-dark" type="search"
                            placeholder="  Search city,area or locality" aria-label="Search">

                    </form>
                    <form class="d-flex mt-2">
                        <div style="width: 500px;
                  " class="input-group mb-3 mr-3">
                            <input type="search" class="form-control border bor border-dark"
                                placeholder="Find Cars,Mobile phones and more" aria-label="Recipient's username"
                                aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span style="background-color: #002f34;" class="input-group-text border border-dark"
                                    id="basic-addon2"><i class="fas fa-search text-white"></i></span>
                            </div>
                        </div>
                    </form>


                    <?php
        error_reporting(E_ALL & ~E_NOTICE);
        
//if(!isset($_SESSION['isloggedin']) &&  !$_SESSION['isloggedin'==true]):
  if(!$_SESSION['user']):

?>
                    <li class="nav-item mt-3">
                        <a href="login.php" class="mr-3 log">Login</a>
                    </li>

                    <?php else: ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle dropdown-toggle-split mt-2 mr-3" href="#"
                            id="navbarScrollingDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fas fa-user"></i>
                            <?php echo $_SESSION['user']; ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="editprofile.php">Edit profile <i class="fas fa-check ml-3"></i></a>
                            </li>
                            <li><a class="dropdown-item" href="myads.php">My ads <i class="fas fa-check ml-3"></i></a>
                            </li>
                            <li><a class="dropdown-item" href="myfavorites.php">My wishlist<i
                                        class="fas fa-check ml-3"></i></a></li>
                            <li><a class="dropdown-item" href="logout.php">Logout<i class="fas fa-check ml-3"></i></a>
                            </li>

                        </ul>
                    </li>
                    <?php endif; ?>



                    <a style="height: 20%;" class="btn btn-success mt-2 rounded-pill" href="post.php" role="button"><i
                            class="fas fa-plus mr-2"></i>SELL</a>
                </ul>

            </div>

        </div>




    </nav>

    <div style="height: 60px; ;" class="container d-none   d-lg-flex justify-content-around pt-3">
        <a style="font-weight: 700;color: #002f34;
           " class="item" href="">ALL CATEGORIES <i class="fas fa-chevron-circle-down"></i></a>
        <a class="item" href="cars.php"> Cars</a>
        <a class="item" href="cars.php"> Motorcycles</a>
        <a class="item" href="cars.php">Mobile Phones</a>
        <a class="item" href="cars.php">For Sale: Houses & Apartments</a>
        <a class="item" href="cars.php">Scooters</a>
        <a class="item" href="cars.php">Commercial & Other Vehicles</a>
        <a class="item " href="cars.php">For Rent: Houses & Apartments</a>

    </div>
    <div class="px-4 py-3 d-flex">
        <a style=" text-decoration: none;
 border-bottom: 1px solid rgb(219, 219, 219);" class="pr-3 mylink " href="myads.php">ADS</a>
        <a style="font-weight: 700;
    border-bottom: 5px solid rgb(0, 47, 52);text-decoration: none;" class="mylink"
            href="myfavorites.php">FAVOURITES</a>
    </div>


    <div class="container-fluid">
        <div class="row">
            <?php
                 include("config.php");
                 $u_id=$_SESSION['user'];
                  $sql = "select * from user_favorites where user_id='$u_id'";  
                    $result = mysqli_query($con, $sql);  
                     if ($result->num_rows > 0) 
                     {
                    
                        // output data of each row
                        while($r = $result->fetch_assoc()) 
                        {
                            $pid=$r["p_id"];
                           $sql1 = "select * from post where product_id='$pid'"; 
                            $result1 = mysqli_query($con, $sql1);  
                             $row=mysqli_fetch_row($result1);

                         ?>
            <div class="col col-6 col-lg-3 mb-2  ">


                <div class="card " style="width: 100%;">

                    <!-- <div  class="   d-flex "> -->

                    <?php
                $img=$row[13];
                ?>
                    <img src="uploads/<?php echo $img ?>  " class="card-img-top " alt="...">
                    <!-- </div> -->

                    <div style="line-height: 0.4;" class="card-body pl-2 py-2">
                        <div class="d-flex">
                            <h5 class="card-title">₹
                                <?php echo $row[12] ?>
                            </h5>
                            <?php $t_user=$row[1];
            $sql2 = "select trusted_user from user_details where username='$t_user'";  
            $result2 = mysqli_query($con, $sql2);  
              if ($result2->num_rows > 0) 
              {
               $r1=mysqli_fetch_row($result2);
                 if($r1[0]=='true'){
                   ?>
                            <span><i class="fas fa-user-check ml-5"></i></span>

                            <?php
                   }
                 }
       
                 ?>

                        </div>


                        <p style="font-size:14px;
            " class="card-text text-muted  font-weight-normal">
                            <?php echo $row[10]?>
                        </p>
                        <p style="font-size:13px;
            " class="card-text  font-weight-normal">
                            <?php echo $row[5]?>-
                            <?php echo $row[8]?>km
                        </p>


                        <p style="font-size:10.5px; text-transform: uppercase;"
                            class="card-text text-muted  mr-3 mr-lg-5 ">
                            <?php echo $row[17]?>,
                            <?php echo $row[18]?>
                        </p>



                        <div class="fav card-text d-flex ">
                            <?php echo "
              <a style='width:50%;' class='btn btn-success rounded-pill btn-sm pt-1 ' href='product.php?id={$row[0]}' role='button'>View</a>";?>
                            <?php $p_id=$row[0];
                

               
               $sql3 = "select * from user_favorites where user_id='$u_id' and p_id='$p_id'";  
        $result3 = mysqli_query($con, $sql3);  
         if ($result3->num_rows > 0) 
         {
           $li=1;
         }
         ?>


                            <input id="<?php echo $p_id; ?>" type="checkbox" onclick="myfav(<?php echo $p_id; ?>);"
                                value="<?php echo $p_id; ?>" <?php echo ($li==1 ? 'checked' :'');?> />
                            <label for="<?php echo $p_id; ?>" class="mt-3 ml-2"></label>



                            <p style="font-size: 11.5px;" class="card-text text-muted mt-3  ml-2 ml-lg-4">
                                <?php echo date('M j',strtotime($row[19])); ?>
                            </p>

                        </div>

                    </div>
                </div>


            </div>
            <!-- <?php echo "</a>" ?> -->
            <?php
                    }
          }
          else
         {
            ?>

 <div class="container d-flex flex-column justify-content-center align-items-center mb-3">
                <img style="max-width: 200px;" src="uploads/no_result.png" alt="">
                <p style="font-size: 16px;
    line-height: 24px;
    color: rgba(0,47,52,.64);
    font-weight: 700;">You haven't liked anything yet</p>
               
               
            </div>
<?php
          }
          

         
          $con->close();
        
?>

        </div>
    </div>

    <div style="background-color: #ebeeef;" class="container ">
        <div class="row">
            <div class="col col-lg-3 mt-2 ">
                <p style="color:  #002f34;
font-weight: 700;">POPULAR LOCATIONS</p>
                <div style="font-size: 12px;line-height: 1.5;" class="d-flex flex-column">
                    <a class="text-muted" href="">Kolkota</a>
                    <a class="text-muted" href="">Chennai</a>
                    <a class="text-muted" href="">Mumbai</a>
                    <a class="text-muted" href="">Delhi</a>
                </div>


            </div>
            <div class="col col-lg-3 mt-2 ">
                <p style="color:  #002f34;
font-weight: 700;">TRENDING LOCATIONS</p>
                <div style="font-size: 12px;line-height: 1.5;" class="d-flex flex-column">
                    <a class="text-muted" href="">Bhubaneshwar</a>
                    <a class="text-muted" href="">Hyderabad</a>
                    <a class="text-muted" href="">Chandigarh</a>
                    <a class="text-muted" href="">Nashik</a>
                </div>

            </div>
            <div class="col col-lg-3 mt-2 ">
                <p style="color:  #002f34;
font-weight: 700;">ABOUT OLX</p>
                <div style="font-size: 12px;line-height: 1.5;" class="d-flex flex-column">
                    <a class="text-muted" href="">ABOUT OLX GROUP</a>
                    <a class="text-muted" href="">Careers<a>
                            <a class="text-muted" href="">Contact Us</a>
                            <a class="text-muted" href="">OLXPeople</a>
                            <a class="text-muted" href="">AasaanJobs</a>
                </div>

            </div>
            <div class="col col-lg-3 mt-2 ">
                <p style="color:  #002f34;
font-weight: 700;">OLX</p>
                <div style="font-size: 12px;line-height: 1.5;" class="d-flex flex-column">
                    <a class="text-muted" href="">Help</a>
                    <a class="text-muted" href="">Sitemap</a>
                    <a class="text-muted" href="">Legal & Privacy information</a>
                </div>

            </div>
        </div>
    </div>
    <script language="javascript">
        mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () { scrollFunction() };

        function scrollFunction() {
            if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
                mybutton.style.display = "block";
                mybutton.style.align = "center";

            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {

            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }


    </script>
    <script src="jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>