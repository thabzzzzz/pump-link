<!DOCTYPE html>
<html>
   <head>
      <title>PumpLink</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
      <!-- animate on scroll library -->
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> 
      <link rel="apple-touch-icon" sizes="180x180" href="../apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon.ico') }}">
      <link rel="manifest" href="/site.webmanifest">
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-light" style="      background-color: #f6f6f6;">
         <a class="logo" href="/">
         <img src="images/navbarLogo2.png" class="navBarLogo">
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler9"
            aria-controls="navbarToggler9" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarToggler9">
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link" href="/">Home</a>
               </li>
               <li>
                  <a class="nav-link bar" href="#">  |  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="aboutUs"> About</a>
               </li>
               <li>
                  <a class="nav-link bar" href="#"> |  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="services">Services</a>
               </li>
               <li>
                  <a class="nav-link bar" href="#"> | </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="contactUs">Contact</a>
               </li>
            </ul>
            <form class="d-flex navbarSearch ">
               <input class="form-control navSearch " type="search" placeholder="SEARCH" aria-label="Search">
               <button class="btn btn-outline-primary searchButton" type="submit">
                  <i class="bi bi-search"></i>
               </button>
            </form>
         </div>
      </nav>
      <div class="heroDiv col-8"  >
         <div class="row heroRow">

      <div data-aos="zoom-in-up" data-aos-duration="1000" class="heroText">

      <h1>We do things right </h1>
      <br>
      <h5>We provide fast and affordable services for your projects. Hire us !</h5>
      <br>
      <a href="quote"><button class="button">Request a quote</button></a>
      </div>
      
      <img src="gallery/pump.jpg" class="heroImg" id="tilt" data-aos="zoom-in-up" data-aos-duration="1500">
      </div>
      </div>

      <hr class="double">

      <div class="row g-0 bg-info">

      <div class="image-container col-sm-4">
  <img src="gallery/supply.jpg" alt="Your Image" class="illustrationImg">
  <div class="hover-box">
   <br>
   <br>
   <br>
   <h4 class="illustrationHeading">WE SUPPLY</h4>
   <br>
    <p>We supply a wide range of pumps suitable for various applications. We also provide installation services for pumps of any size from domestic to industrial pumps. There is no job too big for us.. </p>
  </div>
</div>

<div class="image-container col-sm-4">
  <img src="gallery/repair1.JPG" alt="Your Image" class="illustrationImg">
  <div class="hover-box">
  <br>
   <br>
   <br>
   <h4 class="illustrationHeading">WE REPAIR</h4>
   <br>
<p>
We repair and refurbish every type of pump from all industries. If your pump is broken or malfunctioning simply contact us and our specialists are always ready to assist. 
</p>
  </div>
</div>

<div class="image-container col-sm-4">
  <img src="gallery/1.png" alt="Your Image" class="illustrationImg">
  <div class="hover-box">
  <br>
   <br>
   <br>
   <h4 class="illustrationHeading">WE ADVISE</h4>
   <br>
<p>
We offer expert advise on pumps of all types. We will also help you decide on which pump could be suitable for your existing or new requirement, domestic or industrial. </p>
  </div>
</div>

      </div>
      
      <div class="container" >
      <hr class="double">

      



         <!-- about us -->
      <div class="aboutUs">
         <h1 class="aboutUsHeading">About Us</h1>

         <p class="aboutUsText">In just under 5 years in the industry we have managed to service small and big clients in South Africa and the neighbouring countries. Let us help you as well.</p>

      </div>    
      
      <hr class="double">

      <div>
         <!-- Pills navs -->
         <!-- Pills content -->

         
         <div class="d-flex align-items-start responsive-tab-menu">
     
             <ul class="nav flex-column nav-pills nav-tabs-dropdown me-4 " id="v-pills-tab" role="tablist"
                 aria-orientation="vertical">
                 <li class="nav-item">
                     <a class="nav-link text-start active" href="#" id="v-pills-home-tab" data-bs-toggle="pill"
                         data-bs-target="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">WHY CHOOSE US?  <i class="bi bi-stars"></i></a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link text-start" href="#" id="v-pills-profile-tab" data-bs-toggle="pill"
                         data-bs-target="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                         aria-selected="false">OUR COMMITMENT  <i class="bi bi-hand-thumbs-up-fill"></i></a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link text-start" href="#" id="v-pills-contact-tab" data-bs-toggle="pill"
                         data-bs-target="#v-pills-contact" role="tab" aria-controls="v-pills-profile"
                         aria-selected="false">STORY ABOUT US  <i class="bi bi-info-circle-fill"></i></a>
                 </li>
                 <li class="nav-item">
                  <a class="nav-link text-start" href="#" id="v-pills-contact-tab" data-bs-toggle="pill"
                      data-bs-target="#v-pills-vision" role="tab" aria-controls="v-pills-profile"
                      aria-selected="false">OUR VISION  <i class="bi bi-eye-fill"></i></a>
              </li>
               
             </ul>
     
             <div class="tab-content responsive-tab-content" id="v-pills-tabContent">
                 <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"
                     tabindex="0"><p class="tabsContent">We are a leading pump repair and refurbishment specialists in South Africa. Our client base extends to all sectors of industrial processes and manufacturing, and includes many "Blue Chip" global organisations. Our core market sectors include oil & gas, nuclear & traditional power generation, pharmaceutical, chemicals, paper & board, textiles, plastic, utilities (power, water and gas), automotive, food processing and health authorities.

                     We have high client satisfaction standards and are committed to offer best service only, second to none and without a compromise..</p></div>
                 <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"
                     tabindex="0"><p class="tabsContent">Before we commerce with any work, we strive to understand your needs. Why should we give you a snake while all you need is a fish? So, our specialists engage with you and ask you relevant questions to understand your unique need because our desire is to meet or even exceed your expectations. If your pump is broken, we repair all units using manufacturers original parts. We have the added advantage of being able to test the units in our state of the art in-house Pump Testing Facility. This ensures that the unit is fully functional and that the customer can have full confidence that the unit will perform once reinstalled. Once it's fixed we don't want to come back for the same issue.</p></div>
                 <div class="tab-pane fade" id="v-pills-contact" role="tabpanel" aria-labelledby="v-pills-profile-tab"
                     tabindex="0"><p class="tabsContent">We are a hard-working team of young, energetic, passionate lads and we are very fond for our work. In just under 5 years in the industry we have managed to service small and big clients in South Africa and the neighbouring countries. We have dealt with very complex repair and installations problems and we are known for delivering our projects in time and within budget. We are a bunch of over-deliverers.</p></div>
                     <div class="tab-pane fade" id="v-pills-vision" role="tabpanel" aria-labelledby="v-pills-profile-tab"
                     tabindex="0"><p class="tabsContent">We aim to be the first choice pump supply and repair provider in Africa. Doing this in the most effective way and delivering our services at standards as high as the customer would never have expected. We want to give value for money for each and every business engagement we have we our clients.</p></div>
             </div>
         </div>
      </div>

      <hr class="double">

         <!--pills-->
         <!-- Pills navs -->
         <!-- Pills navs -->
         <!-- Pills content -->
         <!-- Pills content -->
         <!--clients carousel-->
         <div class="clientsCarousel">
            <h1>Our Clients</h1>
            <div id="carouselExampleCaptions" class="carousel slide">
               <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" id="carind" class="active carind" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" class="carind"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3" class="carind"></button>
               </div>
               <div class="carousel-inner">
                  <div class="carousel-item active " data-bs-interval="10000">
                     <div class="carousel-caption">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae maximus dui. Cras condimentum mauris elit. Vestibulum porta est ac magna porta viverra. Curabitur nunc dui, malesuada porta lacinia vitae, mollis eu elit. Etiam eleifend consequat semper. Donec maximus consequat odio, eu feugiat magna auctor nec. 
                        </p>
                        <img src="gallery/pro.jpg">
                        <div id="image-caption"><p class="clientNames">Client 1</p> </div>
                     </div>
                  </div>
                  <div class="carousel-item  " data-bs-interval="10000">
                     <div class="carousel-caption">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae maximus dui. Cras condimentum mauris elit. Vestibulum porta est ac magna porta viverra. Curabitur nunc dui, malesuada porta lacinia vitae, mollis eu elit. Etiam eleifend consequat semper. Donec maximus consequat odio, eu feugiat magna auctor nec. 
                        </p>
                        <img src="gallery/pro.jpg">
                        <div id="image-caption"><p class="clientNames">Client 2</p> </div>
                     </div>
                  </div>
                  <div class="carousel-item  " data-bs-interval="10000">
                     <div class="carousel-caption">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae maximus dui. Cras condimentum mauris elit. Vestibulum porta est ac magna porta viverra. Curabitur nunc dui, malesuada porta lacinia vitae, mollis eu elit. Etiam eleifend consequat semper. Donec maximus consequat odio, eu feugiat magna auctor nec. 
                        </p>
                        <img src="gallery/pro.jpg">
                        <div id="image-caption"><p class="clientNames">Client 3</p> </div>
                     </div>
                  </div>
               </div>
               <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        
               <i class="bi bi-arrow-left-short" id="prevIcon"></i>
               </button>
               <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
               
               <i class="bi bi-arrow-right-short" id="nextIcon"></i>
               </button>
            </div>
         </div>
         <!--end of carousel div-->
         
        
     
      </div>


   
   
      <!-- Footer -->
      <footer class="footer">
         <div class="container">
            <div class="row">
               <div class="col-sm-4 footerCol">
                  <div class="footer-widget">
                     <h4>Stay in touch</h4>
                     <div class="footer-widget-content">
                        <a href="mailto:sales@example.com" class="contact-link"></a>
                        <a href="mailto:support@example.com" class="contact-link red"> sales@pumplink.co.za </a><br><br>
                        <a href="tel:0121234" class="contact-link">+(27) 11 262 2384</a>
                     </div>
                  </div>
               </div>
               <div class="col-sm-4 footerCol">
                  <div class="footer-widget">
                     <h4>Socials</h4>
                     <div class="footer-widget-content">
                        <div class="footer-social">
                           <br><br> <br>
                           <ul class="socialsList">
                              <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                              <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                              <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                              <li><a href="#"><i class="bi bi-youtube"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-4 footerCol">
                  <div class="footer-widget">
                     <h4>Operating Hours</h4>
                     <div class="footer-widget-content">
                        <div class="open-time ">
                           <ul class="opening-time">
                              <li>
                                 <span></span>
                                 <p ><strong>mon-fri  :</strong> 8am - 5pm </p>
                              </li>
                              <li>
                                 <span></span>
                                 <p><strong>sat :</strong> 8am - 1pm</p>
                              </li>
                              <li>
                                 <span></span>
                                 <p><strong>sun :</strong> closed</p>
                              </li>
                              <li>
                                 <span></span>
                                 <p><strong>holidays :</strong> 8am - 1pm</p>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12">
                  <p>Copyright &copy; 2023 - Pumplink All Right Reserved</p>
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      
      <script src="js/indexJS.js"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

      <script>
         AOS.init();
       </script>
   </body>
</html>
