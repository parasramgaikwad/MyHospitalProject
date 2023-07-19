<?php
include "nav.php";
?>

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Our Dentist</h1>
                <a href="index.php" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="service.php" class="h4 text-white">Our Dentist</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->

 <?php
$dentist_data=mysqli_query($conn,"SELECT * FROM hospital_our_dentist");
?>
    <!-- Team Start -->

<div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.1s">
                    <div class="section-title bg-light rounded h-100 p-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Dentist</h5>
                        <h1 class="display-6 mb-4">Meet Our Certified & Experienced Dentist</h1>
                        <a href="appointment.php" class="btn btn-primary py-3 px-5">Appointment</a>
                    </div>
                </div>
                <?php
                    foreach($dentist_data as $row){
                    ?>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    
                    <div class="team-item">
                        <div class="position-relative rounded-top" style="z-index: 1;">
                            <img class="img-fluid rounded-top w-100" src="admin/uploads/<?=$row['dentist_image']?>" alt="">
                            <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                <a class="btn btn-primary btn-square m-1" href="<?=$row['dentist_twitter_link']?>">
                                    <i class="fab fa-twitter fw-normal"></i>
                                </a>
                                <a class="btn btn-primary btn-square m-1" href="<?=$row['dentist_facebook_link']?>">
                                <i class="fab fa-facebook-f fw-normal"></i>
                                </a>
                                <a class="btn btn-primary btn-square m-1" href="<?=$row['dentist_linkedin_link']?>">
                                    <i class="fab fa-linkedin-in fw-normal"></i>
                                </a>
                                <a class="btn btn-primary btn-square m-1" href="<?=$row['dentist_instagram_link']?>">
                                    <i class="fab fa-instagram fw-normal"></i>
                                </a>
                            </div>
                        </div>
                        <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                            <h4 class="mb-2"><?=$row['dentist_name']?></h4>
                            <p class="text-primary mb-0"><?=$row['dentist_specialist']?></p>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Team End -->


<?php
include "footer.php";
?>