<?php
include("session.php");
?>
<!doctype html>
<html><title>Medipedia</title>

<link rel="stylesheet" href="index.css?2">
<head><style>

h3 {
   background-color:pink;
    color: red;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 4px 4px 0 0;
}
ul#menu {
    padding: 0;
}

ul#menu li {
    display: inline;
}

ul#menu li a {
    background-color: green;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 4px 4px 0 0;
}

ul#menu li a:hover {
    background-color: orange;
}

</style>
</head>
<body >
<section>
<a href="index.html"><img width="300" src="medicine/medi.png"></a><hr>
<center>
<table><tr>

<td><img src="user.jpg" alt="<?php echo $login_session; ?>"/>
</td></tr></table>
<font color="green"><h3><?php echo $login_session; ?>!!!</h3></font>
</center>
<h1>Diseases Index</h1>

<ul>
  <li>
    <a href="">
      <img src="diseases/liver.jpg">
      <span><h2>Liver Diseases</h2></span>
	  </a>
  </li>
  <li>
    <a href="">
      <img src="diseases/stomach.jpg">
      <span><h2>Stomach Diseases</h2></span>
    </a>
  </li>
   <li>
    <a href="">
      <img src="diseases/eye.jpg">
      <span><h2>Eye Diseases</h2></span>
    </a>
  </li>
   <li>
    <a href="">
      <img src="diseases/heart.jpg">
      <span><h2>Heart Diseases</h2></span>
	  </a>
  </li>
   <li>
    <a href="">
      <img src="diseases/cancer.jpg">
      <span><h2>Cancer Diseases</h2></span>
    </a>
  </li>
   <li>
    <a href="">
      <img src="diseases/diabetes.jpg">
      <span><h2>Diabetes</h2></span>
    </a>
  </li>
  <li>
    <a href=".html">
      <img src="diseases/brain.jpg">
      <span><h2>Brain Diseases</h2></span>
    </a>
  </li>
  <li>
    <a href="">
      <img src=".jpg">
      <span><h2></h2></span>
	  </a>
  </li>
  <li>
    <a href="">
      <img src=".jpg">
      <span><h2></h2></span>
    </a>
  </li>
   
</ul>

<div id="push"></div>

</section><br/><br/>

<ul id ="menu">&nbsp;&nbsp;&nbsp;&nbsp;<li><a href="uhome.php">Home</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<li><a href="logout.php">Logout</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<li><a href="uhome.php">Back</a></li>
</body>
</html>
