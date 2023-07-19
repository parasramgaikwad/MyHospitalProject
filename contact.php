<?php
include "nav.php";
?>

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Contact</h1>
                <a href="index.php" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="contact.php" class="h4 text-white">Contact</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- contact -->
<div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-4 col-lg-6 wow slideInUp" data-wow-delay="0.1s">
                    <div class="bg-light rounded h-100 p-5">
                        <div class="section-title">
                            <h5 class="position-relative d-inline-block text-primary text-uppercase">Contact Us</h5>
                            <h1 class="display-6 mb-4">Feel Free To Contact Us</h1>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            
                            <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i><?=$hos_info['hospital_address']?>
                            </p>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <p class="mb-2">
                                <a href="mailto:<?=$hos_info['hospital_email']?>" class= "text-primary">
                                <i class="bi bi-envelope-open text-primary me-2"></i><?=$hos_info['hospital_email']?>
                                </a>
                            </p>
                        </div>
                        <div class="d-flex align-items-center">
                            <p class="mb-0">
                     <a href="tel:+<?=$hos_info['hospital_mobile']?>" 
                        class="text-primary">
                        <i class="bi bi-telephone text-primary me-2"></i>+<?=$hos_info['hospital_mobile']?>
                     </a>
                    </p>
                            <!-- <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                            <div class="text-start">
                                <h5 class="mb-0">Call Us</h5>
                                <span>+012 345 6789</span>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                    <form>
                        <div class="row g-3">
                            <div class="col-12">
                                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control border-0 bg-light px-4" placeholder="Your Email" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Subject" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0 bg-light px-4 py-3" rows="5" placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xl-4 col-lg-12 wow slideInUp" data-wow-delay="0.6s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15073.948004778098!2d75.16116993255662!3d19.173920180306542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdb456a9de4d11f%3A0x75b47c938e8ce9e4!2z4KSq4KS-4KSl4KSw4KWN4KSh4KWALCDgpK7gpLngpL7gpLDgpL7gpLfgpY3gpJ_gpY3gpLAgNDE0MTAy!5e0!3m2!1smr!2sin!4v1689770335797!5m2!1smr!2sin"
                        frameborder="0" style="min-height: 400px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- contact end -->















<?php
include "footer.php";
?>