
<style>
.md-pills{
border:0px !important;
}
.md-pills .active{
background-color:red !important;
position:absolute;
bottom:0;

}

.topimg2{
 height:60px !important;
  width:170px !important;
  position:relative;
}

@media screen and (max-width: 786px) {
    nav {
        min-height: 12% !important;
    }
}  
@keyframes up-right {
    0% {<!-->
        transform: scale(1);
        opacity: .25
    }
    50% {
        transform: scale (1, 5);
        opacity: 1;
    }
    100% {
        transform: scale(1);
        opacity: .25;
    }
}
.circle {
    border-radius: 50%;
    width: 20px;
    height: 130px;
    opacity: .25;
}
.maroon {
    background-color: maroon;
    position: absolute;
    height:80px;
    width: 20px;
    top: 10%;
    left: 80%;
    -webkit-animation: up-right 1s infinite;
    -moz-animation: up-right 1s infinite;
    -o-animation: up-right 1s infinite;
    animation: up-right 1s infinite;
}

.circle {
    border-radius: 50%;
    width: 20px;
    height: 130px;
    opacity: .25;
}
.green {
    background-color: green;
    position: absolute;
    top: 7%;
    width: 20px;
    height:80px;
    left: 10%;
    -webkit-animation: up-right 1s infinite;
    -moz-animation: up-right 1s infinite;
    -o-animation: up-right 1s infinite;
    animation: up-right 1s infinite;
}

.circle {
    border-radius: 50%;
    width: 20px;
    opacity: .25;
    height: 130px;
}
.orange {
    background-color: orange;
    position: absolute;
    height:80px;
    top: 24%;
    width: 20px;
    left: 10%;
    -webkit-animation: up-right 1s infinite;
    -moz-animation: up-right 1s infinite;
    -o-animation: up-right 1s infinite;
    animation: up-right 1s infinite;
}

.circle {
    border-radius: 50%;
    width: 20px;
    height: 130px;
    opacity: .25;
}
.blue {
    background-color: blue;
    position: absolute;
    height:130px;
    width: 130px;
    top: 40%;
    left: 80%;
    -webkit-animation: up-right 1s infinite;
    -moz-animation: up-right 1s infinite;
    -o-animation: up-right 1s infinite;
    animation: up-right 1s infinite;
}

.circle {
    border-radius: 50%;
    width: 130px;
    opacity: .25;
    text-align: center;
}
.red {
    height:130px;
    background-color: red;
    position: absolute;
    top: 35%;
    width: 130px;
    left: 40%;
    -webkit-animation: up-right 1s infinite;
    -moz-animation: up-right 1s infinite;
    -o-animation: up-right 1s infinite;
    animation: up-right 1s infinite;
}
</style>
<!--Double navigation-->
 
            <!-- SideNav slide-out button -->
            <div class="preload" style="background-color:#782F40 !important;">
<div id="mdb-preloader" class="flex-center" style="background-color:#782F40 !important;">
    <div style="background-color:#782F40 !important;">
<div class="wrapper" style="background-color:#782F40 !important;">
  <p><h1>TUPARK...</h1></p>
  <div class="perp" id="p1"></div>
  <div class="perp" id="p2"></div>
  <div class="perp" id="p3"></div>
</div>
    </div>
</div>
</div>




<!-- SideNav slide-out button -->


<!-- Sidebar navigation -->
<div id="slide-out" class="side-nav ">
  <ul class="custom-scrollbar">
      <!-- Logo -->
      <li>
      
           <!---if logged in--> 

          <div class="logo-wrapper rounded-circle border-1 border-primary 1" style="height:160px !important;">
              <a href="?"><img src="img/logos/logo-side.png" alt="DP" class="img-fluid flex-center rounded-circle waves-light border-2 border-primary " ></a>
          </div>
          
          
      </li>
      <!--/. Logo -->
      <!--Social-->
      <li>
          <ul class="social">
              <li><a href="#" class="icons-sm fb-ic"><i class="fa fa-facebook"> </i></a></li>
              <li><a href="#" class="icons-sm pin-ic"><i class="fa fa-pinterest"> </i></a></li>
              <li><a href="#" class="icons-sm gplus-ic"><i class="fa fa-google-plus"> </i></a></li>
              <li><a href="#" class="icons-sm tw-ic"><i class="fa fa-twitter"> </i></a></li>
          </ul>
      </li>
      <!--/Social-->
      <!--Search Form-->
      <!-- <li>
          <form class="search-form" role="search">
              <div class="form-group md-form mt-0 pt-1 waves-light">
                  <input type="text" class="form-control" placeholder="Search">
              </div>
          </form>
      </li>
 -->      <!--/.Search Form-->
      <!-- Side navigation links -->
      <li>
          <ul class="collapsible collapsible-accordion ">
<li>
 <a href="?" class="waves-effect  waves-effect py-0 my-0" style="color: white !important;">
 <i class="fa fa-th" aria-hidden="true"></i> HOME
 </a> 
 </li>
    
      
			      
            		   <li>
                   <a href="?page=ulogin"  class="waves-effect waves-effect py-0 my-0  " >
                   <i class="fa fa-key" aria-hidden="true"></i> LOGIN
                   </a>
                   </li>  
                    
<li>
<a href="?page=uregister" class="waves-effect 
 waves-effect py-0 my-0  ">
<i class="fa fa-user-plus" aria-hidden="true"></i> REGISTER
</a>
</li>    

            
            
            
            
      <!--/. Side navigation links -->
  </ul>
  <div class="sidenav-bg rgba-blue-strong"></div>
</div>
<!--/. Sidebar navigation -->             

               <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav z-depth-0 mx-auto navbar-expand-lg navbar-dark scrolling-navbar">
             
            <div class="d-block d-sm-none d-md-none d-xl-none my-0 py-0 mx-auto" >
            <img src="img/logos/logo-wide.png" class="topimg2" >
            </div>
    
    
            <div class="float-left d-block d-sm-none d-md-none d-xl-none" style="position:absolute;left:0;">
                <a href="#" data-activates="slide-out" class="button-collapse text-white"><i class="fa fa-bars"></i></a> 
                                                
            </div>
            <!-- Breadcrumb-->
            <div class="d-none d-sm-block d-md-block d-xl-block mr-2 my-0 py-0">
            <a href="?"><img src="img/logos/logo-wide.png" style="height:70px !important;
  width:230px !important;"></a>
            </div>
             

    
    
            <ul class="nav navbar-nav nav-flex-icons ml-auto z-depth-0 d-lg-flex d-none my-0 py-0 " style="background-color: #782F40!important;">
            
            
            
                	<li>&nbsp;&nbsp;</li>	
                  
                 
                 <?php
                 if($_GET['page'] == 'home' || $_GET['page'] == '' ){


                 }else{?>
                        
                <li   class="nav-item"  style="color: white !important;border:none !important;float:left !important;">  <a href="?" class="nav-link" style="color: white !important;"><i class="fa fa-th" aria-hidden="true"></i> HOME </a> </li> 
                <?php } ?>

                <?php                            
                if(isset($_SESSION['id'])){
                ?>
                <li class="nav-item"  style="color: white !important;border:none !important;">
                <a class="nav-link" href="#" style="color: white !important;border:none !important;text-transform: uppercase;"> logged in as <?php
                echo $_SESSION['fname']; ?></a>
                </li>

                <li class="nav-item"  style="color: white !important;border:none !important;">
                <a class="nav-link" href="?page=logout" style="color: white !important;border:none !important;text-transform: uppercase;">log out</a>
                </li>



                <?php 
              }else{

                if(isset($_SESSION['id'])){

                }else{
                ?>


                    <li class="nav-item"  style="color: white !important;border:none !important;">
                                <a class="nav-link" href="?page=uregister" style="color: white !important;border:none !important;text-transform: uppercase;"><i class="fa fa-user-plus" aria-hidden="true"></i> REGISTER</a>
                                </li>
                     
                                <li class="nav-item"  style="color: white !important;border:none !important;"> 
                                 <a class="nav-link" href="?page=ulogin" style="color: white !important;border:none !important;text-transform: uppercase;" class="nav-link"><i class="fa fa-key" aria-hidden="true"></i> LOGIN </a></li>
                               
                                <li class="nav-item"  style="color: white !important;">    <span  style="color:#125e9a;"></span><span style="color:#125e9a;"></span></li>
                <?php }} ?>
                      
                        
               
            </ul>
            </nav><br />
    <!--/.Double navigation-->
    <script type="text/javascript">

function setLanguage(){
	xmlhttp1=GetXmlHttpObject();   
   if (xmlhttp1 == null)
   {
	  alert ("Browser does not support HTTP Request");
	  return;
   }
   var url = "changeLanguage.php";  
   xmlhttp1.onreadystatechange = showMess;
   xmlhttp1.open("GET", url, true);
   xmlhttp1.send(null);
}

function showMess()
{
   if (xmlhttp1.readyState == 4)
   {
	   
	  var array=xmlhttp1.responseText.split("$");
	  //alert(array[0]);	     
	 location.reload();
   }
}
function GetXmlHttpObject()
{
   if (window.XMLHttpRequest)
   {
      // code for IE7+, Firefox, Chrome, Opera, Safari
      return new XMLHttpRequest();
   }
   if (window.ActiveXObject)
   {
      // code for IE6, IE5
      return new ActiveXObject("Microsoft.XMLHTTP");
   }
   return null;
}
</script>

<script>

$(".nav-item").click(function() { 


$(this).toggleClass("purple-text"); 

});

</script>
    
    
    
 <?php
                        
                        function getPerd($eventTime2){
                         
                        $eventTime = ''.$rows['created'].' 17:25:43';
$age = time() - strtotime($eventTime2);
if(($age/31557600)>1) {
  $years = $age/31557600;
   $yearsi =  round($years);
    if($yearsi>1) {
     echo "$yearsi Years ago";
    }else{
  echo"One year ago"; 
  }
  
  }
elseif(($age/2678400)>1){
    $months =  $age/2678400;
    $monthsi =  round($months);
      if($monthsi>1) {
     echo "$monthsi Months ago";
    }else{
  echo"1 month ago"; 
  }
  }
elseif(($age/604800)>1){
    $weeks = $age/604800 ;
    $weeksi =  round($weeks);
    if($weeksi>1) {
     echo $weeksi.' Weeks ago';
    }else{
  echo "1 Week ago"; 
  }
  }
elseif(($age/86400)>1){
    $days = $age/86400 ;
    $daysi =  round($days);
       if($daysi>1) {
     echo $daysi.' Days ago';
    }else{
  echo"1 day ago"; 
  }
  }
elseif(($age/3600)>1){
    $hrs = $age/3600 ;
    $hrsi =  round($hrs);
       if($hrsi>1) {
     echo $hrsi.' Hours ago';
    }else{
  echo" 1 hour ago"; 
  }
  }
elseif(($age/60)>1){
    $mins = $age/60;
    $minsi =  round($mins);
       if($minsi>1) {
     echo $minsi.' Minutes ago';
    }else{
  echo'<span style="color:green;font-weight:bold;">1 Minute ago</span>'; 
  }
  }
else{
    echo "<span style='color:green;font-weight:bold;'>Just Now</span>";
  }
  
              }           
                         ?>      
                        
   



