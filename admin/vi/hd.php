<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Admin Control Panel</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="text/html; charset=UTF-8" name="keywords">
    <meta content="text/html; charset=UTF-8" name="description">

    <!-- Favicon -->
    <link href="images/favicon.ico" type="image/x-icon" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restaurant</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <div class="nav-item dropdown">
                            <a href="home.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Home</a>
                            <div class="dropdown-menu m-0">
                                <a href="insert_bf.php" class="dropdown-item">Insert Bf</a>
                                <a href="insert_lh.php" class="dropdown-item">Insert Lh</a>
                                <a href="insert_di.php" class="dropdown-item">Insert Di</a>
                            </div>
                        </div>
                        <a href="feedback.php" class="nav-item nav-link">V_Feedback</a>
                        <a href="view_order.php" class="nav-item nav-link">V_Order</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">V_Product</a>
                            <div class="dropdown-menu m-0">
                                <a href="view_bf.php" class="dropdown-item">Breakfast</a>
                                <a href="view_lh.php" class="dropdown-item">Lunch</a>
                                <a href="view_di.php" class="dropdown-item">Dinner</a>
                            </div>
                        </div>                      
                        <a href="?log=out" class="nav-item nav-link">Log Out</a>
                    </div>                    
                </div>
            </nav>

            