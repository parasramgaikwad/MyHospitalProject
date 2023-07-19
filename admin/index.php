<?php 
  include "nav.php";

?>
<?php
$a_data=mysqli_query($conn,"SELECT * FROM customer_appointment,master_service, master_doctor WHERE customer_appointment.master_service_id=master_service.master_service_id AND 
  customer_appointment.master_doctor_id=master_doctor.master_doctor_id AND
  customer_appointment.status=''
  ");
?>
      <div class="container-fluid ">
        <h3>
          <?php
           echo date('d-M-y , H:i a');
          ?>
        </h3>
        <BR>
        <div class="row">
          <?php
            foreach($a_data as $row)
            {
          ?>
          <div class="col-md-3">
            <div class="card">
              <div class="card-header">
                <?=$row['master_service_name']?><br>
                <?php
                  $time=strtotime($row['appointment_date']);
                  echo date('d-m-y',$time);
                ?><br>
                <?=$row['appointment_time']?>
              </div>
              <div class="card-body">
                <?=$row['customer_name']?> <br>
                <?=$row['customer_email']?><br>
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-7">
                    <?=$row['master_doctor_name']?><br>                    
                  </div>
                  <div class="col-5">
                    <a href="complete_appointment.php?appointment_id=<?=$row['customer_appointment_id']?>">
                    <button class="btn btn-sm btn-primary ">Complete</button>
                    </a>      
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php
          }
          ?>
         </div>
      </div>
    </section>
    <!-- /.content -->
  </div><!-- /.content-wrapper -->
  
  <?php
    include "footer.php";
  ?>