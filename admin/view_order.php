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
                             <li class="breadcrumb-item text-white" aria-current="page"><a href="view_order.php">View Order</a></li>
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
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">View Order</h5>
                        <h1 class="text-white mb-4">Lunch</h1>


<?php
				error_reporting(1);
	
				include("dbconnect.php");
	
				$view = "SELECT * FROM buy";
				$result = mysqli_query($con, $view);
				
				echo "<table class='table table-striped' >";
				echo "<tr>
						 <th>ID</th>
					  	  <th>Model</th>
					  	  <th>Price</th>
					  	  <th>Phone</th>
						  <th>Delivery</th>
                          <th>Payment Method</th>
						  <th>Address</th>
						  <th>Order_no</th>
                          <th>Paid</th>
                          <th>Delete</th>
					  </tr>
					 ";
				
				while(list($p_id,$m,$p,$phno,$delivery,$pm,$add,$order_no) = mysqli_fetch_array($result))
				{
					echo "<tr>";
					echo "<td>".$p_id."</td>";
					echo "<td>". $m ."</td>";
					echo "<td>". $p ."</td>";
					echo "<td>". $phno ."</td>";
					echo "<td>". $delivery ."</td>";
                    echo "<td>". $pm ."</td>";
					echo "<td>". $add ."</td>";
					echo "<td>". $order_no ."</td>";
                    echo "<th><input type='checkbox'></th>";
                    echo "<td>"."<a class='btn btn-danger' href='delete.php?pro_id=$p_id & pro_img=$p_img'>Delete</a>"."</td>";
					echo "</tr>";
                    
				}
				echo "</table>";
		  ?>
		  <p><a href="home.php">Home</a></p>
                            
                    </div>
                </div>
            	<div class="clr"></div>
            </div>
        </div>
        <!-- Order End -->



<?php 
error_reporting(1);
include("vi/footer.php"); ?>