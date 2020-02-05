<?php

if(isset($_POST['register'])){
	$dbServername='localhost';
	$dbusername='root';
	$dbPassword='';
	$dbName='coupon';

	$conn= mysqli_connect($dbServername,$dbusername,$dbPassword,$dbName);
	
	// $sql="INSERT INTO messages(message,location) VALUES ($txt,$location);";
	// mysqli_query($conn,$sql);

	$code = $_POST['code'];
	$output = $code;
	$error="";
	$sql_code = "SELECT * FROM vouchers WHERE voucher = '$code' AND status = 0";
	$code_is_used = "SELECT * FROM vouchers WHERE voucher = '$code' AND status = 1";
	// var_dump($sql_code);
	$sql_code = mysqli_query($conn,$sql_code);
	$code_is_used= mysqli_query($conn,$code_is_used);


	if (empty($code)) {
		$error="Jon! type in something";

			}



	else if(mysqli_num_rows($sql_code) > 0)

	{   echo("<script>
				window.alert('Logged in successfully');
			  </script>


			")	;
		
		$code_var = "INSERT INTO used_coupons(`codes`) VALUES ('$code')";
		$code_used = mysqli_query($conn,$code_var);
		if ($code_used) {
			
			$code_remove = "UPDATE vouchers SET status = 1 WHERE voucher = '$code'";
			$code_update = mysqli_query($conn,$code_remove);
		}
		

		header("location:../voucher/vote.php?coupon=$code");
	}

	else if(mysqli_num_rows($code_is_used)>0){ 
		$error="code is used dada jon!";
		
	}


	else{
		$error="coupon is invalid masa! be serious";
	}
}



// register 2

if(isset($_POST['register2'])){
	$dbServername='localhost';
	$dbusername='root';
	$dbPassword='';
	$dbName='coupon';

	$conn= mysqli_connect($dbServername,$dbusername,$dbPassword,$dbName);
	
	// $sql="INSERT INTO messages(message,location) VALUES ($txt,$location);";
	// mysqli_query($conn,$sql);

	$code = $_POST['code'];
	$output = $code;
	$error="";
	$sql_code = "SELECT * FROM vouchers2 WHERE voucher2 = '$code' AND status = 0";
	$code_is_used = "SELECT * FROM vouchers2 WHERE voucher2 = '$code' AND status = 1";
	// var_dump($sql_code);
	$sql_code = mysqli_query($conn,$sql_code);
	$code_is_used= mysqli_query($conn,$code_is_used);


	if (empty($code)) {
		$error="Jon! type in something";

			}



	else if(mysqli_num_rows($sql_code) > 0)

	{   echo("<script>
				window.alert('Logged in successfully');
			  </script>


			")	;
		
		$code_var = "INSERT INTO used_coupons(`codes`) VALUES ('$code')";
		$code_used = mysqli_query($conn,$code_var);
		if ($code_used) {
			
			$code_remove = "UPDATE vouchers2 SET status = 1 WHERE voucher2 = '$code'";
			$code_update = mysqli_query($conn,$code_remove);
		}
		

		header("location:../voucher2/vote.php?coupon=$code");
	}

	else if(mysqli_num_rows($code_is_used)>0){ 
		$error="code is used dada jon!";
		
	}


	else{
		$error="coupon is invalid masa! be serious";
	}
}









//vouchers3





if(isset($_POST['register3'])){
	$dbServername='localhost';
	$dbusername='root';
	$dbPassword='';
	$dbName='coupon';

	$conn= mysqli_connect($dbServername,$dbusername,$dbPassword,$dbName);
	
	// $sql="INSERT INTO messages(message,location) VALUES ($txt,$location);";
	// mysqli_query($conn,$sql);

	$code = $_POST['code'];
	$output = $code;
	$error="";
	$sql_code = "SELECT * FROM vouchers3 WHERE voucher3 = '$code' AND status = 0";
	$code_is_used = "SELECT * FROM vouchers3 WHERE voucher3 = '$code' AND status = 1";
	// var_dump($sql_code);
	$sql_code = mysqli_query($conn,$sql_code);
	$code_is_used= mysqli_query($conn,$code_is_used);


	if (empty($code)) {
		$error="Jon! type in something";

			}



	else if(mysqli_num_rows($sql_code) > 0)

	{   echo("<script>
				window.alert('Logged in successfully');
			  </script>


			")	;
		
		$code_var = "INSERT INTO used_coupons(`codes`) VALUES ('$code')";
		$code_used = mysqli_query($conn,$code_var);
		if ($code_used) {
			
			$code_remove = "UPDATE vouchers3 SET status = 1 WHERE voucher3 = '$code'";
			$code_update = mysqli_query($conn,$code_remove);
		}
		

		header("location:../voucher3/vote.php?coupon=$code");
	}

	else if(mysqli_num_rows($code_is_used)>0){ 
		$error="code is used dada jon!";
		
	}


	else{
		$error="coupon is invalid masa! be serious";
	}
}


?>





