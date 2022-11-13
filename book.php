<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- favicon -->
   <link rel="icon" type="image/x-icon" href="images/favicon.jpg">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <!-- header section starts  -->

   <section class="header">

      <a href="home.php" class="logo">Pack<span>&</span>Go</a>

      <nav class="navbar">
         <a href="home.php">land here</a>
         <a href="about.php">who we are</a>
         <a href="package.php">get packages</a>
         <a href="book.php" class="active">make bookings</a>
      </nav>

      <div class="second-flex-item">
         <div>
            <div class="search-button" onclick="searchDropToggle()"><i class="fa fa-search"></i></div>

            <div class="search-dropdown">
               <input type="text">
               <a href="package.php"><i class="fa fa-check" aria-hidden="true"></i></a>
            </div>
         </div>

         <div id="menu-btn" class="fas fa-bars"></div>
      </div>

   </section>

   <!-- header section ends -->

   <div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
      <h1>make booking</h1>
   </div>

   <!-- booking section starts  -->

   <section class="booking">

      <h1 class="heading-title">book your trip!</h1>

      <form action="book_form.php" method="post" class="book-form">

         <div class="flex">
            <div class="inputBox">
               <span>name :</span>
               <input type="text" placeholder="enter your name" name="name">
            </div>
            <div class="inputBox">
               <span>email :</span>
               <input type="email" placeholder="enter your email" name="email">
            </div>
            <div class="inputBox">
               <span>phone :</span>
               <input type="number" placeholder="enter your number" name="phone">
            </div>
            <div class="inputBox">
               <span>address :</span>
               <input type="text" placeholder="enter your address" name="address">
            </div>
            <div class="inputBox">
               <span>where to :</span>
               <input type="text" placeholder="place you want to visit" name="location">
            </div>
            <div class="inputBox">
               <span>how many :</span>
               <input type="number" placeholder="number of guests" name="guests">
            </div>
            <div class="inputBox">
               <span>arrivals :</span>
               <input type="date" name="arrivals">
            </div>
            <div class="inputBox">
               <span>leaving :</span>
               <input type="date" name="leaving">
            </div>
         </div>

         <input type="submit" value="submit" class="btn" name="send">

      </form>

   </section>

   <!-- booking section ends -->

















   <!-- footer section starts  -->

   <section class="footer">

      <div class="box-container">

         <div class="box">
            <h3>contact</h3>
            <a href="#"> <i class="fas fa-phone"></i> +777-5841-645 </a>
            <a href="#"> <i class="fas fa-envelope"></i> maas@gmail.com </a>
            <a href="#"> <i class="fas fa-map"></i> pune, india - 411016 </a>
         </div>

         <div class="box box-1">
            <h3>follow us</h3>
            <a href="#" style="display: inline-block;"> <i class="fab fa-facebook-f"></i></a>
            <a href="#" style="display: inline-block;"> <i class="fab fa-twitter"></i></a>
            <a href="#" style="display: inline-block;"> <i class="fab fa-instagram"></i></a>
            <a href="#" style="display: inline-block;"> <i class="fab fa-linkedin"></i></a>
         </div>

      </div>

      <div class="credit"> created by <span>maas</span> | &copy 2022 all rights reserved! </div>

   </section>

   <!-- footer section ends -->









   <!-- swiper js link  -->
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>