<?php
	error_reporting(1);
	include("dbconnect.php");
	
	$id = $_REQUEST['buy_pro'];
	
	if(isset($_REQUEST['login']))
	{
		
		$email = $_REQUEST['email'];
		$pass = $_REQUEST['pass'];
		$query = mysql_query("SELECT email,password FROM sign_up WHERE email='$email'");
		$arr = mysql_fetch_array($query);
		if(($arr['email']==$email) && ($arr['password']==$pass))
		{
			echo "<script>location.href='buyBf.php?buy_pro=$id'</script>";
		
		}
		else
		{
			$er="UserID or Password do not match.Try again.";
		}
	}
	
?>
<?php 
error_reporting(1);
include("vivi/head.php"); ?>

			<div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Login or Creat Account</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="mbreak.php">Home</a></li>                            
                            <li class="breadcrumb-item text-white active" aria-current="page">For Breakfast</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- LoginBf Start -->
        <div class="container-xxl position-relative p-0">
			<div class="container-xxl py-5">
    			<div class="container">
       				<div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
       					<div class="row g-0">
       						<div class="col-md-6 bg-dark d-flex align-items-center">
               		
               					<div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Welcome</h5>
                        <h1 class="text-white mb-4">Fill The Form</h1>
                        <form method="post" action="buyBf.php">
                        	
            <tr>
<td colspan="2"><?php echo "<font color='red'>$er</font>";?> </td>
			</tr>
                            		<div class="row g-3">
                                		<div class="col-md-6">
                                    		<div class="form-floating">
                                    			
                                        <input type="text" class="form-control" name="uname" id="email" placeholder="Your Email">
                                        <label for="name">Your Email</label>
                                    		</div>
                                		</div>
                                		<div class="col-md-6">
                                    		<div class="form-floating">
                                        <input type="password" class="form-control" name="pass" id="pass" placeholder="Your Password">
                                        <label for="email">Your Password</label>
                                    		</div>
                                		</div>                        
                                		<div class="col-md-6">
                                    	<button class="btn btn-primary w-100 py-3" type="submit" name="login" value="Log in">Admit</button>
                                    	</div>
                                    	<div class="col-md-6">
                                    	<a href="signup.php" class="btn btn-primary w-100 py-3">Create account</a>
                                		</div>
                            		</div>
                           
                        </form>
                    			</div>

                	       </div>
       			        </div>
    		        </div>
		        </div>
	        </div>
        <!-- LoginBf End -->



 <?php 
error_reporting(1);
include("vivi/footerr.php"); ?>