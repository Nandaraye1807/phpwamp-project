 <link href="images/favicon.ico" type="image/x-icon" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
<?php
	
	$con = mysqli_connect("localhost","root","","test");	

	//getting the products from product table.
	function getBf()
	{
	  if(!isset($_GET['brand']))
	  {
		global $con;
		$get_pro = "SELECT * FROM breakfast order by rand()";
		$run_pro = mysqli_query($con,$get_pro);
		while($row_pro = mysqli_fetch_array($run_pro))
		{ 
			$pro_id = $row_pro['p_id'];			
			$pro_model = $row_pro['p_model'];
			$pro_price = $row_pro['p_price'];
			$pro_image = $row_pro['p_image'];
			echo " 
					<div style='width:275px; height:400px; margin-right:0;float:left;'>
						<center><h3>$pro_model</h3>
						<img src='admin/product_images/$pro_image' width='150px' height='150px'><br><br>
						<b> $pro_price </b> <br>
						<a class='btn btn-secondary' href='detailBf.php?pro_id=$pro_id'> <b>Details</b> </a><br><br>
						<a href='loginBf.php?buy_pro=$pro_id' ><button class='btn btn-success'> Buy </button> </a></center>
					</div>
			
			
			";
			
		}
	  }
	}
	
	function getLh()
	{
	  if(!isset($_GET['brand']))
	  {
		global $con;
		$get_pro = "SELECT * FROM lunch order by rand()";
		$run_pro = mysqli_query($con,$get_pro);
		while($row_pro = mysqli_fetch_array($run_pro))
		{ 
			$pro_id = $row_pro['p_id'];
			$pro_model = $row_pro['p_model'];
			$pro_price = $row_pro['p_price'];
			$pro_image = $row_pro['p_image'];
			echo " 
					<div style='width:275px; height:400px; margin-right:0;float:left;'>
						<center><h3>$pro_model</h3>
						<img src='admin/product_images/$pro_image' width='150px' height='150px'><br><br>
						<b> $pro_price </b> <br>
						<a class='btn btn-secondary' href='detailLh.php?pro_id=$pro_id'> <b>Details</b> </a><br><br>
						<a href='loginLh.php?buy_pro=$pro_id' ><button class='btn btn-success'> Buy </button> </a></center>
					</div>
			
			";
			
		}
	  }
	}

	function getDi()
	{
	  if(!isset($_GET['brand']))
	  {
		global $con;
		$get_pro = "SELECT * FROM dinner order by rand()";
		$run_pro = mysqli_query($con,$get_pro);
		while($row_pro = mysqli_fetch_array($run_pro))
		{ 
			$pro_id = $row_pro['p_id'];
			$pro_model = $row_pro['p_model'];
			$pro_price = $row_pro['p_price'];
			$pro_image = $row_pro['p_image'];
			echo " 
					<div style='width:275px; height:400px; margin-right:0;float:left;'>
						<center><h3>$pro_model</h3>
						<img src='admin/product_images/$pro_image' width='150px' height='150px'><br><br>
						<b> $pro_price </b> <br>
						<a class='btn btn-secondary' href='detailDi.php?pro_id=$pro_id'> <b>Details</b> </a><br><br>
						<a href='loginDi.php?buy_pro=$pro_id' ><button class='btn btn-success'> Buy </button> </a></center>
					</div>
			
			
			";
			
		}
	  }
	}
	
	
	
?>