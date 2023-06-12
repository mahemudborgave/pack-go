<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

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
         <a href="home.php" class="active">land here</a>
         <a href="about.php">who we are</a>
         <a href="package.php">get packages</a>
         <a href="book.php">make bookings</a>
         <!-- A -->
      </nav>

      <div class="second-flex-item">
         <div>
            <div class="search-button" onclick="searchDropToggle()"><i class="fa fa-search"></i></div>

            <div class="search-dropdown">
               <input type="text" placeholder="Search Destination">
               <a href="package.php"><i class="fa fa-check" aria-hidden="true"></i></a>
            </div>
         </div>

         <div id="menu-btn" class="fas fa-bars"></div>
      </div>

   </section>

   <!-- header section ends -->

   <!-- home section starts  -->

   <section class="home">

      <div class="swiper home-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
               <div class="content">
                  <span>keep calm and travel on</span>
                  <h3>explore the world with pack&go</h3>
                  <a href="package.php" class="btn">discover more</a>
               </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
               <div class="content">
                  <span>keep calm and travel on</span>
                  <h3>taste the thunder of world</h3>
                  <a href="package.php" class="btn">discover more</a>
               </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
               <div class="content">
                  <span>keep calm and travel on</span>
                  <h3>make your tour worthwhile</h3>
                  <a href="package.php" class="btn">discover more</a>
               </div>
            </div>

         </div>

         <div class="swiper-button-next"></div>
         <div class="swiper-button-prev"></div>

      </div>

   </section>

   <!-- home section ends -->

   <!-- services section starts  -->

   <section class="services">

      <h1 class="heading-title"> our services </h1>

      <div class="box-container">

         <div class="box">
            <img src="images/icon-1.png" alt="">
            <h3>adventure</h3>
         </div>

         <div class="box">
            <img src="images/icon-2.png" alt="">
            <h3>tour guide</h3>
         </div>

         <div class="box">
            <img src="images/icon-3.png" alt="">
            <h3>trekking</h3>
         </div>

         <div class="box">
            <img src="images/icon-4.png" alt="">
            <h3>camp fire</h3>
         </div>

         <div class="box">
            <img src="images/icon-5.png" alt="">
            <h3>off road</h3>
         </div>

         <div class="box">
            <img src="images/icon-6.png" alt="">
            <h3>camping</h3>
         </div>

      </div>

   </section>

   <!-- services section ends -->

   <!-- home about section starts  -->

   <section class="home-about">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>about us</h3>
         <p>We are the best tour and travel planner in India and world wide. Working in this industry since 2022</p>
         <a href="about.php" class="btn">read more</a>
      </div>

   </section>

   <!-- home about section ends -->

   <!-- home packages section starts  -->

   <section class="home-packages">

      <h1 class="heading-title"> our packages </h1>

      <div class="box-container">

         <div class="box">
            <div class="image">
               <img src="images/img-1.jpg" alt="">
            </div>
            <div class="content">
               <h3>Taj Mahal</h3>
               <p>Visit one of the seven wonders</p>
               <a href="book.php" class="btn">book now</a>
            </div>
         </div>

         <div class="box">
            <div class="image">
               <img src="images/img-2.jpg" alt="">
            </div>
            <div class="content">
               <h3>Indonesia</h3>
               <p>Have a visit to the blossoming glory</p>
               <a href="book.php" class="btn">book now</a>
            </div>
         </div>

         <div class="box">
            <div class="image">
               <img src="images/img-3.jpg" alt="">
            </div>
            <div class="content">
               <h3>Bali</h3>
               <p>Get the pleasure of water silence</p>
               <a href="book.php" class="btn">book now</a>
            </div>
         </div>

      </div>

      <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>

   </section>

   <!-- home packages section ends -->

   <!-- home offer section starts  -->

   <section class="home-offer">
      <div class="content">
         <h3>upto 50% off</h3>
         <p>Book tour trip before the time and get the offer!</p>
         <div class="time-counter">
            <div class="time-countdown clearfix" data-countdown="2020/2/01">
               <div class="counter-column">
                  <div class="inner">
                     <span class="count" id="days">00</span>Days
                  </div>
               </div>
               <div class="counter-column">
                  <div class="inner">
                     <span class="count" id="hours">00</span>Hours
                  </div>
               </div>
               <div class="counter-column">
                  <div class="inner">
                     <span class="count" id="minutes">00</span>Mins
                  </div>
               </div>
               <div class="counter-column">
                  <div class="inner">
                     <span class="count" id="seconds">00</span>Secs
                  </div>
               </div>
            </div>
         </div>
         <a href="book.php" class="btn">book now</a>
      </div>
   </section>

   <!-- home offer section ends -->

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

   <script>
      var countDownDate = new Date("aug 30,2028 00:00:00").getTime();
      var x = setInterval(function() {
         var now = new Date().getTime();
         var distance = countDownDate - now;

         var days = Math.floor(distance / (1000 * 60 * 60 * 24));
         var hours = Math.floor(
            (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
         );
         var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
         var seconds = Math.floor((distance % (1000 * 60)) / 1000);

         document.getElementById("days").innerHTML = days;
         document.getElementById("hours").innerHTML = hours;
         document.getElementById("minutes").innerHTML = minutes;
         document.getElementById("seconds").innerHTML = seconds;


         if (distance < 0) {
            clearInterval(x);
            document.getElementById("days").innerHTML = "00";
            document.getElementById("hours").innerHTML = "00";
            document.getElementById("minutes").innerHTML = "00";
            document.getElementById("seconds").innerHTML = "00";
         }
      }, 1000);
   </script>

</body>

</html>