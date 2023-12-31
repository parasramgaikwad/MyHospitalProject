<?php
include "nav.php";
?>

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">About Us</h1>
                <a href="index.php" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="about.php" class="h4 text-white">About</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <?php
$res=mysqli_query($conn,"SELECT * FROM hospital_about");
$about_det=mysqli_fetch_assoc($res);
?>

    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">About Us</h5>
                        <h1 class="display-5 mb-0"><?=$about_det['about_title']?></h1>
                    </div>
                    <h4 class="text-body fst-italic mb-4"><?=$about_det['about_sub_title']?></h4>
                    <p class="mb-4"><?=$about_det['about_details']?></p>
                    <div class="row g-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i><?=$about_det['about_head1']?></h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i><?=$about_det['about_head2']?></h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i><?=$about_det['about_head3']?></h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i><?=$about_det['about_head4']?></h5>
                        </div>
                    </div>
                    <a href="appointment.php" class="btn btn-primary py-3 px-5 mt-4 wow zoomIn" data-wow-delay="0.6s">Make Appointment</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="admin/uploads/<?=$about_det['about_image']?>" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- About End -->

<?php
include "footer.php";
?>