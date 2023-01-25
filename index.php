
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Inter:wght@100;200;300;400;500;531;600;700;800;900&family=Lobster&family=Montserrat:wght@1,500;600;700&family=Oxygen:wght@300;400;700&family=Raleway:ital,wght@0,100;0,500;1,400;1,500&family=Roboto:ital,wght@0,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link href="css/ekko-lightbox.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/AgroFarmLogo.jpg" type="image/icon type">
  <title>AgroFarm - An EShoppee</title>
  <style>
     .bg-img {
    background-image: url('images/mainbg.jpg');
    height: 100vh;
    width: 99vw;
    position: relative;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
  </style>
</head>
<body>
  <?php
  include("nav.php");
  ?>
 
<div class="bg-img">
   <div class="overlay">
  <div class="home-page-content">
    <h1 class="text-center home-page-text h1-responsive">AgroFarm - An E Shoppee</h1>
    <h5 class="text-center home-supporting-text">Bringing you the freshest produce in the land</h5>
    <div class="home-buttons text-center fadeIn">
     <a href="store.php"> <div class="btn homepage-btn-1 btn-lg mt-2">Explore Store</div></a>
    </div>
   </div>  
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ekko-lightbox.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>