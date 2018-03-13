<?php
include("session.php");
?>


<!doctype html>
<html><title>Medipedia</title>
<head>
<style>

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
<link rel="stylesheet" href="index.css?2">

<body >
<section>
<table><tr><td>
<a href="uhome.php"><img width="300" src="images/medi.png"></a><hr></td><td>

 </h4></td></tr></table>
<font color="blue"><h4 align="center"> <img src="hello.png" /> Hello <?php echo $login_session; ?>!!! </h4></font>
 <h2 align="center" >Welcome to Medipedia</h2> 
 




<ul>
  <li>
    <a href="diseases.php">
      <img src="diseases/dis.gif">
      <span><h2>Desises</h2></span>
    </a>
  </li>
  <li>
    <a href="">
      <img src="blood.png">
      <span><h2>Blood</h2></span>
    </a>
  </li>
   <li>
    <a href="mediindex.php">
      <img src="medicine/medicine.jpg">
      <span><h2>About Medicine</h2></span>
    </a>
  </li>
</ul>
<p>
</section>
<<br/><br/>

<ul id ="menu">&nbsp;&nbsp;&nbsp;&nbsp;<li><a href="uhome.php">Home</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<li><a href="logout.php">Logout</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<li><a href="l.php.php">Back</a></li>
</body>
</html>
