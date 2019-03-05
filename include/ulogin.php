<!-- Material form login -->
<?php

if (isset($_POST['login'])) {
    $license =$_POST['license'];
    $password =$_POST['password'];



    $con = new mysqli('localhost','root','','eh');
    if($con->connect_error){ 
        die('connection_failed - '.$con->connect_error);
    }else {
        $dt = $con-> query("SELECT * FROM tuparkusers WHERE license='$license' and password='$password'  "); 
        if($dt->num_rows >0){

          while ($row = $dt->fetch_assoc()) {
           $_SESSION['license'] = $row['license'];
           $_SESSION['fname'] = $row['fname'];
           $_SESSION['lname'] = $row['lastname'];
           $_SESSION['noplate'] = $row['noplate'];
           $_SESSION['email'] = $row['email'];
           $_SESSION['phone'] = $row['email'];
           $_SESSION['id'] = $row['tuparkid'];
          }
          ?>

          <script type="text/javascript">
          window.location.href= "?";
          </script>





       <?php

        }else{
          $status = "wrong details";
        }

    }
  }
?>



<style>
@media only screen and (min-width: 768px) {
    /* tablets and desktop */
    #regcard{
        margin-right: 400px !important;
        margin-left: 400px !important;
    }

}
</style>



<div class="card mx-2" id="regcard">
  <div class=".col-12 .col-sm-6 .col-lg-8">

  <h5 class="card-header secondary-color yellow-text text-center py-4" style="background-color: #782F40 !important;">
    <strong>Sign In</strong>
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">

    <!-- Form -->
    <form class="text-center" style="color: #501908;" method="POST" action="">

       <!-- Driver License -->
            <div class="md-form">
                <input type="text" id="materialRegisterFormPhone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" required name="license">
                <label for="materialRegisterFormPhone">Driver License</label>
            </div>

      <!-- Password -->
      <div class="md-form">
        <input type="password" id="materialLoginFormPassword" class="form-control" required name="password" >
        <label for="materialLoginFormPassword">Password</label>
      </div>

      <div class="d-flex justify-content-around">
        <div>
          <!-- Remember me -->
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="materialLoginFormRemember">
            <label class="form-check-label" for="materialLoginFormRemember">Remember me</label>
          </div>
        </div>
        <!-- <div>
          
          <a href="">Forgot password?</a>
        </div> -->
      </div>

      <!-- Sign in button -->
      <button class="btn btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit" style="background-color: #782F40 !important;" name="login">Sign in</button>

      <!-- Register -->
      <p>Not a member?
        <a href="?page=uregister">Register</a>
      </p>

    </form>
    <!-- Form -->

  </div>
</div>
</div>
<!-- Material form login -->