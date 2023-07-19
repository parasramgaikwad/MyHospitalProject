<?php
include "nav.php";
?>

 <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Appointment</h1>
                <a href="" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Appointment</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Appointment Start -->
  <?php
$ms_data=mysqli_query($conn,"SELECT * FROM master_service");
$md_data=mysqli_query($conn,"SELECT * FROM master_doctor");
?>

    <!-- Appointment Start -->
    <div class="container-fluid bg-primary bg-appointment my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="display-5 text-white mb-4">We Are A Certified and Award Winning Dental Clinic You Can Trust</h1>
                        <p class="text-white mb-0">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">Make Appointment</h1>
                        <form action="save_appointment.php" method="post" enctype="multipart/form-data">
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                <select class="form-select bg-light border-0" style="height: 55px;" required name="master_service_id">
                                        <option selected value="">Select A Service</option>
                                        <?php
                                        foreach($ms_data as $key => $row){
                                        ?>
         <option value="<?=$row['master_service_id']?>"><?=$row['master_service_name']?>
         </option>
                                        <?php
                                         }
                                         ?>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
        <select class="form-select bg-light border-0" style="height: 55px;" required name="master_doctor_id">
                                        <option selected>Select Doctor</option>
                                        <?php
                                        foreach($md_data as $key => $row){
                                        ?>
                                        <option value="<?=$row['master_doctor_id']?>"><?=$row['master_doctor_name']?></option>
                                        <?php
                                         }
                                         ?>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-light border-0" name="customer_name" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                <input type="email" name="customer_email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date1" data-target-input="nearest">
                                    <input type="date" name="appointment_date"
                                        class="form-control bg-light border-0"
                                            placeholder="Appointment Date" data-target="#date1" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="time" id="time1" data-target-input="nearest">
                                        <input type="text" name="appointment_time" 
                                            class="form-control bg-light border-0 datetimepicker-input"
                                            placeholder="Appointment Time" data-target="#time1" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Make Appointment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->
    <!-- Appointment End -->

<?php
include "footer.php";
?>