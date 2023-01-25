<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Inter:wght@100;200;300;400;500;531;600;700;800;900&family=Lobster&family=Montserrat:wght@1,500;600;700&family=Oxygen:wght@300;400;700&family=Raleway:ital,wght@0,100;0,500;1,400;1,500&family=Roboto:ital,wght@0,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" integrity="sha512-Velp0ebMKjcd9RiCoaHhLXkR1sFoCCWXNp6w4zj1hfMifYB5441C+sKeBl/T/Ka6NjBiRfBBQRaQq65ekYz3UQ==" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bill.css">
    <link rel="icon" href="images/AgroFarmLogo.jpg" type="image/icon type">
    <title>Invoice on Email</title>
</head>

<body>
      <?php
        include("dbconnection.php");

        $sql = "SELECT * FROM `bookingform` ORDER BY orderid DESC";
        $result = mysqli_query($conn,$sql);
        
        $rows=$result->fetch_assoc(); 
        ?>
<?php

$to = $rows['email'];

$subject = 'As Per Your Request, Here are Your Order Details / Invoice ';

$content = 'Thank You For Shopping With AgroFarm.'.'  Name : '.$rows['fname'].' '  .$rows['lname'].'.'.'  Address : '.$rows['address'].'  For Further Updates we will contact you on your Email : '.$rows['email'].'.  Mobile No. : '.$rows['phone'];

$headers = "From: Your-Email\r\n";

if (mail($to, $subject, $content, $headers))
{
	echo "Successfully Email Sent on ".$rows['email'];
} 
else 
{
   	echo "ERROR Occured, Something Went Wrong.";
}
?>

</body>