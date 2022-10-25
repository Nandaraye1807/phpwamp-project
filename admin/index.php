<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Ad Log In</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="text/html; charset=UTF-8" name="keywords">
    <meta content="text/html; charset=UTF-8" name="description">

    <!-- Favicon -->
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
	error_reporting(1);
	
	include("dbconnect.php");
	
	if(isset($_REQUEST['login']))
	{
		
		$uname = $_REQUEST['uname'];
		$pass = $_REQUEST['pass'];
		$check = mysqli_query("SELECT name,password FROM user WHERE name='$uname'");
		$run = mysqli_fetch_array($con, $check);
		if(($run['name']==$uname) && ($run['password']==$pass))
		{
			echo "<script>location.href='home.php'</script>";
		}
		else
		{
			$error = "User name or Password do not match!";
		}
	
	}

?>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">

		<!-- Index Start -->
			<div class="container-xxl py-5">
    			<div class="container">
           	<!-- Reservation Start -->
   					<div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
       					<div class="row g-0">
       						<div class="col-md-6 bg-dark d-flex align-items-center">
               		
               					<div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Welcome</h5>
                        <h1 class="text-white mb-4">Fill The Form</h1>
                        <form method="post" action="home.php">
            <tr>
<td colspan="2"><?php error_reporting(1); echo "<font color='red'>$error</font>"; ?> </td>
			</tr>
                            		<div class="row g-3">
                                		<div class="col-md-6">
                                    		<div class="form-floating">
                                        <input type="text" class="form-control" name="uname" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    		</div>
                                		</div>
                                		<div class="col-md-6">
                                    		<div class="form-floating">
                                        <input type="password" class="form-control" name="pass" id="password" placeholder="Your Password">
                                        <label for="email">Your Password</label>
                                    		</div>
                                		</div>                        
                                		<div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit" name="login" value="Log in">Admit</button>
                                		</div>
                            		</div>
                        </form>
                    			</div>

                	       </div>
       			        </div>
    		        </div>
		        </div>
	        </div>
        <!-- Index End -->

<?php 
error_reporting(1);
include("vi/footer.php"); ?>