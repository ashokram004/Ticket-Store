<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Ticket Store</title>
        <link rel="icon" href="icon.png">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="C:\xampp\htdocs\ticketstore\style.css">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/datepicker.css">
        <link rel="stylesheet" href="css/templatemo-style.css">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

       

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/party-js@latest/bundle/party.min.js"></script>
    </head>

<?php

if(!$_REQUEST['mob'])
{
    header("location:http://localhost/ticketstore/index.html");
}
$mob = $_REQUEST['mob'];

?>





<body>
    <div class="wrap">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <button id="primary-nav-button" type="button">Menu</button>
                        <a href="index.html"><div class="logo">
                            <img src="img/store_header.png" alt="Venue Logo" height=100 width=220>
                        </div></a>
                        <nav id="primary-nav" class="dropdown cf">
                            <ul class="dropdown menu" >
                                <li class='active' ><a class="scrollTo" data-scrollTo="playing" href="#"><h1 style="font-size:20px; padding-top:20px">Playing near you</h1></a></li>
                                <li><a class="scrollTo" data-scrollTo="popularr" href="#"><h1 style="font-size:20px; padding-top:20px">Popular</h1></a></li>
                                <li> <a href="history.php?mob=<?php echo $mob ?>" onclick="post"> <h1 style="font-size:20px; padding-top:20px">Purchase History</h1></a></li>
                             
                                <li><a class="scrollTo" data-scrollTo="Contact" href="#Contact"><h1 style="font-size:20px; padding-top:20px">Contact Us</h1></a></li>
                                <li><a href="logout.php"><h1 style="font-size:20px; padding-top:20px">Logout</h1></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
    </div>
      

    <div class="boom1" >
    <section class="banner1" id="top1">
        
    </section></div>


<div class="boom1" >
    <section class="banner2" id="top2">
        
    </section></div>


    <div class="boom1" >
    <section class="banner3" id="top3">
        
    </section></div>




<script>
    var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("boom1");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}
  x[slideIndex-1].style.display = "block";
  setTimeout(carousel, 5000); 
}
</script>




<br><br><br>
<form action="theatre.php" method="post">
    <section class="playing-now" id="playing">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <span>Playing near you</span>
                        
                    </div>
                </div> 
            </div> 
            <div class="owl-carousel owl-theme">
                <div class="item playing-item">
                    <div class="thumb">
                        <a href="theatre.php?index=0 & mob=<?php echo $mob ?>" onclick="post"><img class="popimg" src="img/acharya.jpg"  height=260 width=300 alt=""></a>
                        <div class="text-content">
                            <h4>ACHARYA</h4>
                            
                        </div>
                        
                    </div>
                </div>
                <div class="item playing-item">
                    <div class="thumb">
                        <a href="theatre.php?index=1 & mob=<?php echo $mob ?>" onclick="post"><img src="img/bnm.jpg" class="popimg" height=260 width=300 alt=""></a>
                        <div class="text-content">
                            <h4>BHEEMLA NAYAK</h4>
                            
                        </div>
                        
                    </div>
                </div>
                <div class="item playing-item">
                    <div class="thumb">
                        <a href="theatre.php?index=2 & mob=<?php echo $mob ?>" onclick="post"><img src="img/radheshyam.jpg" class="popimg" height=260 width=300 alt=""></a>
                        <div class="text-content">
                            <h4>RADHE SHYAM</h4>
                            
                        </div>
                        
                    </div>
                </div>
                <div class="item playing-item">
                    <div class="thumb">
                        <a href="theatre.php?index=3 & mob=<?php echo $mob ?>" onclick="post"><img src="img/pushpa.jpg" class="popimg" height=260 width=300 alt=""></a>
                        <div class="text-content">
                            <h4>PUSHPA</h4>
                            
                        </div>
                        
                    </div>
                </div>
                <div class="item playing-item">
                    <div class="thumb">
                        <a href="theatre.php?index=4 & mob=<?php echo $mob ?>" onclick="post"><img src="img/2_0.jpg" class="popimg" height=260 width=300 alt=""></a>
                        <div class="text-content">
                            <h4>2.0</h4>
                           
                        </div>
                        
                    </div>
                </div>
                <div class="item playing-item">
                    <div class="thumb">
                        <a href="theatre.php?index=5 & mob=<?php echo $mob ?>" onclick="post"><img src="img/spiderman.jpg" class="popimg" height=260 width=300 alt=""></a>
                        <div class="text-content">
                            <h4>SPIDERMAN</h4>
                           
                        </div>
                       
                    </div>
                </div>
                <div class="item playing-item">
                    <div class="thumb">
                        <a href="theatre.php?index=6 & mob=<?php echo $mob ?>" onclick="post"><img src="img/saaho.jpg" class="popimg" height=260 width=300 alt=""></a>
                        <div class="text-content">
                            <h4>SAAHO</h4>
                         
                        </div>
                       
                    </div>
                </div>
                <div class="item playing-item">
                    <div class="thumb">
                        <a href="theatre.php?index=7 & mob=<?php echo $mob ?>" onclick="post"><img src="img/svp.jpg" class="popimg" height=260 width=300 alt=""></a>
                        <div class="text-content">
                            <h4>SARKARU VAARI PAATA</h4>
                           
                        </div>
                        
                    </div>
                </div>
                <div class="item playing-item">
                    <div class="thumb">
                        <a href="theatre.php?index=8 & mob=<?php echo $mob ?>" onclick="post"><img src="img/suraya.jpg" class="popimg" height=260 width=300 alt=""></a>
                        <div class="text-content">
                            <h4>AAKASAM NEE HADDURA</h4>
                            
                        </div>
                       
                    </div>
                </div>
                <div class="item playing-item">
                    <div class="thumb">
                        <a href="theatre.php?index=9 & mob=<?php echo $mob ?>" onclick="post"><img src="img/tuckjagadish.jpg" class="popimg" height=260 width=300 alt=""></a>
                        <div class="text-content">
                            <h4>TUCK JAGADISH</h4>
                            
                        </div>
                        
                    </div>
                </div>
                <div class="item playing-item">
                    <div class="thumb">
                        <a href="theatre.php?index=10 & mob=<?php echo $mob ?>" onclick="post"><img src="img/rgs.jpg" class="popimg" height=260 width=300 alt=""></a>
                        <div class="text-content">
                            <h4>RANGASTHALAM</h4>
                        
                        </div>
                     
                    </div>
                </div>
                <div class="item playing-item">
                    <div class="thumb">
                        <a href="theatre.php?index=11 & mob=<?php echo $mob ?>" onclick="post"><img src="img/krack.jpg" class="popimg" height=260 width=300 alt=""></a>
                        <div class="text-content">
                            <h4>KRACK</h4>
                            
                        </div>
                      
                    </div>
                </div>
                <div class="item playing-item">
                    <div class="thumb">
                        <a href="theatre.php?index=12 & mob=<?php echo $mob ?>" onclick="post"><img src="img/uppena.jpg" class="popimg" height=260 width=300 alt=""></a>
                        <div class="text-content">
                            <h4>UPPENA</h4>
                            
                        </div>
                      
                    </div>
                </div>
                <div class="item playing-item">
                    <div class="thumb">
                        <a href="theatre.php?index=13 & mob=<?php echo $mob ?>" onclick="post"><img src="img/cokancharapalem.jpg" class="popimg" height=260 width=300 alt=""></a>
                        <div class="text-content">
                            <h4>C/O KANCHARAPALEM</h4>
                          
                        </div>
                       
                    </div>
                </div>
                <div class="item playing-item">
                    <div class="thumb">
                        <a href="theatre.php?index=14 & mob=<?php echo $mob ?>" onclick="post"><img src="img/vs.jpg" class="popimg" height=260 width=300 alt=""></a>
                        <div class="text-content">
                            <h4>VAKEEL SAAB</h4>
                           
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </section>
</form>


    <section class="popular-movies" id="popularr">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <span>Most Popular</span>
                        
                    </div>
                </div> 
            </div> 


            
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="popular-item">
                        <a href="https://en.wikipedia.org/wiki/RRR_(film)">
                        <div class="thumb">
                            <img src="img/rrr1.jpg" alt="" height="400px" width="200px">
                            <div class="overlay-content">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="date-content">
                                <h6>7</h6>
                                <span>JAN</span>
                            </div>
                        </div>

                        <div class="down-content">
                            <h4>RISE ROAR REVOLT</h4> <br></a>
            
                        </div>

                    </div>
                </div>


                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="popular-item">
                        <a href="https://en.wikipedia.org/wiki/Sarkaru_Vaari_Paata">
                        <div class="thumb">
                            <img src="img/svp2.jpg" alt="" height="400px" width="200px">
                            <div class="overlay-content">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="date-content">
                                <h6>1</h6>
                                <span>APR</span>
                            </div>
                        </div>
                        <div class="down-content">
                            <h4>SARKARU VAARI PAATA</h4> <br></a>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="popular-item">
                        <a href="https://en.wikipedia.org/wiki/K.G.F:_Chapter_2">
                        <div class="thumb">
                            <img src="img/kgf2.jpg " alt="" height="400px" width="200px">
                            <div class="overlay-content">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="date-content">
                                <h6>14</h6>
                                <span>APR</span>
                            </div>
                        </div>
                        <div class="down-content">
                            <h4>KGF 2</h4> <br></a>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section style="padding-bottom: 3%;" class="popular-movies" id="upcoming">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <span>Upcoming Movies</span>
                        
                    </div>
                </div> 
            </div> 
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="popular-item">
                        <div class="thumb">
                            <img src="img/br.jpg" alt="" height="350px" width="200px">
                            
                            <div class="date-content">
                                <h6>28</h6>
                                <span>August</span>
                            </div>
                        </div>
                        <div class="down-content">
                            <h4>BANGAR RAJU</h4>
                            <br>
                            
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="popular-item">
                        <div class="thumb">
                            <img src="img/f3.jpg" alt="" height="350px" width="200px">
                            
                            <div class="date-content">
                                <h6>28</h6>
                                <span>August</span>
                            </div>
                        </div>
                        <div class="down-content">
                            <h4>F3</h4>
                            <br>
                            
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="popular-item">
                        <div class="thumb">
                            <img src="img/drstrange.jpg" alt="" height="350px" width="200px">
                            
                            <div class="date-content">
                                <h6>20</h6>
                                <span>September</span>
                            </div>
                        </div>
                        <div class="down-content">
                            <h4>DR. STRANGE 2</h4>
                            <br>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="popular-item">
                        <div class="thumb">
                            <img src="img/salaar.jpg" alt="" height="350px" width="200px">
                            
                            <div class="date-content">
                                <h6>28</h6>
                                <span>August</span>
                            </div>
                        </div>
                        <div class="down-content">
                            <h4>SALAAR</h4>
                            <br>
                            
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="popular-item">
                        <div class="thumb">
                            <img src="img/thor.jpg" alt="" height="350px" width="200px">
                            
                            <div class="date-content">
                                <h6>28</h6>
                                <span>August</span>
                            </div>
                        </div>
                        <div class="down-content">
                            <h4>THOR : LOVE & THUNDER</h4>
                            <br>
                            
                            
                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="popular-item">
                        <div class="thumb">
                            <img src="img/batman.jpg" alt="" height="350px" width="200px">
                           
                            <div class="date-content">
                                <h6>12</h6>
                                <span>October</span>
                            </div>
                        </div>
                        <div class="down-content">
                            <h4>THE BATMAN</h4>
                            <br>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

 


    
    <footer>
       
        <div class="container" id="Contact">
            <div class="row">
                <div class="col-md-5">
                    <div class="about-veno">
                        <div class="logo">
                            <img src="img/store_footer.png" alt="Venue Logo" height=100 width=220>
                        </div>
                        <p><h5>Telugu Movies Ticket Booking Platform.</h5></p>
                        <ul class="social-icons">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram" id="insta"></i></a>
                                <a href="#"><i class="fa fa-github" id="github"></i></a>
                                
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="useful-links">
                        <div class="footer-heading">
                            <h4>Useful Links</h4>
                        </div>
                        <div class="row">
                            
                            <div class="col-md-6">
                                <ul>
                                    <li><a href="https://www.anits.edu.in" target="_blank"><i class="fa fa-stop"></i>ANITS</a></li>
                                    <li><a href="members.html"><i class="fa fa-stop"></i>Project members</a></li>
                                    <li><a href="#"><i class="fa fa-stop"></i>Terms & conditions</a></li>
                                    <li><a href="#"><i class="fa fa-stop"></i>Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact-info">
                        <div class="footer-heading">
                            <h4>Contact Information</h4>
                        </div>
                        
                        <ul>
                            <li><span>Phone:</span><a href="#">1111111111</a></li>
                            <li><span>Email:</span><a href="#">@anits.edu.in</a></li>
                            <li><span>Address:</span><a href="#">vizag</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    
    <div class="sub-footer">
        <p>Copyright &copy; 2022
    
    	- Design: ANITS</p>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>
    
    <script src="js/datepicker.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>
</html>