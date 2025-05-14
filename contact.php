


<?php
include("components/header.php");
?>



        <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center ">
                    <h2 class="page-cover-tittle">Contact Us</h2>
                    <ol class="breadcrumb   text-center w-100 justify-content-center">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->
        
        <!--================Contact Area =================-->
        <section class="contact_area section_gap">
            <div class="container" data-aos="zoom-in" data-aos-duration="1000">







                <div class="row" >
                    <div class="col-md-3">
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <h6>Pakistan, Karachi</h6>
                                <p>Aptech SFC </p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <h6><a href="#">03181447026</a></h6>
                                <p>Mon to Fri 9am to 6 pm</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <h6><a href="#">mahalerang@gmail.com</a></h6>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" >
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" required id="name" name="name" placeholder="Enter your name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" required id="email" name="email" placeholder="Enter email address">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" required id="subject" name="subject" placeholder="Enter Subject">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" required name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <button type="submit" value="submit" class="btn theme_btn button_hover">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>



                <div id="map" class="col-lg-12 mt-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3620.0170064238896!2d67.07182317583607!3d24.863268745144197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33ea3db108f41%3A0x42acc4507358b160!2sAptech%20Learning%2C%20Shahrah%20e%20Faisal%20Center!5e0!3m2!1sen!2s!4v1745090290254!5m2!1sen!2s" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>
        </section>
        <!--================Contact Area =================-->
   




  <!--================Contact Success and Error message Area =================-->
  <div id="success" class="modal modal-message" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-close"></i>
                </button> -->
                <h2>Thank you</h2>
                <p>Your message is successfully sent...</p>
            </div>
        </div>
    </div>
</div>

<!-- Modals error -->
<div id="error" class="modal modal-message" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-close"></i>
                </button> -->
                <h2>Sorry !</h2>
                <p>Something went wrong</p>
            </div>
        </div>
    </div>
</div>
        <!--================End Contact Success and Error message Area =================-->











    <?php
    include("components/footer.php");
    ?>
         
    