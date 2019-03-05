
<!--Footer-->
<footer class="page-footer font-small stylish-color-dark pt-4 mt-4">

    <!--Footer Links-->
    <div class="container text-center text-md-left">
        <div class="row">

            <!--First column-->
            <div class="col-lg-4 col-md -4 ">
                <h5 class="text-uppercase mb-4 mt-3 font-weight-bold text-white">TuPark</h5>
                <p>Your partner to help you find a parking slot JUST WHEN YOU NEED IT!</p>
            </div>
            <!--/.First column-->

            <hr class="clearfix w-100 d-md-none">
            
            <!--Third column-->
            <div class="col-lg-4 col-md-4  text-center mx-auto text-white">
                <h5 class="text-uppercase mb-4 mt-3 font-weight-bold">Links</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="" style="text-decoration:none"><?php echo $faq;?></a>
                    </li>
                    <li>
                        <a href="" style="text-decoration:none"><?php echo $aboutus;?></a>
                    </li>
                    <li>
                        <a href="" style="text-decoration:none"><?php echo $terms;?></a>
                    </li>
                    <li>
                        <a href="?" style="text-decoration:none"><?php echo $privacy;?></a>
                    </li>
                </ul>
            </div>
            <!--/.Third column-->
            
            <hr class="clearfix w-100 d-md-none">
            
            
            
             <?php
                            if(@$_SESSION["id"]>0){
                                ?>   
                                
                                
                                   <div class="text-center col-lg-4  col-md-4 text-white">
             <ul class="list-unstyled list-inline mb-0">
            <li class="list-inline-item">
                <h5 class="mb-1">Let us help </h5>
            </li>
            <li class="list-inline-item">
                <a href="#!" class="btn btn-danger btn-rounded">BOOK A SLOT !</a>
            </li>
        </ul>
        </div> 
                                
                                
                                <?php
                                }else{
                                ?>
             <!--  <div class="text-center col-lg-4  col-md-4 text-white">
             <ul class="list-unstyled list-inline mb-0">
            <li class="list-inline-item">
                <h5 class="mb-1">Register for free</h5>
            </li>
            <li class="list-inline-item">
                <a href="#!" class="btn btn-danger btn-rounded">Sign up!</a>
            </li>
        </ul>
        </div> -->
        <?php } ?>

          

            

           

            
        </div>
    </div>
    <!--/.Footer Links-->

    

    <hr>

    <!--Social buttons-->
    <div class="text-center">
        <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-fb mx-1">
                    <i class="fa fa-facebook"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-tw mx-1">
                    <i class="fa fa-twitter"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-gplus mx-1">
                    <i class="fa fa-google-plus"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-li mx-1">
                    <i class="fa fa-linkedin"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-dribbble mx-1">
                    <i class="fa fa-dribbble"> </i>
                </a>
            </li>
        </ul>
    </div>
    <!--/.Social buttons-->

    <!--Copyright-->
    <div class="footer-copyright text-center text-white p-0">  
        <?php echo stripslashes(html_entity_decode($strfoot));?>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->



<script>
$(".bs").click(function (){

    var bg =  $( this ).css( "background-color" );
    var bname = $(this).text();

    

if(bg === "rgb(0, 0, 0)"){
        toastr.error('sorry..this is a path');
}else if(bg === "rgb(255, 0, 0)"){
         toastr.error('sorry..this slot is already booked');
}else{

    var bname = $.trim(bname);
    $("#bsname").text(bname);
    $("#bsid").val();
    $("#bsid").val(bname);
$('#bookmodal').modal('toggle');


}
});

$(".bs").each(function (){

    var bkarea = $("#areaname").text();
    var bkslot = $(this).text();
    var bkslot = $.trim(bkslot);
    var slotid = $(this).attr('id');
     var st = "";
    /*alert('ajax/getslotstatus.php?bkarea='+bkarea+'&bkslot='+bkslot);*/

   
   if(bkslot === ""){

   }else{
    $.post('ajax/getslotstatus.php?bkarea='+bkarea+'&bkslot='+bkslot+'&slotid='+slotid, function(data){
     
        if(data === 'booked'){
        st = "bk";
        $("#"+slotid).css("background-color","red");
        }else{
            //alert('ajax/getslotstatus.php?bkarea='+bkarea+'&bkslot='+bkslot);
            //$(this).children().css('background','red');
        st = "vk";
         $("#"+slotid).css("background-color","green");
       
        }
    });
 }



 
   
});
</script>

                 

