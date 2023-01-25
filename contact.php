<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Inter:wght@100;200;300;400;500;531;600;700;800;900&family=Lobster&family=Montserrat:wght@1,500;600;700&family=Oxygen:wght@300;400;700&family=Raleway:ital,wght@0,100;0,500;1,400;1,500&family=Roboto:ital,wght@0,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" integrity="sha512-Velp0ebMKjcd9RiCoaHhLXkR1sFoCCWXNp6w4zj1hfMifYB5441C+sKeBl/T/Ka6NjBiRfBBQRaQq65ekYz3UQ==" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/AgroFarmLogo.jpg" type="image/icon type">
  <title>Contact Us</title>

<style>
  #butn{
    font-size:15px;
    padding: auto;
  }
  .contact-section .card {
    width: 360px;
    height: 450px;
  margin-bottom: 2rem;
  }
  .contact-section .card .card-body .card-title {
    font-size: 2.4rem;
    font-family: 'Raleway', sans-serif;
    color: #4d4d4d;
    font-size: 26px;
    font-weight: 500;
    text-align: center;
    text-transform: initial;
    position: relative;
  }
  .contact-section .card .card-body form label{
    font-size: .9rem!important;
    font-family: 'Raleway', sans-serif;
    color: #4d4d4d;
    font-weight: 500;
    text-align: center;
    text-transform: initial;
    position: relative;
}
  .contact-section .card .card-body form input, textarea {
    width: 280px;
    background-color: #f2f2ff2!important;
}

  .card-button .submit-btn {
    color: white;
    background: green;
    
  }
  .opening-hours h3 {
    font-size: 2rem!important;
    font-family: 'Raleway', sans-serif;
    color: #4d4d4d;
    font-weight: 500;
    text-transform: initial;
    position: relative;
  }
  .opening-hours h6 {
    font-size: 1.2rem!important;
    font-family: 'Raleway', sans-serif;
    color: #4d4d4d;
    font-weight: 500;
    text-transform: initial;
    position: relative;
  }

.page-footer .footer-socials {
  background-color: #004d4d;
}
.page-footer .footer-copyright {
  background-color: #003333;
}

@media (max-width: 576px) {
  .clients-title {
   font-size: 20px;
  }
  .contact-section .card {
  width: 320px;
  height: 390px;
  position: relative;
  }
  .contact-section .card .card-body form input, textarea {
    width: 210px;
    background-color: #f2f2ff2!important;
}
.opening-hours h3 {
    font-size: 1.2rem!important;
    font-family: 'Raleway', sans-serif;
    color: #4d4d4d;
    font-weight: 500;
    text-transform: initial;
    text-align: center;
  }
  hr {
    width: 100px;
    text-align :start;
  }
  .opening-hours h6 {
    font-size: .9rem!important;
    font-family: 'Raleway', sans-serif;
    color: #4d4d4d;
    font-weight: 500;
    text-align: center;
  }

}
</style>
</head>
<body>

<?php
  include("nav.php");
  ?>
    <div class="container">
    <h1 class="h1-responsive clients-title text-center shadow-sm py-2">Talk to us</h1>

    <div class="contact-section">
        <div class="row">

            <div class="col-sm-6">
                <div class="card align-items-center" >
                    <div class="card-body py-2">
                        <div class="card-title py-2">
                            <h4 class="h4-responsive">How can we help?</h4>
                        </div>
                         <form class="comment-form py-2" action="contactformdata.php" method="post">
                      <div class="form-group py-2">
                          <label for="name"><span class="sr-only">Name</span></label>
                          <input type="text" placeholder="Name" name="name" required>
                      </div>
                      <div class="form-group py-2">
                          <label for="email"><span class="sr-only">Email:</span></label>
                          <input type="email" placeholder="Email" name="email" required>
                      </div>
                      <div class="form-group py-2">
                          <label for="phone"><span class="sr-only">Phone Number:</span></label>
                          <input type="phone" placeholder="Phone Number" name="phone" required>
                      </div>
                      <div class="form-group py-2">
                          <label for="text-area"><span class="sr-only">Query or suggestion</span></label>
                         <textarea placeholder="Talk to us here..." name="message" cols="23" rows="3" required></textarea>
                      </div>
                      <div class="card-button">
                         <button type="submit" id="butn" class="btn btn-lg submit-btn">Submit</button>
                      </div>
                     
                  </form>
                    </div>
        
                </div>
          
            </div>
        
                <div class="col-sm-6 opening-hours">
                  <div class="container">

                    <h3 class="h3-responsive py-2 mx-2">Opening Hours</h3>
                    <hr>
                    <div class="content py-2 mx-2">
                  <h6 class="h6-responsive"><span><i class="fa fa-clock-o" aria-hidden="true"></i> </span> Monday-Friday: 08:00 AM - 7:00 PM</h6>
                  <h6 class="h6-responsive"><span><i class="fa fa-clock-o" aria-hidden="true"></i> </span> Weekends: 09:00 AM - 2:00 PM</h6>
                  <h6 class="h6-responsive"><span><i class="fa fa-clock-o" aria-hidden="true"></i> </span> Public Holidays: 10:00 AM- 4:00 PM</h6>
                    </div>

                    <div class="socials py-2 mx-2">
                      <h3 class="h3-responsive">Get in touch with us</h3>
                      <hr>
                      <h6 class="h6-responsive"><span> <i class="fa fa-envelope" aria-hidden="true"></i> </span>agrofarm.an.eshoppee@gmail.com</h6>
                      <h6 class="h6-responsive"><span> <i class="fa fa-phone" aria-hidden="true"></i> </span> (+91) 9049889137</h6>
                      <h6 class="h6-responsive"><span> <i class="fa fa-home" aria-hidden="true"></i> </span> Alandi-Devachi, Pune, 412105</h6>
                    </div>

                  
   <div class="social py-3 text-center text-black" style="cursor: pointer;">
      <i class="fa fa-facebook fa-2x mx-1" aria-hidden="true"></i>

     <i class="fa fa-twitter fa-2x mx-1" aria-hidden="true"></i>

    <i class="fa fa-instagram fa-2x mx-1" aria-hidden="true"></i>
     <i class="fa fa-home fa-2x mx-1" aria-hidden="true"></i>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js" integrity="sha512-YibiFIKqwi6sZFfPm5HNHQYemJwFbyyYHjrr3UT+VobMt/YBo1kBxgui5RWc4C3B4RJMYCdCAJkbXHt+irKfSA==" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
 
</body>
</html>