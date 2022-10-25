<?php

	error_reporting(1);
	include("admin/function.php");

?>
<?php 
error_reporting(1);
include("vivi/head.php"); ?>

			<div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Detail</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="mbreak.php">Home</a></li>                            
                            <li class="breadcrumb-item text-white active" aria-current="page">Breakfast</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

         <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">

                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">One of Breakfast Detail</h5>
                    <h1 class="mb-5">Explore Our Services</h1>
                </div>
                <div class="row g-4">
                <?php
			    if(isset($_GET['pro_id']))
			    {
				$product_id = $_GET['pro_id'];
				$get_pro = "SELECT * FROM breakfast WHERE p_id='$product_id'";
				$run_pro = mysqli_query($con,$get_pro);
				while($row_pro = mysqli_fetch_array($run_pro))
				{
					$pro_id = $row_pro['p_id'];
					$pro_model = $row_pro['p_model'];
					$pro_price = $row_pro['p_price'];
					$pro_image = $row_pro['p_image'];
					$pro_desc = $row_pro['p_desc'];
					echo " 
					
					<div class='article'><br>
						<center><h3>$pro_model</h3></center><br>
						<center><img style='border-radius:10px;' src='admin/product_images/$pro_image' width='400px' height='350px'></center><br>
						<center><b> Price: $pro_price </b><br>
						<p>$pro_desc</p>
						<a class='btn btn-danger' href='mbreak.php'> Go Back </a> &nbsp; &nbsp; &nbsp;
						<a class='btn btn-success' href='loginBf.php?buy_pro=$pro_id'> Buy </a></center>
					</div><br><br>
						
					";
					echo '
        				<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            				<div class="container py-5">
                				<div class="row g-5">
                    				<div class="col-lg-3 col-md-6">
                        			<h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
                        			<a class="btn btn-link" href="">About Us</a>
                        			<a class="btn btn-link" href="">Contact Us</a>
                        			<a class="btn btn-link" href="">Reservation</a>
                        			<a class="btn btn-link" href="">Privacy Policy</a>
                        			<a class="btn btn-link" href="">Terms & Condition</a>
                    				</div>
                    				<div class="col-lg-3 col-md-6">
                        			<h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                        			<p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        			<p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        			<p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        				<div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        				</div>
                    				</div>
                    				<div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                        <h5 class="text-light fw-normal">Monday - Saturday</h5>
                        <p>09AM - 09PM</p>
                        <h5 class="text-light fw-normal">Sunday</h5>
                        <p>10AM - 08PM</p>
                    				</div>
                    				<div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Newsletter</h4>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        				<div class="position-relative mx-auto" style="max-width: 400px;">
                            <input href="signup.php" class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your signup email">
                            
                             <p type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2"><a href="signup.php">SignUp</a></p>
                        				</div>
                    				</div>
                				</div>
            				</div>
            				<div class="container">
                				<div class="copyright">
                    				<div class="row">
                        				<div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Restaurant</a>, All Right Reserved. 
							Designed By <a class="border-bottom" href="https://NandarID:3260.com">NandarID:3260</a><br><br>
                            Distributed By <a class="border-bottom" href="https://NandarID:3260.com" target="_blank">MyDesign</a>
                        				</div>
                        				<div class="col-md-6 text-center text-md-end">
                            				<div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            				</div>
                        				</div>
                    				</div>
                				</div>
            				</div>
        				</div>
        				';
        			}
			  	}
				?>
                </div>
            </div>
            <div class="clr"></div>
        </div>
    </div>

    <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>