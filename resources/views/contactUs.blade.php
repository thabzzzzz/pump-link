<!DOCTYPE html>
<html>
   <head>
      <title>Contact Us</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
      
      <link rel="apple-touch-icon" sizes="180x180" href="../apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="../favicon-16x16.png">
      <link rel="manifest" href="/site.webmanifest">
      <link rel="shortcut icon" sizes="114x114" href="{{ asset('favicon.ico') }}">
   </head>
   <body>
   <nav class="navbar navbar-expand-lg navbar-light" style="      background-color: #f6f6f6;">
         <a class="logo" href="home">
         <img src="images/navbarLogo2.png" class="navBarLogo">
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler9"
            aria-controls="navbarToggler9" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarToggler9">
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link" href="home">Home</a>
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
      <div class="container" >
         <div class="row page2row1">
         <div class="col-6 map">
            <h4 class="text-center">Our Offices</h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3585.1820515537365!2d27.95070247631948!3d-26.027598756806526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e9572b46af65839%3A0x4be044fa0536c46e!2sPUMPLINK!5e0!3m2!1sen!2sza!4v1688654448437!5m2!1sen!2sza" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>          </div>
          <div class="col-6 contactusInfo" >
          <h4>Before Contacting Us</h4>
          <br>
          <p>For simple queries we recommend that you send us an email. You are also welcome to call us for a discussion for a complex requirement, we can also arrange a meeting with you at your premise if necessary. </p>
           <br>
           <h4>Contact Information</h4>
           <br>
           <p>No 07, 4th Street, Malboro, Sandton
           </p>
           <p> +2711 262 2384</p>
           <p>sales@pumplink.co.za</p>
           <p>Mon-Fri 9:00-17:00</p>
            <br>
          </div>
         </div>
        
         <hr class="double">
         
         <!-- end of first row -->

         
         <!-- contact cards -->
         <div class="contactCards">
            <div class="row cardRow">
               <div class="col-4">
                  <div class="card" style="width: 18rem;">
                     <img src="images/email.svg" class="card-img-top" alt="...">
                     <div class="card-body">
                       <h4 class="card-title">Contact By Email</h4>
                       <p class="card-text">Send us an email and we will respond within 24 hours</p>
                      
                     </div>
                   </div>

               </div>
               <div class="col-4">
                  <div class="card" style="width: 18rem;">
                     <img src="images/phone.jpg" class="card-img-top" alt="...">
                     <div class="card-body">
                       <h4 class="card-title">Contact By Phone</h4>
                       <p class="card-text">We will be happy to talk to you. Lets have a discussion today. Call us now!!</p>
                      
                     </div>
                   </div>

               </div>

               <div class="col-4"> 
                  <div class="card" style="width: 18rem;">
                     <img src="images/office.jpg" class="card-img-top" alt="...">
                     <div class="card-body">
                       <h4 class="card-title">Come To See Us</h4>
                       <p class="card-text">Visit our offices and our workshop and see us in action. </p>
                      
                     </div>
                   </div>

               </div>
              
               
              

            </div>
          

         </div>


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
      <script src="js/script.js"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
   </body>
</html>
