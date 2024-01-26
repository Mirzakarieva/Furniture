<!DOCTYPE html>
<php lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Fiu</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="assets/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="assets/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="assets/assets/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
               <a class="logo" href="index.php"><img src="assets/images/logo.png"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="?page=about">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="?page=design">Design</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="?page=shop">Shop</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="?page=contact">Contact</a>
                     </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                     <div class="search_icon">
                        <ul>
                           <li><a href="#"><img src="assets/images/search-icon.png"></a></li>
                           <li><a href=""><img src="assets/images/user-icon.png"></a></li>
                        </ul>
                     </div>
                  </form>
               </div>
         </nav>
         </div>
      </div>
      <!-- header section end -->

    @yield('main')


      <!-- footer section start -->
      <div class="footer_section">
         <div class="container">
            <div class="footer_location_text">
               <ul>
                  <li><img src="assets/images/map-icon.png"><span class="padding_left_10"><a href="#">Loram Ipusm hosting web</a></span></li>
                  <li><img src="assets/images/call-icon.png"><span class="padding_left_10"><a href="#">Call : +7586656566</a></span></li>
                  <li><img src="assets/images/mail-icon.png"><span class="padding_left_10"><a href="#">demo@gmail.com</a></span></li>
               </ul>
            </div>
            <div class="row">
               <div class="col-lg-3 col-sm-6">
                  <h2 class="useful_text">Useful link </h2>
                  <div class="footer_menu">
                     <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="design.php">Our Designe</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h2 class="useful_text">Repair</h2>
                  <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur  adipiscinaliqua  Loreadipiscing </p>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h2 class="useful_text">Social Media</h2>
                  <div id="social">
                     <a class="facebookBtn smGlobalBtn active" href="#" ></a>
                     <a class="twitterBtn smGlobalBtn" href="#" ></a>
                     <a class="googleplusBtn smGlobalBtn" href="#" ></a>
                     <a class="linkedinBtn smGlobalBtn" href="#" ></a>
                  </div>
               </div>
               <div class="col-sm-6 col-lg-3">
                  <h1 class="useful_text">Our Repair center</h1>
                  <p class="footer_text">Lorem ipsum dolor sit amet, consectetur adipiscinaliquaLoreadipiscing </p>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://php.design">Free php  Templates</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.bundle.min.js"></script>
      <script src="assets/js/jquery-3.0.0.min.js"></script>
      <script src="assets/js/plugin.js"></script>
      <!-- sidebar -->
      <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="assets/js/custom.js"></script>
      <!-- javascript --> 
      <script src="assets/js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>