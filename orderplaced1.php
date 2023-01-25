<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
  echo '<div  style="text-align: center;" class="alert alert-success alert-dismissible fade show  " role="alert" ><h3>
  <strong>Thank You.!  Your Order Placed Succesfully!</strong> </h3></div>';
 
  include("dbconnection.php");

  $sql = "SELECT orderid,address,zip FROM `bookingform` ORDER BY orderid DESC";
  $result = mysqli_query($conn,$sql);

   $rows=$result->fetch_assoc();
?>

<div style="text-align: center; font-size:30px;">
    Your Order Id is : <?php echo $rows['orderid']; ?> <br>   
</div>

<p style="text-align: center; font-size:30px;">Thank You For Shopping With AgroFarm. <br> Your Product will be delivered to you within 2 days at : <?php echo $rows['address'].'. '.$rows['zip']; ?> </p> <br>

<div style="text-align: center;">
<h4>
    <button id="bttn"><a href="invoice_pdf.php"> Generate Invoice </a></button>
    <button id="bttn"> <a href="index.php">Home Page</a></button>
</h4>

<p style="padding-top: 20px;text-align: center; font-size:30px;"> Thanks and Best Regards - AgroFarm.! </p>

    
</body>
</html>