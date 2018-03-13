<?php
session_start();
require_once './library/configf.php';
require_once './library/functionsf.php';

$errorMessage = '&nbsp;';

if (isset($_POST['txtUserName'])) {
	$result = doLogin();
	
	if ($result != '') {
		$errorMessage = $result;
	}
}

?>
<html>
<head>
<title>MEDIPEDIA- Login</title>
<link href="include/medipedia.css" rel="stylesheet" type="text/css">

    
</head>
<body>
<br/>
<br/>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="1" class="graybox">
 <tr>
   
  <td><img src="medicine/medi.png" width="100%" height="100"></td>
 </tr>
 <tr> 
  <td valign="top"> <table width="100%" border="0" cellspacing="0" cellpadding="12">
    <tr><!--<td><image src="" width="500" height="600"/></td> -->
     <td class="contentArea"> <form method="post" name="frmLogin" id="frmLogin">
       <p>&nbsp;</p>
       <table width="200" height="100%" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#336699" class="entryTable">
        <tr id="entryTableHeader"> 
         <td>:: User Login ::</td>
        </tr>
        <tr> 
         <td> 
		 <div class="errorMessage" align="center"><?php echo $errorMessage; ?></div>

		  <table width="400" height="400" border="0" cellpadding="10" cellspacing="1" class="text">
           <tr align="center"> 
            <td colspan="3">&nbsp;</td>
           </tr>
           <tr class="text"> 
            <td width="100" align="right">User Name</td>
            <td width="30" align="center">:</td>
            <td><input name="txtUserName" type="text"  required="required" class="box" id="txtUserName" width="16" size="30" maxlength="100"></td>
           </tr>
           <tr>
             <td align="right">Password</td>
             <td align="center">:</td>
             <td><input name="txtPassword" type="password" required="required" class="box" height="30" id="txtPassword" size="30" maxlength="100"></td>
           </tr>
           <tr>
             <td colspan="5">&nbsp;</td>
             <td>&nbsp;</td>
           </tr>
           <tr>
             <td colspan="2">&nbsp;</td>
             <td><div align="center"><h3>For New User &nbsp;<a href="register.php">Register Here</a></h3> </div></td></br>
         </tr><tr>
             <td colspan="2">&nbsp;</td><td><div align="right"><h3>&amp For Forgot Password &nbsp;<a href="forget-passwordf.php">Forget Password</a></h3> </div></td>
             </tr>
           <tr> 
            <td colspan="2">&nbsp;</td>
            <td><input name="btnLogin" type="submit" id="btnLogin" value=" Login Now " style="font-size:14px;color:#0066FF;padding:20px 30px;"></td>
           </tr>
          </table></td>
        </tr>
       </table>
       <p>&nbsp;</p>
      </form></td>
    </tr>
   </table></td>
 </tr>
</table>
</body>
</html>