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
    <title>Nawaloka Blood Bank</title>
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
    <!-- Carousel Start -->
    <div class="container-fluid header-carousel px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/p4.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7 text-start">
                                    <h1 class="display-1 text-white animated slideInLeft mb-3">Blood Bank Management System</h1>
                                    <p class="mb-5 animated slideInLeft">Blood is meant for Circulation Donate blood and save the Life..........</p>
                                    <a href="donarreeg.php" class="btn btn-primary py-3 px-5 animated slideInRight">Donor Signup</a>
                                    <a href="recipreg.php" class="btn btn-primary py-3 px-5 animated slideInRight">Recipient Signup </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/th.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-7 text-end">
                                    <h1 class="display-1 text-white animated slideInLeft mb-3">Blood Bank Management System</h1>
                                    <p class="mb-5 animated slideInLeft">Blood is meant for Circulation Donate blood and save the Life..........</p>
                                    <a href="donarreeg.php" class="btn btn-primary py-3 px-5 animated slideInRight">Donor Signup</a>
                                    <a href="recipreg.php" class="btn btn-primary py-3 px-5 animated slideInRight">Recipient Signup </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->
         
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
                <p class="mb-4">Nawaloka Blood Bank is the heartbeat of Nawaloka Hospitals, pulsating with a commitment to saving lives. As a vital arm of the hospital, the blood bank plays a crucial role in ensuring a steady and safe supply of blood for patients in need.</p>
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

    <!-- Service Start -->
    <div class="container-fluid container-service py-5">
        <div class="container pt-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 mb-3">Our Services</h1>
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

 <!-- Team Start -->
 <div class="container-fluid container-team py-5">
    <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
        <h1 class="display-6 mb-3">Our Team</h1>
        <p class="mb-5"></p>
    </div>
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

        <!-- Features Start -->
        <div class="container-fluid py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 mb-3">Our Blogs </h1>
                <p class="mb-5"></p>
            </div>
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