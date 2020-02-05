<!DOCTYPE html>
<html>
<head>
	<title>Vote</title>
	  <link rel="stylesheet" href="styles.css">
</head>



<?php 
if ($_GET['coupon'] == '') {
	# code...
	header("location:index.php");
}
else{

 ?><nav>
    <div class="nav-wrapper nav1">
      <a href="index.php" class="ml-2">The Choice Style Awards</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index.php">Home</a></li>
        <li><a href="https://forms.gle/pEjErQ3KDVPcM4f99">Free Voting</a></li>
        <li><a href="pageant.php">Pageant Voting</a></li>
        <!-- <li><a href="about.html">About Us</a></li> -->
      </ul>
    </div>
  </nav>
<body class="bg1">



	<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeVZet1rXaPPTAW_uWGvEUQV1uc37QOl-CHxqwjziIyq_DMhQ/viewform?embedded=true" width="100%" height="35996" frameborder="0" marginheight="0" marginwidth="0"></iframe>

</body>

<?php 
} ?>









</html>

