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
    <title>OLX | CARS</title>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
<script>
        $(document).ready(function () {

            filter_data();

            function filter_data() {
                var action = 'fetch_data';
                var brand = get_filter('brand');
                var model = get_filter('model');
                var fuel = get_filter('fuel');
                var no_of_owner = get_filter('no_of_owner');
                var transmission = get_filter('transmission');
                $.ajax({
                    url: "fetch_data.php",
                    method: "POST",
                    data: { action: action, brand: brand, model: model, no_of_owner: no_of_owner, transmission: transmission, fuel: fuel },
                    success: function (data) {
                        $('#id').html(data);
                    }
                });
            }

            function get_filter(class_name) {
                var filter = [];
                $('.' + class_name + ':checked').each(function () {
                    filter.push($(this).val());
                });
                return filter;
            }

            $('.common_selector').click(function () {
                filter_data();
            });
        });

    </script>
    
    <style>
        .bg-light {
            background-color: rgba(0, 47, 52, .03)
        }

        body {
            font-family: 'Roboto', sans-serif;
            margin-bottom: 30px;
            padding-top: 90px;
            color: #002f34;
            font-weight: 600;


        }

        a {
            color: #002f34;
            text-decoration: none;
        }

        a:hover {
            color: #002f34;
            text-decoration: none;
        }

        .border {
            border: 2px solid #002f34 !important;
            border-radius: 4px;
        }

        .border:hover {
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

        /* .bo {
            border: 5px solid;
    
            border-image: linear-gradient(to right, #3a77ff 33%, #23e5db 66%, #ffce32 99%) 3;
        } */

        h5,
        h4 {
            font-weight: 700;

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

        .scroll {
            height: 10%;
            overflow-y: auto;
            overflow-x: hidden;
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

                        <input style="text-indent: 18px;" class="form-control mr-3 border border-dark" type="search"
                            placeholder="  Search city,area or locality" aria-label="Search">

                    </form>
                    <form class="d-flex mt-2">
                        <div style="width: 500px;
                  " class="input-group mb-3 mr-3">
                            <input type="search" class="form-control border border-dark"
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
                            <li><a class="dropdown-item" href="editprofile.php">Edit profile <i
                                        class="fas fa-check ml-3"></i></a>
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
    <div style="height: 60px; ;" class="container d-none d-lg-flex pt-3">
        <a style="font-weight: 700;color: #002f34;
               " class="item mr-5" href="">ALL CATEGORIES <i class="fas fa-chevron-circle-down"></i></a>
        <a class="item mr-3" href="cars.php"> Cars</a>
        <a class="item mr-3" href=""> Motorcycles</a>
        <a class="item mr-3" href="">Mobile Phones</a>
        <a class="item mr-3" href="">For Sale: Houses & Apartments</a>
        <a class="item mr-3" href="">Scooters</a>
        <a class="item mr-3" href="">Commercial & Other Vehicles</a>
        <a class="item " href="">For Rent: Houses & Apartments</a>

    </div>



    <div class="container-fluid ">
        <div class="row">
            <div class="col-6 col-lg-3 ">
                <h4>Used Cars in India</h4>
                <a class="ml-2 mb-2" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                    aria-controls="collapseExample">CATEGORIES
                    <span class="ml-5"><i class="fas fa-chevron-down"></i></span>
                </a>
                <div class="collapse" id="collapseExample">
                    <div class="ml-3 text-muted font-weight-light">
                        <p>Cars</p>

                    </div>

                </div>
                <div class="collapse show" id="collapseExample">
                    <div class="my-3">
                        <a class="ml-3 " href=""> All Categories </a>

                    </div>
                    <div class="my-3">
                        <a style="background-color: #C8F8F2;
                            " class="ml-4 py-2 px-4 " href=""> Cars</a>

                    </div>
                </div>
                <hr>


                <a class="ml-2 mb-2" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false"
                    aria-controls="collapseExample1">LOCATIONS
                    <span class="ml-5"><i class="fas fa-chevron-down"></i></span>
                </a>
                <div class="collapse show" id="collapseExample1">
                    <div class="ml-3 text-muted font-weight-light">
                        <p>India</p>

                    </div>

                </div>
                
                <hr>

                <p class="text-muted font-weight-light ml-2">Filters</p>

                <a class="ml-2 mb-2" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false"
                    aria-controls="collapseExample2">BRAND AND MODEL
                    <span class="ml-5"><i class="fas fa-chevron-down"></i></span>
                </a>
                <div class="collapse show" id="collapseExample2">
                    <div class="input-group ml-2 my-3">
                        <input style="height: 35px;" type="text" class="form-control"
                            placeholder="Search brand or model" aria-label="Recipient's username"
                            aria-describedby="basic-addon2">
                        <div style="background-color: white;" class="input-group-append">
                            <span style="background-color: white;" class="input-group-text" id="basic-addon2"><i
                                    class="fas fa-search"></i> </span>
                        </div>
                    </div>

                    <p class="ml-2">All Brands</p>
                    <div class="text-muted ml-2 font-weight-light scroll" style="font-size: 14px;">
                        <?php
                       include("config.php");
                       $sql="SELECT DISTINCT(brand) FROM post order by brand ";
                         $result=mysqli_query($con,$sql);
                  while($row = $result->fetch_assoc())
                  {
                ?>

                        <label> <input type="checkbox" class="common_selector brand"
                                value="<?php echo $row['brand'];?>">
                            <?php echo $row['brand']; ?>
                        </label>
                        <br>
                        <?php
                  }
                  ?>

                    </div>

                    <hr>

                    <p class=" ml-2">All Models</p>
                    <div class="text-muted ml-2 font-weight-light" style="font-size: 14px;">
                        <?php
                                               include("config.php");
                                               $sql="SELECT DISTINCT(model) FROM post order by model";
                                                 $result=mysqli_query($con,$sql);
                                          while($row = $result->fetch_assoc())
                                          {
                                        ?>

                        <label> <input type="checkbox" class="common_selector model"
                                value="<?php echo $row['model'];?>">
                            <?php echo $row['model']; ?>
                        </label>
                        <br>
                        <?php
                                          }
                                          ?>


                    </div>

                </div>
                <hr>


                <a class="ml-2 mb-2" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false"
                    aria-controls="collapseExample3">NO. OF OWNERS
                    <span class="ml-5"><i class="fas fa-chevron-down"></i></span>
                </a>
                <div class="collapse show" id="collapseExample3">
                    <p class="text-muted font-weight-light ml-2 mt-2">Choose from below options</p>

                    <div class="text-muted ml-2 font-weight-light" style="font-size: 14px;">
                        <?php
                       include("config.php");
                       $sql="SELECT DISTINCT(no_of_owners) FROM post order by no_of_owners";
                         $result=mysqli_query($con,$sql);
                  while($row = $result->fetch_assoc())
                  {
                ?>

                        <label> <input type="checkbox" class="common_selector no_of_owner"
                                value="<?php echo $row['no_of_owners'];?>">
                            <?php echo $row['no_of_owners']; ?>
                        </label>
                        <br>
                        <?php
                  }
                  ?>

                    </div>
                    <hr>
                </div>
                <a class="ml-2 mb-2" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false"
                    aria-controls="collapseExample3">FUEL
                    <span class="ml-5"><i class="fas fa-chevron-down"></i></span>
                </a>
                <div class="collapse show" id="collapseExample3">
                    <p class="text-muted font-weight-light ml-2 mt-2">Choose from below options</p>

                    <div class="text-muted ml-2 font-weight-light" style="font-size: 14px;">
                        <?php
                                       include("config.php");
                                       $sql="SELECT DISTINCT(fuel) FROM post order by fuel";
                                         $result=mysqli_query($con,$sql);
                                  while($row = $result->fetch_assoc())
                                  {
                                ?>

                        <label> <input type="checkbox" class="common_selector fuel" value="<?php echo $row['fuel'];?>">
                            <?php echo $row['fuel']; ?>
                        </label>
                        <br>
                        <?php
                                  }
                                  ?>

                    </div>
                    <hr>
                </div>
                <a class="ml-2 mb-2" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false"
                    aria-controls="collapseExample3">TRANSMISSION
                    <span class="ml-5"><i class="fas fa-chevron-down"></i></span>
                </a>
                <div class="collapse show" id="collapseExample3">
                    <p class="text-muted font-weight-light ml-2 mt-2">Choose from below options</p>

                    <div class="text-muted ml-2 font-weight-light" style="font-size: 14px;">
                        <?php
                                                       include("config.php");
                                                       $sql="SELECT DISTINCT(transmission) FROM post order by transmission";
                                                         $result=mysqli_query($con,$sql);
                                                  while($row = $result->fetch_assoc())
                                                  {
                                                ?>

                        <label> <input type="checkbox" class="common_selector transmission"
                                value="<?php echo $row['transmission'];?>">
                            <?php echo $row['transmission']; ?>
                        </label>
                        <br>
                        <?php
                                                  }
                                                  ?>

                    </div>
                    <hr>
                </div>

            </div>

            <div class="col-6 col-lg-9" id="id">


            </div>


        </div>
    </div>
    </div>




    <!-- PAGE FOOTER -->
    <div style="background-color: #ebeeef;" class="container  ">
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




    <!-- MODEL FOR LOGIN -->
    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="container-fluid">
                    <div class=" d-flex flex-column align-items-center">
                        <button type="button" class="close d-flex align-self-end" data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                      
                        <div id="carouselExampleSlidesOnly" class="carousel slide p-3 m-4" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-interval="1500">

                                    <img src="loginEntryPointPost.png" class="login_img" alt="...">
                                    <div>
                                        <span class="">
                                            Help make OLX safer place to buy and sell
                                        </span>
                                    </div>
                                </div>
                                <div class="carousel-item" data-interval="1500">
                                    <img src="loginEntryPointFavorite.png" class="login_img" alt="...">
                                    <div>
                                        <span class="">
                                            Contact and close deals faster
                                        </span>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <img src="loginEntryPointChat.png" class="login_img" alt="...">
                                    <div>
                                        <span class="">
                                            Save all your favorite items in one place
                                        </span>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <button class="login_btn m-1 pt-2"><span style="font-size: 20px;"><i
                                    class="fas fa-mobile-alt mx-2"></i></span>Continue with phone</button>
                        <button class="login_btn m-1 pt-2"><span style="font-size: 20px;"><i
                                    class="fab fa-facebook-f mx-2"></i></span>Continue with facebook</button>
                        <button class="login_btn mt-1 mb-2 pt-2"><span style="font-size: 20px;"><i
                                    class="fab fa-google mx-2"></i></span>Continue with google</button>
                        <span>OR</span>
                        <span class="mb-2"><a
                                class="font-weight-bold text-dark text-decoration-none  border-bottom border-dark "
                                href="#" data-toggle="modal" data-target="modalRegister">Login with email</a></span>


                        <p style="font-size: 12px;">We won't share your personal details with anyone</p>
                        <p class="text-muted" style="font-size: 12px;">If you continue, you are accepting <a href="">OLX
                                Terms and Conditions and Privacy Policy</a> </p>
                    </div>
                </div>


            </div>
        </div>
    </div> -->

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