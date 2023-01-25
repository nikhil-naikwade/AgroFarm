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
    <link rel="icon" href="images/AgroFarmLogo.jpg" type="image/icon type">
    <title>Booking Product</title>
</head>
<style>
#booking {
  position: relative;
  height: 100%;
  background: url('images/img6.jpg') no-repeat center center/cover;
}
#booking-box {
   padding-top: 30px;
  display: flex;
  justify-content: center;
  align-items: center;
  padding-bottom: 130px;
}

#booking-box input,
#booking-box textarea {
  width: 100%;
  padding: 0.5rem;
  border-radius: 10px;
  font-size: 1rem;
}

#booking-box form {
  width: 35%;
}

#booking-box label {
  font-size: 1.2rem;
  font-family: 'Balthazar', serif;
}

#booking-box .btn1 {
  padding: 6px 20px;
  border: 2px solid #d02f2f;
  border-radius: 10px;
  background: rgb(55 50 50);
  color: rgb(255 255 255);
  margin: 17px;
  font-size: 1.1rem;
  border-radius: 6px;
  cursor: pointer;
  padding: 3px 20px;
  margin-left: 200px; 
}
#booking-box .btn1:hover {
  background-color: rgb(255, 255, 255);
  color: rgb(0, 0, 0);
  border-color: #141465;
}
#h1{
    text-align:center;
}

#bttn{
    background-color: rgb(255 255 255 / 50%);
    border: 1px solid rgb(0 0 0);
    border-radius: 10px;
    color: black;
    font-family: auto;
    margin-top: 15px;
}

#bttn:hover{
    background-color: rgb(202, 219, 214);
}

</style>
<body>
<?php
  include("nav.php");
  ?>
<div class="container">
  <div class="row carousel-row py-3">
        <div class="col-md-12">
        </div>
  </div>
  <section class="booking" id="booking" style="padding: bottom 40px;;">

  <div class="col-md-12 store-items-col">
            <h2 class="store-items-heading h2-responsive shadow py-2">Please Provide Products Shipping Details/Address</h2>
  </div>
</div>
</div>
<div id="booking-box">
<form action="BookingFormData.php" method="post">
  <div class="form-row">
  <div class="row">
    <div class="form-group col-md-6">
    <label for="Fname">First Name</label>
      <input type="text" class="form-control" name="fname" placeholder="First name" required>
    </div>
    <div class="form-group col-md-6">
    <label for="Lname">Last Name</label>
      <input type="text" class="form-control" name="lname" id="lname" placeholder="Last name" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="Enter your Email">
    </div>
    <div class="form-group col-md-6">
        <label for="name">Phone Number </label>
        <input type="phone" name="phone" class="form-control" id="phone" placeholder="Enter your Phone number" required> 
    </div>
  </div>

  <div class="form-group col-md-6">
        <label for="productname">Product Name </label>
        <input type="text" name="productname" class="form-control" id="productname" placeholder="Enter Product Name" required> 
    </div>

    <div class="form-group col-md-6">
    <label for="quantity">Quantity </label>
       <input type="number" class="form-control" name="quantity" id="quantity" placeholder="Enter Quantity" min="1" max="100"></div>
    </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" name="address"  placeholder="Enter Building Name, Street, Area, City" required>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" name="city" required>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select name="state" class="form-control" required>
        <option selected>Choose...</option>
        <option>Maharashtra</option>
        <option>Goa</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" name="zip" required>
    </div>
  </div>

  <div  style="text-align:center;">
  <button id="bttn" type="submit" class="btn btn-primary" style="text-align:center;">Place Order</button>
  <button id="bttn" type="reset" class="btn btn-primary" style="text-align:center; margin-left: 20px;">Reset Data</button>
  </div>

</form>
        </div>
</section>

    
</body>
</html>