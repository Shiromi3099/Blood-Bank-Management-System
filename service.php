<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bloodbank";

// Create connection
$conn = new mysqli("localhost", "root", "", "bloodbank");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BloodBank Service page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Red+Rose:wght@600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

      <!-- Topbar Start -->
      <div class="container-fluid py-2 d-none d-lg-flex">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div>
                    <small class="me-3"><i class="fa fa-map-marker-alt me-2"></i> 23 , Deshamanya H K Dharmadasa Mawatha, Colombo 00200</small>
                    <small class="me-3"><i class="fa fa-clock me-2"></i>Open 24 hours</small>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

  
    <!-- Brand Start -->
<div class="container-fluid bg-primary text-white pt-4 pb-5 d-none d-lg-flex">
    <div class="container pb-2">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex">
                <i class="bi bi-telephone-inbound fs-2"></i>
                <div class="ms-3">
                    <h5 class="text-white mb-0">Call Now</h5>
                    <span>0115 577 111</span>
                </div>
            </div>
            <a href="index.html" class="h1 text-white mb-0">Nawaloka <span class="text-dark"> Blood Bank</span></a>
            <div class="d-flex">
                <i class="bi bi-envelope fs-2"></i>
                <div class="ms-3">
                    <h5 class="text-white mb-0">Mail Now</h5>
                    <span>nawaloka@slt.lk</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Brand End -->


<!-- Navbar Start -->
<div class="container-fluid sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-lg-0 px-lg-3">
            <a href="index.php" class="navbar-brand d-lg-none">
                <h1 class="text-primary m-0">Lab<span class="text-dark">sky</span></h1>
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <a href="service.php" class="nav-item nav-link">Services</a>    
                    <a href="blog.php" class="nav-item nav-link">Blog</a>
                    <a href="login.php" class="nav-item nav-link">log In</a>
                
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5 mt-4">
            <h1 class="display-2 text-white mb-3 animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
      <!-- Service Start -->
      <div class="container-fluid container-service py-5">
        <div class="container pt-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 mb-3">our Services</h1>
                <p class="mb-5"></p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <img src="img/don.jpg" alt="Pathology Testing Image" class="img-fluid">
                        </div>
                        <h5 class="mb-3">Blood Donation</h5>
                        <p class="mb-4"> Blood banks organize blood donation drives and accept blood donations from volunteer donors. They also facilitate directed donations, where individuals donate blood specifically for a particular recipient</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <img src="img/bc.jfif" alt="Pathology Testing Image" class="img-fluid">
                        </div>
                        <h5 class="mb-3">Blood Collection</P></h5>
                        <p class="mb-4">Blood banks have trained staff who collect blood from donors. They ensure that the blood donation process is safe and comfortable for the donor.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <img src="img/bt.jpg" alt="Pathology Testing Image" class="img-fluid">
                        </div>
                        <h5 class="mb-3">Blood Testing</h5>
                        <p class="mb-4">After collection, blood samples undergo rigorous testing to determine blood type and screen for infectious diseases, such as HIV, hepatitis B and C, syphilis, and others. This ensures the safety of the blood supply.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <img src="img/bs.jpg" alt="Pathology Testing Image" class="img-fluid">
                        </div>
                        <h5 class="mb-3">Blood Processing and Component Separation</h5>
                        <p class="mb-4">Blood is separated into its various components, such as red blood cells, platelets, and plasma, through a process called centrifugation. This allows blood banks to provide specific blood components as needed for medical treatments.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <img src="img/bsto.jpg" alt="Pathology Testing Image" class="img-fluid">
                        </div>
                        <h5 class="mb-3">Blood Storage</h5>
                        <p class="mb-4">Blood banks store donated blood and blood components in specialized refrigerators or freezers at controlled temperatures to maintain their viability and safety.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <img src="img/bdis.jfif" alt="Pathology Testing Image" class="img-fluid">
                        </div>
                        <h5 class="mb-3">Blood Distribution</h5>
                        <p class="mb-4"> Blood banks distribute blood and blood products to hospitals, clinics, and other healthcare facilities as per their needs. They maintain inventories of different blood types and components to ensure timely availability for transfusions.

                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <img src="img/em.jfif" alt="Pathology Testing Image" class="img-fluid">
                        </div>
                        <h5 class="mb-3">Emergency Response</h5>
                        <p class="mb-4">Blood banks play a critical role in disaster preparedness and response by ensuring an adequate supply of blood for emergencies, accidents, and natural disasters.

                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <img src="img/tra.jpg" alt="Pathology Testing Image" class="img-fluid">
                        </div>
                        <h5 class="mb-3">Transfusion Support</h5>
                        <p class="mb-4">Blood banks provide transfusion support to healthcare providers, including guidance on appropriate blood products for patients and assistance with compatibility testing.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
      
<!-- Footer Start -->
<div class="container-fluid footer position-relative bg-dark text-white-50 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5 py-5">
            <div class="col-lg-6 pe-lg-5">
                <a href="index.html" class="navbar-brand">
                    <h1 class="h1 text-primary mb-0">Nawaloka <span class="text-white">Blood Bank</span></h1>
                </a>
                <p class="fs-5 mb-4">Blood is meant for Circulation Donate blood and save the Life..........</p>
                <p><i class="fa fa-map-marker-alt me-2"></i> 23 , Deshamanya H K Dharmadasa Mawatha, Colombo 00200</p>
                <p><i class="fa fa-phone-alt me-2"></i>0115 577 111</p>
                <p><i class="fa fa-envelope me-2"></i>nawaloka@slt.lk</p>
                <div class="d-flex mt-4">
                    <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5">
                <div class="row g-5">
                    <div class="col-sm-6">
                        <h4 class="text-light mb-4">Quick Links</h4>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Our Services</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                        <a class="btn btn-link" href="">Support</a>
                    </div>
                    <div class="col-sm-6">
                        <h4 class="text-light mb-4">Popular Links</h4>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Our Services</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                        <a class="btn btn-link" href="">Support</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid copyright bg-dark text-white-50 py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start">
                <p class="mb-0">&copy; 2023 Nawaloka Hospitals PLC. All rights reserved</p>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>