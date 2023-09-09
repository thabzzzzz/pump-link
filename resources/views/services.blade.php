<!DOCTYPE html>
<html>
   <head>
      <title>Services</title>
      
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/aboutUs.css">
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
         <div class="row1">  

         
         <section class="get-in-touch">
   <h4>Get in touch</h4>
   <form class="contact-form row">
      <div class="form-field col-lg-6">
         <input id="name" class="input-text js-input" type="text" required>
         <label class="label" for="name">Name :</label>
      </div>
      <div class="form-field col-lg-6 ">
         <input id="email" class="input-text js-input" type="email" required>
         <label class="label" for="email">E-mail :</label>
      </div>
      <div class="form-field col-lg-6 ">
         <input id="company" class="input-text js-input" type="text" required>
         <label class="label lbl" for="company">Company Name :</label>
      </div>
       <div class="form-field col-lg-6 ">
         <input id="phone" class="input-text js-input" type="text" required>
         <label class="label lbl" for="phone">Contact Number :</label>
         
      </div>
      <p id="demo"></p>

      <div class="form-group col-md-6 selectsRow">
         <label for="natureOfQuery" class="nat natLabel">Nature of Query :</label>
         <select id="natureOfQuery" class="form-control">
           <option selected>Sale</option>
           <option>Financial</option>
           <option>Consultation</option>
         </select>
       </div>


       <div class="form-group col-md-6 selectsRow">
         <label for="contactMethod" class="nat contactMethodLebel">Prefered contact method :</label>
         <select id="contactMethod" class="form-control">
           <option selected>Phone</option>
           <option>Email</option>
           
         </select>
       </div>
       
      <div class="form-field col-lg-12 ">
      <label for="queryText" class="messageLabel">Message :</label>
    <textarea class="form-control" id="queryText" rows="3"></textarea>
</div>

      <div class="form-field col-lg-12">
         <input class="submit-btn testbutton" type="submit" value="Submit" > 
      

      </div>
   </form>
   <button class="testbutton" onclick="myFunction()" >g</button>
</section>
         
         </div>

         <div class="row">

            <h1>FAQ</h1>

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
      <script src="https://code.jquery.com/jquery-3.7.0.slim.js" integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
      
      
      <script src="js/script.js"></script>
   

      
      
   </body>
</html>
