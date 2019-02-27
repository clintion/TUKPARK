<?php
session_save_path('sessions');
ob_start();
session_start();
ob_clean();
ob_end_clean();		
	include('config/config.php');
	include('include/function.php');
	Connect_Database();
	$sqlcf = 'select Variable, Value from site_settings where IsRead = 0';
	$qrycf = mysql_query($sqlcf);
	if(!$qrycf)
		die('Can not load config data !');
	elseif(mysql_num_rows($qrycf)>0){
		while($rowcf = mysql_fetch_array($qrycf))
			eval("$\$rowcf['Variable'] = \"$rowcf[Value]\";");
		}
	else die('Can not find setting table !');
	Close_Connect();
	if(!isset($_SESSION['lang'])){$_SESSION['lang']="vi";}	
	if($_SESSION['lang']=='en') require('lang/en.inc');
	else require('lang/vi.inc');
	if(!isset($_SESSION['URL'])){$_SESSION['URL']="?";}	
	else $_SESSION['URL']=curPageURL();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="abstract" content="House estate information">
<meta name="classification" content="Real estate ">
<meta name="area" content="Houses and real estate">
<meta name="placename" content="">
<meta name="robots" content="nofollow" />
<meta name="author" content="<?php echo $sitename;?>">
<meta name="copyright" content="<?php echo '&copy; '.date('Y').' '.$sitename;?>">
<meta name="owner" content="">
<meta name='page-topic' content=''><meta name='title' content='Leading agents of buying, selling and renting houses' />
<meta name='keywords' content='House estate, buying,selling and renting real estates' />
<meta name='description' content='The most popular website about real estate in Kenya which provides information about buying and selling house estate, renting house estate, offices, luxury apartments and apartments. Latest news about house estate' />
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
       <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
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
         <link href="css/mainStyle.css" type="text/css" rel="stylesheet" />
         
         <style>
.wow {
    visibility: hidden;
}
</style>
</head>



<body>
	

        
        
        
        

             
		<div id="main-container"  >
            <div id="container-inner" style="min-height:455px;">
                <div id="inner-page-content" style="width:100%; background-color: red!important">
                
                

					<?php
						
						if(isset($_GET['page'])){							
							if($_GET['page']=='home')include('include/mainContent.php');							
							else {
								if (!file_exists('include/'.$_GET['page'].'.php')){
									echo "<script>alert('File is not exits');</script>";								
								}	
								
								include('include/'.$_GET['page'].'.php');
							}
						}
						else include('include/mainContent.php');
						
						
											
					?>
                </div>
            </div>
		</div>             
       
                 <?php include('include/footer.php'); ?>
                 
             
            
	</div>

    <script type="text/javascript" src="js/mdb.min.js"></script>

    <script>
                 // SideNav Button Initialization
$(".button-collapse").sideNav(); 
// SideNav Scrollbar Initialization
var sideNavScrollbar = document.querySelector('.custom-scrollbar');
Ps.initialize(sideNavScrollbar);
                   </script>

<button id="cmdCamera" data-win-control="WinJS.UI.AppBarCommand" data-win-options="{id:'cmdCamera',label:'user photo',icon:'camera',section:'global',tooltip:'change user photo'}">
    
  </button>
                   
</body>
</html>