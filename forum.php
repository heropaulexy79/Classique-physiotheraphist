<?php 
    session_start();
    include('config.php');

?>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forum Page</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Style -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="images/favicon.png"\>
</head>

<body>
    <div class="header-top">
        <!-- header-top-->
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <span class="text-block time-block">  
                                <span class="time-text">Mon to Sat: <strong>8am - 8pm</strong> - Sunday: <strong>Closed</strong></span>
                    </span>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8  col-xs-12">
                    <div class="top-text">
                        <span class="text-block call-block"> 
                               <span class="call-no">+234 808 5966 786</span>
                        </span>
                        <span class="text-block mail-block hidden-xs hidden-sm">  
                                <span class="mail-text">classiquept@yahoo.com</span>
                        </span>
                        <!-- <button class= "btn btn-danger" data-toggle="modal" data-target="#myModal">Login<i class="fa fa-user"></i></button>
                        <!-- Modal -
  <div class="modal fade" id="myModal" role="dialog" style="margin-top: 150px;">
    <div class="modal-dialog">

      <!-- Modal content-
      <div class="modal-content" style="background-color: #0eb769; color: #ffffff;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body" style="background-color: #ffffff; color: black;">
          <div class="jumbotron">
              <form method="POST" action="#" id="loginform">
                <center><h2><i class="fa fa-user" style="color: red;"><b> USER LOGIN</b></i></h2></center>
              <br>
                <center>
                  <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Enter Username" required>
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                  </div>
                  <br>
                  <button class="btn btn-success" name="userlogin"><i class="fa fa-send"></i>Login</button>
                  <br>
                  <br>
                  <label><a id="createlink" href="#">Don't have an account yet? Create Now.</a></label>
                  </center>
              </form>
              <form id="createacctform" method="POST" action="MailSend.php">
                <center><h2><i class="fa fa-user" style="color: red;"><b> CREATE AN ACCOUNT</b></i></h2></center>
              <br>
                <div class="form-group">
                  <input type="text" name="username" class="form-control" placeholder="Enter Username" required>
                  </div>
                  <div class="form-group">
                      <input type="email" name="emailid" class="form-control" placeholder="Enter Email">
                  </div>
                  <input type="hidden"><font color="red"><div id="mydiv"></div></font>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                  </div>
                  <input type="reset" name="Clear" value="Clear">
                  <br>
                  <center><button class="btn btn-success" name="userlogin"><i class="fa fa-send"></i>SUBMIT</button>
                  <br>
                  <br><label><i class = "fa fa-reply"></i><a id="loginlink" href="#">Go back to login</a></label></center>
              </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div> -->
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
                            <ul>
                                <li><a href="index.html" title="Home">Home</a></li>
                               
                                <li class="has-sub"><a href="service-list.html" title="Service List">Service List</a>
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
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-caption">
                        <h2 class="page-title">QUESTIONS & ANSWERS SESSION</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-breadcrumb">
        <div class="container">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <?php 
                        
                        if(isset($_SESSION['user'])){
                           echo "<li><a href='adminhome.php'>Home</a></li>";
                        }else{
                            echo "<li><a href='index.html'>Home</a></li>";
                        }
                     ?>
                    
                    <li class="active">Questions</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="post-holder">
                                <!-- post holder -->
                                
                                <div class="post-content">
                                    
                                   
                                    
                                    <!-- <div class="related-post-block">
                                        <!-- related post block --
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12 col-md-12 col-sm-12">
                                                <h2 class="related-post-title">Related Post</h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="related-post">
                                                    <!-- related post -
                                                    <div class="related-post-img">
                                                        <a href="#"><img src="images/related-post.jpg" alt="" class="img-responsive"></a>
                                                    </div>
                                                    <div class="related-post-content">
                                                        <h3 class="related-title"><a href="#" class="title">Free Physiotherapy Website Templates Download</a></h3>
                                                        <div class="post-meta"><span class="meta-cat">in <a href="#" class="">"physiotheraphy"</a> </span></div>
                                                    </div>
                                                </div>
                                                <!-- /.related post -
                                            </div>
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="related-post">
                                                    <!-- related post -
                                                    <div class="related-post-img">
                                                        <a href="#"><img src="images/related-post-1.jpg" alt="" class="img-responsive"></a>
                                                    </div>
                                                    <div class="related-post-content">
                                                        <h3 class="related-title"><a href="#" class="title">HTML5 Website Design Template</a></h3>
                                                        <div class="post-meta"><span class="meta-cat">in <a href="#" class="">"physiotheraphy"</a> </span></div>
                                                    </div>
                                                </div>
                                                <!-- /.related post 
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- /.related post block -->
                                    <!-- <div class="post-navigation">
                                        <!-- post navigation -
                                        <div class="row">
                                            <div class="nav-links">
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="nav-previous">
                                                        <!-- nav previous -
                                                        <a href="#" class="prev-link">previous post</a>
                                                        <div class="prev-post">
                                                            <h3><a href="#" class="title">Praesent Nonaugue Lacuisque Nemetu</a></h3>
                                                        </div>
                                                    </div>
                                                    <!-- /. nav previous -
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="nav-next text-right">
                                                        <!-- nav next -
                                                        <a href="#" class="next-link">next post</a>
                                                        <div class="next-post">
                                                            <h3><a href="#" class="title">Maecenas Finibus Ultrices Sleger</a></h3>
                                                        </div>
                                                    </div>
                                                    <!-- /.nav previous -
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- /. post navigation -->
                                    <!-- <div class="author-post">
                                        <!-- Post author -
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <div class="author-img">
                                                    <a href="#"><img src="images/author.jpg" class="img-responsive" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                <div class="author-bio">
                                                    <div class="author-header">
                                                        <h3><a href="#" class="title">Kelly Avans</a></h3>
                                                    </div>
                                                    <div class="author-content">
                                                        <p>Etiam laoreet sitamet purus sed vestibulu ullam cursus lacus eget pharetra accumsan ante metus tinante in ones leousce in consectetur lacus non efficiturex.</p>
                                                        <a href="#" class="btn btn-default">View All Post</a> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- /.post author -->
                                    <div class="comments-area">
                                        <h1 class="comments-title"><b> Questions</b> <span class="badge" id="badge" style="font-size:22px; background-color: red;"></span></h1>
                                        <!-- <ul class="comment-list">
                                            <li class="comment">
                                                <div class="comment-body">
                                                    <div class="comment-author"><img src="images/user-pic-1.jpg" alt="" class="img-circle"> </div>
                                                    <div class="comment-info">
                                                        <div class="comment-header">
                                                            <div class="comment-meta"><span class="comment-meta-date pull-right">25 February, 2020 </span></div>
                                                            <h4 class="user-title">Willy Smith</h4>
                                                        </div>
                                                        <div class="comment-content">
                                                            <p>Laoreet sitamet purus sed vestibulu ullam cursus, lacus eget pharetra accumsan ante metus psumet efficitur elit.</p>
                                                        </div>
                                                        <div class="reply"><a href="#" class="btn-link">Reply</a></div>
                                                    </div>
                                                </div>
                                                <ul class="childern">
                                                    <li class="comment">
                                                        <div class="comment-body">
                                                            <div class="">
                                                                <div class="comment-author"><img src="images/user-pic-2.jpg" alt="" class="img-circle"> </div>
                                                                <div class="comment-info">
                                                                    <div class="comment-header">
                                                                        <div class="comment-meta"><span class="comment-meta-date pull-right">25 February, 2020 </span></div>
                                                                        <h4 class="user-title">Cryst Jones</h4>
                                                                    </div>
                                                                    <div class="comment-content">
                                                                        <p>Getub reet sitamet purus sed vestibulu ullam cursus, lacus eget pharetra accumsan anteme psumet.</p>
                                                                    </div>
                                                                    <div class="reply"><a href="#" class="btn-link">Reply</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul> -->
                                        <div id="getquestionasked"></div>
                                        <!-- <ul class="comment-list">
                                            <li class="comment">
                                                <div class="comment-body">
                                                    <div class="comment-author"><img src="images/user-pic-1.jpg" alt="" class="img-circle"> </div>
                                                    <div class="comment-info">
                                                        <div class="comment-header">
                                                            <div class="comment-meta"><span class="comment-meta-date pull-right">25 February, 2020 </span></div>
                                                            <h4 class="user-title">Willy Smith</h4>
                                                        </div>
                                                        <div class="comment-content">
                                                            <p>Laoreet sitamet purus sed vestibulu ullam cursus, lacus eget pharetra accumsan ante metus psumet efficitur elit.</p>
                                                        </div>
                                                        <div class="reply"><a href="#" class="btn-link">Reply</a></div>
                                                    </div>
                                                </div> -->
                                        <!-- <ul class="comment-list">
                                            <li class="comment">
                                                <div class="comment-body">
                                                    <div class="">
                                                        <div class="comment-author"><img src="images/user-pic-3.jpg" alt="" class="img-circle"> </div>
                                                        <div class="comment-info">
                                                            <div class="comment-header">
                                                                <div class="comment-meta"><span class="comment-meta-date pull-right">24 February, 2020 </span></div>
                                                                <h4 class="user-title">Rosario Scott</h4>
                                                            </div>
                                                            <div class="comment-content">
                                                                <p>Laoreet sitamet purus sed vestibulu ullam cursus, lacus eget pharetra accumsan ante metus psumet efficitur elit.</p>
                                                            </div>
                                                            <div class="reply"><a href="#" class="btn-link" id="reply"><i class="fa fa-reply"></i> Reply </a>
                                                            <a href="#" class="btn-link" id="viewreply" style="margin-left:10px; text-decoration: none;"><i class="fa fa-eye"></i> View Answers <span class="badge" style="background-color:#0eb769;">5</span></a></div>
                                                        </div>

                                                    </div>
                                                    <br>
                                                     <form id="replyform" method="post">
                                                    <div class="form-group">
                                                    <textarea name="namefield" rows="8" class="form-control" id="namefield" placeholder="Answer question"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-info" id="submitreply"><i class="fa fa-reply"></i> Reply Question</button>
                                                </div>
                                            </form>
                                                <ul class="comment-list" id="comment-list">
                                            <li class="comment" style="background-color: #f2f2f2">
                                                <div class="comment-body">
                                                    <div class="">
                                                        <div class="comment-author"><img src="images/user-pic-4.jpg" alt="" class="img-circle"> </div>
                                                        <div class="comment-info">
                                                            <div class="comment-header">
                                                                <div class="comment-meta"><span class="comment-meta-date pull-right">24 February, 2020 </span></div>
                                                                <h4 class="user-title mb10">Susan White</h4>
                                                            </div>
                                                            <div class="comment-content">
                                                                <p>Sed mattis sem leoat sollicitudin nulla egestas acstibulum ante ipsum primis in faucibus orci luctus.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                                </div>
                                               
                                            </li>
                                            
                                        </ul> -->
                                        
                                    </div>
                                </div>
                                <div class="leave-comments">
                                    <h2 class="reply-title">POST YOUR QUESTION</h2>
                                    <form class="reply-form" method="post" role="role" id="postques">
                                        <div class="row">
                                            <!-- Textarea -->
                                            <div class="col-md-12">
                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="control-label" for="name">Name</label>
                                                    <span class="required">*</span>
                                                    <input id="name" name="name" type="text" class="form-control" required="">
                                                </div>
                                            </div>
                                            <!-- Text input-->
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="email">E-mail</label>
                                                    <span class="required">*</span>
                                                    <input id="email" name="email" type="email" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="subject">Question Subject</label>
                                                    <span class="required">*</span>
                                                    <input id="subject" name="subject" type="text" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label class="control-label" for="textarea">Question</label>
                                                    <textarea class="form-control" id="textarea" name="textareafield" rows="6"></textarea>
                                                </div>
                                            </div>
                                            <!-- Text input-->
                                            <div class="col-md-12">
                                                <br>
                                                <!-- Button -->
                                                <div class="form-group">
                                                    <button id="singlebutton" name="singlebutton" class="btn btn-default"><i class="fa fa-send-o"></i> POST QUESTION</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <br>
                                    <div id="response"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="widget widget-search"><!-- widget search -->
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search Here" aria-describedby="basic-addon2">
                                <span class="input-group-addon" id="basic-addon2">
                                <i class="fa fa-search"></i></span>
                            </div>
                            <!-- /input-group -->
                        </form>
                    </div><!-- /.widget search -->
                    
                    <!-- widget start -->
                    <div id="latestPost"></div>
                   <!--  <div class="widget widget-recent-post"><!-- widget recent post -
                        <h2 class="widget-title"> Recent Post </h2>
                        <ul class="listnone widget-recent-post">
                            <li>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="recent-post-img">
                                            <a href="#"><img src="images/recent-post-img.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="recent-post-content">
                                            <h4><a href="#" class="title">Hospital Website Template Free Download</a></h4>
                                            <div class="meta"><span class="meta-date">22 Jan, 2020</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="recent-post-img">
                                            <a href="#"><img src="images/recent-post-img-1.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="recent-post-content">
                                            <h4><a href="#" class="title">HTML5 Website Template Free Download</a></h4>
                                            <div class="meta"><span class="meta-date">22 Jan, 2020</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="recent-post-img">
                                            <a href="#"><img src="images/recent-post-img-2.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="recent-post-content">
                                            <h4><a href="#" class="title">Webdesign Template Free Download</a></h4>
                                            <div class="meta"><span class="meta-date">22 Jan, 2020</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div> --><!-- /.widget recent post -->
                    
                </div>
            </div>
        </div>
    </div>
    <div class="space-small bg-primary">
        <!-- call to action -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                    <h1 class="cta-title">Book your online appointment</h1>
                    <p class="cta-text"> Call to action button example for booking appointment for patients.</p>
                </div>
                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                    <a href="#" class="btn btn-white btn-lg mt20">Call to action Button</a>
                </div>
            </div>
        </div>
    </div>
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
                            <li style="color: #ffffff"><i class="fa fa-envelope-o"></i> info@classiquetherapist.com</li>
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
                   <p>08175910526, 08106420637 </p>
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
    <script src="ckeditor/ckeditor.js"></script>
    <script>
        $(document).ready(function(){

            $("#createacctform").hide();
            $('body').delegate('#createlink', 'click', function(event){
                $('#loginform').hide();
                event.preventDefault();
                $('#createacctform').slideToggle();
            })
        })
    </script>
    <script>
        $(document).ready(function(){
            $('body').delegate('#loginlink', 'click', function(event){
                $('#createacctform').hide();
                event.preventDefault();
                $('#loginform').slideToggle();
            })
        })
    </script>
    <script>
        $(document).ready(function(){
          //  $("body").hide();
          event.preventDefault();
            CKEDITOR.replace('textarea');
          //  CKEDITOR.replace('namefield');
          

        $("#singlebutton").click(function(event){
            event.preventDefault();

           var name = $("#name").val();
           var email = $("#email").val();
           var subject = $("#subject").val();
          // var question = $("#textarea").val();
           var question = CKEDITOR.instances['textarea'].getData();

           if(name != '' && email != '' && subject != '' && question !=''){
                $.ajax({
                    url: 'action.php',
                    method: 'POST',
                    data: {postquestion:1, name:name, email:email, subject:subject, question:question},
                    success: function(data){
                        $('#postques').trigger('reset');
                        CKEDITOR.instances['textarea'].setData('');
                        $('#response').html(data).fadeIn(3000);
                    }
                })
           }
             
        });

        function getquestions(){
            $.ajax({
                url: 'action.php',
                method: 'POST',
                data: {getquestions:1},
                success: function(data){
                    $('#getquestionasked').html(data);
                }
            })
        }
        getquestions();

      //  setInterval(getquestions, 2000);

      $('body').delegate('#reply', 'click', function(event){
        event.preventDefault();
       var pid = $(this).attr('pid');
            $.ajax({
                url: 'action.php',
                method: 'POST',
                data: {reply:1, pid:pid},
                success: function(data){
                    $('#getquestionasked').html(data);
                }
            })
      })

      function unanswered_questions(){
        $.ajax({
            url: 'action.php',
            method: 'POST',
            data: {showquestion:1},
            success: function(data){
                $("#badge").html(data);
            }
        })
      }
      unanswered_questions();

      $('body').delegate('#submitreply', 'click', function(event){
        event.preventDefault();

        var namefield = $('#namefield').val();
        var question_id = $(this).attr('pid');
        if(namefield != ''){
            $.ajax({
            url: 'action.php',
            method: 'POST',
            data: {answerquestion:1, namefield:namefield, question_id:question_id},
            success: function(data){
                $('#replyform').trigger('reset');
                //console.log(data);<div class='alert alert-success'>
                $('#replyresult').html(data).fadeIn(4000).fadeOut(4000);
                }
            })
        }else{
            $('#replyresult').html("<div class='alert alert-danger'><a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Please fill up the reply box</strong></div>")
        }
        
      });

      $('body').delegate('#viewreply', 'click', function(event){
        event.preventDefault();
       var question_id = $(this).attr('pid');
      // alert(pid);
       $.ajax({
        url: 'action.php',
        method: 'POST',
        data: {viewanswers:1, question_id:question_id},
        success: function(data){
            $('#getquestionasked').html(data);
        }
       });

      });

      function count_answered_num(){
        $.ajax({
            url: 'action.php',
            method: 'POST',
            data: {count_answered_num:1},
            success: function(data){
                $('.badge2').html(data);
            }
        });
      }
       count_answered_num();

    })
    
    function latest_post(){
        $.ajax({
            url: 'action.php',
            method: 'POST',
            data: {latestPost:1},
            success: function(data){
                $('#latestPost').html(data);
            }
        })
    }

    setInterval(latest_post, 2000);
    </script>

</body>

</html>
