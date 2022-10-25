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

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Insert</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                             <li class="breadcrumb-item text-white" aria-current="page"><a href="view_di.php">Insert's Dinner</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Insert Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="col-12 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">View</h5>
                        <h1 class="text-white mb-4">Dinner</h1>
                            <?php
                error_reporting(1);
    
                include("dbconnect.php");
    
                $view = "SELECT * FROM dinner";
                $result = mysqli_query($con, $view);
                echo'
                <div class="col-lg-9">
                <table class="table table-bordered table-hover">';
                echo "<tr>
                          <th>Product id</th>
                          <th>Product model</th>
                          <th>Product price</th>
                          <th>Product image</th>
                          <th>Product description</th>
                      </tr>
                     ";
                
                while(list($p_id, $p_brands, $p_model, $p_price, $p_img, $p_desc) = mysqli_fetch_array($result))
                {
                    echo "<tr align='center'>";
                    echo "<td>". $p_id ."</td>";
                    echo "<td>". $p_model ."</td>";
                    echo "<td>". $p_price ."</td>";
                    echo "<td>"."<img src='product_images/$p_img' width='80px' height='70px'"."</td>";
                    echo "<td>". $p_desc ."</td>";
                    
                    echo "<td>"."<a class='btn btn-danger' href='delete.php?pro_id=$p_id & pro_img=$p_img'>Delete</a>"."</td>";
                    echo "</tr>";
                }
                echo '</table> </div>';?>

                    </div>
                </div>
            </div>
        </div>


<?php 
error_reporting(1);
include("vi/footer.php"); ?>