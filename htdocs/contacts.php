<!DOCTYPE html>
<html lang="en">
<head>
<title>RealEstate | Contacts</title>
<meta charset="utf-8">

<style>
#select
{
  width: 75%;
  float: bottom;
}
.button {
    background-color: #e7e7e7;
    border: none;
    color: black;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 8px;
    border: 2px solid #555555;
}
.button:hover {
    background-color: #555555;
    color: white;
}
.button:active {
  background-color: #555555;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
<link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/slider-2.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/jqtransform.css">
<script src="js/jquery-1.7.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/cufon-yui.js"></script>
<script src="js/vegur_400.font.js"></script>
<script src="js/Vegur_bold_700.font.js"></script>
<script src="js/cufon-replace.js"></script>
<script src="js/tms-0.4.x.js"></script>
<script src="js/jquery.jqtransform.js"></script>
<script src="js/FF-cash.js"></script>
<script>
$(document)
    .ready(function () {
    $('.form-1')
        .jqTransform();
    $('.slider')
        ._TMS({
        show: 0,
        pauseOnHover: true,
        prevBu: '.prev',
        nextBu: '.next',
        playBu: false,
        duration: 1000,
        preset: 'fade',
        pagination: true,
        pagNums: false,
        slideshow: 7000,
        numStatus: false,
        banners: false,
        waitBannerAnimation: false,
        progressBar: false
    })
});
</script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body>
<div class="main">
  <!--==============================header=================================-->
  <header>
    <div>
      <h1><a href="index.html"><img src="pg_images/logo.png" alt=""></a></h1>
      <div class="social-icons"> <span>Follow Us:</span> <a href="#" class="icon-3"></a> <a href="#" class="icon-2"></a> <a href="#" class="icon-1"></a> </div>
      <div id="slide">
        <div class="slider">
          <ul class="items">
            <li><img src="pg_images/pg3_small.jpg" alt=""></li>
            <li><img src="pg_images/pg12_small.jpg" alt=""></li>
            <li><img src="pg_images/pg2_small.jpg" alt=""></li>
            <li><img src="pg_images/pg8_small.jpg" alt=""></li>
            <li><img src="pg_images/pg10_small.jpg" alt=""></li>
          </ul>
        </div>
        <a href="#" class="prev"></a><a href="#" class="next"></a> </div>
      <nav>
        <ul class="menu">
          <li><a href="index.html">Main</a></li>
          <li><a href="buying.html">Buying</a></li>
          <li><a href="enquiry.html">Enquiry</a></li>
          <li><a href="renting.html">Renting</a></li>
          <li class="current"><a href="contacts.php">Contacts</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <!--==============================content================================-->
  <?php include('connect.php'); ?>
  <section id="content">
    <div class="container_12">
      <div class="grid_8">
        <h2 class="top-1 p3">Contact form</h2>
        <form id="form" method="post" action="contacts.php">
          <fieldset>
            <label><strong>Your Name:</strong>
              <input type="text" value="" name="t1">
            </label>
            <label><strong>Your E-mail:</strong>
              <input type="email" value="" required="required" name="t2">
            </label>
            <label><strong>Your Message:</strong>

              <textarea name="t3"></textarea>
            </label>
            <div class="button"><input type="submit" value="Send Us" name="sbmt"></div>
          </fieldset>
        </form>
      </div>
      <div class="grid_4">
        
          <h2 class="p3">Our contacts</h2>
          <dl>
            <dt class="color-1 p2"><strong>PESIT-BSC <br>
              Electronic City, Bangalore </strong></dt>
            <dd><span>Freephone:</span>+91 800 559 6580</dd>
            <dd><span>Telephone:</span>+91 959 603 6035</dd>
            <dd><span>E-mail:</span><a href="#" class="link">mail@demolink.com</a></dd>
          </dl>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </section>
</div>
<?php

require_once('connect.php');
if(isset($_POST["sbmt"])) 
{
  
  $cn=makeconnection();     

      $s="insert into contacts(Name,Email,Message) values('" . $_POST["t1"] ."','" . $_POST["t2"] . "','" . $_POST["t3"] . "')";
      
      
  $q=mysqli_query($cn,$s);
  mysqli_close($cn);
  if($q>0)
  {
  echo "<script>alert('Record Save');</script>";
  }
  else
  {echo "<script>alert('Saving Record Failed');</script>";
  }
    
    } 
  

?>

<h2 style="color:#3680C1", align="center" > Ganesh S </h2>
      <h4><p style="color:red", align="center"> Co Founder </p></h4>

<h2 style="color:#3680C1", align="center" > Ishnit Saluja </h2>
      <h4><p style="color:red", align="center"> Co Founder </p></h4>      
<!--==============================footer=================================-->
<footer>
  <p>© 2017 Student Accomodation Model </p>
</footer>
<script>Cufon.now();</script>
</body>
</html>
