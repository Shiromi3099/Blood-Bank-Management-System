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
    <title>BloodBank BlogPage</title>
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
            <h1 class="display-2 text-white mb-3 animated slideInDown">Blog</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item" aria-current="page">Blog</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    
    <!-- Features Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-0 feature-row">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="feature-item border h-100 p-5">
                        <div class="image-box mb-4">
                            <img src="img/A1.PNG" alt="A Positive">
                        </div>
                        <h5 class="mb-3">A Positive</h5>
                        <p class="mb-0">A+ blood have red blood cells with antigen A on their surface and the Rh antigen (Rh factor).Can receive blood that’s A positive, A negative, O positive or O negative</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="feature-item border h-100 p-5">
                        <div class="image-box mb-4">
                            <img src="img/B1.PNG" alt="B Positive">
                        </div>
                        <h5 class="mb-3">B Positive</h5>
                        <p class="mb-0">B+ blood have red blood cells with antigen B on their surface and the Rh antigen (Rh factor).Can receive blood that’s B positive, B negative, O positive or O negative.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="feature-item border h-100 p-5">
                        <div class="image-box mb-4">
                            <img src="img/AB1.PNG" alt="AB Positive">
                        </div>
                        <h5 class="mb-3">AB Positive</h5>
                        <p class="mb-0"> AB+ blood have red blood cells with both antigen A and antigen B on their surface and the Rh antigen (Rh factor).Can receive any blood type.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="feature-item border h-100 p-5">
                        <div class="image-box mb-4">
                            <img src="img/O1.PNG" alt="O Positive">
                        </div>
                        <h5 class="mb-3">O Positive</h5>
                        <p class="mb-0">O+ blood lack both antigen A and antigen B on their red blood cells but have the Rh antigen (Rh factor).Can receive blood that’s O positive or O negative.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="feature-item border h-100 p-5">
                        <div class="image-box mb-4">
                            <img src="img/A3.PNG" alt="A Negative">
                        </div>
                        <h5 class="mb-3">A Negative</h5>
                        <p class="mb-0">  A- blood have red blood cells with antigen A but lack the Rh antigen (Rh factor).Can receive blood that’s A negative or O negative.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="feature-item border h-100 p-5">
                        <div class="image-box mb-4">
                            <img src="img/B2.PNG" alt="B Negative">
                        </div>
                        <h5 class="mb-3">B Negative</h5>
                        <p class="mb-0">B- blood have red blood cells with antigen B but lack the Rh antigen (Rh factor).Can receive blood that’s B negative or O negative.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="feature-item border h-100 p-5">
                        <div class="image-box mb-4">
                            <img src="img/AB2.PNG" alt="AB Negative">
                        </div>
                        <h5 class="mb-3">AB Negative</h5>
                        <p class="mb-0"> AB- blood have red blood cells with both antigen A and antigen B but lack the Rh antigen (Rh factor).Can receive blood that’s AB negative, A negative, B negative or O negative.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="feature-item border h-100 p-5">
                        <div class="image-box mb-4">
                            <img src="img/O2.PNG" alt="O Negative">
                        </div>
                        <h5 class="mb-3">O Negative</h5>
                        <p class="mb-0">  O- blood lack both antigen A, antigen B, and the Rh antigen (Rh factor) on their red blood cells.Can only receive blood that’s O negative.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->
 <!-- Testimonial Start -->
 <div class="container-fluid testimonial py-5">
    <div class="container pt-5">
        <div class="row gy-5 gx-0">
            <div class="col-lg-6 pe-lg-5 wow fadeIn" data-wow-delay="0.3s">
                <h1 class="display-6 text-white mb-4">Hygiene and Safety protocols during donation</h1>
                <p class="text-white mb-5">During blood donation, stringent hygiene and safety protocols are upheld to prevent contamination and ensure the health and safety of both donors and recipients, encompassing measures such as disinfection of equipment, donor screening for health conditions, and maintaining a sterile environment throughout the donation process.</p>
            </div>
            <div class="col-lg-6 mb-n5 wow fadeIn" data-wow-delay="0.5s">
                <div class="bg-white p-5">
                    <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.1s">
                        <div class="testimonial-item">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-chat-left-quote text-dark"></i>
                            </div>
                            <p class="fs-5 mb-4">Drink plenty of fluids, especially water, in the 24 hours leading up to your donation. Proper hydration helps maintain blood volume and makes it easier for the phlebotomist to draw blood.
                            </p>
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0" src="img/st.jpg" alt="">
                                <div class="ps-3">
                                    <h5 class="mb-1">Stay Hydrated</h5>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-chat-left-quote text-dark"></i>
                            </div>
                            <p class="fs-5 mb-4">Have a balanced meal rich in iron and vitamins, such as leafy greens, lean proteins, and whole grains, before donating blood. Avoid fatty foods as they can affect the lipid profile of your blood.</p>
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0" src="img/n.jpg" alt="">
                                <div class="ps-3">
                                    <h5 class="mb-1">Eat a Nutritious Meal</h5>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-chat-left-quote text-dark"></i>
                            </div>
                            <p class="fs-5 mb-4">Refrain from consuming alcoholic beverages for at least 24 hours before donating blood. Alcohol can dehydrate you and affect the quality of your blood. Limit your intake of caffeinated beverages, such as coffee and energy drinks, on the day of donation. While moderate caffeine consumption is generally acceptable, excessive amounts can affect your blood pressure and hydration levels.</p>
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0" src="img/avo.jfif" alt="">
                                <div class="ps-3">
                                    <h5 class="mb-1">Avoid Caffeine & Alcohol</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->




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