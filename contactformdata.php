<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Inter:wght@100;200;300;400;500;531;600;700;800;900&family=Lobster&family=Montserrat:wght@1,500;600;700&family=Oxygen:wght@300;400;700&family=Raleway:ital,wght@0,100;0,500;1,400;1,500&family=Roboto:ital,wght@0,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" integrity="sha512-Velp0ebMKjcd9RiCoaHhLXkR1sFoCCWXNp6w4zj1hfMifYB5441C+sKeBl/T/Ka6NjBiRfBBQRaQq65ekYz3UQ==" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Order Placed Successfully</title>

    <link rel="icon" href="images/AgroFarmLogo.jpg" type="image/icon type">
    <!-- <link rel="stylesheet" media="screen and (max-width: 1170px)" href="phone.css"> -->
    </style>
  </head>
  <style>
    #bttn{
    background-color: rgb(255 255 255 / 50%);
    border: 1px solid rgb(251 94 94);
    border-radius: 5px;
    color: black;
    font-family: auto;
    text-align: center;
}

#bttn:hover{
    background-color: rgb(202, 219, 214);
}
  </style>
  <body>

<?php

if ($_SERVER['REQUEST_METHOD']== 'POST')
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];


include("dbconnection.php");

$sql = "INSERT INTO `contactform` (`name`, `email`, `phone`, `message`) VALUES ('$name', '$email', '$phone', '$message')";
$result = mysqli_query($conn,$sql);

  if($result){
  include("nav.php");
    echo '<div  style="text-align: center;" class="alert alert-success alert-dismissible fade show  " role="alert" ><h3>
    <strong>Thank You.! Form Has Been Submitted Succesfully! We Will Get You Back Soon</strong> </h3></div>';

}

else{
 echo "The Record has not inserted succesfully because of the error -->".mysqli_error($conn);

echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Error!</strong> We are facing some Technical issue And Your Form was not submitted successfully! We regret the Inconvinence caused...!!
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>';
}
?>

<div style="text-align: center;font-size:20px;">
    <p style="font-size:30px;"> Thanks And Regards : AgroFarm - An Eshoppee </p>
    <button id="bttn"> <a href="contact.php">Go Back</a></button>
    <button id="bttn"> <a href="store.php">Shop More</a></button>
    <button id="bttn"> <a href="index.php">Home Page</a></button>
</div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 

</body>
</html>