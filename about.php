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


$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Bloodbank About Page</title>
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
                    <a href="login.php" class="nav-item nav-link">Log In</a>
                
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5 mt-4">
            <h1 class="display-2 text-white mb-3 animated slideInDown">About</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    
   <!-- About Start -->
   <div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="row g-0">
                    <div class="col-6">
                        <img class="img-fluid" src="img/pi1.png">
                    </div>
                    <div class="col-6">
                        <img class="img-fluid" src="img/pi2.avif">
                    </div>
                    <div class="col-6">
                        <img class="img-fluid" src="img/pi3.jpg">
                    </div>
                    <div class="col-6">
                        <div class="bg-primary w-100 h-100 mt-n5 ms-n5 d-flex flex-column align-items-center justify-content-center">
                            <div class="icon-box-light">
                                <i class="bi bi-award text-dark"></i>
                            </div>
                            <h1 class="display-1 text-white mb-0" data-toggle="counter-up">20</h1>
                            <small class="fs-5 text-white">Years Experience</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="display-6 mb-4">Trusted Blood bank with Advance Treatment</h1>
                <p class="mb-4">Nawaloka Blood Bank is the heartbeat of Nawaloka Hospitals, pulsating with a commitment to saving lives. As a vital arm of the hospital, the blood bank plays a crucial role in ensuring a steady and safe supply of blood for patients in need. Manned by dedicated professionals, it operates with precision and care, adhering to the highest standards of safety and hygiene. At Nawaloka Blood Bank, we understand the significance of each drop of blood, recognizing it as a lifeline that connects donors to recipients in moments of critical need. Our mission is to foster a culture of voluntary blood donation, promoting community involvement and solidarity. With state-of-the-art facilities and a compassionate team, Nawaloka Blood Bank stands as a beacon of hope, embodying the hospital's unwavering commitment to healthcare excellence.</p>
                <div class="row g-4 g-sm-5 justify-content-center">
                    <div class="col-sm-6">
                        <div class="about-fact btn-square flex-column rounded-circle bg-primary ms-sm-auto">
                            <p class="text-white mb-0">Total Blood Transfusion</p>
                            <h1 class="text-white mb-0" data-toggle="counter-up">7500</h1>
                        </div>
                    </div>
                    <div class="col-sm-6 text-start">
                        <div class="about-fact btn-square flex-column rounded-circle bg-secondary me-sm-auto">
                            <p class="text-white mb-0">Total Donor </p>
                            <h1 class="text-white mb-0" data-toggle="counter-up">100</h1>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="about-fact mt-n130 btn-square flex-column rounded-circle bg-dark mx-sm-auto">
                            <p class="text-white mb-0">Recipient Clients</p>
                            <h1 class="text-white mb-0" data-toggle="counter-up">75</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

 <!-- Team Start -->
    <div class="container-fluid container-team py-5">
        <div class="container pb-5">
            <div class="row g-5 align-items-center mb-5">
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                    <img class="img-fluid w-100" src="img/char.PNG" alt="">
                </div>
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-6 mb-3">Vidya Jothi Professor Lal Chandrasena</h1>
                    <p class="mb-1">Director/General Manager</p>
                    <p class="mb-4">Nawaloka Holdings is one of the leading icon in Sri Lanka span across health care, Construction, Manufacturing, Trading, and aviation. The entry of the group to the field of healthcare education marks a new chapter of high quality, affordable, competency base a healthcare education in the country. Technical and Vocational Education and Training (TVET) has been given a prominent focus in the national development to address youth unemployment and skills shortages of healthcare industry. The Nawaloka Institute of healthcare is registered with Tertiary Vocational and Education Commission (TVEC) & Private Health Services Regulatory Council ( PHSRC) in providing the required healthcare training. The Institute is an authorized training center of the American Safety & Health Institute (ASHI) TO CONDUCT Basic Life Support trainings. All the training conducted by the institute are accredited by the Tertiary & Vocational Education Commission (TVEC). These qualifications are recognized nationally & internationally. Trained and certified students have many opportunities of employment in healthcare industries. Responding to the rising demand for well trained & certified healthcare workers Nawaloka Institute of Healthcare (NIH) continues to adapt to the changing environments like the COVID-19 pandemic The management and staff of NIH are committed to empowering Sri Lankan youth through the opportunities available, and the resilience and ability to adapt, and face any situation for success in healthcare sector. Nawaloka Institute of Healthcare (NIH) will endeavor to sustain Sri Lankan government’s vision to be an international hub of excellence for healthcare education. It is our pleasure to be an active contributor to country’s knowledge based economic growth</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/1.PNG" alt="">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Mr. Tuan Jamalon</h5>
                            <span>Head of Institute</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/2.PNG" alt="">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Mr. Sudantha Senevirathne</h5>
                            <span>Manager –Training & Development</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/3.PNG" alt="">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Mrs. S.Gunawardene</h5>
                            <span>Clinical Instructor</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/po.PNG" alt="">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Mrs. Soma Rathnayake</h5>
                            <span>NTS Principal</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

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