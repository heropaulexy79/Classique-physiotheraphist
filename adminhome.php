<?php 
    session_start();
    include('config.php');

    if(!isset($_SESSION['user'])){
        echo '<script>window.location.href="index.html"</script>';
    }
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Classique physiotherapy services is a team of professional physiotherapist committted to rehabilitate the world.">
    <meta name="keywords" content="Classique Physiotherapy Services">
    <title>Classique | Physiotherapist</title>
    <link rel="shortcut icon" type="image/png" href="images/favicon.png"\>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <!-- Style -->
    <link href="css/style.css" rel="stylesheet">
    <script src="jQuery/jQuery-2.1.4.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function()
      {
        $(window).scroll(function()
          {
            if ($(this).scrollTop() > 100)
            {
              $('#scroll').fadeIn();
            }
            else
            {
              $('#scroll').fadeOut();
            }
          })
        

      $('#scroll').click(function()
      {
        $("html, body").animate(
          { scrollTop: 0 }, 600);
        return false;
      });
  });

    </script>
    <style>
      #scroll{

        position: fixed;
        right: 10px;
        bottom: 10px;
        height: 50px;
        width: 50px;
        background-color: #0eb769;
        border-radius: 60px;
        -webkit-border-radius: 60px;
        -moz-border-radius: 60px;


      }
      #scroll span{
        position: absolute;
        top: 50%;
        left: 50%;
        margin-left: -8px;
        margin-right: -12px;
        border: 8px solid transparent;
        border-bottom-color: white;
        margin-top: -10px;
        font-size: 20px;

      }

      #scroll hover{
        background-color: cyan;
        opacity: 1px;
        filter: "alpha(opacity=100)";
        -ms-filter: "alpha(opacity=100)";

      }
    </style>

    <style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
 

<body id = "mypage" data-spy="scroll" data-target=".navigation" data-offset="50">
    <div class="header-top">
        <!-- header-top-->
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                    <span class="text-block time-block">  
                                <span class="time-text"><i class="fa fa-users"></i> Welcome <?php echo $_SESSION['user']; ?></span>
                    </span>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8  col-xs-12">
                    <div class="top-text wow slideInDown" data-wow-duration="1s">
                        <span class="text-block call-block"> 
                               <span class="call-no"><a href="logout.php" style="color:white"><i class="fa fa-sign-out"></i> Logout</a></span>
                        </span>
                        <span class="text-block mail-block hidden-xs hidden-sm">  
                                <span class="mail-text"></span>
                        </span>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <a href="#"><img src="images/logo.png" alt=""></a>
                </div>
                <div class="col-lg-8 col-md-4 col-sm-12 col-xs-12">
                     <div class="navigation">
                        <div id="navigation">
                            <ul style="">
                                <li><a href="#mypage" title="Home">Home</a></li>
                               
                                <li class="has-sub"><a href="#services" title="Service List">Service List</a>
                                    <ul>
                                        <li><a href="orthopedic.html" title="Service List">Orthopedic </a></li>
                                        <li><a href="cardiac.html" title="Service Detail">Cardiac</a></li>
                                        <li><a href="neurological.html" title="Service Detail">Neurological</a></li>
                                        <li><a href="paediatric.html" title="Service Detail">Paediatric</a></li>
                                        <li><a href="service-list.html" title="Service Detail">Others</a></li>
                                    </ul>
                                </li>
                                <li><a href="forum.php" title="Forum">Forum</a>
                                </li>
                                <li><a href="contact.html" title="Contact Us">Contact</a> </li>
                                <li><a href="#our-team" title="Our Team">Our Team</a> 
                              </li>
                              <li><a href="#aboutus" title="About">About us</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
        <!-- Slideshow container -->

<br>
        <div class="container welcome">
            <div class="row">
                <div class="col-md-2 wow slideInDown">
                    <h5 class="hero-title"></h5>
                    <p class="hero-text"><h1 style="color: #e20a04"><strong>WELCOME!</strong></h1><br>Classique physiotherapy services is a team of professional physiotherapist committted to rehabilitate the world.
                    </p>
                    <a href="#aboutus" class="btn btn-danger">About us</a>
                </div>
                <div class="col-md-10">
                    <div class="slideshow-container">

<div class="mySlides">
  <div class="numbertext">1 / 4</div>
  <img src="images/img1.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides">
  <div class="numbertext">2 / 4</div>
  <img src="images/img2.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides">
  <div class="numbertext">3 / 4</div>
  <img src="images/img3.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides">
  <div class="numbertext">4 / 4</div>
  <img src="images/img4.jpg" style="width:100%">
  <div class="text"></div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<hr>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
   <span class="dot" onclick="currentSlide(4)"></span> 
</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>
                </div>
            </div>
        </div>
    
  
    <div class="space-medium">
        <div class="container">
          <section id="#services">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 wow slideInDown" data-wow-duration="5s">
                    <div class="mb60 text-center section-title">
                        <!-- section title start-->
                        <h5>.....Physiotherapy Services at your doorstep.....</h5>
                        <h1>Wide Range of Physical Therapy Services</h1>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="service-block">
                        <!-- service block -->
                        <div class="service-img mb20">
                            <!-- service img -->
                            <a href="orthopedic.html"><img src="images/service-1.jpg" alt="" class="img-responsive wow bounceIn" data-wow-delay="1s"></a>
                        </div>
                        <!-- service img -->
                        <div class="service-content">
                            <!-- service content -->
                            <h2><a href="orthopedic.html" class="title">Orthopedic</a></h2>
                            <p class="wow slideInDown" data-wow-duration="4s">This is the branch of physiotherapy concerned with the treatment of injuries or disorders of the skeletal system and associated muscles, joints and ligaments. 
                            Orthopaedic Physiotherapy also includes pre and post operative rehabilitation of hip, shoulder and knee.</p>
                        </div>
                        <!-- service content -->
                    </div>
                    <!-- /.service block -->
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="service-block">
                        <!-- service block -->
                        <div class="service-img mb20">
                            <!-- service img -->
                            <a href="cardiac.html"><img src="images/service-2.jpg" alt="" class="img-responsive wow bounceIn" data-wow-delay="2s"></a>
                        </div>
                        <!-- service img -->
                        <div class="service-content">
                            <!-- service content -->
                            <h2><a href="cardiac.html" class="title" >Cardiac </a></h2>
                            <p class="wow slideInDown" data-wow-duration="4s">What Does Cardiac Rehab Involve? Cardiac rehab doesn’t change your past, but it can help you improve your heart’s future.
                                 It’s a medically supervised program designed to help improve your cardiovascular health if you have experienced heart attack, heart failure, angioplasty or heart surgery.</p>
                        </div>
                        <!-- service content -->
                    </div>
                    <!-- /.service block -->
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="service-block">
                        <!-- service block -->
                        <div class="service-img mb20">
                            <!-- service img -->
                            <a href="neurological.html"><img src="images/service-3.jpg" alt="" class="img-responsive wow bounceIn" data-wow-delay="3s"></a>
                        </div>
                        <!-- service img -->
                        <div class="service-content">
                            <!-- service content -->
                            <h2><a href="neurological.html" class="title">Neurologic</a></h2>
                            <p class="wow slideInDown" data-wow-duration="4s">A neurologic physical therapist is a physical therapist who specializes in the evaluation and treatment of individuals with movement problems due to disease or injury of the nervous system. 
                                Physical therapists can help improve or restore the mobility you need to move forward with your life.</p>
                        </div>
                        <!-- service content -->
                    </div>
                    <!-- /.service block -->
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="service-block">
                        <!-- service block -->
                        <div class="service-img mb20">
                            <!-- service img -->
                            <a href="paediatric.html"><img src="images/service-4.jpg" alt="" class="img-responsive wow bounceIn" data-wow-delay="4s"></a>
                        </div>
                        <!-- service img -->
                        <div class="service-content">
                            <!-- service content -->
                            <h2><a href="paediatric.html" class="title">Paediatric</a></h2>
                            <p class="wow slideInDown" data-wow-duration="4s">Paediatric Occupational therapists are part of the multi-disciplinary medical team that can work with your child to promote their best level of development and achievement in school and at home, in leisure pursuit and in their social skills.</p>
                        </div>
                        <!-- service content -->
                    </div>
                    <!-- /.service block -->
                </div>
            </div>
            </section>
        </div>
    </div>
    <div class="space-small bg-primary" >
        <!-- call to action -->
        <div class="container" style="background-image: url(images/img_nature_wide);">
            <div class="row">
                <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12 wow shake">
                    <h1 class="cta-title">Book your online appointment</h1>
                    <p class="cta-text"> Call to action button for booking appointment for patients.</p>
                </div>
                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                    <button type="button" class="btn btn-danger btn-lg mt20 wow bounceInUp" data-toggle="modal" data-target="#myModal" data-wow-delay="1s">Book an appointment</button>
                </div>
            </div>
          </div>
        </div>


             <div class="modal fade" id="myModal" role="dialog" style="margin-top: 100px;">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" style="background-color: #0eb769;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color: #ffffff;"><b>BOOK AN APPOINTMENT</b></h4>
        </div>
        <div class="modal-body">
          <div class="row">
          <div class="form-group col-md-12">
            <div class="panel panel-danger">
              <div class="panel panel-heading">Select Appointment Type:</div>
              <div class="panel-body">
                    <select class="form-control" name="services" id="services" required>
                      <option value="">--Select Type--</option>
                      <option>Home Services</option>
                      <option>Clinic Appointment</option>
                      <option>Consultation</option>
                      </select>
              </div>
            </div>
                    
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="panel panel-danger" id="pane">
                      <div class="panel panel-heading"><h3>HOME SERVICES/CLINIC APPOINTMENT FORM</h3></div>
                      <div class="panel-body">
                        <div class="col-md-1"></div>
                        <div class="col-md-11">
                        <form method="post" action="#" role="form">
                          <div class="form-group">
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="name" placeholder="Name" required>
                            </div>
                          </div>
                      
                      <div class="form-group">
                        <div class="col-sm-10">
                      <input type="email" class="form-control" name="name" placeholder="Email" required>
                    </div>
                      </div>
                      <br>
                 
                       <div class="form-group">      
                        <div class="col-sm-10">
                      <input type="text" class="form-control" name="name" placeholder="Phone No" required>
                      
                    </div>
                      </div>
                      <br>
                      <div class="col-sm-4">
                        <label style="color: #f50d18" class="control-label" for="gender">Sex:</label>
                      <select class="form-control" name="gender" required>
                      <option>Male</option>
                      <option>Female</option>
                      </select>
                    </div>
                    <div class="form-group">      
                        <div class="col-sm-6">
                          <label style="color: #f50d18" class="control-label" for="gender">Age:</label>
                      <input type="text" class="form-control" name="name" placeholder="21yrs" required>
                      
                    </div>
                      </div>
                      <br>
                      
                      <div class="col-sm-4">
                        <label style="color: #f50d18" class="control-label" for="pref">Preference:</label>
                      <select class="form-control" name="pref" required>
                      <option>Regular</option>
                      <option>Vip</option>
                      </select>
                    </div>
                    <div class="form-group">      
                        <div class="col-sm-6">
                          <label style="color: #f50d18" class="control-label" for="date">Appointment Date:</label>
                      <input type="date" class="form-control" name="name" placeholder="" required>
                      
                    </div>
                      </div>
                      <div class="form-group">      
                        <div class="col-sm-10">
                      <textarea class="form-control" name="address" placeholder="Address" required></textarea>
                      
                    </div>
                      </div>
                        </form>
                      </div>
                      </div>
                      <center><button type="submit" class="btn btn-danger" name="submit" id="submit"><i class=" fa fa-send-o"></i> Submit</button></center>
                      <br>
                      <br>
                    </div>
                </div>   
        </div>
        <div class="row">
                  <div class="col-md-12">
                    <div class="panel panel-danger" id="pan">
                      <div class="panel panel-heading"><h3>CONSULTATION APPOINTMENT</h3></div>
                      <div class="panel-body">
                        <div class="col-md-1"></div>
                        <div class="col-md-11">
                        <form method="Post" action="#">
                          <div class="form-group" >
                        <div class="col-sm-10">
                      <input type="text" class="form-control" name="name" placeholder="Name" required>
                    </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="col-sm-10">
                      <input type="email" class="form-control" name="name" placeholder="Email" required>
                    </div>
                      </div>
                      <br>
                 
                       <div class="form-group">      
                        <div class="col-sm-10">
                      <input type="text" class="form-control" name="name" placeholder="Phone No" required>
                      
                    </div>
                      </div>
                      <br>
                      <div class="col-sm-4">
                        <label style="color: #f50d18" class="control-label" for="gender">Sex:</label>
                      <select class="form-control" name="gender" required>
                      <option>Male</option>
                      <option>Female</option>
                      </select>
                    </div>
                    <div class="form-group">      
                        <div class="col-sm-6">
                          <label style="color: #f50d18" class="control-label" for="gender">Age:</label>
                      <input type="text" class="form-control" name="name" placeholder="21yrs" required>
                      
                    </div>
                      </div>
                      <br>
                      
                      <div class="col-sm-4">
                        <label style="color: #f50d18" class="control-label" for="pref">Preference:</label>
                      <select class="form-control" name="pref" required>
                      <option>Regular</option>
                      <option>Vip</option>
                      </select>
                    </div>
                    <div class="form-group">      
                        <div class="col-sm-6">
                          <label style="color: #f50d18" class="control-label" for="date">Appointment Date:</label>
                      <input type="date" class="form-control" name="name" placeholder="" required>
                      
                    </div>
                      </div>
                      <div class="form-group">      
                        <div class="col-sm-10">
                      <input type="text" class="form-control" name="name" placeholder="Address" required>
                      
                    </div>
                      </div>
                      <br>
                      <div class="form-group">      
                        <div class="col-sm-10">
                      <input type="text" class="form-control" name="name" placeholder="Organization Name" required>
                    </div>
                      </div>
                      <br>
                      <div class="form-group">      
                        <div class="col-sm-10">
                          <textarea class="form-control" placeholder="Complaint" required=""></textarea>
                      <!-- <input type="text" class="form-control" name="name" placeholder="Complaint" required> -->
                      
                    </div>
                      </div>
                      <br>
                        </form> 
                        </div>
                      </div>
                      <center><button type="submit" class="btn btn-danger" name="submit" id="submit"><i class=" fa fa-send-o"></i> Submit</button></center>
                      <br>
                    </div>
                </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
        </div>


<!-- Modal -->
    <!-- /.call to action -->
    <div class="space-medium">
        <div class="container">
           <section id="our-team">
            <div class="row">
                <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12 wow slideInDown" data-wow-duration = "5">
                    <div class="section-title mb60 text-center">
                        <!-- section title start-->
                        
                        <h1>Meet Our Physiotherapist</h1>
                    </div>
                    <!-- /.section title end-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="team-block">
                        <!-- team block start-->
                        <div class="team-img"><img src="images/emmanuel.png" class="img-circle img-responsive wow bounceIn data-wow-delay = 1s" alt="Cinque Terre" width="304" height="236"></div>
                        <div class="team-content" style="margin-left:-190px;">
                            <h2 class="team-title">Pt.Emmanuel </h2>
                            <div class="team-meta"><span class="team-designation">Consultant Physician</span></div>
                        </div>
                    </div>
                    <!-- team block end -->
                </div>
                <div class="col-md-7">
                  <div class="panel panel-default">
      <div class="panel-heading" style="background-color: #0eb769; color: #ffffff">
        <h4 class="panel-title">
          THE MANAGEMENT
        </h4>
      </div>
        <div class="panel-body"><br>
        Classique physiotherapy services is a team of professional physiotherapist. It is founded and managed by Dr Emmanuel. This company was launched in the third quarter of the year 2017. <br><br>



        </div>
      
    </div>
                </div>
                <!-- <div class="col-lg-3 col-sm-3 col-sm-6 col-xs-12">
                    <div class="team-block">
                        <! team block start>
                        <div class="team-img"><img src="images/team-2.jpg" class="wow bounceIn" data-wow-delay = "2s"></div>
                        <div class="team-content">
                            <h2 class="team-title">Dr.Ray Wilford</h2>
                            <div class="team-meta"><span class="team-designation">Physician</span></div>
                        </div>
                    </div>
                    <! team block end >
                </div>
                <div class="col-lg-3 col-sm-3 col-sm-6 col-xs-12">
                    <div class="team-block">
                        <!team block start->
                        <div class="team-img"><img src="images/team-3.jpg" class="wow bounceIn" data-wow-delay = "3s"></div>
                        <div class="team-content">
                            <h2 class="team-title">Dr.Donna Handy</h2>
                            <div class="team-meta"><span class="team-designation">Consultant Physician</span></div>
                        </div>
                    </div>
                    <! team block end >
                </div>
                <div class="col-lg-3 col-sm-3 col-sm-6 col-xs-12">
                    <div class="team-block">
                        <! team block start>
                        <div class="team-img"><img src="images/team-4.jpg" class="wow bounceIn" data-wow-delay = "4s"></div>
                        <div class="team-content">
                            <h2 class="team-title">Dr.Terry Cruz</h2>
                            <div class="team-meta"><span class="team-designation">Physician</span></div>
                        </div>
                    </div>
                    <!team block end >
                </div> -->
            </div>
          </section>
            <hr>
            
             <div class="row"><center>
              <section id="aboutus">
            <h1>About Us</h1></center>
            <hr>
               
           <div class="col-md-3 wow slideInDown" data-wow-duration="1s">
            <center>
               <img src="images/mission.png" class="wow bounceIn" data-wow-delay = "1s">
               <h2><span class="label label-success">MISSION</span></h2>
               <p>To render evidence-based, cost-effective, easily-accessible, patient-centered care at all times.</p></center>
           </div>
           <div class="col-md-1"></div> 
           <div class="col-md-4 wow slideInDown" data-wow-duration="2s">
            <center>
               <img src="images/vison.png" class="wow bounceIn" data-wow-delay = "2s">
               <h2><span class="label label-success">VISION</span></h2>
               <p>Revolutionizing Physiotherapy practice in Nigeria and beyond. </p>
               </center>
           </div>
           <div class="col-md-1"></div>
           <div class="col-md-3 wow slideInDown" data-wow-duration="4s">
            <center>
               <img src="images/about.png" class="wow bounceIn" data-wow-delay = "3s">
               <h2><span class="label label-success">ABOUT US</span></h2>
               <p>Classique Physiotherapy Services has been in operation since 2015, rendering services to clients and patients on home basis.  The company is duely registered with the Corporate Affairs Commission (RC 2554813).</p></center>
                
           </div>
</div>
</section>
<hr>

        <div class="container wow slideInDown" data-wow-duration="1s">
            <div class="row">
              <br>
                <center><h1>What We Believe In</h1></center>

            </div>
        </div>
   
<hr>
<div class="row">
               
           <div class="col-md-5 wow bounceIn" data-wow-delay = "1s" >
               <img src="images/bg.jpg" class="img-responsive">
               
           </div>
           <div class="col-md-7">
            <div class="panel-group wow shake" id="accordion" data-wow-duration = "4s">
    <div class="panel panel-default">
      <div class="panel-heading" style="background-color: #0eb769; color: #ffffff">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">1. <span style="float:right;">+</span></a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
We believe that any treatment given at any time should be evidence-based and in the best interest of the patient.<br><br> 
</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" style="background-color: #0eb769; color: #ffffff">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" >2. <span style="float:right;">+</span></a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
We believe that physiotherapy treatment should be readily available to patients at affordable costs.<br><br>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" style="background-color: #0eb769; color: #ffffff">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" >3. <span style="float:right;">+</span></a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body"><br>
We believe that rehabilitation continues until patient can perform activities of daily living normally or as close as possible to normal.
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" style="background-color: #0eb769; color: #ffffff">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" >4. <span style="float:right;">+</span></a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body"><br>
We believe that the public should be aware of the relevance of physiotherapy and harness the vast therapies it offers.
        </div>
      </div>
    </div>
  </div>
                
           </div>
</div>
<div class="row">
  <hr>
        <div class="container wow slideInDown" data-wow-duration="1s">
            <div class="row">
              <br>
                <center><h1>Our Layout</h1></center>
            </div>
        </div>
<hr>
  <div class="col-md-9">
       <div class="panel-group wow shake" data-wow-duration="4s" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading" style="background-color: #0eb769; color: #ffffff">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">WHAT IS PHYSIOTHERAPY? <span style="float:right;">+</span></a>
        </h4>
      </div>
      <div id="collapse5" class="panel-collapse collapse in">
        <div class="panel-body">
<h4>Physiotherapy is concerned with developing, maintaining and restoring an individual's maximum movement and functional ability. They can help people at any stage of life, when movement and function are threatened by ageing, injury, diseases, disorders, conditions or environmental factors and with the understanding that functional movement is central to what it means to be healthy.<br><br> 
Physiotherapists are qualified and professionally required to :<br><br>
1.  Evaluate/assess comprehensively.<br><br> 
2.  Evaluate findings and make clinical judgments.<br><br>
3.  Formulate a diagnosis, prognosis, and plan.<br><br> 
4.  Consult and refer if need be.<br><br> 
5.  Implement an intervention /treatment programme.<br><br>
6.  Determine outcomes of any interventions/treatments.<br><br> 
7.  Make recommendations for self management.<br><br> </h4>
</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" style="background-color: #0eb769; color: #ffffff">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">WHEN DO I NEED A PHYSIOTHERAPIST? <span style="float:right;">+</span></a>
        </h4>
      </div>
      <div id="collapse6" class="panel-collapse collapse">
        <div class="panel-body">
        <h4>Physiotherapy is needed when there is presence of any of the following:<br><br> 
1.  When you feel any sort of musculoskeletal pain ranging from mild to severe.<br><br>
2.  After suffering a stroke, spinal cord injury or traumatic brain injury.<br><br>
3.  When there is paralysis/weakness of any body part.<br><br>
4.  When there is inability to hold urine, faeces or there is a prolapse.<br><br> 
5.  When there is reduced range motion of any part of the body.<br><br>
6.  When a child cannot sit, crawl, walk or control his or her neck at the appropriate time.<br><br>
7.  When there is incoordination and loss of balance.<br><br>
8.  When you need to keep fit/lose weight.<br><br>
9.  When there is difficulty breathing or there is a pulmonary condition like athelectasis.<br><br> 
10. After a fracture.<br><br>
11. Before and after surgery.<br><br></h4>

        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="col-md-3 wow slideInDown" data-wow-duration="1s">
    <img src="images/img3.jpg" class="img-responsive wow bounceIn" style="height:170px;" data-wow-delay = "1s">
  </div>
</div>


        </div>
        <div class="container">
            <div class="row">
                    <div class="section-title mb60 text-center wow slideInDown data-wow-duration = 5">
                        <!-- section title start-->
                        <br>
                        <hr>
                        <h1>Our Core Values</h1>
                        <p>We are consistently ensuring to serve our clients to the best hence, we maintain our core values.</p>
                        <hr>
                    </div>
                    <!-- /.section title end-->
             
            </div>
            <div class="row">
                <div class="col-md-2 wow bounceIn" data-wow-delay="1s">
                    <div class="team-block">
                        <!-- team block start-->
                        <div class="team-img"><img src="images/competent.png"></div>
                        <div class="team-content">
                            <h2 class="team-title"><b>COMPETENCE</b></h2>
                        </div>
                    </div>
                    <!-- team block end -->
                </div>
               <div class="col-md-2 wow bounceIn" data-wow-delay="2s">
                    <div class="team-block">
                        <!-- team block start-->
                        <div class="team-img"><img src="images/commitment.png"></div>
                        <div class="team-content">
                            <h2 class="team-title"><b>COMMITMENT</b></h2>
                        </div>
                    </div>
                    <!-- team block end -->
                </div>
               <div class="col-md-2 wow bounceIn" data-wow-delay="3s">
                    <div class="team-block">
                        <!-- team block start-->
                        <div class="team-img"><img src="images/compassion.png"></div>
                        <div class="team-content">
                            <h2 class="team-title"><b>COMPASSION</b></h2>
                        </div>
                    </div>
                    <!-- team block end -->
                </div>
                <div class="col-md-2 wow bounceIn" data-wow-delay="4s">
                    <div class="team-block">
                        <!-- team block start-->
                        <div class="team-img"><img src="images/conviction.png"></div>
                        <div class="team-content">
                            <h2 class="team-title"><b>CONVICTION</b></h2>
                        </div>
                    </div>
                    <!-- team block end -->
                </div>
                <div class="col-md-2 wow bounceIn" data-wow-delay="5s">
                    <div class="team-block">
                        <!-- team block start-->
                        <div class="team-img"><img src="images/creativity.png"></div>
                        <div class="team-content">
                            <h2 class="team-title"><b>CREATIVITY</b></h2>
                        </div>
                    </div>
                    <!-- team block end -->
                </div>
                <div class="col-md-2 wow bounceIn" data-wow-delay="6s">
                    <div class="team-block">
                        <!-- team block start-->
                        <div class="team-img"><img src="images/correctness.png"></div>
                        <div class="team-content">
                            <h2 class="team-title"><b>CORRECTNESS</b></h2>
                        </div>
                    </div>
                    <!-- team block end -->
                </div>
            </div>
        </div>
    </div>


    
        <style>
          #preview{
            background-image: url(images/imgbg.jpg);
            background-size: cover;
            background-attachment: fixed;
          }
        </style>
    <div id="preview">
        <br>
        <div class="container">
            <div class="row">
                <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                    <div class="section-title mb60 text-center">
                        <!-- section title start-->
                        <h1 style="color: white;">Our Patient’s Review</h1>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    
                    <div class="testimonial-block">
                        <h2 style="margin-left:4px; font-size: 25px; color:white; text-align:center;">No Reviews Yet</h2>
                        <!-- testimonial block -->
                        <!-- <div class="testimonial-content">
                            <h2 style="margin-left:400px; font-size: 25px; color:white">No Review Yet</h2>
                        </div> -->
                    </div>
                    <!--/. testimonial block -->
                </div>
               
            </div>
        </div>
        <br>
    </div>
            <div class="row">
            <br><hr>
                <center><h1>Our Partners</h1>
                    <p>We are consistently ensuring to serve our clients to the best hence, we maintain our core values.</p></center>
                    <hr>
            </div>
        <center>
            <div class="row" style="margin-left:-250px;">
              <div class="col-md-2"></div>
                <div class="col-md-2 wow bounceIn" data-wow-delay="1s">
                    <div class="team-block">
                        <!-- team block start-->
                        <div class="team-img"><img src="images/competent.png"></div>
                        <div class="team-content">
                            <h3 class="team-title"><b>Glad Tidings Hospitals</b></h3>
                        </div>
                    </div>
                    <!-- team block end -->
                </div>
               <div class="col-md-2 wow bounceIn" data-wow-delay="2s">
                    <div class="team-block">
                        <!-- team block start-->
                        <div class="team-img"><img src="images/commitment.png"></div>
                        <div class="team-content">
                            <h3 class="team-title"><b>Redemption Medical Center</b></h3>
                        </div>
                    </div>
                    <!-- team block end -->
                </div>
               <div class="col-md-2 wow bounceIn" data-wow-delay="3s">
                    <div class="team-block">
                        <!-- team block start-->
                        <div class="team-img"><img src="images/compassion.png"></div>
                        <div class="team-content">
                            <h3 class="team-title"><b>Doctorshub Nigeria</b></h3>
                        </div>
                    </div>
                    <!-- team block end -->
                </div>
                <div class="col-md-2 wow bounceIn" data-wow-delay="4s">
                    <div class="team-block">
                        <!-- team block start-->
                        <div class="team-img"><img src="images/correctness.png"></div>
                        <div class="team-content">
                            <h3 class="team-title"><b>Arrive Alive Diagnostics & Imaging Services</b></h3>
                        </div>
                    </div>
                    <!-- team block end -->
                </div>
                <div class="col-md-2 wow bounceIn" data-wow-delay="5s">
                    <div class="team-block">
                        <!-- team block start-->
                        <div class="team-img"><img src="images/correctness.png"></div>
                        <div class="team-content">
                            <h3 class="team-title"><b>Foremost Radiological Center</b></h3>
                        </div>
                    </div>
                    <!-- team block end -->
                </div>
            </div>
</center>
    <div class="footer">
        <div class="container" >
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="footer-widget widget-newsletter">
                        <h2 class="widget-title">Newsletters</h2>
                        <p style="color: #ffffff">Enter your email address to receive new patient information and other useful information right to your inbox.</p>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Email Address">
                            <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Subscribe</button>
                           </span>
                        </div>
                        <!-- /input-group -->
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-2 col-xs-12">
                    <div class="footer-widget">
                        <h2 class="widget-title">Services</h2>
                        <ul class="listnone">
                            <li><a style="color: #ffffff" href="orthopedic.html">Orthopedic  </a></li>
                            <li><a style="color: #ffffff" href="cardiac.html">Cardiac</a></li>
                            <li><a style="color: #ffffff" href="neurological.html">Neurological</a></li>
                            <li><a style="color: #ffffff" href="paediatric.html">Paediatric</a></li>
                            <li><a style="color: #ffffff" href="service-list.html">Others</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                    <div class="footer-widget footer-social">
                        <h2 class="widget-title">Social Feed</h2>
                        <ul class="listnone">
                            <li><a style="color: #ffffff" href="#"> <i class="fa fa-facebook"></i> Facebook  </a></li>
                            <li><a style="color: #ffffff" href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
                            <li><a style="color: #ffffff" href="#"><i class="fa fa-google-plus"></i> Google Plus</a></li>
                            <li><a style="color: #ffffff" href="#"><i class="fa fa-linkedin"></i> Linked In</a></li>
                            <li><a style="color: #ffffff" href="#"> <i class="fa fa-youtube"></i>Youtube</a></li>
                           
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-2 col-sm-2 col-xs-12">
                    <div class="footer-widget footer-social">
                        <h2 class="widget-title">Clinic Address</h2>
                        <ul class="listnone contact">
                            <li style="color: #ffffff"><i class="fa fa-map-marker"></i> 37/39 Fashoro Street, Surulere, Lagos.
                            </li>
                            <li style="color: #ffffff"><i class="fa fa-phone"></i> +234 (808) 596-6786</li>
                            <li style="color: #ffffff"><i class="fa fa-fax"></i> +234 (815) 076 0505</li>
                            <li style="color: #ffffff"><i class="fa fa-envelope-o"></i> classiquept@yahoo.com</li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>


    </div>
     <div class="tiny-footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="copyright-content">
                  <p>© Classique Physiotherapy Services 2018  |  all rights reserved</p>
                  <p>Website Designed by: Giant Strides Technology </p>
                   <p>08175910526, 08106420637, 07082614612. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menumaker.js"></script>
 
    <script src="js/jquery.sticky.js"></script>
    <script src="js/sticky-header.js"></script>
    <script src="js/wow.min.js"></script>
     <script src="js/loop.js"></script>

    <script>
        $(function(){
            new WOW().init();
        });
    </script>

    <script>
      $(document).ready(function(){
         $(".welcome a[href='#aboutus'], .header a[href='#mypage'], .header a[href='#services'], .header a[href='#our-team'], .header a[href='#aboutus']").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 1500, function(){
      window.location.hash = hash;
    });
  }); 

  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        || location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html,body').animate({
                 scrollTop: target.offset().top
            }, 1500);
            return false;
        }
    }
});


      })
    </script>

<a href="javascript:void(0);" title="Go To Top" id="scroll" style="display:none;">
<span></span></a>    
</body>

</html>
