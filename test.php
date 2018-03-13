<?php session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Medipedia</title>
 <!-- Insert to your webpage before the </head> -->
    <script src="sliderengine/jquery.js"></script>
    <script src="sliderengine/amazingslider.js"></script>
    <link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-1.css">
	<link href="include/admin.css" rel="stylesheet" type="text/css">
    <script src="sliderengine/initslider-1.js"></script>
    <!-- End of head section HTML codes -->

<style>
ul#menu {
    padding: 0;
}

ul#menu li {
    display: inline;
}

ul#menu li a {
    background-color: orange;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 4px 4px 0 0;
}

ul#menu li a:hover {
    background-color: pink;
}
</style>

		<style>
			a:hover{color:#00FF66;}
			a{font-size:18px;margin-left:5%;}
			table,td{padding:5px;broder-radius:5px}
		</style>
</head>

<body background="woodb.jpg">


 <table width="1360"border="0" align="center" cellpadding="0" cellspacing="1" class="graybox">
 <tr> 
 <td><img src="medicine/medi.png" width="1360" height="100"></td>
 </tr>
  <tr>
    <td height="38" colspan="2">
		<ul id ="menu"><li><a href="test.php">HOME</a></li>
		<li><a href="about/slider.html">ABOUT US</a></li>
		<li><a href="l.php">LOGIN</a></li>
		<li><a href="register.php">NEW USER?</a></li>
		<li><a href="library/contact.php">CONTACTCT US</a></li>	</td>
  </tr>
  </table>
<table width="1360" height="" border="1";">
 <!-- Insert to your webpage where you want to display the slider -->
    <div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:600px;margin:70px auto 62px;">
        <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
            <ul class="amazingslider-slides" style="display:none;">
                <li><img src="images/fm.png" alt="fm"  title="fm" />
                </li>
                <li><img src="images/fmm.jpg" alt="fmm"  title="fmm" data-texteffect="Bottom bar" />
                </li>
                <li><img src="images/me.png" alt="me"  title="me" />
                </li>
                <li><img src="images/m.png" />
                </li>
            </ul>
            <ul class="amazingslider-thumbnails" style="display:none;">
                <li><img src="images/fm-tn.png" alt="fm" title="fm" /></li>
                <li><img src="images/fmm-tn.jpg" alt="fmm" title="fmm" /></li>
                <li><img src="images/me-tn.png" alt="me" title="me" /></li>
                <li><img src="images/m-tn.png" /></li>
            </ul>
        <div class="amazingslider-engine"><a href="http://amazingslider.com" title="Responsive jQuery Content Slider">Responsive jQuery Content Slider</a></div>
        </div>
    </div>
    <!-- End of body section HTML codes -->



  
	
	<?php
	@$chk=$_REQUEST['chk'];
	if($chk=="")
	{
	?>
	<?php
	}
	if($chk=="registraion")
	{
	include_once('regis.php');
	}
	if($chk=="login")
	{
	include_once('l.php');
	}
	if($chk=="about")
	{
	include_once('aboutus.php');
	}
	if($chk=="contact")
	{
	include_once('contactus.php');
	}
	if($chk=="7")
	{
	include_once('latestupdDisp.php');
	}
	if($chk=="about")
	{
	include_once('about.php');
	}
	
	
	?>

</table>
<?php include('ads/header.php');?>
</body>
</html>
