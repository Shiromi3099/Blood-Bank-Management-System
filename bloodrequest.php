<?php
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

// Fetch blood request data
$sql = "SELECT br.id AS request_id, u1.name AS donor_name, u2.name AS recipient_name, br.request_date
        FROM bloodrequest br 
        JOIN users u1 ON br.donor_id = u1.uid 
        JOIN users u2 ON br.recipient_id = u2.uid";
$result = $conn->query($sql);

// Check if query executed successfully
if (!$result) {
    die("Query failed: " . $conn->error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $request_id = $_POST['request_id'];
    $t_date = $_POST['t_date'];
    $t_location = $_POST['t_location'];

    $sql = "UPDATE bloodrequest SET t_date=?, t_location=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $t_date, $t_location, $request_id);

    if ($stmt->execute()) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Donor List</title>
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
                        <h6 class="mb-0">Rajapaksa</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="admin dash.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>View</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="donorlist.php" class="dropdown-item">Donor list</a>
                            <a href="recipientlist.php" class="dropdown-item">Recipent</a>
                        </div>
                    </div>
                    <a href="bloodrequest.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Accepted request</a>
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

                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <span class="d-none d-lg-inline-flex">Rajapaksa</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="index.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
            <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Blood Donors</h6>
            </div>
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                            <tr class="text-dark">
                                <th scope="col">Request Id</th>
                                <th scope="col">Donor Name</th>
                                <th scope="col">Recipient Name</th>
                                <th scope="col">Requested Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($result->num_rows > 0) {
                                // Output data of each row
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . $row["request_id"] . "</td>";
                                    echo "<td>" . $row["donor_name"] . "</td>";
                                    echo "<td>" . $row["recipient_name"] . "</td>";
                                    echo "<td>" . $row["request_date"] . "</td>";
                                    echo "<td><a href='#' class='btn btn-secondary' data-bs-toggle='modal' data-bs-target='#editModal" . $row["request_id"] . "'>View</a></td>";
                                    echo "</tr>";
                                    echo "<div class='modal fade' id='editModal" . $row["request_id"] . "' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                            <div class='modal-dialog'>
                                                <div class='modal-content'>
                                                    <div class='modal-header'>
                                                        <h5 class='modal-title' id='exampleModalLabel'>Edit Blood Request</h5>
                                                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                                    </div>
                                                    <div class='modal-body'>
                                                        <form method='post' action=''>
                                                            <div class='mb-3'>
                                                                <label for='request_id' class='form-label'>Request Id</label>
                                                                <input type='text' class='form-control' name='request_id' value='" . $row['request_id'] . "' readonly>
                                                            </div>
                                                            <div class='mb-3'>
                                                                <label for='donor_name' class='form-label'>Donor Name</label>
                                                                <input type='text' class='form-control' name='donor_name' value='" . $row['donor_name'] . "' readonly>
                                                            </div>
                                                            <div class='mb-3'>
                                                                <label for='recipient_name' class='form-label'>Recipient Name</label>
                                                                <input type='text' class='form-control' name='recipient_name' value='" . $row['recipient_name'] . "' readonly>
                                                            </div>
                                                            <div class='mb-3'>
                                                                <label for='request_date' class='form-label'>Requested Date</label>
                                                                <input type='text' class='form-control' name='request_date' value='" . $row['request_date'] . "' readonly>
                                                            </div>
                                                            <div class='mb-3'>
                                                                <label for='t_date' class='form-label'>Transfusion Date</label>
                                                                <input type='date' class='form-control' name='t_date' value=''>
                                                            </div>
                                                            <div class='mb-3'>
                                                                <label for='t_location' class='form-label'>Transfusion Location</label>
                                                                <input type='text' class='form-control' name='t_location' value=''>
                                                            </div>
                                                            <div class='modal-footer'>
                                                                <button type='submit' class='btn btn-primary'>Update</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>";
                                }
                            } else {
                                echo "<tr><td colspan='5'>No requests found</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>

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
</body>

</html>