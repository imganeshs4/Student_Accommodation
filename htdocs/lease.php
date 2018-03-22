<!DOCTYPE html>
<html lang="en">
<head>
<title>RealEstate | Buying</title>
<meta charset="utf-8">
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
  <?php include('connect.php'); ?>
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
          <li class="current"><a href="buying.html">Buying</a></li>
          <li><a href="enquiry.html">Enquiry</a></li>
          <li><a href="renting.html">Renting</a></li>
          <li><a href="contacts.php">Contacts</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <!--==============================content================================-->
  <section id="content">
    <div class="container_12">
      <div class="grid_8">
        <h2 class="top-1 p3">About Lease</h2>
        <p> The rooms are given in lease on per day. The authority is in charge of collecting the payment from the students </p>
        <form method="post" enctype="multipart/form-data">
          <table cellpadding="20" cellspacing="20" width="1000px" height="200px"  style="margin:auto" >
        <tr style="background-color:bisque" align="center" class="bold">            
             <td class="bold" style="color:black"  >Lease-No</td><td align="center" class="bold" style="color:black" >Length</td><td align="center" class="bold" style="color:black" >Student-No</td><td align="center" class="bold" style="color:black" >Room-no</td><td align="center" class="bold" style="color:black" >Check-in</td><td align="center" class="bold" style="color:black" >Check-out</td>
            
        </tr>
                   

<?php

  
$cn=mysqli_connect("localhost","root","ganesh","studentaccomodation");
$s="select * from lease";
  $result=mysqli_query($cn,$s);
  $r=mysqli_num_rows($result);
  //echo $r;
  while($data=mysqli_fetch_array($result))
  {
        echo"<tr><td  style=' padding-left:50px'>$data[0]</td><td  style=' padding-left:10px'>$data[1]</td><td  style=' padding-left:20px'>$data[2]</td><td  style=' padding-left:30px'>$data[3]</td><td  style=' padding-left:50px'>$data[4]</td><td  style=' padding-left:50px'>$data[5]</td></tr>";
      }
      mysqli_close($cn);
?>
      </table>
    </form>
        
      </div>
      <div class="grid_4">
        
          
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </section>
</div>
<!--==============================footer=================================-->
<footer>
  <p>© 2017 Student Accomodation Model </p>
</footer>
<script>Cufon.now();</script>
</body>
</html>
