<?php
      // Message Vars
      $msg = '';
      $msgClass = '';

      // Check For Submit
      if(filter_has_var(INPUT_POST, 'submit')){
            // Get Form Data
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $message = htmlspecialchars($_POST['message']);

            // Check Required Fields
            if(!empty($email) && !empty($name) && !empty($message)){
                  // Passed
                  // Check Email
                  if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                        // Failed
                        $msg = 'Please use a valid email';
                        $msgClass = 'alert-danger';
                  } else {
                        // Passed
                        $toEmail = 'jens.v.de1995@gmail.com';
                        $subject = 'Contact Request From '.$name;
                        $body = '<h2>Contact Request</h2>
                              <h4>Name</h4><p>'.$name.'</p>
                              <h4>Email</h4><p>'.$email.'</p>
                              <h4>Message</h4><p>'.$message.'</p>
                        ';

                        // Email Headers
                        $headers = "MIME-Version: 1.0" ."\r\n";
                        $headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

                        // Additional Headers
                        $headers .= "From: " .$name. "<".$email.">". "\r\n";

                        if(mail($toEmail, $subject, $body, $headers)){
                              // Email Sent
                              $msg = 'Your email has been sent';
                              $msgClass = 'alert-success';
                        } else {
                              // Failed
                              $msg = 'Your email was not sent';
                              $msgClass = 'alert-danger';
                        }
                  }
            } else {
                  // Failed
                  $msg = 'Please fill in all fields';
                  $msgClass = 'alert-danger';
            }
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="author" content="Nabor Boone">

      <title>Sanitair Herdersem - Verwarming Herdersem / Nabor Boone</title>

      <!-- stylesheet -->
      <link rel="stylesheet" href="css_nabor/style.css">
 <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>

      <!-- bootstrap cdns -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

      <!-- google fonts -->
      <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:100,100i,300,300i,400,400i,500,500i,700,700i" rel="stylesheet">

      <!-- terminal effect -->
      <script src="scripts_nabor/t.min.js"></script>

      <!-- for on scroll animations -->
      <link rel="stylesheet" href="css_nabor/animate.css">
      <script src="scripts_nabor/wow.min.js"></script>

      <!-- slideshow  -->
     
      <link rel="stylesheet" href="css_nabor/slideshow.css">
      <link rel="stylesheet" href="css_nabor/slippry.css">
      <script src="scripts_nabor/slippry.min.js"></script>

      <link rel="stylesheet" href="css_nabor/form.css">
      <script src="scripts_nabor/form.js"></script>  

</head>
<body>
      <div class="wrapper">

            <!--------------- navbar starts here --------------->
            <nav style="background-color: #1a1a1a;">
                  <span class="brand brandname">
                        <a href="index.html" style="color:#FFFFE0;">Nabor Boone</a>

                  </span>
                  <span class="brand brandnumber">
                        <p style="color:#f44336;">0479 05 43 78 
                        </p>
                  </span> 

                  <ul id="menu">

                        <!--<li><a href="pages/projecten/projecten.html" style="color:#f44336;"><i >Projecten</i></a></li>-->
                        <li ><a style="color:#f44336" onclick="window.location.hash='certificaten'; ">Certificaten</a></li>
                        <li><a onclick="window.location.hash='form-main'; " style="color:#f44336">Contact</a></li>
                  </ul>

                  <div id="toggle">
                        <div class="span">menu</div>
                  </div>

            </nav>

            <div id="resize">
                  <div class="close-btn">close</div>

                  <ul id="menu">
                        <!--<li><a href="index.html">Projecten<span></span></a></li>-->
                        <li><a onclick="window.location.hash='sanitair'; ">Sanitair<span></span></a></li>
                        <li><a onclick="window.location.hash='verwarming'; ">Verwarming<span></span></a></li>
                        <li><a onclick="window.location.hash='elektriciteit'; ">Elektriciteit<span></span></a></li>
                        <li class="whitespace"></li>
                        <li><a onclick="window.location.hash='form-main'; ">Contact<span></span></a></li>
                  </ul>
            </div>
            <!--------------- navbar ends here --------------->



            <!--------------- hero section starts here --------------->
            <div class="col-12">
                  <div class="header row">
                        <h1 class="line anim-typewriter" style="margin-top:110px;">Sanitair, Verwarming</h1>
                  </div>

                  
                  <div>
                        <section class="demo_wrapper">
           
                                    <article class="demo_block">
                                          <!--
                                                <div class="divlogoslideshow">
                                                      <img class="logoslideshow" src="images/logo/logo_transparant.png" alt="Centrale <a href='#link'>verwarming</a>">
                                                </div>
                                          -->
                                          <ul id="demo1">
                                                <li><img src="images_nabor/slideshow/sanitair1.jpg" alt="Sanitair"></li>
                                                <li><img src="images_nabor/slideshow/vloerverwarming.jpg" alt="Vloer verwarming"></li>
                                                <li><img src="images_nabor/slideshow/sanitair2.jpg" alt="Sanitair"></li>
                                                <li><img src="images_nabor/slideshow/centraleVerwarming.png" alt="Centrale verwarming">

                                          </li>
                                          </ul>
                                    </article>
                              
                        </section>
                  </div>
            </div>




            <!--<div class="scroll-down"></div>-->
            <!--------------- hero section ends here --------------->



            <!--------------- projects section starts here --------------->                  

            <div class="whitespace"></div>
            <div class="whitespace"></div>

            <div class="container-fluid">
                  <div class="row">
                        <p style="margin: 20px 10% 50px 10%;font-weight: 900;" >
                              Bij ons kan u terecht voor: nieuwe en/of te renoveren installaties, ontkalkers, zonnepanelen, onderhoud op gasketels, gas installaties, voor een mazoutinstallatie naar een gasinstallatie, badkamerrenovatie, boilers
                        </p>
                  </div>
                  <h6>Overzicht</h6>

                  <div class="vertical"></div>
                  <br>

                  <div class="whitespace"></div>
                  <div class="whitespace"></div>




                  <div class="row">
                        <div class="col-lg-8"></div>
                        <!--
                        <div class="col-lg-4 project project1 wow fadeInUp odd" onclick="location.href='projecten.html'">
                              <a href="pages/projecten/projecten.html"><button>Bekijk Projecten</button></a>
                        </div>
                  -->

                  </div>

                  <div class="whitespace"></div>

                  <div id="sanitair" class="row">
                        <div class="col-lg-6 project project2 wow fadeInUp even" ></div>

                        <div class="col-lg-6"></div>
                  </div>

                  <div class="whitespace"></div>

                  <div id="elektriciteit" class="row ">
                        <div class="col-lg-7"></div>

                        <div class="col-lg-5 project project3 wow fadeInUp odd"></div>

                        <div class="col-lg-1"></div>
                  </div>

                  <div class="whitespace"></div>

                  <div id="verwarming" class="row">


                        <div class="col-lg-5 project project4 wow fadeInUp even"></div>

                        <div class="col-lg-6"></div>
                  </div>

                  <div class="whitespace"></div>
            </div>
            <!--------------- projects section ends here --------------->
            <div id="certificaten">

                  <h2 class="certificaten-heading">Certificaten</h2>
                  
                        <div class="certificaat1">Centrale verwarmingsinstallateur</div>
                        <div class="certificaat2">Sanitair installateur</div>
                        <div class="certificaat3">Asbest technieken</div>
                        <div class="certificaat4">Gasvormige brandstoffen, module GI</div>

                  

            </div>


            <!--------------- footer starts here --------------->
            <div class="footer">
                  <div class="container">
                        <br><br>

                        <div class="collab">
                              <div class="row">
                                    <div class="col-lg-12">
                                          <a onclick="window.location.hash='form-main'; " style="color:#f44336"><p class="wow fadeInUp hoverRed">Vraag hier u gratis offerte aan.</p></a>
                                    </div>
                              </div>
                        </div>

                        <br>

                        <div class="hr">
                              <div class="row"></div>
                        </div>

                        <br><br>

                        <div class="info">
                              <div class="row">
                                    <div class="col-lg-4" id="personal">
                                          <p class="wow fadeInUp" >gsm nummer</p>
                                          <h4 class="wow fadeInUp" data-wow-delay="0.2s" style="color:#f44336" >0479 05 43 78</h4>
                                          <br><br>
                                    </div>

                                    <div class="col-lg-4" id="media">
                                          <p class="wow fadeInUp" data-wow-delay="0s">BTW nummer</p>

                                          <ul>
                                                <li  class="wow fadeInUp" data-wow-delay="1s" style="color:#f44336" >BE0690.575.388</li>
                                          </ul>

                                          <br><br>
                                    </div>

                                    <div class="col-lg-4" id="address">
                                          <p class="wow fadeInUp" data-wow-delay="0s">e-mail</p>
                                          <h4 class="wow fadeInUp" data-wow-delay="0.2s" style="color:#f44336">naborboone@live.be</h4>
                                          <br><br>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
            <!--------------- footer ends here --------------->

                        <div class="hr">
                              <div class="row"></div>
                        </div>
                        <div class="whitespace"></div>
                         <div style="margin-top:20px;" class="form">
                        <h2 style="text-align:center">Contacteer mij</h2>
    <div class="container">   
      <?php if($msg != ''): ?>
            <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
      <?php endif; ?>
      <form method="post" id="form-main" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
            </div>
            <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
            </div>
            <div class="form-group">
                  <label>Message</label>
                  <textarea name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" style="width:100%;background-color: rgb(244, 67, 54);" name="submit" >Verstuur bericht!</button>
      </form>
    </div>
    
    <br><br>

      <!-- greensock cdn -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>

      
      <script type="text/javascript">
            // navigation starts here

            $("#toggle").click(function() {
                  $(this).toggleClass('on');
                  $("#resize").toggleClass("active");
            });

            $("#resize ul li a").click(function() {
                  $(this).toggleClass('on');
                  $("#resize").toggleClass("active");
            });

            $(".close-btn").click(function() {
                  $(this).toggleClass('on');
                  $("#resize").toggleClass("active");
            });

            // navigation ends here

            // nav animation

            TweenMax.from(".brandname", 1, {
                  delay: 2.7,
                  y: 10,
                  opacity: 0,
                  ease: Back.easeInOut
            })
              TweenMax.from(".brandnumber", 1, {
                  delay: 3.2,
                  y: 10,
                  opacity: 0,
                  ease: Back.easeInOut
            })    

            TweenMax.staggerFrom("#menu li a", 2, {
                  delay: 3.5,
                  opacity: 0,
                  ease: Expo.easeInOut
            }, 0.3);

            // nav animation ends

            new WOW().init();
      </script>

      <script>
            $(function() {
                  var demo1 = $("#demo1").slippry({
                        // transition: 'fade',
                        // useCSS: true,
                        // speed: 1000,
                        // pause: 3000,
                        // auto: true,
                        // preload: 'visible',
                        // autoHover: false
                  });

                  $('.stop').click(function () {
                        demo1.stopAuto();
                  });

                  $('.start').click(function () {
                        demo1.startAuto();
                  });

                  $('.prev').click(function () {
                        demo1.goToPrevSlide();
                        return false;
                  });
                  $('.next').click(function () {
                        demo1.goToNextSlide();
                        return false;
                  });
                  $('.reset').click(function () {
                        demo1.destroySlider();
                        return false;
                  });
                  $('.reload').click(function () {
                        demo1.reloadSlider();
                        return false;
                  });
                  $('.init').click(function () {
                        demo1 = $("#demo1").slippry();
                        return false;
                  });
            });
      </script>
</body>
</html>
