<?php
ob_start();
session_start();
ob_clean();
ob_end_clean();	
include('../config/config.php');
include('include/function.php');
require('../lang/en.inc');
Connect_Database();
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['smsignin'])){
	if(empty($_POST['email']))
		$errore = 'Please enter admin email address';
	elseif(empty($_POST['codeimg']) || trim($_POST['codeimg'])=='')
		$errorp = 'Please enter verification code';
	elseif(trim($_POST['codeimg'])!=$_SESSION['encoded_captcha'])
		$errorp = 'Verification code not match';
	else{
		$sql = "select id, password from users where email = '".mysql_real_escape_string(trim($_POST['email']))."' and role_id = 1";
		$qry = mysql_query($sql);
		if($qry && mysql_num_rows($qry)>0){
			$row=mysql_fetch_array($qry);
			$str = '';
			$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
			$size = strlen( $chars );
			for( $i = 0; $i < 8; $i++ ) {
				$str .= $chars[ rand( 0, $size - 1 ) ];
				}
			$re = "update users set password = '".md5($str)."' where email = '".$_POST['email']."' and role_id = 1";
			$qryre = mysql_query($re);
			if(!$qryre)
				$error = 'Error occurred check member, please try again !';
			else{
				$mess = 'Dear <i>'.$_POST['email'].',</i><br>';
				$mess = 'You asked for password recovery.<br><br>';
				$mess .= 'Your password: '.$str.'<br><br>';
				$mess .= 'To signin website, <a href="./">click here.</a><br>';
				if(!mail($_POST['email'], '=?UTF-8?B?'.base64_encode('Recovery password').'?=', $mess, "Content-Type: text/html; charset=utf-8\r\n"."From: Web master"))
					$error = 'Can not send email !';
				else $succ = "An email containing your password has been sent to <b>".$_POST['email']."</b>";
				}
			}
		else $error = 'Email incorrect';
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Recovery password for admin</title>
</head>
<body>
	<div style="width:500px; margin:0px auto; border: 1px #CCC solid; margin-top:15%">
    	<form action="" method="post">
        <h3 style="color:#FFFFFF; background:#273c67; margin:0px 0px 20px 0px; padding:5px 0px 5px 10px">Admin forgot password</h3>
        <?php
		if(isset($success) && !empty($success))
			echo $success;
		else{
			if(isset($error) && !empty($error))
				echo '<br><font color="#FF0000" style="margin-left:31%"><small>'.$error.'</small></font>';
			?>
			<table width="100%" cellpadding="3" cellspacing="3" border="0">
				<tr>
					<td width="30%" align="right" valign="top">Admin email :</td>
					<td width="70%" align="left"><input type="text" style="width:250px;" name="email" value="<?php echo isset($_POST['email'])?$_POST['email']:'';?>"/>
						<?php
						if(isset($errore) && !empty($errore))
							echo '<br><font color="#FF0000"><small>'.$errore.'</small></font>';
						?>
					</td>
				</tr>
				<tr>
					<td width="30%" align="right" valign="top">Verify :</td>
					<td width="70%" align="left">
						<img src="include/capcha.php" border="0"/><br />
						<input type="text" style="margin-top:5px" name="codeimg" size="10" maxlength="6" />
						<?php
						if(isset($errorp) && !empty($errorp))
							echo '<br><font color="#FF0000"><small>'.$errorp.'</small></font>';
						?>
					</td>
				</tr>
				<tr>
					<td width="30%" align="right">&nbsp;</td>
					<td width="70%" align="left"><input type="submit" value="Request" name="smsignin" /></td>
				</tr>
				<tr>
					<td width="30%" align="right">&nbsp;</td>
					<td width="70%" align="left"><i><a href="./">Or sign-in here !</a><br />&nbsp;</i></td>
				</tr>
			</table>
        	<?php }?>
        </form>
    </div>
</body>
</html>
<?php
mysql_close();