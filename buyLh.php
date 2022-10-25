<?php
    error_reporting(1);
    
    include("dbconnect.php");
    
    $product_brand = $_REQUEST['buy_pro'];
    
    if(isset($_REQUEST['buy']))
    {
        $b = $_REQUEST['b'];
        $m = $_REQUEST['m'];
        $p = $_REQUEST['p'];
        $phno = $_REQUEST['phno'];
        $delivery = $_REQUEST['r'];
        $pm = $_REQUEST['pm'];
        $add = $_REQUEST['add'];
        $order_no = no.rand(1,100);
        if(mysql_query("INSERT INTO buy VALUES('$b', '$m', '$p', '$phno', '$delivery', '$pm', '$add', '$order_no')"))
        {
            echo "<script>location.href='buysuccess.php?order_no=$order_no'</script>";
        }
    }
?>


<?php 
error_reporting(1);
include("vivi/head.php"); ?>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Ordering</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>                            
                            <li class="breadcrumb-item text-white active" aria-current="page">Breakfast</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Best Choice</h5>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <h1 class="mb-5">Lunch Menu</h1>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        
                 <form method="post">
           <?php
                
                $sel=mysql_query("select * from lunch where p_id='$product_brand'");
                $mat=mysql_fetch_array($sel);
            ?>
               
                    <table class="table table-hover" border="0" cellpadding="10px">
                <tr>
                    <td>Model</td>
                    <td><input type="text" class="form-control" readonly="true" name="m" value="<?php echo $mat['p_model']; ?>"></td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td><input type="text" class="form-control" readonly="true" name="p" value="<?php echo $mat['p_price']; ?>"></td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td><input type="text" class="form-control" name="phno" required></td>
                </tr>
                <tr>
                    <td>Preferred Delivery</td>
                    <td><input type="radio" class="form-check-input" name="r" value="5 days" required>&nbsp;<label class="form-check-label">5 days</label>
                        <input type="radio" class="form-check-input" name="r" value="3 days" required>&nbsp;<label class="form-check-label">3 days</label>
                        <input type="radio" class="form-check-input" name="r" value="next day" required>&nbsp;<label class="form-check-label">next day</label>
                    </td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><textarea name="add" class="form-control" required></textarea></td>
                </tr>
                <tr>
               <td> Payment methods:</td><td><input type="radio" class="form-check-input" name="pm" value="Cash on delivery" required>&nbsp;<label class="form-check-label">Cash on delivery</label>
                        <input type="radio" class="form-check-input" name="pm" value="Paypal (info@example.com)" required>&nbsp;<label class="form-check-label">Paypal (info@example.com)</label>
                        <input type="radio" class="form-check-input" name="pm" value="Bank Transfer(Bank acc:1133445566789)" required>&nbsp;<label class="form-check-label">Bank Transfer(Bank acc:1133445566789)</label>
                    </td>
                                    </tr>
                <tr>
                    <td colspan="2" align="center"><input class="btn btn-success" type="submit" name="buy" value="Buy"> &nbsp;
                        <a class="btn btn-danger" href="mbreak.php">Cancel</a>
                    </td>
                </tr>
                </table>
                </form>    
                                                
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clr"></div>
                </div>
            </div>
        </div>
        <!-- Menu End -->
        

        <?php 
error_reporting(1);
include("vivi/footerr.php"); ?>