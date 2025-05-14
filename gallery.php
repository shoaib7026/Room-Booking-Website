<?php
include("components/header.php");
?>

<!--================Breadcrumb Area =================-->
<section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">Gallery</h2>
            <ol class="breadcrumb justify-content-center">
                <li><a href="index.php">Home</a></li>
                <li class="active">Gallery</li>
            </ol>
        </div>
    </div>
</section>
<!--================Breadcrumb Area =================-->

<!--================Gallery Area =================-->
<section class="gallery_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color">Mahal Gallery</h2>
            <p>Who are in extremely love with eco friendly system.</p>
        </div>
        <div class="row imageGallery1" id="gallery">
            <?php
            $images = [
                "01.jpg",
                "02.jpg",
                "c9.jpg",
                "s5.jpg",
                "aboutus-value.jpg",
                "mahalgym.jpg",
                "gallery7.jpg",
                "mahalpool.jpg",
                "gallery9.jpg"
            ];

            foreach ($images as $img) {
                echo '
                <div class="col-md-4 col-sm-6 mb-4 gallery_item">
                    <div class="gallery_img">
                        <img src="image/gallery/' . $img . '" alt="" class="img-fluid rounded" style="height:250px; object-fit:cover; width:100%;">
                        <div class="hover">
                            <a class="light" href="image/gallery/' . $img . '"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>
</section>
<!--================Gallery Area =================-->

<?php
include("components/footer.php");
?>
