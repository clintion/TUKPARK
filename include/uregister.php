<!-- Material form register -->
<?php

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

<div class="card mx-8 z-depth-0" id="regcard">

    <h5 class="card-header  yellow-text text-center py-4 " style="background-color: #782F40 !important;">
        <strong>Sign up <?php if(isset($fname)){echo $fname; }?></strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0 mx-0 px-0 " style="background-color: #782F40 !important;">

        <!-- Form -->
        <form class="text-center rounded card z-depth-2 px-3 py-2 mx-0 needs-validation" style="color: #757575; " method="POST" action="">

            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormFirstName" class="form-control" required name="fname">
                        <label for="materialRegisterFormFirstName">First name</label>
                    </div>
                </div>
                <div class="col">
                    <!-- Last name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormLastName" class="form-control" required  name="lastname">
                        <label for="materialRegisterFormLastName">Last name</label>
                    </div>
                </div>
            </div>

            <!-- Car number plate-->

            <div class="md-form">
                <input type="text" id="materialRegisterFormPhone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" required name="noplate">
                <label for="materialRegisterFormPhone">Car number plate</label>
            </div>

            <!-- Driver License -->
            <div class="md-form">
                <input type="text" id="materialRegisterFormPhone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" required name="license">
                <label for="materialRegisterFormPhone">Driver License</label>
            </div>

              <!-- Phone number -->
            <div class="md-form">
                <input type="number" id="materialRegisterFormPhone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" required name="phone">
                <label for="materialRegisterFormPhone">Phone number</label>
            </div>

            <!-- email -->
            <div class="md-form ">
                <input type="email" id="materialRegisterFormEmail" class="form-control" required name="email">
                <label for="materialRegisterFormEmail">E-mail</label>
            </div>

            <!-- Password -->
            <div class="md-form">
                <input type="password" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock" required name="password">
                <label for="materialRegisterFormPassword">Password</label>
                <!-- <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                    At least 8 characters and 1 digit
                </small> -->
            </div>

 

        </br>
            <!-- Sign up button -->
            <button class="btn btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit" style="background-color: #782F40 !important;" name="submit">SIGN UP</button>

            <!-- <hr> -->

 
        </form>
        <!-- Form -->

    </div>

</div>
<!-- Material form register