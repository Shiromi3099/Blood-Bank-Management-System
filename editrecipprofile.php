<?php
session_start(); 

// Check if the user is logged in
if(!isset($_SESSION['uid'])) {
    // Redirect to the login page if not logged in
    header("Location: login.php");
    exit();
}

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

$uid = $_SESSION['uid'];

// Check if form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $mob = $_POST['mob'];
    $btype = $_POST['btype'];
    $mcondition = $_POST['mcondition'];
    $Srequirements = $_POST['srequirements'];

    // SQL query to update recipient information based on UID
    $sql = "UPDATE users u 
            INNER JOIN recipient r ON u.uid = r.uid 
            SET u.name = '$fullname', u.email = '$email', u.mobno = '$mob', 
                r.btype_required = '$btype', r.mcondition = '$mcondition', r.srequirement = '$Srequirements' 
            WHERE u.uid = $uid";

    if ($conn->query($sql) === TRUE) {
        // Redirect to the profile page after successful update
        header("Location: recipprofile.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// SQL query to fetch recipient information based on UID
$sql = "SELECT u.name, u.email, u.mobno, r.btype_required, r.mcondition, r.srequirement 
        FROM users u 
        INNER JOIN recipient r ON u.uid = r.uid 
        WHERE u.uid = $uid";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of the user
    $row = $result->fetch_assoc();
    $fullname = $row['name'];
    $email = $row['email'];
    $mob = $row['mobno'];
    $btype = $row['btype_required'];
    $mcondition = $row['mcondition'];
    $Srequirements = $row['srequirement'];
} else {
    // If user information is not found
    $fullname = "Unknown";
    $email = "";
    $mob = "";
    $btype = "";
    $mcondition = "";
    $Srequirements = "";
}

// Close connection
$conn->close();
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
    <link href="css/profstyle.css" rel="stylesheet">
</head>
<body>
<!-- Topbar Start -->
<div class="container-fluid py-2 d-none d-lg-flex">
    <div class="container">
        <div class="d-flex justify-content-between">
            <div>
                <small class="me-3"><i class="fa fa-map-marker-alt me-2"></i> 23 , Deshamanya H K Dharmadasa
                    Mawatha, Colombo 00200</small>
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
<div class="container">
    <div class="main-body">
        <div class="container">
            <div class="main-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-column align-items-center text-center">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png"
                                                 alt="Admin" class="rounded-circle" width="150">
                                            <div class="mt-3">
                                                <h4><?php echo $fullname; ?></h4>
                                                <p class="text-secondary mb-1">Blood Recipient</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <form method="post">
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Full Name</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" class="form-control" name="fullname" value="<?php echo $fullname; ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Email</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Mobile</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" class="form-control" name="mob" value="<?php echo $mob; ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Blood Type</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" class="form-control" name="btype" value="<?php echo $btype; ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Medical Condition</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" class="form-control" name="mcondition" value="<?php echo $mcondition; ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Specific Requirements</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" class="form-control" name="srequirements" value="<?php echo $Srequirements; ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9 text-secondary">
                                            <button type="submit" class="btn btn-primary px-4">Save Changes</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
