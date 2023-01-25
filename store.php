<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Inter:wght@100;200;300;400;500;531;600;700;800;900&family=Lobster&family=Montserrat:wght@1,500;600;700&family=Oxygen:wght@300;400;700&family=Raleway:ital,wght@0,100;0,500;1,400;1,500&family=Roboto:ital,wght@0,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"><script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="css/style.css">
  <title>Store</title>
  <link rel="icon" href="images/AgroFarmLogo.jpg" type="image/icon type">
  <style>
   
      
  </style>
</head>
<body>
    
<?php
  include("nav.php");
  ?>

    <div class="container">

         <!-- /main row -->
    <div class="row carousel-row py-3" data-ride="carousel">
        <div class="col-md-12">
          <h2 class="h2-responsive shadow py-3">Featured <b>Products</b></h2>
          <div id="myCarousel" class="carousel store-carousel slide" data-ride="carousel" data-interval="0">
          <!-- Carousel indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>   
          <!-- Wrapper for carousel items -->
          <div class="carousel-inner">
            <div class="item carousel-item active">
              <div class="row">
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                    <div class="img-box">
                      <img src="images/FeaturedProducts/bull.png" class="img-responsive img-fluid" alt="">									
                    </div>
                    <div class="thumb-content">
                      <h4>Ox</h4>									
                      <div class="star-rating">
                        <ul class="list-inline">
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                        </ul>
                      </div>
                      <p class="item-price"><strike>Rs 80000</strike> <b>Rs 78999</b></p>
                      <a href="booking.php" class="btn btn-primary">Order Now</a>
                    </div>						
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                    <div class="img-box">
                      <img src="images/FeaturedProducts/cow.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Cow</h4>									
                      <div class="star-rating">
                        <ul class="list-inline">
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                        </ul>
                      </div>
                      <p class="item-price"><strike>Rs 109000</strike> <b>Rs 106799</b></p>
                      <a href="booking.php" class="btn btn-primary">Order Now</a>
                    </div>						
                  </div>
                </div>		
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                    <div class="img-box">
                      <img src="images/FeaturedProducts/cock.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Cock</h4>									
                      <div class="star-rating">
                        <ul class="list-inline">
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                        </ul>
                      </div>
                      <p class="item-price"><strike>Rs 900</strike> <b>Rs 859</b></p>
                      <a href="booking.php" class="btn btn-primary">Order Now</a>
                    </div>						
                  </div>
                </div>								
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                    <div class="img-box">
                      <img src="images/FeaturedProducts/german_shepherd_PNG59.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>German Sheperd</h4>							
                      <div class="star-rating">
                        <ul class="list-inline">
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                        </ul>
                      </div>
                      <p class="item-price"><strike>Rs 80000</strike> <b>Rs 73899</b></p>
                      <a href="booking.php" class="btn btn-primary">Order Now</a>
                    </div>						
                  </div>
                </div>
              </div>
            </div>
            <div class="item carousel-item">
              <div class="row">
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                    <div class="img-box">
                      <img src="images/FeaturedProducts/dog_food_PNG65.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Dog food</h4>
                      <p class="item-price"><strike>Rs 289.00</strike> <span> Rs 269.00</span></p>
                      <div class="star-rating">
                        <ul class="list-inline">
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                        </ul>
                      </div>
                      <a href="booking.php" class="btn btn-primary">Order Now</a>
                    </div>						
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                    <div class="img-box">
                      <img src="images/FeaturedProducts/dog_PNG50412.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Dogs</h4>
                      <p class="item-price"><strike>Rs 1099.00</strike> <span>Rs 869.00</span></p>
                      <div class="star-rating">
                        <ul class="list-inline">
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                        </ul>
                      </div>
                      <a href="booking.php" class="btn btn-primary">Order Now</a>
                    </div>						
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                    <div class="img-box">
                      <img src="images/FeaturedProducts/fish.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Fish</h4>
                      <p class="item-price"><strike>Rs 1099.00</strike> <span>Rs 999.00</span></p>
                      <div class="star-rating">
                        <ul class="list-inline">
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                        </ul>
                      </div>
                      <a href="booking.php" class="btn btn-primary">Order Now</a>
                    </div>						
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                    <div class="img-box">
                      
                      <img src="images/FeaturedProducts/buffalo.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Buffalo</h4>	
                      <p class="item-price"><strike>Rs 99599.00</strike> <span>Rs 98569.00</span></p>
                      <div class="star-rating">
                        <ul class="list-inline">
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                        </ul>
                      </div>
                      <a href="booking.php" class="btn btn-primary">Order Now</a>
                    </div>						
                  </div>
                </div>						
              </div>
            </div>
            <div class="item carousel-item">
              <div class="row">
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                    <div class="img-box">
                      <img src="images/FeaturedProducts/pig_PNG2209.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Pigs</h4>
                      <p class="item-price"><strike>Rs 369.00</strike> <span>Rs 349.00</span></p>
                      <div class="star-rating">
                        <ul class="list-inline">
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                        </ul>
                      </div>
                      <a href="booking.php" class="btn btn-primary">Order Now</a>
                    </div>						
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                    <div class="img-box">
                      <img src="images/FeaturedProducts/cow_PNG50628.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Cow</h4>	
                      <p class="item-price"><strike>Rs 98000</strike> <span>Rs 98999</span></p>
                      <div class="star-rating">
                        <ul class="list-inline">
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                        </ul>
                      </div>
                      <a href="booking.php" class="btn btn-primary">Order Now</a>
                    </div>						
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                    <div class="img-box">
                      <img src="images/FeaturedProducts/whitecock.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>White Cock</h4>
                      <p class="item-price"><strike>Rs 450.00</strike> <span>Rs 418.00</span></p>
                      <div class="star-rating">
                        <ul class="list-inline">
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                        </ul>
                      </div>
                      <a href="booking.php" class="btn btn-primary">Order Now</a>
                    </div>						
                  </div>
                </div>	
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                    <div class="img-box">
                      <img src="images/FeaturedProducts/horse.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                      <h4>Horse</h4>
                      <p class="item-price"><strike>Rs 109350.00</strike> <span>Rs 108330.00</span></p>
                      <div class="star-rating">
                        <ul class="list-inline">
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                        </ul>
                      </div>
                      <a href="booking.php" class="btn btn-primary">Order Now</a>
                    </div>						
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Carousel controls -->
          <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
          </a>
          <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>
        </div>
      </div>
     </div>
   
      <!-- main store row -->


        <div class="col-md-12 store-items-col">
            <h2 class="store-items-heading h2-responsive shadow py-2">Just Arrived <b>In Store</b></h2>
            <!-- wrapper -->
      
                <div class="store-items">

                    <div class="row store-row-3 py-3">
  
                      <div class="col-sm-3">
                        <div class="thumb-wrapper">
                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                            <div class="img-box">
                                <img src="images/Vegetables/tomato.png" class="img-responsive img-fluid" alt="">									
                            </div>
                            <div class="thumb-content">
                                <h4 class="h4-responsive">Tomato</h4>									
                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                </div>
                                <p class="item-price"><strike>Rs 200/kg</strike> <b> Rs169/kg</b></p>
                              <a href="booking.php" class="btn btn-primary">Order Now</a>
                            </div>						
                        </div>                      
            </div>
            <!-- /card 1 -->
            <div class="col-sm-3">
                      <div class="thumb-wrapper">
                          <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                          <div class="img-box">
                              <img src="images/Vegetables/potato.png" class="img-responsive img-fluid" alt="">									
                          </div>
                          <div class="thumb-content">
                              <h4 class="h4-responsive">Potato</h4>									
                              <div class="star-rating">
                                  <ul class="list-inline">
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                  </ul>
                              </div>
                              <p class="item-price"><strike>Rs 200/kg</strike> <b> Rs 169/kg</b></p>
                              <a href="booking.php" class="btn btn-primary">Order Now</a>
                              <!-- <a href="booking.php" class="btn btn-primary">Add to Cart</a> -->
                          </div>						
                      </div>                      
          </div>
              
      <!-- /card 2 -->
  
      <div class="col-sm-3">
        <div class="thumb-wrapper">
            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
            <div class="img-box">
                <img src="images/Vegetables/brinjal.png" class="img-responsive img-fluid" alt="">									
            </div>
            <div class="thumb-content">
                <h4 class="h4-responsive">Brinjal</h4>									
                <div class="star-rating">
                    <ul class="list-inline">
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                    </ul>
                </div>
                <p class="item-price"><strike>Rs 200/kg</strike> <b> Rs169/kg</b></p>
                              <a href="booking.php" class="btn btn-primary">Order Now</a>
            </div>						
        </div>              
      </div>
      <!-- /card3 -->
  
      <div class="col-sm-3">
        <div class="thumb-wrapper">
            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
            <div class="img-box">
                <img src="images/Vegetables/cucumber.png" class="img-responsive img-fluid" alt="">									
            </div>
            <div class="thumb-content">
                <h4 class="h4-responsive">Cucumber</h4>									
                <div class="star-rating">
                    <ul class="list-inline">
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                    </ul>
                </div>
                <p class="item-price"><strike>Rs 200/kg</strike> <b> Rs169/kg</b></p>
                              <a href="booking.php" class="btn btn-primary">Order Now</a>
            </div>						
        </div>            
      </div>
      <!-- /card 4-->
    </div>
                  <div class="row store-row-2 py-3">

                 

          <div class="col-sm-3">
                  <div class="thumb-wrapper">
                      <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                      <div class="img-box">
                          <img src="images/Vegetables/onion.png" class="img-responsive img-fluid" alt="">									
                      </div>
                      <div class="thumb-content">
                          <h4 class="h4-responsive">Oninon</h4>									
                          <div class="star-rating">
                              <ul class="list-inline">
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                              </ul>
                          </div>
                          <p class="item-price"><strike>Rs 100/kg</strike> <b> Rs 70/kg</b></p>
                              <a href="booking.php" class="btn btn-primary">Order Now</a>
                      </div>						
                  </div>                     
      </div>
      

              <div class="col-sm-3">
                <div class="thumb-wrapper">
                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                    <div class="img-box">
                        <img src="images/Vegetables/broccoli.png" class="img-responsive img-fluid" alt="">									
                    </div>
                    <div class="thumb-content">
                        <h4 class="h4-responsive">Broccoli</h4>									
                        <div class="star-rating">
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                            </ul>
                        </div>
                        <p class="item-price"><strike>Rs 300/kg</strike> <b> Rs 269/kg</b></p>
                              <a href="booking.php" class="btn btn-primary">Order Now</a>
                    </div>						
                </div>                     
    </div>
    <!-- /card 2 -->

    <div class="col-sm-3">
      <div class="thumb-wrapper">
          <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
          <div class="img-box">
              <img src="images/Vegetables/cabbage.png" class="img-responsive img-fluid" alt="">									
          </div>
          <div class="thumb-content">
              <h4 class="h4-responsive">Cabbage</h4>									
              <div class="star-rating">
                  <ul class="list-inline">
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                  </ul>
              </div>
              <p class="item-price"><strike>Rs 100/kg</strike> <b> Rs 69/kg</b></p>
                              <a href="booking.php" class="btn btn-primary">Order Now</a>
          </div>						
      </div>              
    </div>
    <!-- /card3 -->

    <div class="col-sm-3">
      <div class="thumb-wrapper">
          <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
          <div class="img-box">
              <img src="images/Vegetables/cauliflower.png" class="img-responsive img-fluid" alt="">									
          </div>
          <div class="thumb-content">
              <h4 class="h4-responsive">Cauliflower</h4>									
              <div class="star-rating">
                  <ul class="list-inline">
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                  </ul>
              </div>
              <p class="item-price"><strike>Rs 120/kg</strike> <b> Rs 75/kg</b></p>
                              <a href="booking.php" class="btn btn-primary">Order Now</a>
          </div>						
      </div>            
    </div>
    <!-- /card 4-->
                  </div>
                  <!-- /store-row-2 -->

                  </div>
                  <!-- /store-row-3 -->

                    <!-- Store 3 (a) -->
                    <div class="row store-row-3 py-3">
  
                      <div class="col-sm-3">
                        <div class="thumb-wrapper">
                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                            <div class="img-box">
                                <img src="images/Vegetables/chilli.png" class="img-responsive img-fluid" alt="">									
                            </div>
                            <div class="thumb-content">
                                <h4 class="h4-responsive">Chilli</h4>									
                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                </div>
                                <p class="item-price"><strike>Rs 200/kg</strike> <b> Rs169/kg</b></p>
                              <a href="booking.php" class="btn btn-primary">Order Now</a>
                            </div>						
                        </div>                      
            </div>
            <!-- /card 1 -->
            <div class="col-sm-3">
                      <div class="thumb-wrapper">
                          <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                          <div class="img-box">
                              <img src="images/Vegetables/Frenchbeans.png" class="img-responsive img-fluid" alt="">									
                          </div>
                          <div class="thumb-content">
                              <h4 class="h4-responsive">French Beans</h4>									
                              <div class="star-rating">
                                  <ul class="list-inline">
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                  </ul>
                              </div>
                              <p class="item-price"><strike>Rs 200/kg</strike> <b> Rs 169/kg</b></p>
                              <a href="booking.php" class="btn btn-primary">Order Now</a>
                              <!-- <a href="booking.php" class="btn btn-primary">Add to Cart</a> -->
                          </div>						
                      </div>                      
          </div>
              
      <!-- /card 2 -->
  
      <div class="col-sm-3">
        <div class="thumb-wrapper">
            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
            <div class="img-box">
                <img src="images/Vegetables/coriander.png" class="img-responsive img-fluid" alt="">									
            </div>
            <div class="thumb-content">
                <h4 class="h4-responsive">Coriander</h4>									
                <div class="star-rating">
                    <ul class="list-inline">
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                    </ul>
                </div>
                <p class="item-price"><strike>Rs 200/kg</strike> <b> Rs169/kg</b></p>
                              <a href="booking.php" class="btn btn-primary">Order Now</a>
            </div>						
        </div>              
      </div>
      <!-- /card3 -->
  
      <div class="col-sm-3">
        <div class="thumb-wrapper">
            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
            <div class="img-box">
                <img src="images/Vegetables/kidneybeans.png" class="img-responsive img-fluid" alt="">									
            </div>
            <div class="thumb-content">
                <h4 class="h4-responsive">Kidney Beans</h4>									
                <div class="star-rating">
                    <ul class="list-inline">
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                    </ul>
                </div>
                <p class="item-price"><strike>Rs 200/kg</strike> <b> Rs169/kg</b></p>
                              <a href="booking.php" class="btn btn-primary">Order Now</a>
            </div>						
        </div>            
      </div>
      <!-- /card 4-->
    </div>
                    <div class="row store-row-3 py-3">
  
                      <div class="col-sm-3">
                        <div class="thumb-wrapper">
                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                            <div class="img-box">
                                <img src="images/Vegetables/sweetpotato.png" class="img-responsive img-fluid" alt="">									
                            </div>
                            <div class="thumb-content">
                                <h4 class="h4-responsive">Sweet Potato</h4>									
                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                </div>
                                <p class="item-price"><strike>Rs 200/kg</strike> <b> Rs169/kg</b></p>
                              <a href="booking.php" class="btn btn-primary">Order Now</a>
                            </div>						
                        </div>                      
            </div>
            <!-- /card 1 -->
            <div class="col-sm-3">
                      <div class="thumb-wrapper">
                          <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                          <div class="img-box">
                              <img src="images/Vegetables/radish.png" class="img-responsive img-fluid" alt="">									
                          </div>
                          <div class="thumb-content">
                              <h4 class="h4-responsive">Raddish</h4>									
                              <div class="star-rating">
                                  <ul class="list-inline">
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                  </ul>
                              </div>
                              <p class="item-price"><strike>Rs 200/kg</strike> <b> Rs 169/kg</b></p>
                              <a href="booking.php" class="btn btn-primary">Order Now</a>
                              <!-- <a href="booking.php" class="btn btn-primary">Add to Cart</a> -->
                          </div>						
                      </div>                      
          </div>
              
      <!-- /card 2 -->
  
      <div class="col-sm-3">
        <div class="thumb-wrapper">
            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
            <div class="img-box">
                <img src="images/Vegetables/pumpkin.png" class="img-responsive img-fluid" alt="">									
            </div>
            <div class="thumb-content">
                <h4 class="h4-responsive">Pumpkin</h4>									
                <div class="star-rating">
                    <ul class="list-inline">
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                    </ul>
                </div>
                <p class="item-price"><strike>Rs 200/kg</strike> <b> Rs169/kg</b></p>
                              <a href="booking.php" class="btn btn-primary">Order Now</a>
            </div>						
        </div>              
      </div>
      <!-- /card3 -->
  
      <div class="col-sm-3">
        <div class="thumb-wrapper">
            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
            <div class="img-box">
                <img src="images/Vegetables/LadyFinger.png" class="img-responsive img-fluid" alt="">									
            </div>
            <div class="thumb-content">
                <h4 class="h4-responsive">Lady Finger</h4>									
                <div class="star-rating">
                    <ul class="list-inline">
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                    </ul>
                </div>
                <p class="item-price"><strike>Rs 200/kg</strike> <b> Rs169/kg</b></p>
                              <a href="booking.php" class="btn btn-primary">Order Now</a>
            </div>						
        </div>            
      </div>
      <!-- /card 4-->
    </div>

                  <!-- Store 3 -->
                  <div class="row store-row-3 py-3">

                    <div class="col-sm-3">
                      <div class="thumb-wrapper">
                          <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                          <div class="img-box">
                              <img src="images/Vegetables/carrot.png" class="img-responsive img-fluid" alt="">									
                          </div>
                          <div class="thumb-content">
                              <h4 class="h4-responsive">Carrot</h4>									
                              <div class="star-rating">
                                  <ul class="list-inline">
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                  </ul>
                              </div>
                              <p class="item-price"><strike>Rs 140/kg</strike> <b> Rs 90/kg</b></p>
                              <a href="booking.php" class="btn btn-primary">Order Now</a>
                          </div>						
                      </div>                      
          </div>
          <!-- /card 1 -->

              <div class="col-sm-3">
                <div class="thumb-wrapper">
                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                    <div class="img-box">
                        <img src="images/Vegetables/corn.png" class="img-responsive img-fluid" alt="">									
                    </div>
                    <div class="thumb-content">
                        <h4 class="h4-responsive">Corn</h4>									
                        <div class="star-rating">
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                            </ul>
                        </div>
                        <p class="item-price"><strike>Rs 50/kg</strike> <b> Rs 39/kg</b></p>
                              <a href="booking.php" class="btn btn-primary">Order Now</a>
                    </div>						
                </div>                     
    </div>
    <!-- /card 2 -->

    <div class="col-sm-3">
      <div class="thumb-wrapper">
          <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
          <div class="img-box">
              <img src="images/Vegetables/garlic.png" class="img-responsive img-fluid" alt="">									
          </div>
          <div class="thumb-content">
              <h4 class="h4-responsive">Garlic</h4>									
              <div class="star-rating">
                  <ul class="list-inline">
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                  </ul>
              </div>
              <p class="item-price"><strike>Rs 300/kg</strike> <b> Rs 270/kg</b></p>
                              <a href="booking.php" class="btn btn-primary">Order Now</a>
          </div>						
      </div>              
    </div>
    <!-- /card3 -->

    <div class="col-sm-3">
      <div class="thumb-wrapper">
          <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
          <div class="img-box">
              <img src="images/Vegetables/ginger_PNG16800.png" class="img-responsive img-fluid" alt="">									
          </div>
          <div class="thumb-content">
              <h4 class="h4-responsive">Ginger</h4>									
              <div class="star-rating">
                  <ul class="list-inline">
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                  </ul>
              </div>
              <p class="item-price"><strike>Rs 500/kg</strike> <b> Rs 459/kg</b></p>
                              <a href="booking.php" class="btn btn-primary">Order Now</a>
          </div>						
      </div>            
    </div>
    <!-- /card 4-->
                  </div>
                  <!-- /store-row-3 -->

                    <!-- Store 3 (a) -->
                    <div class="row store-row-3 py-3">
  
                      <div class="col-sm-3">
                        <div class="thumb-wrapper">
                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                            <div class="img-box">
                                <img src="images/Vegetables/mushroom.png" class="img-responsive img-fluid" alt="">									
                            </div>
                            <div class="thumb-content">
                                <h4 class="h4-responsive">Mushroom</h4>									
                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                </div>
                                <p class="item-price"><strike>Rs 200/kg</strike> <b> Rs169/kg</b></p>
                              <a href="booking.php" class="btn btn-primary">Order Now</a>
                            </div>						
                        </div>                      
            </div>
            <!-- /card 1 -->
            <div class="col-sm-3">
                      <div class="thumb-wrapper">
                          <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                          <div class="img-box">
                              <img src="images/Vegetables/beet.png" class="img-responsive img-fluid" alt="">									
                          </div>
                          <div class="thumb-content">
                              <h4 class="h4-responsive">Beetroot</h4>									
                              <div class="star-rating">
                                  <ul class="list-inline">
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                  </ul>
                              </div>
                              <p class="item-price"><strike>Rs 200/kg</strike> <b> Rs 169/kg</b></p>
                              <a href="booking.php" class="btn btn-primary">Order Now</a>
                              <!-- <a href="booking.php" class="btn btn-primary">Add to Cart</a> -->
                          </div>						
                      </div>                      
          </div>
              
      <!-- /card 2 -->
  
      <div class="col-sm-3">
        <div class="thumb-wrapper">
            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
            <div class="img-box">
                <img src="images/Saplings/palm_tree_PNG93356.png" class="img-responsive img-fluid" alt="">									
            </div>
            <div class="thumb-content">
                <h4 class="h4-responsive">Plm trees</h4>									
                <div class="star-rating">
                    <ul class="list-inline">
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                    </ul>
                </div>
                <p class="item-price"><strike>Rs 200/kg</strike> <b> Rs169/kg</b></p>
                              <a href="booking.php" class="btn btn-primary">Order Now</a>
            </div>						
        </div>              
      </div>
      <!-- /card3 -->
  
      <div class="col-sm-3">
        <div class="thumb-wrapper">
            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
            <div class="img-box">
                <img src="images/Vegetables/wheat.png" class="img-responsive img-fluid" alt="">									
            </div>
            <div class="thumb-content">
                <h4 class="h4-responsive">Wheat</h4>									
                <div class="star-rating">
                    <ul class="list-inline">
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                    </ul>
                </div>
                <p class="item-price"><strike>Rs 200/kg</strike> <b> Rs169/kg</b></p>
                              <a href="booking.php" class="btn btn-primary">Order Now</a>
            </div>						
        </div>            
      </div>
      <!-- /card 4-->
    </div>
                    <!-- /store-row-3(a)-->           
  </div>
                    <!-- /store items -->

  <?php
    // include("storeother.php")
  ?>
</div>
                <!-- /col-md-12-->     
</div>
                <!-- /container -->


    


   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>