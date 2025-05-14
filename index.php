<?php
include("components/header.php");
include('dbcon.php');
?>
<!--================Banner Area =================-->
<section class="banner_area">
    <div class="booking_table d_flex align-items-center"  >
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container"  data-aos="zoom-in" data-aos-duration="1500">
            <div class="banner_content text-center mt-5 p-5" id="banaer-text-div">
                <h6>Away from monotonous life</h6>
                <h2>Relax Your Mind</h2>
                <p>Discover a perfect blend of elegance and comfort with our premium rooms. Whether you're on a family vacation, a romantic getaway, or a solo trip, we ensure a memorable stay with top-notch amenities and warm hospitality. Book now and indulge in the experience you deserve!</p>
                <a href="#Roombooking" class="btn theme_btn button_hover">Book Now</a>
            </div>
        </div>
    </div>

    <!-- form yaha se start he   -->
    <div class="container p-5 " id="Roombooking">
  <h1 class="text-white text-center">Book Your Room</h1>
  <form action="showrooms.php" method="get">
    <div class="row justify-content-between">
      <!-- Check-in Date -->
      <?php $today = date('Y-m-d'); ?>
      <div class="col-md-2 p-3 rounded">
        <label class="text-white">Check-in Date</label>
        <input type="date" min="<?= $today ?>" class="form-control" name="checkin" required>
      </div>

      <!-- Check-out Date -->
      <div class="col-md-2 p-3 rounded">
  <label class="text-white">Check-out Date</label>
  <input type="date" min="<?= $today ?>"  class="form-control" name="checkout" required>
</div>


      <!-- Adults Dropdown -->
      <div class="col-md-2  p-3 rounded">
        <label class="text-white">Adults</label>
        <select class="form-control" name="adults" required>
          <option value="">Select Adults</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
      </div>

      <!-- Children Dropdown -->
      <div class="col-md-2  p-3 rounded">
        <label class="text-white">Children</label>
        <select class="form-control" name="children" required>
          <option value="">Select Children</option>
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
      </div>



<!-- Select Room Category dropdown -->

      <div class="col-md-2  p-3 rounded">
        <label class="text-white">Room Category</label>
        <select class="form-control" name="category" required>
          <option value="">Select Room</option>
          <option value="standard">Standard</option>
          <option value="deluxe">Deluxe</option>
          <option value="executive">Executive</option>
          <option value="royal_suite">Royal_suit</option>
        </select>
      </div> 





    </div>


    

    <!-- Centered Button -->
    <div class="d-flex justify-content-center mt-4">
      <button class="btn btn-info">Book Your Room</button>
    </div>
  </form>
</div>


   
</section>

<!--================Banner Area =================-->










<!--================ Accomodation Area  =================-->
<section class="accomodation_area section_gap">
    <div class="container">
        <div class="section_title text-center" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="title_color">Our Rooms</h2>
            <p>Discover comfort and elegance in every corner of our beautifully designed rooms.
Each room is equipped with modern amenities to make your stay truly relaxing.
Experience a perfect blend of luxury and warmth during your time with us.</p>
        </div>
        <div class="row mb_30">
            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="image/room1.jpg" alt="">
                        <a href="#Roombooking" class="btn theme_btn button_hover">Book Now</a>
                    </div>
                    <a href="#">
                        <h4 class="sec_h4">Standard Room</h4>
                    </a>
                    <!-- <h5>$250<small>/night</small></h5> -->
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="image/room2.jpg" alt="">
                        <a href="#Roombooking" class="btn theme_btn button_hover">Book Now</a>
                    </div>
                    <a href="#">
                        <h4 class="sec_h4"> Deluxe Room</h4>
                    </a>
                    <!-- <h5>$200<small>/night</small></h5> -->
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="image/room3.jpg" alt="">
                        <a href="#Roombooking" class="btn theme_btn button_hover">Book Now</a>
                    </div>
                    <a href="#">
                        <h4 class="sec_h4">Executive Suite</h4>
                    </a>
                    <!-- <h5>$750<small>/night</small></h5> -->
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="image/room4.jpg" alt="">
                        <a href="#Roombooking" class="btn theme_btn button_hover">Book Now</a>
                    </div>
                    <a href="#">
                        <h4 class="sec_h4">Royal Suite</h4>
                    </a>
                    <!-- <h5>$200<small>/night</small></h5> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ Accomodation Area  =================-->

<!--================ Facilities Area  =================-->
<section class="facilities_area section_gap">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
    </div>
    <div class="container">
        <div class="section_title text-center" data-aos="zoom-in" data-aos-duration="1000">
            <h2 class="title_w">Facilities We Offer</h2>
            <p class="text-white">At Mahal Rang , we don’t just offer rooms — we offer a complete experience. From the moment you walk in, comfort and care are our top priorities. Every facility is designed to make your stay smooth, safe, and satisfying.</p>
        </div>
        <div class="row mb_30">
            <div class="col-lg-4 col-md-6" data-aos="flip-left" data-aos-duration="1000">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-dinner"></i>Restaurant</h4>
                    <p>Enjoy a variety of delicious meals at our in-house restaurant, offering local and international dishes freshly prepared by expert chefs.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="flip-left" data-aos-duration="1000">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="bi bi-wifi"></i>Free Wifi</h4>
                    <p>Stay connected with high-speed internet available throughout the hotel in rooms,lobby, and restaurant Perfect for work 
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="flip-left" data-aos-duration="1000">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-shirt"></i>Swimming Pool</h4>
                    <p>Relax and unwind in our well-maintained swimming pool — a refreshing escape for both kids and adults.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="flip-left" data-aos-duration="1000">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-car"></i>Rent a Car</h4>
                    <p>Need to explore the city? Our convenient rent-a-car service is available with driver options to make your travel hassle-free.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="flip-left" data-aos-duration="1000">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="fa-solid fa-dumbbell"></i>Gym</h4>
                    <p>Don’t miss your workouts! Our fitness center is equipped with modern machines to help you stay fit even while you're traveling.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="flip-left" data-aos-duration="1000">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="fa-solid fa-jug-detergent"></i>laundry </h4>
                    <p>Enjoy our quick and professional laundry service. We take care of your clothes so you can focus on your stay and travel with confidence.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ Facilities Area  =================-->

<!--================ About History Area  =================-->
<section class="about_history_area section_gap">
    <div class="container">
        <div class="row" data-aos="zoom-in" data-aos-duration="1000">
            <div class="col-md-6 d_flex align-items-center">
                <div class="about_content ">
                    <h1 class="title title_color">Who We Are</h1>
                    <p>
Welcome to Mahalay Rang — where comfort meets care. Located in the heart of the city, our hotel is designed to provide a peaceful and pleasant stay for every guest. Whether you’re visiting for work or relaxation, we offer modern rooms, top-class facilities, and friendly service to make you feel right at home. 

At Mahalay Rang , we believe in warm hospitality, attention to detail, and creating memorable experiences for every guest. Our dedicated staff works around the clock to ensure that your needs are met with efficiency and a smile. From a smooth check-in process to well-maintained rooms and quick room service, every part of your stay is thoughtfully planned.


</p>

                    <a href="about.php" class="button_hover theme_btn_two">Read more</a>
                </div>
            </div>
            <div class="col-md-6">
                <img class="img-fluid object-fit-cover border rounded" src="image/aboutmahal.webp" alt="img" >
            </div>
        </div>
    </div>
</section>
<!--================ About History Area  =================-->




<?php
include("components/footer.php");
?>
       
