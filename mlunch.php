<?php 
error_reporting(1);
include("vivi/head.php"); ?>

<?php
error_reporting(1);
include("admin/function.php")
?>

<!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                    <h1 class="mb-5">Most Popular Items</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-3 pb-1 active" data-bs-toggle="pill">
                                <i class="fa fa-coffee fa-2x text-primary"></i>   
                                <div class="ps-3">                                                      
                                    <h6 class="mt-n1 mb-0"><a href="mbreak.php">Breakfast</a></h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-3 pb-1" data-bs-toggle="pill">
                                <i class="fa fa-hamburger fa-2x text-primary"></i>  
                                <div class="ps-3">                        
                                    <h6 class="mt-n1 mb-0"><a href="mlunch.php">Lunch</a></h6>
                               </div>
                            </a>
                        </li>
                        <li class="nav-item" href="mdinner.php">
                            <a class="d-flex align-items-center text-start mx-3 ms-3 me-6 pb-2" data-bs-toggle="pill">
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                                <div class="ps-3">
                                    
                                    <h6 class="mt-n4 mb-0"><a href="mdinner.php">Dinner</a></h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                         <div id="mlunch.php" class="tab-pane fade show p-0 d-flex align-items-center">
                            <?php getLh(); ?>
                        </div>
                    </div>
                </div>              
            </div>
        </div>
        <!-- Menu End -->




<?php 
error_reporting(1);
include("vivi/footerr.php"); ?>