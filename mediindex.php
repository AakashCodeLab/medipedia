<?php
include("session.php");
?>
<!doctype html>
<html><title>Medipedia</title>

<link rel="stylesheet" href="index.css?2">
<head><style>

h3 {
   background-color:pink;
    color: white;
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

</style></head>
<body>
<section>



<!--<a href="uhome.php"><img width="300" src="images/medi.png" align ="left"></a>-->
<center>
<table><tr>

<td><img src="user.jpg" alt="<?php echo $login_session; ?>"/>
</td></tr></table>
<font color="green"><h3><?php echo $login_session; ?>!!!</h3></font>
</center>
<h1>Medicine Index</h1>

<ul>
  <li>
    <a href="Narcotic.php">
      <img src="medicine/narcotic.jpg">
      <span><h2>NARCOTIC DRUGS</h2></span>
	  </a>
  </li>
  <li>
    <a href="antidep.php">
      <img src="medicine/dep.jpg">
      <span><h2>ANTIDEPRESSANT DRUGS</h2></span>
    </a>
  </li>
   <li>
    <a href=".php">
      <img src="medicine/antibiotic.jpg">
      <span><h2>ANTIBIOTIC</h2></span>
    </a>
  </li>
   <li>
    <a href="hypnotic.php">
      <img src="medicine/hypnotic.jpg">
      <span><h2>HYPNOTIC DRUGS</h2></span>
	  </a>
  </li>
   <li>
    <a href=".">
      <img src="medicine/antiseptic.jpg">
      <span><h2>ANTISEPTIC</h2></span>
    </a>
  </li>
   <li>
    <a href=".">
      <img src="medicine/natural.jpg">
      <span><h2>HERBAL MEDICINES</h2></span>
    </a>
  </li>
  <li>
    <a href=".">
      <img src="medicine/anticancer.jpg">
      <span><h2>ANTICANCER DRUGS</h2></span>
    </a>
  </li>
  <li>
    <a href="">
      <img src="medicine/antipyritic.jpg">
      <span><h2>ANTIPYRITIC DRUGS</h2></span>
	  </a>
  </li>
  <li>
    <a href="">
      <img src="medicine/tran.jpg">
      <span><h2>TRANQUILLIZER DRUGS</h2></span>
    </a>
  </li>
   
</ul>
<div id="push"></div>
</section><br/><br/>
<ul id ="menu">&nbsp;&nbsp;&nbsp;&nbsp;<li><a href="uhome.php">Home</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<li><a href="logout.php">Logout</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<li><a href="uhome.php">Back</a></li></ul>
</body>
</html>
