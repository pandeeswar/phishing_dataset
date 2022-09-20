
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
    <title>POST | AD</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <style>
        body {

            font-family: 'Roboto', sans-serif;
            margin-bottom: 30px;
            padding-top: 90px;
            color: #002f34;
            font-weight: 600;



        }

        h3 {
            font-weight: 700;
            text-align: center;

        }

        h4 {
            font-weight: 700;
        }

        a {
            color: #002f34;
            text-decoration: underline;
        }

        a:hover {
            color: #002f34;
            text-decoration: none;
        }

        .btn-outline-light:not(:disabled):not(.disabled).active {
            background-color: #c8f8f6;
            box-shadow: inset 0 0 0 2px #00a49f;
            color: #00a49f;
            font-weight: 700;
        }

        .btn-outline-light {
            appearance: none;
            background-color: #fff;
            border-style: none;
            box-shadow: inset 0 0 0 1px #002f34;
            border-radius: 4px;
            color: #002f34;
            cursor: pointer;
            font-size: 14px;
            height: 36px;
            margin-bottom: 8px;
            margin-right: 8px;
            min-width: 64px;
            outline: 0;
            padding: 8px 16px;
        }

        .btn-outline-light:hover {
            background-color: #fff;
            color: lightskyblue;
            box-shadow: inset 0 0 0 1px #58cdda;

        }
    </style>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-md navbar-light bg-light">
        <a class="text-dark" href="homepage.php"><i class="fas fa-arrow-left"></i></a>

        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="olx-logo-vector.png" alt="">
            </a>

        </div>

    </nav>

    <h3>POST YOUR AD</h3>
    <form action="upload.php" enctype="multipart/form-data" method="post">
        <div style="margin-left: 250px;padding: 20px;margin-right: 240px;"
            class="  d-flex flex-column border border-secondary ">
            <h4 style="font-size: 17px;"> SELECTED CATEGORY</h4>

            <p style="font-size: 12px;" class="text-muted font-weight-light ">OLX Autos (Cars)
                /
                Cars </p>


        </div>
        <div style="margin-left: 250px;padding: 20px;margin-right: 240px;"
            class="  d-flex flex-column border border-secondary border-top-0">
            <h4 style="font-size: 17px;">INCLUDE SOME DETAILS</h4>
            <label class="font-weight-light" for="1"> Brand *</label>
            <input style="height: 48px;width: 40%;" type="text" name="brand" id="1">
            <label class="font-weight-light mt-4" for="12"> Model *</label>
            <input style="height: 48px;width: 40%;" type="text" name="model" id="12">
            <label class="font-weight-light mt-4" for="13"> Variant *</label>
            <input style="height: 48px;width: 40%;" type="text" name="variant" id="13">
            <label class="font-weight-light mt-4" for="2"> Year *</label>
            <input style="height: 48px;width: 40%;" type="text" name="year" id="2">
            <label class="font-weight-light mt-4" for="1"> Fuel *</label>
            <div style="width: 60%;" class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-outline-light ">
                    <input type="radio" name="fuel" value="CNG" id="option1"> CNG & Hybrids
                </label>
                <label class="btn  btn-outline-light">
                    <input type="radio" name="fuel" value="Diesel" id="option2"> Diesel
                </label>
                <label class="btn  btn-outline-light">
                    <input type="radio" name="fuel" value="Electric" id="option3"> Electric
                </label>
                <label class="btn  btn-outline-light">
                    <input type="radio" name="fuel" value="LPG" id="option4"> LPG
                </label>
                <label class="btn btn-outline-light">
                    <input type="radio" name="fuel" value="Petrol" id="option5"> Petrol
                </label>
            </div>

            <label class="font-weight-light mt-4" for="111"> Transmission *</label>
            <div style="width: 30%;" class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-outline-light ">
                    <input type="radio" name="transmission" value="Automatic" id="option7">Automatic
                </label>
                <label class="btn  btn-outline-light">
                    <input type="radio" name="transmission" value="Manual" id="option8"> Manual
                </label>

            </div>
            <label class="font-weight-light mt-4" for="12"> KM driven *</label>
            <input style="height: 48px;width: 40%;" type="text" name="km_driven" id="12">
            <label class="font-weight-light mt-4" for="111">No. of Owners *</label>
            <div style="width: 30%;" class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-outline-light ">
                    <input type="radio" name="owners" value="1st" id="option9">1st
                </label>
                <label class="btn  btn-outline-light">
                    <input type="radio" name="owners" value="2nd" id="option10"> 2nd
                </label>
                <label class="btn  btn-outline-light">
                    <input type="radio" name="owners" value="3rd" id="option11"> 3rd
                </label>
                <label class="btn  btn-outline-light">
                    <input type="radio" name="owners" value="4th" id="option12"> 4th
                </label>
                <label class="btn  btn-outline-light">
                    <input type="radio" name="owners" value="5th" id="option13"> 4+
                </label>

            </div>
            <label class="font-weight-light mt-4" for="2"> Ad Title *</label>
            <input style="height: 48px;width: 40%;" type="text" name="title" id="2">
            <p style="font-size: 12px;" class="text-muted font-weight-light ">Mention the key features of your item
                (e.g. brand,
                model, age, type) </p>
            <label class="font-weight-light mt-4" for="2"> Description *</label>
            <textarea style="width:40%;white-space: pre-wrap;" name="desc" id="2" cols="30" rows="4"></textarea>
            <p style="font-size: 12px;" class="text-muted font-weight-light ">Include condition, features and reason for
                selling
            </p>

        </div>
        <div style="margin-left: 250px;padding: 20px;margin-right: 240px;"
            class="  d-flex flex-column border border-secondary border-top-0">
            <h4 style="font-size: 17px;">SET A PRICE</h4>
            <label class="font-weight-light" for="1"> Price*</label>

            <span class="fas fa-rupee-sign" style="position: absolute;
                                    z-index: 2;
                                    display: block;
                                    padding: 20px;
                                  margin-right: 5px;
                                  margin-top: 57px;
                                    text-align: center;
                                    pointer-events: none
                                    ;
                                    color: black;">

            </span>
            <input style="height: 48px;width: 40%;text-indent: 30px;" type="text" name="price" id="1">


        </div>
        <div style="margin-left: 250px;padding: 20px;margin-right: 240px;"
            class="   border border-secondary border-top-0">
            <h4 style="font-size: 17px;">UPLOAD UP TO 4 PHOTOS</h4>
            <div style="float:inline;" class="">
                <div class="d-flex">
                    <p><input type="file" name="image1" id="file1" required onchange="loadFile(event,'file1','output1')"
                            style="display: none;"></p>
                    <p><label for="file1" style="cursor: pointer;width: 70px;height: 60px;"
                            class="border border-secondary px-3 py-3 mr-2"><i id="icon1" style="font-size: 30px;"
                                class="fas fa-camera"></i></label></p>
                    <p class="mt-2 font-weight-light" id="output1"></p>

                </div>
                <div class="d-flex">
                    <p><input type="file" name="image2" id="file2" required onchange="loadFile(event,'file2','output2')"
                            style="display: none;"></p>
                    <p><label for="file2" style="cursor: pointer;width: 70px;height: 60px;"
                            class="border border-secondary px-3 py-3 mr-2"><i style="font-size: 30px;"
                                class="fas fa-camera"></i></label>
                    </p>
                    <p class="mt-2 font-weight-light" id="output2"></p>
                </div>
                <div class="d-flex">
                    <p><input type="file" name="image3" id="file3" required onchange="loadFile(event,'file3','output3')"
                            style="display: none;"></p>
                    <p><label for="file3" style="cursor: pointer;width: 70px;height: 60px;"
                            class="border border-secondary px-3 py-3 mr-2"><i style="font-size: 30px;"
                                class="fas fa-camera"></i></label>
                    </p>
                    <p class="mt-2 font-weight-light" id="output3"></p>
                </div>
                <div class="d-flex">
                    <p><input type="file" name="image4" id="file4" onchange="loadFile(event,'file4','output4')"
                            style="display: none;"></p>
                    <p><label for="file4" style="cursor: pointer;width: 70px;height: 60px;"
                            class="border border-secondary px-3 py-3 mr-2"><i style="font-size: 30px;"
                                class="fas fa-camera"></i></label>
                    </p>
                    <p class="mt-2 font-weight-light" id="output4"></p>
                </div>




            </div>




        </div>
        <div style="margin-left: 250px;padding: 20px;margin-right: 240px;"
            class="  d-flex flex-column border border-secondary border-top-0">
            <h4 style="font-size: 17px;">CONFIRM YOUR LOCATION</h4>
            <label class="font-weight-light" for="1"> City *</label>
            <input style="height: 48px;width: 40%;" type="text" name="city" id="1">
            <label class="font-weight-light mt-4" for="12"> State *</label>
            <input style="height: 48px;width: 40%;" type="text" name="state" id="12">


        </div>
       
        <div style="margin-left: 250px;padding: 20px;margin-right: 240px;"
            class="  d-flex flex-column border border-secondary border-top-0">
            <button style="color: #fff;
    background-color: #002f34;
    border-radius: 4px;
    border: 5px solid #002f34;
    padding: 0 7px;
    font-size: 16px;
    height: 48px;
    font-weight: 700;
    cursor: pointer;
    width: 20%;" id="submit" name="submit">Post Now</button>


        </div>

    </form>



    
<script>
        var loadFile = function (event, id, i) {
            var input = document.getElementById(id);
            var img = document.getElementById(i);
            // var image = document.getElementById('output');
            // image.src = URL.createObjectURL(event.target.files[0]);
            var fileName = input.files[0].name;

            // use fileName however fits your app best, i.e. add it into a div
            img.textContent = 'File uploaded: ' + fileName;


        };



    </script>
    <script src="jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>