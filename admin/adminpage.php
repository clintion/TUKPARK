<body style="background-color: #212529;">
<p> THIS IS THE ADMIN </p>
<div class="row card">
TAKE PRECAUTION WHEN EXECUTING
</div>
<div>

</div>

<?php 

$con = new mysqli('localhost','root','','eh');
    if($con->connect_error){ 
        die('connection_failed - '.$con->connect_error);
    }else {
        $dt = $con-> query("SELECT COUNT(*) FROM userbook "); 
        if($dt->num_rows >0){

          while ($row = $dt->fetch_assoc()) {
           $no= $row['COUNT(*)']; 
           $rs= 43 - $no;
           $ts= $rs+$no;
           $v= $no/$ts;
           $pv=$v*100;
           $u= $rs/$ts;
           $pu= $u*100;

    

           ?>
          <div>
          	<p>
          		<button type="button" class="btn btn-info">OCCUPIED PARKING SLOTS : </button> <button type="button" class="btn btn-info"> <?php echo $no; ?></button> <br/> <br/>
          		<button type="button" class="btn btn-dark-green">VACANT PARKING SLOTS :</button> <button type="button" class="btn btn-info">  <?php echo $rs; ?></button> <br/> <br/>
          		<button type="button" class="btn btn-dark-green">PERCENTAGE OF OCCUPIED SLOTS : </button> <button type="button" class="btn btn-info"> <?php echo $pv." %"; ?></button><br/> <br/>
          		<button type="button" class="btn btn-dark-green">PERCENTAGE OF UNOCCUPIED SLOTS : </button> <button type="button" class="btn btn-info"><?php echo $pu." %"; ?> </button> <br/> <br/>


          	

          	</p>


          </div>

           <?php
        }
        }else{?>
           <div>
          	<p>
          		<button type="button" class="btn btn-dark-green">NO RECORDS FOUND !</button> <br/> <br/>
          	</p>
          </div>

          <?php
        }
    }

?>

</body>