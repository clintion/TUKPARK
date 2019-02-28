

<?php 


if (isset($_POST['submit'])) {
    $plateno =$_POST['plateno'];
    $bkslot =$_POST['bsid'];
    $bkarea = "REVERSE ENG PARK";
    $timein =$_POST['timein'];
    $timeout =$_POST['timeout'];


    $con = new mysqli('localhost','root','','eh');
    if($con->connect_error){ 
        die('connection_failed - '.$con->connect_error);
    }else {
        $con->query("INSERT INTO `eh`.`userbook` (`plateno`, `bkarea`, `bkslot`,`timein`, `timeout`, `createdat`, `updatedat`) VALUES ('$plateno','$bkarea','$bkslot','$timein', '$timeout', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)");
    }
    ?>



    <?php


}
?>





<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<a href="#" id="gotop"><img src='./img/gotop.png' style='border:0px;'/></a>
<title>TuPark car parking Reverse Eng. area Parking</title>
<style>
.wow {
    visibility: hidden;
}
</style>
                  
                               
                            
                            
                    <div style="postion:absolute;margin:0  !important;background-color:white !important;" >      
                                <!-- Template styles -->
    <style rel="stylesheet">
        /* TEMPLATE STYLES */

        /* Necessary for full page carousel*/
        body {
    /** font-family: "Agency FB regular" !important;*/
}


      
        @media (min-width: 1025px) {
            .view video {
                height: 100vh;
                width: 100%;
                object-fit: cover;
            }
        }

      
        .scrolling-navbar {
            -webkit-transition: background .5s ease-in-out, padding .5s ease-in-out;
            -moz-transition: background .5s ease-in-out, padding .5s ease-in-out;
            transition: background .5s ease-in-out, padding .5s ease-in-out;
        }

        .top-nav-collapse {
            background-color: #1C2331;
        }

  
        /* Carousel*/
        .flex-center {
            color: #fff;
        }

        .carousel-caption {
            height: 100%;
            padding-top: 7rem;
        }

        .navbar .btn-group .dropdown-menu a:hover {
            color: #000 !important;
        }

        .navbar .btn-group .dropdown-menu a:active {
            color: #fff !important;
        }

        .pagination.pg-dark .active .page-link {
            background-color: #4FB3FF;
        }
        
        

.side-nav{
background-color:    #782F40!important;  
}

.top-nav-collapse {
    background-color: #2E2E2E;
}
.flip22c  .btn{
background-color:    #782F40!important; 
color: #fff !important;
 font-weight:bold;
}
.flip22c  a:hover{
background-color: #fff !important; 
color: #782F40!important;
font-weight:bold;
width: 100% !important; 
border:2px solid #4FB3FF; 
}

.flip22c  .btn:hover{
background-color: #fff !important; 
color: #782F40!important;
font-weight:bold;
}


.intro-bg1{
    background: url("1.jpg") no-repeat;
}
.intro-bg2{
    background: url("2.jpg") no-repeat;
}
.intro-bg3{
    background: url("3.jpg") no-repeat;
}

}
.topimg{
 height:20px !important;
  width:230px !important;
  margin-left: 10px !important;
}
.topimg2{
 height:40px;
  width:150px;
  margin-left: 10px !important;
  margin-top: 2px !important;
}


#logo{
  position:relative;
  height:150px;
  width:150px;
  top:20px;
  
 margin-left: 22px;
    margin-right: auto; 
    text-align: center;
    display: table-cell;
    vertical-align: middle;


      
} 
.btn .fa.fa-sm {
    font-size: 1rem;
    margin-top: -5px;
}      
.container3 { 
  width:100%;
 
  position: relative;   
}

#options {
    margin: 20px auto;
    width: 200px;
    text-align: center;
}

#card {
  width: 100%;
  height: 100%;
  position: absolute;
  transform-style: preserve-3d;
  transition: transform 1s;
}

#card figure {
 margin: 0;
  display: block;
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

#card .front {

}
#card .back {
  transform: rotateY( 180deg );    
  
}

.flip22{
 background-color: rgba(56,33,77,1) !important;
 }

#card.flipped {
  transform: rotateY( 180deg );
}
   
   
  
#cardb {
  width: 100%;
  height: 100%;
  position: absolute;
  transform-style: preserve-3d;
  transition: transform 1s;
}

#cardb figure {
 margin: 0;
  display: block;
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

#cardb .front {

}
#cardb .back {
  transform: rotateY( 180deg );    
  
}

.flip22b{
 background-color:#4095D6;
 margin:10px;
 }

#cardb.flipped {
  transform: rotateY( 180deg );
}


#cardc {
  width: 100%;
  height: 100%;
  position: absolute;
  transform-style: preserve-3d;
  transition: transform 1s;
}

#cardc figure {
 margin: 0;
  display: block;
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

#cardc .front {

}
#cardc .back {
  transform: rotateY( 180deg );    
  
}



#cardc.flipped {
  transform: rotateY( 180deg );
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

.form-elegant .modal-header {
    border-bottom: none; 
    color: white !important;
     background-color: #782F40!important;}
.close{
 color: #fff!important;
}

.modal-dialog .form-elegant .btn .fa {
    color: rgba(56,33,77,1) !important; 
    }

.form-elegant .modal-body, .form-elegant .modal-footer {
    font-weight: 400; 
   
    }      
    
.scrollbar-juicy-peach::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-color: #F5F5F5;
  border-radius: 10px; }

.scrollbar-juicy-peach::-webkit-scrollbar {
  width: 12px;
  background-color: #F5F5F5; }

.scrollbar-juicy-peach::-webkit-scrollbar-thumb {
  border-radius: 10px;
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-image: -webkit-gradient(linear, left top, right top, from(#ffecd2), to(#fcb69f));
  background-image: -webkit-linear-gradient(left, #ffecd2 0%, #fcb69f 100%);
  background-image: linear-gradient(to right, #ffecd2 0%, #fcb69f 100%); }

.scrollbar-young-passion::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-color: #F5F5F5;
  border-radius: 10px; }

.scrollbar-young-passion::-webkit-scrollbar {
  width: 12px;
  background-color: #F5F5F5; }

.scrollbar-young-passion::-webkit-scrollbar-thumb {
  border-radius: 10px;
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-image: -webkit-gradient(linear, left top, right top, from(#ff8177), color-stop(0%, #ff867a), color-stop(21%, #ff8c7f), color-stop(52%, #f99185), color-stop(78%, #cf556c), to(#b12a5b));
  background-image: -webkit-linear-gradient(left, #ff8177 0%, #ff867a 0%, #ff8c7f 21%, #f99185 52%, #cf556c 78%, #b12a5b 100%);
  background-image: linear-gradient(to right, #ff8177 0%, #ff867a 0%, #ff8c7f 21%, #f99185 52%, #cf556c 78%, #b12a5b 100%); }

.scrollbar-lady-lips::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-color: #F5F5F5;
  border-radius: 10px; }

.scrollbar-lady-lips::-webkit-scrollbar {
  width: 12px;
  background-color: #F5F5F5; }

.scrollbar-lady-lips::-webkit-scrollbar-thumb {
  border-radius: 10px;
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-image: -webkit-gradient(linear, left bottom, left top, from(#ff9a9e), color-stop(99%, #fecfef), to(#fecfef));
  background-image: -webkit-linear-gradient(bottom, #ff9a9e 0%, #fecfef 99%, #fecfef 100%);
  background-image: linear-gradient(to top, #ff9a9e 0%, #fecfef 99%, #fecfef 100%); }

.scrollbar-sunny-morning::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-color: #F5F5F5;
  border-radius: 10px; }

.scrollbar-sunny-morning::-webkit-scrollbar {
  width: 12px;
  background-color: #F5F5F5; }

.scrollbar-sunny-morning::-webkit-scrollbar-thumb {
  border-radius: 10px;
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-image: -webkit-linear-gradient(330deg, #f6d365 0%, #fda085 100%);
  background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%); }

.scrollbar-rainy-ashville::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-color: #F5F5F5;
  border-radius: 10px; }

.scrollbar-rainy-ashville::-webkit-scrollbar {
  width: 12px;
  background-color: #F5F5F5; }

.scrollbar-rainy-ashville::-webkit-scrollbar-thumb {
  border-radius: 10px;
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-image: -webkit-gradient(linear, left bottom, left top, from(#fbc2eb), to(#a6c1ee));
  background-image: -webkit-linear-gradient(bottom, #fbc2eb 0%, #a6c1ee 100%);
  background-image: linear-gradient(to top, #fbc2eb 0%, #a6c1ee 100%); }

.scrollbar-frozen-dreams::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-color: #F5F5F5;
  border-radius: 10px; }

.scrollbar-frozen-dreams::-webkit-scrollbar {
  width: 12px;
  background-color: #F5F5F5; }

.scrollbar-frozen-dreams::-webkit-scrollbar-thumb {
  border-radius: 10px;
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-image: -webkit-gradient(linear, left bottom, left top, from(#fdcbf1), color-stop(1%, #fdcbf1), to(#e6dee9));
  background-image: -webkit-linear-gradient(bottom, #fdcbf1 0%, #fdcbf1 1%, #e6dee9 100%);
  background-image: linear-gradient(to top, #fdcbf1 0%, #fdcbf1 1%, #e6dee9 100%); }

.scrollbar-warm-flame::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-color: #F5F5F5;
  border-radius: 10px; }

.scrollbar-warm-flame::-webkit-scrollbar {
  width: 12px;
  background-color: #F5F5F5; }

.scrollbar-warm-flame::-webkit-scrollbar-thumb {
  border-radius: 10px;
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-image: -webkit-linear-gradient(45deg, #ff9a9e 0%, #fad0c4 99%, #fad0c4 100%);
  background-image: linear-gradient(45deg, #ff9a9e 0%, #fad0c4 99%, #fad0c4 100%); }

.scrollbar-night-fade::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-color: #F5F5F5;
  border-radius: 10px; }

.scrollbar-night-fade::-webkit-scrollbar {
  width: 12px;
  background-color: #F5F5F5; }

.scrollbar-night-fade::-webkit-scrollbar-thumb {
  border-radius: 10px;
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-image: -webkit-gradient(linear, left bottom, left top, from(#a18cd1), to(#fbc2eb));
  background-image: -webkit-linear-gradient(bottom, #a18cd1 0%, #fbc2eb 100%);
  background-image: linear-gradient(to top, #a18cd1 0%, #fbc2eb 100%); }

.scrollbar-spring-warmth::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-color: #F5F5F5;
  border-radius: 10px; }

.scrollbar-spring-warmth::-webkit-scrollbar {
  width: 12px;
  background-color: #F5F5F5; }

.scrollbar-spring-warmth::-webkit-scrollbar-thumb {
  border-radius: 10px;
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-image: -webkit-gradient(linear, left bottom, left top, from(#fad0c4), to(#ffd1ff));
  background-image: -webkit-linear-gradient(bottom, #fad0c4 0%, #ffd1ff 100%);
  background-image: linear-gradient(to top, #fad0c4 0%, #ffd1ff 100%); }

.scrollbar-winter-neva::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-color: #F5F5F5;
  border-radius: 10px; }

.scrollbar-winter-neva::-webkit-scrollbar {
  width: 12px;
  background-color: #F5F5F5; }

.scrollbar-winter-neva::-webkit-scrollbar-thumb {
  border-radius: 10px;
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-image: -webkit-linear-gradient(330deg, #a1c4fd 0%, #c2e9fb 100%);
  background-image: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%); }

.scrollbar-dusty-grass::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-color: #F5F5F5;
  border-radius: 10px; }

.scrollbar-dusty-grass::-webkit-scrollbar {
  width: 12px;
  background-color: #F5F5F5; }

.scrollbar-dusty-grass::-webkit-scrollbar-thumb {
  border-radius: 10px;
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-image: -webkit-linear-gradient(330deg, #d4fc79 0%, #96e6a1 100%);
  background-image: linear-gradient(120deg, #d4fc79 0%, #96e6a1 100%); }

.scrollbar-tempting-azure::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-color: #F5F5F5;
  border-radius: 10px; }

.scrollbar-tempting-azure::-webkit-scrollbar {
  width: 12px;
  background-color: #F5F5F5; }

.scrollbar-tempting-azure::-webkit-scrollbar-thumb {
  border-radius: 10px;
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-image: -webkit-linear-gradient(330deg, #84fab0 0%, #8fd3f4 100%);
  background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%); }

.scrollbar-heavy-rain::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-color: #F5F5F5;
  border-radius: 10px; }

.scrollbar-heavy-rain::-webkit-scrollbar {
  width: 12px;
  background-color: #F5F5F5; }

.scrollbar-heavy-rain::-webkit-scrollbar-thumb {
  border-radius: 10px;
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-image: -webkit-gradient(linear, left bottom, left top, from(#cfd9df), to(#e2ebf0));
  background-image: -webkit-linear-gradient(bottom, #cfd9df 0%, #e2ebf0 100%);
  background-image: linear-gradient(to top, #cfd9df 0%, #e2ebf0 100%); }

.scrollbar-amy-crisp::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-color: #F5F5F5;
  border-radius: 10px; }

.scrollbar-amy-crisp::-webkit-scrollbar {
  width: 12px;
  background-color: #F5F5F5; }

.scrollbar-amy-crisp::-webkit-scrollbar-thumb {
  border-radius: 10px;
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-image: -webkit-linear-gradient(330deg, #a6c0fe 0%, #f68084 100%);
  background-image: linear-gradient(120deg, #a6c0fe 0%, #f68084 100%); }

.scrollbar-mean-fruit::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-color: #F5F5F5;
  border-radius: 10px; }

.scrollbar-mean-fruit::-webkit-scrollbar {
  width: 12px;
  background-color: #F5F5F5; }

.scrollbar-mean-fruit::-webkit-scrollbar-thumb {
  border-radius: 10px;
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-image: -webkit-linear-gradient(330deg, #fccb90 0%, #d57eeb 100%);
  background-image: linear-gradient(120deg, #fccb90 0%, #d57eeb 100%); }

.scrollbar-deep-blue::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-color: #F5F5F5;
  border-radius: 10px; }

.scrollbar-deep-blue::-webkit-scrollbar {
  width: 12px;
  background-color: #F5F5F5; }

.scrollbar-deep-blue::-webkit-scrollbar-thumb {
  border-radius: 10px;
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-image: -webkit-linear-gradient(330deg, #e0c3fc 0%, #8ec5fc 100%);
  background-image: linear-gradient(120deg, #e0c3fc 0%, #8ec5fc 100%); }

.scrollbar-ripe-malinka::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-color: #F5F5F5;
  border-radius: 10px; }

.scrollbar-ripe-malinka::-webkit-scrollbar {
  width: 12px;
  background-color: #F5F5F5; }

.scrollbar-ripe-malinka::-webkit-scrollbar-thumb {
  border-radius: 10px;
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-image: -webkit-linear-gradient(330deg, #f093fb 0%, #f5576c 100%);
  background-image: linear-gradient(120deg, #f093fb 0%, #f5576c 100%); }

.scrollbar-cloudy-knoxville::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-color: #F5F5F5;
  border-radius: 10px; }

.scrollbar-cloudy-knoxville::-webkit-scrollbar {
  width: 12px;
  background-color: #F5F5F5; }

.scrollbar-cloudy-knoxville::-webkit-scrollbar-thumb {
  border-radius: 10px;
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-image: -webkit-linear-gradient(330deg, #fdfbfb 0%, #ebedee 100%);
  background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%); }

.scrollbar-morpheus-den::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-color: #F5F5F5;
  border-radius: 10px; }

.scrollbar-morpheus-den::-webkit-scrollbar {
  width: 12px;
  background-color: #F5F5F5; }

.scrollbar-morpheus-den::-webkit-scrollbar-thumb {
  border-radius: 10px;
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-image: -webkit-gradient(linear, left bottom, left top, from(#30cfd0), to(#330867));
  background-image: -webkit-linear-gradient(bottom, #30cfd0 0%, #330867 100%);
  background-image: linear-gradient(to top, #30cfd0 0%, #330867 100%); }

.scrollbar-rare-wind::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-color: #F5F5F5;
  border-radius: 10px; }

.scrollbar-rare-wind::-webkit-scrollbar {
  width: 12px;
  background-color: #F5F5F5; }

.scrollbar-rare-wind::-webkit-scrollbar-thumb {
  border-radius: 10px;
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-image: -webkit-gradient(linear, left bottom, left top, from(#a8edea), to(#fed6e3));
  background-image: -webkit-linear-gradient(bottom, #a8edea 0%, #fed6e3 100%);
  background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%); }

.scrollbar-near-moon::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-color: #F5F5F5;
  border-radius: 10px; }

.scrollbar-near-moon::-webkit-scrollbar {
  width: 12px;
  background-color: #F5F5F5; }

.scrollbar-near-moon::-webkit-scrollbar-thumb {
  border-radius: 10px;
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-image: -webkit-gradient(linear, left bottom, left top, from(#5ee7df), to(#b490ca));
  background-image: -webkit-linear-gradient(bottom, #5ee7df 0%, #b490ca 100%);
  background-image: linear-gradient(to top, #5ee7df 0%, #b490ca 100%); } 
  
  .dropdown-item:hover{
  background-color: #782F40!important;
  }
  
  .dropdown-menu{
   width:30px !important;
  }
  .dropdown-toggle{
  width:70px !important;
  text-align:right; 
  }     
  @media screen and (min-width: 576px) {
   .dropdown-toggle{
  width:105px !important;
  text-align:left; 
  }   
   
}      

video{
  opacity:0.2;
  
} 


#empimg{
position: fixed;
 top: 50%;
 left: 50%;
 transform: translate(-50%,-50%);
 min-width: 100%;
 min-height:100%;
 max-height:100%;
 max-width:100%;
 display:block;
 height:auto;
 opacity:1;
 background-size:cover;


}  

.ts 
{
        -vendor-animation-duration: 3s !important;
        -vendor-animation-delay: 4s !important;
        -vendor-animation-iteration-count: infinite;
        
        -webkit-animation-duration: 1s !important;
        -webkit-animation-delay: 1s !important;
        
        -moz-animation-duration: 1s !important;
        -moz-animation-delay: 1s !important;
        } 

        
    

    
svg {
  z-index: 100;
  margin: 0 auto;
  text-align: center;
  width: 100%;
  padding-top: 40px;
}

polyline {
  stroke-dasharray: 1000;
  stroke-dashoffset: 1000;
  animation: dash 5s ease-in forwards;
  animation-iteration-count: 1;
  animation-direction: alternate;
}

@keyframes dash{
  to {
    stroke-dashoffset: 0;
  }
}


.name {
  font-size: .8rem;
  font-weight: light;
} 

.bs{
height:50px !important;
background-color: #782F40;
border:4px solid #FFDE59;
color:white !important;
font-weight:bold;
padding-top:10px;
}   

             
   </style>

   
      <div class="container">

      <h5 class="h5 pt-5 pt-2">
                <strong id="areaname">REVERSE ENG PARK</strong>
     </h5>

   <div class="row py-2 px-2 pt-1">
     <div class="col-4 bs center font-weight-bold" id="1">
       SLOT 1
     </div>
     <div class="col-4 bs center font-weight-bold" id="2">
       SLOT 2
     </div>

     <!-- Force next columns to break to new line at md breakpoint and up -->
    

     <div class="col-4 col-sm-4 bs center font-weight-bold" id="3">
      SLOT 3
     </div>

     <div class="col-12 bs center font-weight-bold" style="background-color:black !important;">
      
     </div>

      <div class="col-4 bs center font-weight-bold" id="4">
       SLOT 4
     </div>
     <div class="col-4 bs center font-weight-bold" id="5">
       SLOT 5
     </div>

     <!-- Force next columns to break to new line at md breakpoint and up -->
    

     <div class="col-4 col-sm-4 bs center font-weight-bold" id="6">
      SLOT 6
     </div>
   </div>
</div>

<!--Modal: Login with Avatar Form-->
<div class="modal fade" id="bookmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Header-->
      <div class="modal-header">
        <img src="img/slot2.jpg" alt="avatar" class="rounded-circle img-responsive border border-3 border-secondary" style="height:100px !important;width:100px !important;border-color:#FFDE59 !important;border-width:3px !important;">
      </div>
      <!--Body-->
      <div class="modal-body text-center mb-1">

        <h5 class="mt-1 mb-2">BOOK <span id="bsname"></span></h5>

        <form action="" method="post" id="bkform" name="bkform" class="needs-validation">

        <input type="hidden" id="bsid" name="bsid">

        <div class="md-form">
                <input type="text" id="materialRegisterFormPhone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" required name="plateno">
                <label for="materialRegisterFormPhone">CAR NO. PLATE</label>
            </div>
         <div class="md-form">
            TIME IN
         <input placeholder="Time Out" type="time" id="input_starttime" class="input_starttime" required name="timein">
         <label for="timein"></label>
         </div>
         <div class="md-form">
            TIME OUT
         <input placeholder="Time Out" type="time" id="input_starttime" class="input_starttime" required name="timeout">
         <label for="timeout"></label>
         </div>

        <button class="btn " type="submit" style="background-color: #782F40 !important;" class="fa fa-sign-in ml-1" name="submit">SUBMIT</button>
    </form>
      </div>

    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: Login with Avatar Form-->



<hr />
<br />


       <!--Projects section v.2-->
     
          <div class="col-md-12">
   

        
        <!--/Projects section v.2-->
        <hr>

        <!--Pagination dark-->
        <!--/Pagination dark-->

    </div>
    <!--/.Main layout-->
    
    </div>
    <!-- </div>
    </div>
    </div> -->
    
    
    
    
                               
<!--  <style>

        .clsa{clear:left;color:#03C;font-weight:bold;}
        .clsa:hover{text-decoration:underline;}     
        a{color:#03C;}
        a:hover{text-decoration:underline;}
</style> --> 


<!-- <script>
$('#input_starttime').pickatime({
    // 12 or 24 hour
    twelvehour: true,
});
</script> -->

<script>
 
 new WOW().init();

</script>

