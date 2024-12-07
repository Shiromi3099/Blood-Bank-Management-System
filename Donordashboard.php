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

// Retrieve UID from session (ensure proper validation and sanitation)
if (!isset($_SESSION['uid']) || !is_numeric($_SESSION['uid'])) {
    die("Invalid user session");
}
$uid = intval($_SESSION['uid']);

// Handle POST request to update blood request status
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'])) {
    $request_id = intval($_POST['id']);

    // Update the status to 'accepted'
    $sql_update = "UPDATE bloodrequest SET status = 'Accepted' WHERE id = ? AND donor_id = ?";
    $stmt_update = $conn->prepare($sql_update);

    if (!$stmt_update) {
        echo "Prepare failed: " . $conn->error; // Check for prepare statement errors
        exit();
    }

    $stmt_update->bind_param("ii", $request_id, $uid);

    if ($stmt_update->execute()) {
        echo "success"; // Echo 'success' to indicate successful update
    } else {
        echo "Error updating record: " . $stmt_update->error; // Provide detailed error message
    }

    exit(); // Stop further execution after processing the POST request
}

// Fetch donor name based on UID using prepared statement
$sql_donor = "SELECT name FROM users WHERE uid = ?";
$stmt_donor = $conn->prepare($sql_donor);
$stmt_donor->bind_param("i", $uid);
$stmt_donor->execute();
$result_donor = $stmt_donor->get_result();

if (!$result_donor) {
    die("Error fetching donor name: " . $stmt_donor->error);
}

if ($result_donor->num_rows > 0) {
    $row_donor = $result_donor->fetch_assoc();
    $donor_name = $row_donor["name"];
} else {
    $donor_name = "Unknown";
}

// Fetch blood request details where donor_id matches logged-in UID
$sql_requests = "SELECT br.id, 
                       u.name AS recipient_name,
                       br.request_date,
                       r.btype_required,
                       r.mcondition,
                       r.srequirement
                 FROM bloodrequest br
                 JOIN users u ON br.recipient_id = u.uid
                 LEFT JOIN recipient r ON br.recipient_id = r.uid
                 WHERE br.donor_id = ?";
$stmt_requests = $conn->prepare($sql_requests);
$stmt_requests->bind_param("i", $uid);
$stmt_requests->execute();
$result_requests = $stmt_requests->get_result();

if (!$result_requests) {
    die("Error fetching blood requests: " . $stmt_requests->error);
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Donor Dashboard</title>
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
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>BBMS</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo htmlspecialchars($donor_name); ?></h6>
                        <span>Donor</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="Donordashboard.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Setting</a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="index.php" class="dropdown-item">Log Out</a>
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
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                           
                           
                          
                            
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notification</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            
                            
                            
                          
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <span class="d-none d-lg-inline-flex"> <h6 class="mb-0"><?php echo htmlspecialchars($donor_name); ?></h6></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="donprofile.php" class="dropdown-item">My Profile</a>
                            <a href="index.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <!-- Recent Requests Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Recent Requests</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col">ID</th>
                                    <th scope="col">Recipient Name</th>
                                    <th scope="col">Requested Date </th>
                                    <th scope="col">Blood Type Required</th>
                                    <th scope="col">Specific Requirements</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tbody>
    <?php
    if ($result_requests->num_rows > 0) {
        // Output data of each row
        while($row = $result_requests->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row["id"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["recipient_name"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["request_date"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["btype_required"]) . "</td>";
            echo "<td>";
            if (!empty($row["srequirement"])) {
                echo htmlspecialchars($row["srequirement"]);
            } else {
                echo "No specific requirements";
            }
            echo "</td>";
            echo "<td><button onclick='acceptRequest(" . htmlspecialchars($row["id"]) . ")' class='btn btn-success btn-sm'>Accept</button></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='6'>No requests found</td></tr>";
    }
    ?>
</tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Requests End -->
            

            <!-- Widgets Start -->
           
            <!-- Widgets End -->
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
    function acceptRequest(requestId) {
        $.ajax({
            url: 'Donordashboard.php', // Ensure this is the correct endpoint
            type: 'POST',
            data: { id: requestId },
            success: function(response) {
                if (response.trim() === 'success') {
                    alert('Request accepted successfully');
                    location.reload(); // Reload the page on success
                } else {
                    alert('Error accepting request');
                }
            },
            error: function(xhr, status, error) {
                alert('Error: ' + error);
            }
        });
    }
</script>

</body>

</html>
