<!DOCTYPE html>
<html lang="en.US">

<head>
  <meta charset="UTF-8" />
  <title>Glozzom</title>

  <!--pavicon-->
  <link href="css/uikit.min.css" rel="stylesheet">
  <link href="css/font/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!--font-awesome-->

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!--bootstrap.css-->

  <!--style.css-->
  <link href="css/style.css" rel="stylesheet">
  <!--style.css-->
  <link rel="shortcut icon" type="image/x-icon" href="images/faviconico.jpg">

</head>

<body>
  <!--navbar section-->
  <nav class="navbar navbar-dark  navbar-expand-md " uk-sticky="top: 200; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up">
    <div class="container">
      <a href="#" class="navbar-brand">
        Glozzom
      </a>
      <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a href="index.php" class="nav-link ">Home</a>
          </li>
          <li class="nav-item">
            <a href="about.php" class="nav-link">About Us</a>
          </li>
          <li class="nav-item ">
            <a href="service.php" class="nav-link">Service</a>
          </li>
          <li class="nav-item ">
            <a href="blog.php" class="nav-link">Blog</a>
          </li>
          <li class="nav-item active">
            <a href="contuct.php" class="nav-link">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--contact bg section-->
  <section class="blog">
    <div class=" text-center text-light ">
      <h1 class="text-light ">Contact Us</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, saepe.</p>
    </div>
  </section>

   <!-- Contact Section -->
   <section id="contact" class="py-5">
     <div class="container">
       <div class="row">
         <div class="col-md-8">
           <div class="card">
             <div class="card-body">
               <h4 class="text-center">Please fill out this form to contact us</h4>
                <form action="connect.php" method="post">
               <div class="row mt-4">
                 <div class="col-md-6">
                   <div class="form-group">
                     <input type="text" placeholder="First name" class="form-control"id="firstName"
                  name="firstName"/>
                   </div>
                 </div>
                 <div class="col-md-6">
                   <div class="form-group">
                     <input type="text" placeholder="Last name" class="form-control" id="lastName"
                  name="lastName">
                   </div>
                 </div>
                 <div class="col-md-6">
                   <div class="form-group">
                     <input type="text" placeholder="Email" class="form-control" id="email"
                  name="email">
                   </div>
                 </div>
                 <div class="col-md-6">
                   <div class="form-group">
                     <input type="text" placeholder="Phone number" class="form-control"id="number"
                  name="number">
                   </div>
                 </div>
                 <div class="col-md-12">
                   <div class="form-group">
                     <textarea cols="30" rows="5" class="form-control" placeholder="Message"name="txtMessage"></textarea>
                   </div>
                 </div>
                 <div class="col-md-12">
                   <input type="submit" class="btn btn-block btn-dark" value="Send">
                 </div>
               </div></form>
                
             </div>
           </div>
         </div>
         <div class="col-md-4">
           <div class="card">
             <div class="card-body">
               <h4>Get In Touch</h4>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, consequuntur.</p>
               <h4>Address</h4>
               <p>House #100, Uttara, Dhaka</p>
               <h4>Email</h4>
               <p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3c48594f487c5b515d5550125f5351">risha9851@gmail.com</a></p>
               <h4>Phone</h4>
               <p class="mb-2">+434 3434 3433</p>
               <p>+434 3434 3433</p>
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>


  <!--copy right section-->
  <section id="copyright" class="text-center py-3 ">
    <div class="container">
      <div class="row">
        <div class="col">
          <p class="lead mb-0">Copyright 2021 &copy; Risha</p>
        </div>
      </div>
    </div>
  </section>

  <!--bootstrap.js-->

  <!--custom.js-->
  <script src="js/proper.min.js"></script>

  <!--navbar.js-->
  <script src="js/jqury.js"></script>
  <!--jquary.js-->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/uikit.min.js"></script>
  <script src="js/uikit-icons.min.js"></script>
</body>

</html>
