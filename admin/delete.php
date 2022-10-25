		  <?php
				error_reporting(1);
	
				include("dbconnect.php");
	
				$del = "DELETE FROM breakfast WHERE p_id='{$_GET['pro_id']}'";
				$result = mysqli_query($con, $del);
				unlink("product_images/".$_GET['pro_img']);
				rmdir("product_images/".$_GET['pro_img']);
				echo "<script>alert('Insert Bf has been deleted successfully!')</script>";
				echo "<script>window.open('view_product.php','_self')</script>";
		  ?>

		  <?php
				error_reporting(1);
	
				include("dbconnect.php");
	
				$del = "DELETE FROM feedback WHERE p_id='{$_GET['pro_id']}'";
				$result = mysqli_query($con, $del);
				unlink("product_images/".$_GET['pro_img']);
				rmdir("product_images/".$_GET['pro_img']);
				echo "<script>alert('Feedback has been deleted successfully!')</script>";
				echo "<script>window.open('feedback.php','_self')</script>";
		  ?>

		  
		  <?php
				error_reporting(1);
	
				include("dbconnect.php");
	
				$del = "DELETE FROM buy WHERE p_id='{$_GET['pro_id']}'";
				$result = mysqli_query($con, $del);
				unlink("product_images/".$_GET['pro_img']);
				rmdir("product_images/".$_GET['pro_img']);
				echo "<script>alert('Order has been deleted successfully!')</script>";
				echo "<script>window.open('view_order.php','_self')</script>";
		  ?>

		  <?php
				error_reporting(1);
	
				include("dbconnect.php");
	
				$del = "DELETE FROM dinner WHERE p_id='{$_GET['pro_id']}'";
				$result = mysqli_query($con, $del);
				unlink("product_images/".$_GET['pro_img']);
				rmdir("product_images/".$_GET['pro_img']);
				echo "<script>alert('Insert Di has been deleted successfully!')</script>";
				echo "<script>window.open('view_di.php','_self')</script>";
		  ?>

		  <?php
				error_reporting(1);
	
				include("dbconnect.php");
	
				$del = "DELETE FROM lunch WHERE p_id='{$_GET['pro_id']}'";
				$result = mysqli_query($con, $del);
				unlink("product_images/".$_GET['pro_img']);
				rmdir("product_images/".$_GET['pro_img']);
				echo "<script>alert('Insert Lh has been deleted successfully!')</script>";
				echo "<script>window.open('view_lh.php','_self')</script>";
		  ?>

		 