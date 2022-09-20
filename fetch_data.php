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
  <title>Document</title>
   <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     <script>
        function myfav(product_id) {
            var check = document.getElementById(product_id).checked ? '1' : '0';
            //  var check=0;
            //  if(chk==true){
            //    check=1;
            //  }
            $.post('ajax.php', { checked: check, p_id: product_id });

        }
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
    </style>
</head>
<body>
  <?php
  include("config.php");
  if(isset($_POST["action"])){
    $query = " SELECT * FROM post WHERE product_status = '1'";
   if(isset($_POST["brand"]))
 {
  $brand_filter = implode("','", $_POST["brand"]);
  $query .= "AND brand IN ('".$brand_filter."')";
 }
 if(isset($_POST["model"]))
 {
  $model_filter = implode("','", $_POST["model"]);
  $query .= " AND model IN('".$model_filter."')";
 }
 if(isset($_POST["fuel"]))
 {
  $fuel_filter = implode("','", $_POST["fuel"]);
  $query .= " AND fuel IN('".$fuel_filter."')";
 }
 if(isset($_POST["no_of_owner"]))
 {
  $owner_filter = implode("','", $_POST["no_of_owner"]);
  $query .= "AND no_of_owners IN ('".$owner_filter."')";
 }
 if(isset($_POST["transmission"]))
 {
  $tra_filter = implode("','", $_POST["transmission"]);
  $query .= "AND transmission IN ('".$tra_filter."')";
 }
 $result=mysqli_query($con,$query);
$count=mysqli_num_rows($result);
$output = '';
 if($count > 0)
 {
  //  <?php 
  //               include("config.php");
  //                $sql="SELECT * FROM post";
  //                                                        $result=mysqli_query($con,$sql);
  //                                                        $count=mysqli_num_rows($result);
  ?>
                <p class="font-weight-light">
                    <?php echo $count ?> ads in <span class="font-weight-bold">India</span>
                </p>
                <hr>
              
                 <div class="row" >
<?php

while($row= $result->fetch_assoc())
  {
    $li=0;
    ?>  
     <div class="col  col-lg-4 mb-2  ">
        

        <div class="card " style="width: 100%;">

          <!-- <div  class="   d-flex "> -->
           
                <?php
                $img=$row["product_img1"];
                ?>
                <img  src="uploads/<?php echo $img ?>  " class="card-img-top " alt="...">
          <!-- </div> -->

          <div style="line-height: 0.4;" class="card-body pl-2 py-2">
          <div class="d-flex">
              <h5 class="card-title">₹
              <?php echo $row["price"] ?>
            </h5>
            <?php $t_user=$row["user_id"];
            $sql2 = "select trusted_user from user_details where username='$t_user'";  
            $result2 = mysqli_query($con, $sql2);  
              if ($result2->num_rows > 0) 
              {
               $r=mysqli_fetch_row($result2);
                 if($r[0]=='true'){
                   ?>
              <span  ><i class="fas fa-user-check ml-5"></i></span>

               <?php
                   }
                 }
       
                 ?>

          </div>
      
           
  <p style="font-size:14px;
            " class="card-text text-muted  font-weight-normal">
              <?php echo $row["post_title"]?>
            </p>
            <p style="font-size:13px;
            " class="card-text  font-weight-normal">
              <?php echo $row["year"]?>-<?php echo $row["km_driven"]?>km
            </p>
            
           
              <p style="font-size:10.5px; text-transform: uppercase;"  class="card-text text-muted  mr-3 mr-lg-5 "><?php echo $row["city"]?>,<?php echo $row["state"]?></p>

            
          
            <div class="fav card-text d-flex ">
              <?php echo "
              <a style='width:50%;' class='btn btn-success rounded-pill btn-sm pt-1 ' href='product.php?id={$row["product_id"]}' role='button'>View</a>";?>
               <?php $pid=$row["product_id"];
                $user=$_SESSION['user'];

               
               $sql1 = "select * from user_favorites where user_id='$user' and p_id='$pid'";  
        $result1 = mysqli_query($con, $sql1);  
         if ($result1->num_rows > 0) 
         {
           $li=1;
         }
        error_reporting(E_ERROR | E_WARNING | E_PARSE); 
if(!$_SESSION['user']):?>
  <label style="font-size: 25px;" class="mt-2 ml-2" for=""><i class="far fa-heart"></i></label>

<?php else :?>

                <input id="<?php echo $pid; ?>" type="checkbox" onclick="myfav(<?php echo $pid; ?>);" value="<?php echo $pid; ?>"
                 <?php echo ($li==1
                  ? 'checked' :'');?> />
                <label for="<?php echo $pid; ?>" class="mt-3 ml-2"></label>
                 <?php endif; ?>


                 <p style="font-size: 11.5px;" class="card-text text-muted mt-3  ml-2 ml-lg-4">
                <?php echo date('M j',strtotime($row["last_updated_time"])); ?>
              </p>

            </div>

          </div>
        </div>


      </div>
  
   
    <?php
  }
}?>


                </div>

  <?php
   }
?>


 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>