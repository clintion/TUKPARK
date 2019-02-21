<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 0); 
include('config/config.php');
include('include/function.php');
require('lang/en.inc');
if(!isset($_SESSION['URL'])){$_SESSION['URL']="?";}	
else $_SESSION['URL']=curPageURL();
	Connect_Database();
	Close_Connect();
$pageURL = 'http';
if ($_SERVER["HTTPS"] == "on")
	$pageURL .= "s";
$pageURL .= "://";
if ($_SERVER["SERVER_PORT"] != "80")
	$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"];
else
	$pageURL .= $_SERVER["SERVER_NAME"];
if(is_dir("css"))
	$base_url = $pageURL.dirname($_SERVER["SCRIPT_NAME"])."/";
else
	$base_url = $pageURL.dirname(dirname($_SERVER["SCRIPT_NAME"]))."/";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="abstract" content="House estate information">
<meta name="classification" content="Real estate">
<meta name="area" content="Houses and real estate">
<meta name="placename" content="Kenya">
<meta name="robots" content="nofollow" />
<meta name="author" content="<?php echo $sitename;?>">
<meta name="copyright" content="©2018 <?php echo $sitename;?>">
<meta name="owner" content="<?php echo $sitename;?>">
<meta name='page-topic' content=''><meta name='title' content='Leading agents of buying, selling and renting houses  - <?php echo $sitename;?>' />
<meta name='keywords' content='House estate, buying, selling and renting real estates' />
<meta name='description' content='The most popular website about real estate which provides information about buying and selling house estate, renting house estate, offices, luxury apartments and apartments. Latest news about house estate' />
 
<link href="designs/clogo.png" rel="shortcut icon" type="image/x-icon" />  
<script language="javascript" src="js/jquery-1.5.1.js"></script>
<script language="javascript" src="js/mainJs.js"></script>  
<!-- Dùng trong google-analytics-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34797572-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" charset="utf-8"/>
       <link rel="stylesheet" href="css/nivo-style.css" type="text/css" media="screen" charset="utf-8"/>
       <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
            <script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider({
                    effect: 'random',
                    slices:8,
                    animSpeed:900, //Slide transition speed
                    pauseTime:3000,
                    startSlide:0, //Set starting Slide (0 index)
                    directionNav:true, //Next & Prev
                });
            });
        </script>
        <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="v2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="v2/css/mdb.min.css" rel="stylesheet">
    
         <link href="css/mainStyle.css" type="text/css" rel="stylesheet" />
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">   
     <link href="css/stylem.css" type="text/css" rel="stylesheet" /> 
      <link href="css/style_.css" type="text/css" rel="stylesheet" /> 
     <link href="css/style.css" type="text/css" rel="stylesheet" /> 
    
  
    <!-- Your custom styles (optional) --> 
     
       <script src="js/pl.js"></script>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
    <link href="css/mainStyle.css" type="text/css" rel="stylesheet" />
  
  <style>

.dm-menu a li:hover{background-color:#125e9a;color:#FFF;}

.dm-menu a li{float:left;height:26px;padding-top:3px;padding-bottom:3px;min-width:200px;font-weight:bold; margin-left:10px;background-color:#4FB3FF; color:black;}
	


.quick-access1 ul li a{color:#125e9a;}
.quick-access1 ul li a:hover{text-decoration:underline}

.dm-menu  a .clscurrent1{background-color:#125e9a;color:#FFF;}


ul.headerright li{list-style-type:none; float:right; }
ul.headerright li.posthouse{width:auto; padding:2px 10px 0px 4px;  background:url(./img/nav-divider.png) no-repeat right 0px;}
ul.headerright li.register{width:auto; padding:2px 10px 0px 4px; background:url(./img/nav-divider.png) no-repeat right 0px;}
ul.headerright li.login{width:auto; padding:2px 10px 0px 4px; background:url(./img/nav-divider.png) no-repeat right 0px;}
ul.headerright li.logout{width:auto; padding:2px 10px 0px 4px;  background:url(./img/nav-divider.png) no-repeat right 0px;}
ul.headerright li.language{width:auto; padding:2px 0px 0px 4px; }
ul.headerright li.welcome{width:auto; padding:2px 0px 0px 4px; }
.nav li{
color: white !important;
}
.login,
.logout,
.welcome{
color: white !important;
}

.form-elegant .font-small {
  font-size: 0.8rem; }

.form-elegant .z-depth-1a {
  -webkit-box-shadow: 0 2px 5px 0 rgba(55, 161, 255, 0.26), 0 4px 12px 0 rgba(121, 155, 254, 0.25);
  box-shadow: 0 2px 5px 0 rgba(55, 161, 255, 0.26), 0 4px 12px 0 rgba(121, 155, 254, 0.25); }

.form-elegant .z-depth-1-half,
.form-elegant .btn:hover {
  -webkit-box-shadow: 0 5px 11px 0 rgba(85, 182, 255, 0.28), 0 4px 15px 0 rgba(36, 133, 255, 0.15);
  box-shadow: 0 5px 11px 0 rgba(85, 182, 255, 0.28), 0 4px 15px 0 rgba(36, 133, 255, 0.15); }
  
  </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

   
    <style>

.dm-menu a li:hover{background-color:#125e9a;color:#FFF;}

.dm-menu a li{float:left;height:26px;padding-top:3px;padding-bottom:3px;min-width:200px;font-weight:bold; margin-left:10px;background-color:#4FB3FF; color:black;}
	


.quick-access1 ul li a{color:#125e9a;}
.quick-access1 ul li a:hover{text-decoration:underline}

.dm-menu  a .clscurrent1{background-color:#125e9a;color:#FFF;}


ul.headerright li{list-style-type:none; float:right; }
ul.headerright li.posthouse{width:auto; padding:2px 10px 0px 4px;  background:url(./img/nav-divider.png) no-repeat right 0px;}
ul.headerright li.register{width:auto; padding:2px 10px 0px 4px; background:url(./img/nav-divider.png) no-repeat right 0px;}
ul.headerright li.login{width:auto; padding:2px 10px 0px 4px; background:url(./img/nav-divider.png) no-repeat right 0px;}
ul.headerright li.logout{width:auto; padding:2px 10px 0px 4px;  background:url(./img/nav-divider.png) no-repeat right 0px;}
ul.headerright li.language{width:auto; padding:2px 0px 0px 4px; }
ul.headerright li.welcome{width:auto; padding:2px 0px 0px 4px; }
.nav li{
color: white !important;
}
.login,
.logout,
.welcome{
color: white !important;
}

.form-elegant .font-small {
  font-size: 0.8rem; }

.form-elegant .z-depth-1a {
  -webkit-box-shadow: 0 2px 5px 0 rgba(55, 161, 255, 0.26), 0 4px 12px 0 rgba(121, 155, 254, 0.25);
  box-shadow: 0 2px 5px 0 rgba(55, 161, 255, 0.26), 0 4px 12px 0 rgba(121, 155, 254, 0.25); }

.form-elegant .z-depth-1-half,
.form-elegant .btn:hover {
  -webkit-box-shadow: 0 5px 11px 0 rgba(85, 182, 255, 0.28), 0 4px 15px 0 rgba(36, 133, 255, 0.15);
  box-shadow: 0 5px 11px 0 rgba(85, 182, 255, 0.28), 0 4px 15px 0 rgba(36, 133, 255, 0.15); }

@media screen and (min-width: 786px) {
    #sersec{  
       
      margin-right: 10% !important;
    }
}

@media screen and (min-width: 786px) {
    #main-container{  
       
      margin-top: 0px !important;
    }
}
.sscc:hover{
   background-color:red !important;
}
</style>
</script>
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

    <style rel="stylesheet">
     
        @media (min-width: 1025px) {
            .view video {
                height: 100vh;
                width: 100%;
                object-fit: cover;
            }
        }

        .navbar {
            background-color: transparent;
        }

        .scrolling-navbar {
            -webkit-transition: background .5s ease-in-out, padding .5s ease-in-out;
            -moz-transition: background .5s ease-in-out, padding .5s ease-in-out;
            transition: background .5s ease-in-out, padding .5s ease-in-out;
        }

        .top-nav-collapse {
            background-color: #1C2331;
        }

        footer.page-footer {
        background-color: 	#782F40 !important;  
            margin-top: 0;
        }

        @media only screen and (max-width: 768px) {
            .navbar {
                background-color: #1C2331;
            }
        }

        /* Carousel*/
        .flex-center {
            color: #fff;
        }

        .carousel-caption {
            height: 100%;
            padding-top: 7rem;
        }
        
/* Navigation*/

.navbar {
background-color: 	#782F40 !important;  
}
.side-nav{
background-color: 	#782F40 !important;  
}


@media only screen and (max-width: 768px) {
    .navbar {
        background-color: #2E2E2E;
    }
}
/*Intro*/


}  
.topimg2{
 height:40px;
  width:150px;
  margin-left: 10px !important;
  margin-top: 2px !important;
}





.border-3 {
    border-width: 6px !important;
}


                
   </style>
    
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">    
  
    <!-- Your custom styles (optional) --> 
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

<script src="js/pl.js"></script>
<script language="javascript" src="js/mainJs.js"></script>
 <script type="text/javascript"   src="js/mainJs.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/processing.js/1.4.1/processing-api.min.js"></script>
 <script src=" http://code.jquery.com/jquery.min.js " type="text/javascript"></script> 

                                                                                 
    


</head>


<header> 
<?php include('include/header.php'); ?>
</header>

<body style="background-color:#EFF3F4;">      
       <!-- Navbar -->
            
            <div  class="pt-2" style="position:relative;top:9% !important;">
             
		<main id="main-container" class="text-center pt-5 pt-2" >
            <div id="container-inner" class="" style="min-height:495px;">
                <div id="inner-page-content" style="width:100%; background-color: #782F40!important">
                
                                                
					<?php
						
						if(isset($_GET['page'])){	

            $page = $_GET['page'];

							if($page =='home'){
                include('include/mainContent.php');
              }else {


								if (!file_exists('include/'.$page.'.php')){
									echo "<script>alert('page not found');</script>";							
								} else { 
                  include('include/'.$page.'.php');
                  
							}



						}		
            }else{
            include('include/home.php');


            }			?>     
          
                              
                </div>
            </div> 
            </main> 
		</div>  
    
                 <?php include('include/footer.php'); ?>
         
        
        
        
        
    <!-- SCRIPTS -->

    <!-- JQuery -->          <script type="text/javascript"   src="js/mainJs.js"></script>
    <script type="text/javascript" src="v2/js/jquery-3.2.1.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="v2/js/mdb.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->     
    
    
    
    
                        
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>    
    
    
    
    
    
    
    
                                    
     <script type="text/javascript">
    // SideNav Button Initialization
$(".button-collapse").sideNav();
// SideNav Scrollbar Initialization
var sideNavScrollbar = document.querySelector('.custom-scrollbar');
Ps.initialize(sideNavScrollbar); 

    </script> 
     <script type="text/javascript"   src="js/mainJs.js"></script>
      
                        
 <script>

$(function () {
    $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");  
});
                
</script> 


<script>
 $(document).ready(function() {
    $(".mdb-select").material_select();
  });
</script> 
  

                   <!-- side nav   -->    
<script>
 $('#sidenavactivate').sideNav({
edge: 'left', // Choose the horizontal origin
closeOnClick: true // Closes side-nav on &lt;a&gt; clicks, useful for Angular/Meteor
});
</script>
  
   
</body>
</html>