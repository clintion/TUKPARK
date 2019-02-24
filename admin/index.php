ADMIN 

<body style="background-image: url('/TUKPARK/img/slot2.jpg') ">

<div style="width:500px; margin:0px auto; border: 1px #CCC solid; margin-top:15%">
            <form action="?index.php" method="post" target="_top" style="margin-bottom:0px;">
            <h3 style="color:#FFFFFF; background:#782F40; margin:0px 0px 20px 0px; padding:5px 0px 5px 10px"> TUPARK ADMIN LOGIN</h3>
            <?php
			if(isset($mess) && !empty($mess))
				echo '<font color="#FF0000" style="margin-left:31%"><font color="#FF0000">'.$mess.'</font></font><br>';
			?>
            <table width="100%" cellpadding="5" cellspacing="5" border="0">
            	<tr>
                	<td width="30%" align="right" valign="top">Email :</td>
                    <td width="70%" align="left"><input type="Email" required style="width:250px;" maxlength="255" name="txtemail" value="<?php echo isset($_POST['txtemail'])?$_POST['txtemail']:'';?>"/>
                    <?php
					if(isset($err_el) && !empty($err_el))
						echo '<br><font color="#FF0000"><small><i>'.$err_el.'</i></small></font>';
					?>
                    </td>
                </tr>
                <tr>
                	<td width="30%" align="right" valign="top">Password :</td>
                    <td width="70%" align="left"><input type="password" style="width:250px;" maxlength="32" name="txtpassword" required />
                    <!-- <?php
					/*if(isset($err_pl) && !empty($err_pl))
						echo '<br><font color="#FF0000"><small><i>'.$err_pl.'</i></small></font>';*/
					?>
                    <p style="margin:0px; padding-top:5px; padding-bottom:30px;"><a href="forgot.php"><i>Forgot password ?</i></a></p> -->
                    </td>
                </tr>
            </table>
            <br>
            <p style="border-top:1px solid #d6d8e5; background:#782F40; margin:0px; padding:5px 10px 5px 0px; text-align:right"><input type="submit" name="sblogin" value="SIGN-IN" class="massterbutton"/></p>
          	</form>
    </div>
</body>