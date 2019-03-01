<?php
	function Connect_Database()
		{		
		mysql_connect ($GLOBALS["DBhostname"],$GLOBALS["DBusername"],$GLOBALS["DBpassword"]);
		mysql_select_db($GLOBALS["DBdatabase"]);
		mysql_query("set names 'utf8'");
		
		}
	function Close_Connect()
		{
		mysql_close();
		}
	function QuerySQL($sql){
		$query = mysql_query($sql);
		if($query){
			return $query;
			}
		else{
			return false;
			}
		}
function is_valid_email($email)
    {
	$regexp = "/^[A-z0-9_]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/";
    if(preg_match($regexp, $email) > 0)
    	return true;
    else
    	return false;
    }

function curPageURL() {
 $pageURL = 'http';
 if (@$_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
function catchu($value, $length)
{   
    if($value!=''){
    if(is_array($value)) list($string, $match_to) = $value;
    else { $string = $value; $match_to = $value{0}; }
 
    $match_start = stristr($string, $match_to);
    $match_compute = strlen($string) - strlen($match_start);
 
    if (strlen($string) > $length)
    {
        if ($match_compute < ($length - strlen($match_to)))
        {
            $pre_string = substr($string, 0, $length);
            $pos_end = strrpos($pre_string, " ");
            if($pos_end === false) $string = $pre_string."...";
            else $string = substr($pre_string, 0, $pos_end)."...";
        }
        else if ($match_compute > (strlen($string) - ($length - strlen($match_to))))
        {
            $pre_string = substr($string, (strlen($string) - ($length - strlen($match_to))));
            $pos_start = strpos($pre_string, " ");
            $string = "...".substr($pre_string, $pos_start);
            if($pos_start === false) $string = "...".$pre_string;
            else $string = "...".substr($pre_string, $pos_start);
        }
        else
        {       
            $pre_string = substr($string, ($match_compute - round(($length / 3))), $length);
            $pos_start = strpos($pre_string, " "); $pos_end = strrpos($pre_string, " ");
            $string = "...".substr($pre_string, $pos_start, $pos_end)."...";
            if($pos_start === false && $pos_end === false) $string = "...".$pre_string."...";
            else $string = "...".substr($pre_string, $pos_start, $pos_end)."...";
        }
 
        $match_start = stristr($string, $match_to);
        $match_compute = strlen($string) - strlen($match_start);
    }
     
    return $string;
    }else{
        return $string ='';
    } 
}
function GetURL()
	{
	 $pageURL = 'http';
 if (@$_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"];
 }
 return $pageURL;
	}





if (isset($_POST['submit'])) {
    $fname =$_POST['fname'];
    $lastname =$_POST['lastname'];
    $noplate =$_POST['noplate'];
    $license =$_POST['license'];
    $phone =$_POST['phone'];
    $email =$_POST['email'];
    $password =$_POST['password'];



    $con = new mysqli('localhost','root','','eh');
    if($con->connect_error){ 
        die('connection_failed - '.$con->connect_error);
    }else {
        $con->query("INSERT INTO `eh`.`tuparkusers` (`fname`, `lastname`, `noplate`, `license`, `phone`, `email`, `password`, `tuparkid`, `createdat`, `updatedat`) VALUES ('$fname', '$lastname', '$noplate', '$license', '$phone', '$email', '$password', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)");
    }



    # code...
}
?>