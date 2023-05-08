<?php 
require ('inc/head.php');
include ('inc/header.php');
include ('inc/slider.php');


?>


<!-- searching Lodge -->
<div class="row">
  <section class="availability" id="availability">
    <form action="">
    <div class="box">
   <div class="location-input">
      <p>Location</p>
      <input type="text" class="input" id="location-input" placeholder="Enter Hotel/Places">
   </div>
   </div>

      <div class="box">
    <div class="date-inputs">
      <div class="date-input" style="margin-right: 10px;">
        <p>check in</p>
        <input type="date" class="input" style=" font-size: 15px;">
      </div>
      <div class="date-input">
        <p>check out</p>
        <input type="date" class="input" style=" font-size: 15px;">
      </div>
    </div>
  </div>


  <div class="box">
    <div class="people">
    <div class="adult" style="margin-right: 10px;">
         <p>adults</p>
        <select name="adults" id="" class="input" style=" font-size: 15px;">
          <option value="0">None</option>
          <option value="1">1 adults</option>
          <option value="2">2 adults</option>
          <option value="3">3 adults</option>
          <option value="4">4 adults</option>
          <option value="5">5 adults</option>
          <option value="6">6 adults</option>
        </select>
      </div>
      <div class="child">
         <p>children</p>
        <select name="child" id="" class="input" style=" font-size: 15px;">
          <option value="0">None</option>
          <option value="1">1 child</option>
          <option value="2">2 child</option>
          <option value="3">3 child</option>
          <option value="4">4 child</option>
          <option value="5">5 child</option>
          <option value="6">6 child</option>
        </select>
      </div>
      <div class="room">
         <p>Room</p>
        <select name="room" id="" class="input" style=" font-size: 15px;">
          <option value="0">None</option>
          <option value="1">1 room</option>
          <option value="2">2 rooms</option>
          <option value="3">3 rooms</option>
          <option value="4">4 rooms</option>
          <option value="5">5 rooms</option>
          <option value="6">6 rooms</option>
        </select>
      </div>

</div>
</div>

      <div style="display: flex; justify-content: center; align-items: center; ">
        <input type="submit" value="check availability" class="btn">
      </div>
    </form>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d123504.11642627511!2d120.97978715328779!3d14.684087285579198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397ba0942ef7375%3A0x4a9a32d9fe083d40!2sQuezon%20City%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1682821838469!5m2!1sen!2sph" width="400" height="400" style="margin-left: 5%; margin-bottom:5%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  </section>

  <div class="column">
  <div id="map"></div>
  </div>

  <div class="column">
    <!-- Column 1 content here -->
  </div>


  <div class="column">
    <!-- Column 1 content here -->
  </div>

</div>



<!-- Gallery -->

<section class="gallery" id="gallery">

      <h1 class="heading">top places</h1>

      <div class="swiper gallery-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide">
               <img src="img\top places\banaue.jpg" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="img\top places\mayon.jpg" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="img\top places\bohol.jpg" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="img\top places\boracay.jpg" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="img\top places\cebu.jpg" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i> 
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="img\top places\manila.jpg" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="img\top places\mindoro.jpg" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>


            <div class="swiper-slide slide">
               <img src="img\top places\tagaytay.jpg" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="img\top places\vigan.jpg" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>


         </div>

      </div>

</section>





<!-- Available Rooms -->

<section class="room" id="room">

      <h1 class="heading">available room</h1>

      <div class="swiper room-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide">
               <div class="image">
                  <span class="price">₱15.99/night</span>
                  <img src="img/rooms/room-1.jpg" alt="">
                  <a href="#" class="fas fa-shopping-cart"></a>
               </div>
               <div class="content">
                  <h3>couple room</h3>
                  <p></p>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
                  <a href="booking.php" class="btn">book now</a>
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="image">
                  <span class="price">₱15.99/night</span>
                  <img src="img/rooms/room-2.jpg" alt="">
                  <a href="#" class="fas fa-shopping-cart"></a>
               </div>
               <div class="content">
                  <h3>exclusive room</h3>
                  <p></p>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
                  <a href="booking.php" class="btn">book now</a>
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="image">
                  <span class="price">₱15.99/night</span>
                  <img src="img/rooms/room-3.jpg" alt="">
                  <a href="#" class="fas fa-shopping-cart"></a>
               </div>
               <div class="content">
                  <h3>single room</h3>
                  <p></p>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
                  <a href="booking.php" class="btn">book now</a>
               </div>
            </div>



         <div class="swiper-pagination"></div>

      </div>
</section>


  




<!-- Client's feedback -->

<section class="review" id="review">

<div class="swiper review-slider">
   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <h2 class="heading">client's review</h2>
         <i class="fas fa-quote-right"></i>
         <p>Great! Thanks for your services.</p>
         <div class="user">
            <img src="img/nophoto.jpg" alt="">
            <div class="user-info">
               <h3>Fer Jugarap</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="swiper-slide slide">
         <h2 class="heading">client's review</h2>
         <i class="fas fa-quote-right"></i>
         <p>I need space</p>
         <div class="user">
            <img src="img/nophoto.jpg" alt="">
            <div class="user-info">
               <h3>Hifer 17</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>


   </div>
   <div class="swiper-pagination"></div>
</div>

</section>





<?php
include ('inc/footer.php');
require ('inc/script.php');
?>














   