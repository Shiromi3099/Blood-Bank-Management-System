<?php
session_start(); 

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

// Retrieve UID from session
$uid = $_SESSION['uid'];

// SQL query to fetch recipient name based on UID
$sql = "SELECT name FROM users WHERE uid = $uid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    $row = $result->fetch_assoc();
    $recipient_name = $row["name"];
} else {
    $recipient_name = "Unknown";
}

// Check if 'bloodtype' key exists in $_GET array
$selected_blood_type = isset($_GET['bloodtype']) ? $_GET['bloodtype'] : "";

// Initialize $result variable
$result = null;

// SQL query to retrieve donors with the selected blood type
if (!empty($selected_blood_type)) {
    $sql = "SELECT donor.*, users.name 
            FROM donor 
            INNER JOIN users ON donor.uid = users.uid
            WHERE donor.bloodtype = '$selected_blood_type'";

    $result = $conn->query($sql);

    if ($result === false) {
        // Query execution failed
        echo "Error: " . $conn->error;
        exit; // Exit the script
    }
}

// Handle "View Details" action
// Handle "Request Blood" action
if (isset($_GET['donor_uid'])) {
    $donor_uid = $_GET['donor_uid'];
    $recipient_uid = $uid;

    // Insert donor_uid and recipient_uid into the bloodrequest table
    $sql = "INSERT INTO bloodrequest (donor_id, recipient_id) VALUES ('$donor_uid', '$recipient_uid')";
    if ($conn->query($sql) === TRUE) {
        // Set session variable for success message
        $_SESSION['request_sent'] = true;
        // Redirect back to the same page to prevent resubmission on refresh
        header("Location: ".$_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Recipient Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib1/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib1/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min1.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style1.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>BBMS</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                     <h6 class="mb-0"><?php echo $recipient_name; ?></h6>
                     <span>Recipient</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="Donordashboard.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Setting</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="recipprofile.php" class="dropdown-item">Profile </a>
                            <a href="index.php" class="dropdown-item">Log out</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4" method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <!-- Assuming the form submits to the same PHP script -->
    <select class="form-select border-0" name="bloodtype">
    <option value="" disabled selected>Select Blood Type</option>
    <option value="A+">A+</option>
    <option value="A-">A-</option>
    <option value="B+">B+</option>
    <option value="B-">B-</option>
    <option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
    <option value="O+">O+</option>
    <option value="O-">O-</option>
</select>

    <button type="submit" class="btn btn-secondary btn-sm">Search</button>
</form>


                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                           
                            <hr class="dropdown-divider">
                            
                            <hr class="dropdown-divider">
                            
                            <hr class="dropdown-divider">
                          
                        </div>
                    </div>
                
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <span class="d-none d-lg-inline-flex"><?php echo $recipient_name; ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="recipprofile.php" class="dropdown-item">My Profile</a>
                            <a href="index.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Blood Donors</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col">Donor Id</th>
                                    <th scope="col">Donor Name</th>
                                    <th scope="col">Blood Type</th>
                                    <th scope="col">Medical History</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                        if (!empty($selected_blood_type) && $result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<td>" . $row['uid'] . "</td>";
                                                echo "<td>" . $row['name'] . "</td>";
                                                echo "<td>" . $row['bloodtype'] . "</td>";
                                                echo "<td>" . $row['Mhistory'] . "</td>";
                                                echo "<td><a href='?donor_uid=" . $row['uid'] . "' class='btn btn-primary'>Request Blood</a></td>";
                                                echo "</tr>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='4'>No donors found for the selected blood type.</td></tr>";
                                        }
                                        ?>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
            <!-- Recent Sales End -->
             <!-- Pop-up Message Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Success!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Blood request sent successfully.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib1/chart/chart.min.js"></script>
    <script src="lib1/easing/easing.min.js"></script>
    <script src="lib1/waypoints/waypoints.min.js"></script>
    <script src="lib1/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib1/tempusdominus/js/moment.min.js"></script>
    <script src="lib1/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib1/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main1.js"></script>
    <script>
        // Check if session variable is set and show modal if true
        <?php if(isset($_SESSION['request_sent']) && $_SESSION['request_sent']): ?>
            $(document).ready(function(){
                $('#successModal').modal('show');
            });
        <?php 
            // Unset the session variable after showing the modal
            unset($_SESSION['request_sent']);
        ?>
        <?php endif; ?>
    </script>
</body>

</html>
