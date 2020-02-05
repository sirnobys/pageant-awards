<?php include('../../connection/check.php') ?>
<html>
<head>
  <title>Welcome</title>
  <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../materialize/css/materialize.min.css">
    <link rel="stylesheet" href="../styles.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body class="bg1 container-fluid">

 <nav>
    <div class="nav-wrapper nav1">
      <a href="index.php" class="ml-2 color2">The Choice Style Awards</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index.php">Home</a></li>
        <li><a href="https://forms.gle/pEjErQ3KDVPcM4f99">Free Voting</a></li>
        <li><a href="pageant.php">Pageant Voting</a></li>
        <!-- <li><a href="about.html">About Us</a></li> -->
      </ul>
    </div>
  </nav>


<div class="row"></div>
<div class="row"></div>
<div class="row"></div>

<div class="row ">
	<div class="col m2"></div>


	<div class="col m8">
		<div class="card front ">
			<div>

				<div class="row"></div>


			<form method="post" action="" id="register_form">
				<div align="center"><span class="card-title"><i>Welcome to</i></span>
  				 </div>
  				 <div align="center"><span class="card-body "><h5>SRC HALL PAGEANTS VOTING </span>

  				 </div>
  				<div class="row"></div>
  				<div class="row"></div>
  				<div style="color:red">

  					<?php if (!empty($error)) {
  					# code...
  					echo ( "<h6 class='ml-2' style='color:red;'>$error</h6>");
  				} else{
  						echo "<h6 class='ml-2' style='color:#26a69a;'>Please enter your coupon</h6>";
  					}?> 
  				</div>

  				<div align="center" class="mt-1">
  					
  			<i class="material-icons">vpn_key</i>
            <input id="input" type="text" name="code" id="code" placeholder="Type coupon here..." >
  				</div>
  	  			<div class="row"></div>
		  		<div align="center">
		  			<button class="btnw btn waves-effect waves-light z-depth-4" type="submit" name="register" id="register">Activate
		  			</button>

		  		</div>
  			</form>
  			
  		
  		</div>
		</div>
	</div>
	<div class="col m3">
		
	</div>
</div>




  


<!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="../../materialize/js/materialize.min.js"></script>  
  </body>
</html>