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
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Feedback</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Feedback</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Feedback Start -->
         <div class="container-xxl py-5">
            <div class="container">
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
            	<h2>All feedbacks from database</h2>
<?php
error_reporting(1);
include("dbconnect.php");
    
    $view = "SELECT * FROM feedback";
    $result = mysqli_query($con, $view);
                
        echo "<table border='1' cellspacing='0' cellpadding='15px'>";
        echo "<tr>
            <th>ID</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Message</th>
                         
            </tr>";
                
                while(list($p_id, $eadd, $ph, $msg) = mysqli_fetch_array($result))
                {
                    echo "<tr>";
                    echo "<td>". $p_id ."</td>";
                    echo "<td>". $eadd ."</td>";
                    echo "<td>". $ph ."</td>";
                    echo "<td>". $msg ."</td>";
                    echo "<td>"."<a class='btn btn-danger' href='delete.php?pro_id=$p_id & pro_img=$p_img'>Delete</a>"."</td>";
                    echo "</tr>";
                }
                echo "</table>";
?>
          
            <p><a href="home.php">Home</a></p> 
                    </div>
                </div>
            </div>
        </div>
        <!-- Feedback End -->













<?php 
error_reporting(1);
include("vi/footer.php"); ?>