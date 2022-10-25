<?php
	error_reporting(1);
	if($_REQUEST['log']=='out')
	{
		session_destroy();
		header("location:index.php");
	}
?>
<?php 
error_reporting(1);
include("vi/hd.php"); ?>

		<div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Home</h1>
                    
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

		<!-- home Start -->
        <div class="container-xxl py-5">
            <div class="container">
            	<div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            		<h1 class="mb-5">Welcome Admin</h1>
            		<h5 class="section-title ff-secondary text-center text-primary fw-normal">Control Panel</h5>
            	</div>
            </div>
        </div>
        <!-- home End -->


<?php 
error_reporting(1);
include("vi/footer.php"); ?>