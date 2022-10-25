<?php 
error_reporting(1);
include("vi/hd.php"); ?>
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
    
    include("dbconnect.php");
    
    if(isset($_POST['insert']))
    {
        
        $p_brands = $_POST['p_brands'];
        $p_model = $_POST['p_model'];
        $p_price = $_POST['p_price'];
        $p_desc = $_POST['p_desc'];
        
        $p_img = $_FILES['p_img']['name'];
        
        
        
        move_uploaded_file($_FILES['p_img']['tmp_name'],"product_images/$p_img");
        
        $insert_p = "INSERT INTO lunch VALUES('','$p_brands','$p_model','$p_price','$p_img','$p_desc')";
        $query = mysqli_query($con,$insert_p);
        echo "<script>alert('Product has been successfully inserted into the database.')</script>";
        echo "<script>window.open('insert_lh.php','_self')</script>";  
            
        
    }
?>

			<div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Insert</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                             <li class="breadcrumb-item text-white" aria-current="page"><a href="insert_lh.php">Product Lunch</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Insert Start -->
        <div class="container-xxl py-5">
            <div class="container">
            	<div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Add Product</h5>
                        <h1 class="text-white mb-4">Lunch</h1>
                        <form method="post" action="insert_lh.php" enctype="multipart/form-data">
                            <div class="row g-3">
                            	<div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" name="p_model" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Product Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" name="p_price" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Product Price</label>
                                    </div>
                                </div>                                
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="file" name="p_img" class="form-control" id="email" placeholder="Your Email">
                                        <label for="select1">Product Image</label>
                                      </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea type="text" class="form-control" name="p_desc" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                        <label for="message">Description</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit" name="insert" value="Insert Product">Insert</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="clr"></div>
            </div>
        </div>
        <!-- Insert End -->

<?php 
error_reporting(1);
include("vi/footer.php"); ?>