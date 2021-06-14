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
          <li class="nav-item active">
            <a href="blog.php" class="nav-link">Blog</a>
          </li>
          <li class="nav-item">
            <a href="contuct.php" class="nav-link">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--blog bg section-->
  <section class="blog">
    <div class=" text-center text-light ">
      <h1 class="text-light ">Blog</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, saepe.</p>
    </div>
  </section>

  <!-- Blog Section -->
    <section id="blog" class="py-5">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="card-columns">
              <div class="card">
                <img src="images/image1.jpeg" class="img-fluid card-img-top" alt="">
                <div class="card-body">
                  <div class="card-title">
                    <h4>Blog Post One</h4>
                    <small class="text-muted">Written By Moshiur</small>
                    <hr>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui cumque numquam corporis nam quidem quae sequi laboriosam ab provident harum.</p>
                    <a href="#" class="btn btn-block btn-dark">Read More</a>
                  </div>
                </div>
              </div>
              <div class="card">
                <img src="images/image2.jpeg" class="img-fluid card-img-top" alt="">
                <div class="card-body">
                  <div class="card-title">
                    <h4>Blog Post Two</h4>
                    <small class="text-muted">Written By Moshiur</small>
                    <hr>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui cumque numquam corporis nam quidem quae sequi laboriosam ab provident harum.</p>
                    <a href="#" class="btn btn-block btn-outline-dark">Read More</a>
                  </div>
                </div>
              </div>
              <div class="card">
                <img src="images/image6.jpeg" class="img-fluid card-img-top" alt="">
                <div class="card-body">
                  <div class="card-title">
                    <h4>Blog Post Three</h4>
                    <small class="text-muted">Written By Moshiur</small>
                    <hr>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui cumque numquam corporis nam quidem quae sequi laboriosam ab provident harum.</p>
                    <a href="#" class="btn btn-block btn-dark">Read More</a>
                  </div>
                </div>
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
