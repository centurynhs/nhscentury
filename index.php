<?php
require 'base.php';
?>
<!doctype html>
<html lang="en">
  <?php base("Home"); ?>
<script src="js/jquery-2.1.4.min.js"></script>
<script>
    $(document).ready(function(){
        $("#upload").hide();
        $("#uploader").click(function(){
            $("#upload").toggle();
        });
//        $("#upload").on('submit',(function(e) {
//            e.preventDefault();
//            $.ajax({
//                url: "php/photo.php",
//                type: "POST",
//                data:  new FormData(this),
//                contentType: false,
//                cache: false,
//                processData:false,
//                success: function(data){
//                    $("#uploader").hide();
//                },
//                error: function(){
//                    
//                } 	        
//            });
//        }));
    });
</script>
  <body>

    <div class="navbar navbar-invers menu-wrap">
      <div class="navbar-header text-center">
        <a class="navbar-brand logo-right" href="javascript:void(0)"><i class="mdi-hardware-keyboard-alt"></i>NHS</a>
      </div>
        <ul class="nav navbar-nav main-navigation">
          <li class="active"><a href="#home">Home</a></li>
          <li><a href="#features">Features</a></li>
          <li><a href="#why">why</a></li>
          <li><a href="#screenshot">Screenshots</a></li>
          <li><a href="#testimonial">Testimonial</a></li>
          <li><a href="#clients">Contact</a></li>
        </ul>
        <button class="close-button" id="close-button">Close Menu</button>
    </div>
  	
  	<div class="content-wrap">
     <header class="hero-area" id="home">
      
      <div class="container">
          <div class="col-md-12">

            <div class="navbar navbar-inverse sticky-navigation navbar-fixed-top" role="navigation" data-spy="affix" data-offset-top="200">
              <div class="container">
                <div class="navbar-header">
                  <a class="logo-left " href="index.html"><i class="mdi-hardware-keyboard-alt"></i>Century High School</a>
                </div>
                <div class="navbar-right">
                  <button class="menu-icon"  id="open-button">
                    <i class="mdi-navigation-menu"></i>
                  </button>             
                </div>
              </div>
            </div>
        </div>        
        <div class="contents text-right">
          <h1 class="wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">Century High School - National Honors Society</h1>
          <p class="wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="400ms">Recognizing Students for Outstanding Scholarship, Leadership, Service, and Character</p>
          <a href="#why" class="btn btn-lg btn-primary wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">Member Requirements</a>
          <a href="#features" class="btn btn-lg btn-border wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">Upcoming Events</a>
        </div>   
    </header>

    <section id="features" class="section">
      <div class="container">
        <div class="section-header">
          <h1 class="section-title wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="100ms">Upcoming Events</h1>
          <h2 class="section-subtitle wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="400ms">Available that day?</h2>
        </div>
        <div class="row">

          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="features">
              <div class="icon">
                <i class="mdi-action-settings"></i>
              </div>
              <div class="features-text">
                <h4>Built-with Bootstrap 3.5.x</h4>
                <p>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                </p>
              </div>
             </div>
          </div>


          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
            <div class="features">
              <div class="icon">
                <i class="mdi-action-done-all"></i>
              </div>
              <div class="features-text">
                <h4>Material Design</h4>
                <p>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
            <div class="features">
              <div class="icon">
                <i class="mdi-image-blur-linear"></i>
              </div>
              <div class="features-text">
                <h4>Clean and Refreshing</h4>
                <p>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                </p>
              </div>
            </div>
          </div>            


          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="650ms">
            <div class="features">
              <div class="icon">
                <i class="mdi-communication-business"></i>
              </div>
              <div class="features-text">
                <h4>Ready for Business or App</h4>
                <p>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                </p>
              </div>
            </div>
          </div>


          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="750ms">
            <div class="features">
              <div class="icon">
                <i class="mdi-action-favorite"></i>
              </div>
              <div class="features-text">
                <h4>Crafted with Love</h4>
                <p>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="850ms">
            <div class="features">
              <div class="icon">
                <i class="mdi-hardware-phonelink"></i>
              </div>
              <div class="features-text">
                <h4>Fully Responsive Layout</h4>
                <p>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                </p>
              </div>
            </div>
          </div>   
        </div>
      </div>
    </section>

    <section id="why" class="section">
      <div class="container">
        
        <div class="row">     

          <div class="col-md-6 col-sm-6 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
            <img src="img/features/img1.png" alt="">
          </div>

          <div class="col-md-6 col-sm-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="pull-left content">
              <h2>Hour Requirements <br> Per Semester</h2>
              <ul class="list-item">
                <li><i class="mdi-action-done"></i>10 Sponsored</li>
                <li><i class="mdi-action-done"></i>7 Unsponsored</li>
                <li><i class="mdi-action-done"></i>3 Tutoring</li>
              </ul>
              <!--<a href="javascript:void(0)" class="btn btn-lg btn-primary">Downoad Now!</a>-->
            </div>
          </div>
        </div>
      </div>
    </section>

     <section id="main-features" class="section main-feature-gray">
      <div class="container">

        <div class="row">   
          <div class="col-md-8 col-sm-8 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="feature-item">
              <h3 class="title-small">
                Sync with the app to analyze your fitness
              </h3>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's 
                standard dummy text, when an unknown printer took a galley of type and scrambled it to 
                make a type specimen book. It has survived not only five centuries, but also the leap into electronicstandard 
                dummy text ever since the1500s, when an unknown printer took a galley of type and scrambled it to 
                make a type specimen book. It has survived not only five centuries, but also the leap into electronic
              </p>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
              </p>
            </div>
          </div>
          
          <div class="col-md-4 col-sm-4 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
            <img src="img/features/fet1.png" class="img-responsive" alt="">
          </div>  

        </div>

      </div>
    </section>

     <section id="main-features" class="section">
      <div class="container">


        <div class="row">   
          <div class="col-md-4 col-sm-4 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
            <img src="img/features/fet2.png" class="img-responsive" alt="">
          </div>    

          <div class="col-md-8 col-sm-8 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="feature-item">
              <h3 class="title-small">
                Submit Photos
              </h3>
              <a id="uploader" class="btn btn-lg btn-primary wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">Upload</a>
              <form id="upload" action="php/photo.php" method="post" enctype="multipart/form-data">
                  <fieldset>
                      <legend>Photo Uploader</legend>
                      <div class="form-group">
                          <label>File</label>
                          <input type="file" id="file" class="form-control" name="upload[]" multiple="multiple" accept="image/*" />
                          <input type="submit" value="Upload Image" name="submit" class="btn btn-success">
                      </div>
                  </fieldset>
              </form>
            </div>
          </div>
          
        </div>

      </div>
    </section>

     <section id="main-features" class="section main-feature-gray">
      <div class="container">

        <div class="row">   
          <div class="col-md-8 col-sm-8 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="feature-item">
              <h3 class="title-small">
                Start a Well-controlled Day!
              </h3>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's 
                standard dummy text, when an unknown printer took a galley of type and scrambled it to 
                make a type specimen book. It has survived not only five centuries, but also the leap into electronicstandard 
                dummy text ever since the1500s, when an unknown printer took a galley of type and scrambled it to 
                make a type specimen book. It has survived not only five centuries, but also the leap into electronic
              </p>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
              </p>
            </div>
          </div>
          
          <div class="col-md-4 col-sm-4 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
            <img src="img/features/fet3.png" class="img-responsive" alt="">
          </div>  

        </div>

      </div>
    </section>

    <section id="cta">
      <div class="container">
        <div class="row text-center">         
            <h3 class="title-small wow bounce" data-wow-duration="1000ms" data-wow-delay="300ms">Join Us Today and Change Yourself</h3>
             <a href="javascript:void(0)" class="btn btn-lg btn-border">Sign Up</a>
          </div>
      </div>
    </section>

    <section id="screenshot" class="section">
      <div class="container">
        <div class="section-header">
          <h1 class="section-title wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">Portfolio</h1>
          <h2 class="section-subtitle wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="400ms">Material UI Bootstrap APP and Business Template</h2>
            <div class="text-center">
                <h3><a href="https://graygrids.com/item/pluto-material-design-free-bootstrap-template/">You are Using Free Version, Purchase Full Version to Get All Elements/Pages</a></h3>
                <a href="https://graygrids.com/item/pluto-material-design-free-bootstrap-template/" class="btn btn-larg btn-primary">Purchase Now</a>
            </div>
        </div>
      </div>

    </section>


    <section id="other-features">
      <div class="container">
        <div class="section-header">
          <h1 class="section-title wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">Other Features</h1>
          <h2 class="section-subtitle wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="400ms">Who seeks after it and wants to have it</h2>
        </div> 
        <div class="row">
          <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="features-content">
              <div class="icon hi-icon-effect-3b">
                <i class="mdi-action-settings"></i>
              </div>
              <h3>Customization</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="features-content">
              <div class="icon">
                <i class="mdi-action-lock-outline"></i>
              </div>
              <h3>Security</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="800ms">
            <div class="features-content">
              <div class="icon">
                <i class="mdi-file-cloud-queue"></i>
              </div>
              <h3>Cloud</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="1000ms">
            <div class="features-content">
              <div class="icon">
                <i class="mdi-social-person-outline"></i>
              </div>
              <h3>Analtyics</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="1200ms">
            <div class="features-content">
              <div class="icon">
                <i class="mdi-action-grade"></i>
              </div>
              <h3>Performance</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="1400ms">
            <div class="features-content">
              <div class="icon">
                <i class="mdi-content-flag"></i>
              </div>
              <h3>Network</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="1600ms">
            <div class="features-content">
              <div class="icon">
                <i class="mdi-communication-messenger"></i>
              </div>
              <h3>Support</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="1800ms">
            <div class="features-content">
              <div class="icon">
                <i class="mdi-action-settings-power"></i>
              </div>
              <h3>Easy</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section id="testimonial" class="section">
      <div class="container">
        <div class="section-header text-center wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
          <h1 class="section-title">What People Says</h1>
          <h2 class="section-subtitle">Material UI Bootstrap APP and Business Template</h2>
        </div>
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#testimonial-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#testimonial-carousel" data-slide-to="1"></li>
                <li data-target="#testimonial-carousel" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="item active text-center">               
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                  <div class="meta">
                    <p>Web excutive <span><a href="http://wingthemes.com/">WingThemes</a></span></p>
                  </div>
                </div>
                <div class="item text-center">                
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                  <div class="meta">
                    <p>Web excutive <span><a href="http://graygrids.com/">GrayGrids</a></span></p>
                  </div>
                </div>
                <div class="item text-center">                
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                  <div class="meta">
                    <p>Web excutive <span><a href="http://landingbow.com/">LandinBow</a></span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section id="counter" class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="counter-item">
              <div class="icon">
                <i class="mdi-action-get-app"></i>
              </div>
              <h3 class="timer">39000</h3>
              <hr>
              <h5>
                Free Downloads
              </h5>          
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
            <div class="counter-item">
              <div class="icon">
                <i class="mdi-action-face-unlock"></i>
              </div>
              <h3 class="timer">1046</h3>
              <hr>
              <h5>
                Premium Users
              </h5>          
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="700ms">
            <div class="counter-item">
              <div class="icon">
                <i class="mdi-action-grade"></i>
              </div>
              <h3 class="timer">6345</h3>
              <hr>
              <h5>
                Five Start Reviews
              </h5>          
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="900ms">
            <div class="counter-item">
              <div class="icon">
                <i class="mdi-action-trending-up"></i>
              </div>
              <h3 class="timer">18325</h3>
              <hr>
              <h5>
                Active Installs
              </h5>          
            </div>
          </div>
        </div>
      </div>
    </section>


    <section id="clients" class="section">
      <div class="container">
        
        <div class="section-header text-center">
          <h1 class="section-title wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">Featured on</h1>
          <h2 class="section-subtitle wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">Material UI Bootstrap APP and Business Template</h2>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="client-item-wrapper">
              <img src="img/clients/img1.png" alt="">
            </div>
          </div>
          <div class="col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
            <div class="client-item-wrapper">
              <img src="img/clients/img2.png" alt="">
            </div>
          </div>
          <div class="col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="700ms">
            <div class="client-item-wrapper">
              <img src="img/clients/img3.png" alt="">
            </div>
          </div>
          <div class="col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="900ms">
            <div class="client-item-wrapper">
              <img src="img/clients/img4.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>


    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2 class="section-title">Contact</h2>
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <div class="info">
                  <div class="icon">
                    <i class="mdi-content-mail"></i>
                  </div>
                  <h4>Email</h4>
                    <a href="mailto:pholson@rochester.k12.mn.us"><p>Mr. Olson</p></a>
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="info">
                  <div class="icon">
                    <i class="mdi-content-mail"></i>
                  </div>
                  <h4>Email</h4>
                  <a href="mailto:shbaker@rochester.k12.mn.us"><p>Mr. Baker</p></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2 class="section-title">Student Leaders</h2>

            <div>
                <ul class="list-item">
                <li><i class="mdi-action-favorite"></i>President: </li><br>
                <li><i class="mdi-action-favorite"></i>Vice President: </li><br>
                <li><i class="mdi-action-favorite"></i>Secretary: </li><br>
                <li><i class="mdi-action-favorite"></i>Treasurer: </li>
              </ul>
            </div>


          </div>
        </div>
      </div>
    </section>    

    <!--<div class="map-area">      
      <div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6853.31334931688!2d149.5710983929677!3d-33.43399308961885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x63680231a1016da2!2sWestern+Region+Academy+of+Sport!5e0!3m2!1sen!2sbd!4v1436826340086" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
       </div>
    </div>-->

    <section id="footer">
      <div class="container">
        <div class="container">
          <div class="row">
            <!--<div class="col-md-3 col-sm-6 col-xs-12">
              <h3>Products</h3>
              <ul>
                <li><a href="http://wingthemes.com/">WingThemes</a>
                </li>
                <li><a href="http://graygrids.com/">Graygrids</a>
                </li>
                <li><a href="http://wpbean.com/">WPBean</a>
                </li>
                <li><a href="http://landingbow.com/">Landingbow</a>
                </li>
                <li><a href="http://freebiescircle.com/">FreebiesCicle</a>
                </li>               
              </ul>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <h3>FAQs</h3>
              <ul>
                <li><a href="#">Why choose us?</a>
                </li>
                <li><a href="#">Where we are?</a>
                </li>
                <li><a href="#">Fees</a>
                </li>
                <li><a href="#">Guarantee</a>
                </li>
                <li><a href="#">Discount</a>
                </li>
              </ul>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <h3>About</h3>
              <ul>
                <li><a href="#">Career</a>
                </li>
                <li><a href="#">Partners</a>
                </li>
                <li><a href="#">Team</a>
                </li>
                <li><a href="#">Clients</a>
                </li>
                <li><a href="#">Contact</a>
                </li>
              </ul>
            </div>-->
            <div class="col-md-4 col-sm-6 col-xs-12 col-md-offset-4 text-center">
              <h3>Find us on</h3>
              <a class="social" href="#" target="_blank"><i class="fa fa-facebook"></i></a>
              <a class="social" href="#" target="_blank"><i class="fa fa-twitter"></i></a>
              <a class="social" href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
            </div>
          </div>
        </div>  
      </div>      
      <!-- Go to Top Link -->
      <!--<a href="#home" class="btn btn-primary back-to-top">
      <i class=" mdi-hardware-keyboard-arrow-up"></i>
      </a>-->
    </section> 

    <section id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p class="copyright-text">
             © Pluto 2015 All right reserved. Designed and Developed by 
              <a href="http://graygrids.com/">
                GrayGrids
              </a>
            </p>
          </div>
        </div>
      </div>
    </section>     
    </div>  
		

    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ripples.min.js"></script>
    <script src="js/material.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/jquery.mmenu.min.all.js"></script> 
    <script src="js/count-to.js"></script>   
    <script src="js/jquery.inview.min.js"></script>     
    <script src="js/classie.js"></script>
    <script src="js/jquery.nav.js"></script>      
    <script src="js/smooth-on-scroll.js"></script>
    <script src="js/smooth-scroll.js"></script>
    <script src="js/main.js"></script>

    

    <script>
        $(document).ready(function() {
            // This command is used to initialize some elements and make them work properly
            $.material.init();
        });
    </script>

  </body>

</html>
