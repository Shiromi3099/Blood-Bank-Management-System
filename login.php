<?php
session_start(); // Start the session
function connect_to_db() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bloodbank";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    return $conn;
}

// Function to log in users
function login($uname, $password) {
    $conn = connect_to_db();

    if ($uname === "ravichandran" && $password === "081969") {
        // Admin login successful
        $_SESSION['uid'] = 'admin'; // Set UID for admin
        redirect_to_page("admin dash.php");
        return;
    }
    
    // Prepare SQL statement to check if user exists in users table
    $sql = "SELECT * FROM users WHERE uname = ?";
    $stmt = $conn->prepare($sql);
    
    // Check if statement preparation was successful
    if ($stmt === false) {
        die("Error in preparing SQL statement: " . $conn->error);
    }
    
    // Bind parameters
    $stmt->bind_param("s", $uname);
    
    // Execute statement
    $stmt->execute();
    
    // Get result
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        // User found in users table
        $user_data = $result->fetch_assoc();
        $stored_hash = $user_data['password']; // Stored hashed password
        
        // Verify password
        if (password_verify($password, $stored_hash)) {
            $uid = $user_data['uid'];
            
            // Set UID in session
            $_SESSION['uid'] = $uid;
            
            // Check if user is a donor
            $sql = "SELECT * FROM donor WHERE uid = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $uid);
            $stmt->execute();
            $result = $stmt->get_result();
            
            if ($result->num_rows > 0) {
                // User is a donor
                redirect_to_page("Donordashboard.php");
            } else {
                // Check if user is a recipient
                $sql = "SELECT * FROM recipient WHERE uid = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $uid);
                $stmt->execute();
                $result = $stmt->get_result();
                
                if ($result->num_rows > 0) {
                    // User is a recipient
                    redirect_to_page("recipientdash.php");
                } else {
                    // User not found in either donor or recipient table
                    echo "User type not recognized.";
                }
            }
        } else {
            // Invalid password
            echo "Invalid password.";
        }
    } else {
        // Invalid username
        echo "Invalid username.";
    }
    
    // Close statement
    $stmt->close();
}

// Function to redirect user to a specific page
function redirect_to_page($page) {
    header("Location: $page");
    exit();
}

// Example usage:
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from login form
    $uname = $_POST["username"];
    $password = $_POST["password"];
    
    // Call login function
    login($uname, $password);
}

?>

<!DOCTYPE html>
<html>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Blood Bank Index</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

      <link href="assets/css/style.css" rel="stylesheet">
   </head>
   <body>
    <section class="form-02-main">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="_lk_de">
                <div class="form-03-main">
                  <div class="logo">
                    <img src="assets/images/lo.PNG">
  
                    <h1 class="fs-4 card-title fw-bold mb-4 register-heading">Log In</h1>
                    
                  </div>
                  <form method="post" action="login.php">
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control _ge_de_ol" placeholder="User Name" required="">
                                </div>

                                <div class="form-group">
                                    <input type="password" name="password" class="form-control _ge_de_ol" placeholder="Enter Password" required="">
                                </div>
                                
                                <div class="form-group">
                                    
                                    <button type="submit" class="_btn_04">Log In</button>
                                    </div>
                                </div>
                            </form>
                            <!-- End of form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>