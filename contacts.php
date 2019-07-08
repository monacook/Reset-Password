<?php  
	$to = "cook.mona@gmail.com";
	$Subject = "Contacts";

	$name = $_POST['name'];
	$email = $_POST['email'];
	$comment = $_POST['comment'];

	$header = "Content-type: text/html;\r\n";
	$header = "From: $email";

	mail($to, $Subject, $comment, $header);

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./img/Me-logo-light.jpg.jpeg">

    <title>MeTechnologies</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/devices.css"/>
    <!-- Plugin CSS -->
    

    <!-- Custom styles for this template -->
    <link href="css/new-age.min.css" rel="stylesheet">

    <!-- cookiealert.css -->
    


  </head>


  <body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.html">Me Technologies, LLC</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a class="btn btn-outline btn-md js-scroll-trigger" href="#download">About</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-outline btn-md js-scroll-trigger" href="#features">Features</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-outline btn-md js-scroll-trigger" href="#contact">Contact us</a>
            </li>
            <li>
            <a class="btn btn-outline btn-md js-scroll-trigger" href="https://www.mecontacts.com/login/index.php">Login</a>
            </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-lg-7 my-auto">
            <div class="header-content mx-auto">
              <h1 class="mb-8">Me Contacts.</h1><h5>The first ever smart contact book</h5>
              <br>
              <a href="#download" class="btn btn-outline btn-xl js-scroll-trigger" style="border-color: white;">Learn More</a>
            </div>
          </div>
          <div class="col-lg-5 my-auto">
            <div class="device-container">
              <div class="device device-iphone-x animate">
              <div class="device-frame">
                <!-- <div class="device"> -->
                  <!-- <div class="screen"> -->
                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                    <img src="img/login.png" class="img-fluid" style="border-radius: 33px; border-top-left-radius: 33px; border-top-right-radius: 33px; border-bottom-right-radius: 33px; border-bottom-left-radius: 33px;" >
                  
                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                    <div class="device-stripe"></div>
                    <div class="device-header"></div>
                    <div class="device-sensors"></div>
                    <div class="device-btns"></div>
                    <div class="device-power"></div>
                    <div class="device-home"></div>
                  </div>
                </div>
              </div>
              </div> 
            <!-- </div> -->
          <!-- </div> -->
        </div>
      </div>
    </header>

     <section class="download bg-primarys text-centers" id="download">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <h2 style="color:white; font-size: 50px">What is Me?</h2>
            <p style="color:white; font-size: 1.25rem">Me is the first ever truly smart contact book that always keeps your contact’s information up to date. Change your phone number or receive a new work email, no need to send out a mass text message letting everyone know, simply update your Me account and all of your contacts will get that new piece of information.</p>
          </div>
        </div>
      </div>
    </section>
    
    <!-- <section class="download bg-primarys text-center" id="about"> -->
    <!-- style="background: url(./img/bg-pattern.png),linear-gradient(to left,#29648A,#29648A);}" -->
     <!--  <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto">
            <h2 style="color:white; opacity: 1">What is Me2?</h2>
            <p style="color:white; opacity: 0.8">Me is the first ever truly smart contact book that always keeps your contact’s information up to date. Change your phone number or receive a new work email, no need to send out a mass text message letting everyone know, simply update your Me account and all of your contacts will get that new piece of information.</p>
          </div>
        </div>
      </div>
    </section> -->

    <section class="features" id="features">
      <div class="container">
        <div class="section-heading text-center">
          <h2>Key Features</h2>
          <h4>Update your contact information only one time </h4>
          <hr>
          <div class="col-lg-12 my-auto">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-graduation text-primary"></i>
                    <h3>Intuitive</h3>
                    <p class="text-muted">Me Contacts is the contact book for the future by keeping your contact’s information up-to-date and we do this in a intuitive way so any person can use it.</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-energy text-primary"></i>
                    <h3>Powerful</h3>
                    <p class="text-muted">By keeping personal information up-to-date, we will no longer lose contact with loved ones, old friends, colleagues or acquaintances and that is the power of technology used in the right way.</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-lock text-primary"></i>
                    <h3>Secure</h3>
                    <p class="text-muted">We use industry standards such as 256 bit SSL security to make sure any information you share will only be seen by the people you chose and not put in the wrong hands.</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-phone text-primary"></i>
                    <h3>Full-time Support</h3>
                    <p class="text-muted">Whenever any of our users have issues, we are always happy to help. Whether it’s through email or a direct phone call we want to make sure our users are always satisfied with Me.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
      </div>
    </section>

  <section class="features" id="groups">
      <div class="container">
      <div class="col-lg-12 my-auto">
        <div class="section-heading text-center">
         <h2> No More Constant Contact Updates</h2> <br><h4>keep your contacts organized and secure</h4>
         <hr>
         </div>
        <div class="row">
          <div class="col-lg-6 my-auto">
            <div class="device-container">
            <div class="device device-iphone-x animate">
              <div class="device-frame">
                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                    <img src="img/groups.png" class="img-fluid" style="border-radius: 33px; border-top-left-radius: 33px; border-top-right-radius: 33px; border-bottom-right-radius: 33px; border-bottom-left-radius: 33px;" >
                  </div>
                  <div class="device-stripe"></div>
                    <div class="device-header"></div>
                    <div class="device-sensors"></div>
                    <div class="device-btns"></div>
                    <div class="device-power"></div>
                    <div class="device-home"></div>
                
                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                  </div>
                </div>
                </div>

                <div class="feature-item">                
                  <!-- <i class="icon-lock-open text-primary"></i>
                  <h2>Security</h2>
                  <p class="text-muted">We also know that one of the best parts of Me is that you can set specific restrictions as to what type of personal information certain contacts can view.</p> -->
                  <br>
                    <i class="icon-people text-primary"></i>
                  <h2>Groups</h2>
                  <p class="text-muted">Groups are ways to set restrictions on what information each of your contacts can view. We put your personal information back in your control.</p>
                  <br>
                  <hr>
                </div>
                  </div>
                  </div>

                </div>
                </div>
              </div>
            </div>

          </div>
          <!-- <div class="col-lg-12 my-auto">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-6 my-auto">
                  <div class="feature-item">
                    <i class="icon-screen-smartphone text-primary"></i>
                    <h3>Connection</h3>
                    <p class="text-muted">Groups are ways to set restrictions on what information each of your contacts can view. We put your personal information back in your control.</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-camera text-primary"></i>
                    <h3>Powerful</h3>
                    <p class="text-muted">By keeping personal information up-to-date, we will no longer lose contact with loved ones, old friends, colleagues or acquaintances and that is the power of technology used in the right way.</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <!-- <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-present text-primary"></i>
                    <h3>Secure</h3>
                    <p class="text-muted">We use industry standards such as 256 bit SSL security to make sure any information you share will only be seen by the people you chose and not put in the wrong hands.</p>
                  </div>
                </div> -->
                <!-- <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-lock-open text-primary"></i>
                    <h3>Full-time Support</h3>
                    <p class="text-muted">Whenever any of our users have issues, we are always happy to help. Whether it’s through email or a direct phone call we want to make sure our users are always satisfied with Me.</p>
                  </div>
                </div> -->
              <!-- </div> -->
            <!-- </div> --> 
          </div>
        </div>
      </div>
    </section>


          <!-- <div class="col-lg-12 my-auto">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-6 my-auto">
                  <div class="feature-item">
                    <i class="icon-screen-smartphone text-primary"></i>
                    <h3>Connection</h3>
                    <p class="text-muted">Groups are ways to set restrictions on what information each of your contacts can view. We put your personal information back in your control.</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-camera text-primary"></i>
                    <h3>Powerful</h3>
                    <p class="text-muted">By keeping personal information up-to-date, we will no longer lose contact with loved ones, old friends, colleagues or acquaintances and that is the power of technology used in the right way.</p>
                  </div>
                </div>
              </div>
              <div class="row"> -->
                <!-- <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-present text-primary"></i>
                    <h3>Secure</h3>
                    <p class="text-muted">We use industry standards such as 256 bit SSL security to make sure any information you share will only be seen by the people you chose and not put in the wrong hands.</p>
                  </div>
                </div> -->
                <!-- <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-lock-open text-primary"></i>
                    <h3>Full-time Support</h3>
                    <p class="text-muted">Whenever any of our users have issues, we are always happy to help. Whether it’s through email or a direct phone call we want to make sure our users are always satisfied with Me.</p>
                  </div>
                </div> -->
              <!-- </div> -->
            <!-- </div> -->
          </div>
        </div>
      </div>
    </section>

    <section class="download bg-primarys text-center" id="download">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <h2 class="section-heading" style="color: white">Available on your <br>Mobile Device</h2>
            <p style="color: white">What are you waiting for? Our app is available! Download it today!</p>
            <div class="badges">
              <a class="badge-link" href="#"><img src="img/app-store-badge.svg" alt=""></a>
              <a class="badge-link" href="#"><img src="img/google-play-badge.svg" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- <section class="cta">
      <div class="cta-content">
        <div class="container">
          <h2>Stop waiting.<br>Connect Now </h2>
          <a href="https://www.mecontacts.com/login/index.php" class="btn btn-outline btn-xl js-scroll-trigger">Create Account</a>
        </div>
      </div>
      <div class="overlay"></div>
    </section> -->

     <!-- TEAM -->
    <!-- <section class="download bg-primarys text-center" id="download" style="opacity:1">
      <div class="container">
        <h2 class="mb-5" style="color:white; opacity: 1">The Team</h2>
        <div class="row">
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/aaronmbmorse.jpg" alt="">
              <h5 style="color:white; opacity: 1">Aaron Morse</h5>
              <p class="font-weight-light mb-0" style="color:white; opacity: 1">CEO/Co-Founder</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/bradly.jpg" alt="">
              <h5 style="color:white; opacity: 1">Stephen Rains</h5>
              <p class="font-weight-light mb-0" style="color:white; opacity: 1">CTO/Co-Founder</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/bradly.jpg" alt="">
              <h5 style="color:white; opacity: 1">Bradly Goldenberg</h5>
              <p class="font-weight-light mb-0" style="color:white; opacity: 1">Web & Database Developer</p>
            </div>
              </div>
            <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/cook.jpg" alt="">
              <h5 style="color:white; opacity: 1">Mona Cook</h5>
              <p class="font-weight-light mb-0" style="color:white; opacity: 1">IOS/Web Developer</p>
            </div>
            </div>
            <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/jonathan.jpg" alt="">
              <h5 style="color:white; opacity: 1">Jonathan Victoriano</h5>
              <p class="font-weight-light mb-0" style="color:white; opacity: 1">Android Developer</p>
            </div>
          </div>
        </div>
      </div>
    </section> -->

<!--     <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <form action="NotWorking.php" method="post">
                                        <label>Name:</label><br>
                                            <input type="form-control" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label>Email:</label><br>
                                            <input type="form-control" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label>What's wrong?</label>
                                            <textarea class="form-control" rows="8"></textarea>
                                        </div>
                                        <div class="form-group">
                                        <input type="submit" class="btn btn-default" value="Send Form"></input>
                                        </div> -->
                                    <!-- </form> -->

    <section class="contact bg-primare" id="contact" style="background: url(./img/bg-pattern.png),linear-gradient(to left,#29648A,#29648A);}" id="contact"> 
      <div class="container">
        <div class="row">
          <div class="col-xl-6 mx-auto">
            <h2 class="mb-4" style="color: white">Contact us!</h2>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <form action="contacts.php" method="post">
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mx-auto">
                  <input style="margin-bottom: 20px" type="text" class="form-control form-control-lg" name="name" placeholder="Name*" required minlength="4" maxlength="10">
                  <input style="margin-bottom: 20px;" type="email" class="form-control form-control-lg" name="email" placeholder="Email*" >
                  <textarea type="text" class="form-control form-control-lg" name="comment" style="margin-top: 0px; margin-bottom: 0px; height: 158px; margin-bottom: 20px;" placeholder="Comment"></textarea>
                  <div class="col-12 col-md-5 mx-auto">
                  <input type="submit" class="btn btn-outline btn-xl js-scroll-trigger" style="border-color: white; background-color: #29648A"  placeholder="Submit"></input> 
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>



    <!-- <section class="contact bg-primari" id="contact">
      <div class="container">
        <ul class="list-inline list-social">
          <li class="list-inline-item social-twitter">
            <a href="#">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="list-inline-item social-facebook">
            <a href="#">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li class="list-inline-item social-google-plus">
            <a href="#">
              <i class="fa fa-google-plus"></i>
            </a>
          </li>
        </ul>
      </div>
    </section>
 -->
    <footer>
      <div class="container">
        <p>&copy; Me Technologies LLC 2018. All Rights Reserved.</p>
        <ul class="list-inline">
          <li class="list-inline-item">
            <a href="https://www.mecontacts.com/TermsPolicyPage/guidelineTerms/pages/policy.html" target="_blank">Privacy</a>
          </li>
          <li class="list-inline-item">
            <a href="https://www.mecontacts.com/TermsPolicyPage/guidelineTerms/pages/terms.html" target="_blank">Terms</a>
          </li>
          <li class="list-inline-item">
            <a href="https://www.mecontacts.com/TermsPolicyPage/guidelineTerms/pages/index.html" target="_blank">FAQ</a>
          </li>
          <ul class="list-inline list-social">
          <li class="list-inline-item social-facebook">
            <a href="#">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li class="list-inline-item social-instagram">
            <a href="https://www.instagram.com/metechnologies/">
              <i class="fa fa-instagram"></i>
            </a>
          </li>
          <li class="list-inline-item social-google-plus">
            <a href="#">
              <i class="fa fa-google-plus"></i>
            </a>
          </li>
        </ul>
        </ul>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="cookiealert-standalone.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
     
    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/new-age.min.js"></script>
    <script type="text/javascript" id="cookieinfo" src="//cookieinfoscript.com/js/cookieinfo.min.js"></script>
    

  </body>

</html>
