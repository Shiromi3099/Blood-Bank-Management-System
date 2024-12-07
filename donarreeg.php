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

// Function to sanitize input
function sanitize_input($data) {
    global $conn;
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $conn->real_escape_string($data);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fullname = sanitize_input($_POST['fullname']);
    $age = sanitize_input($_POST['age']);
    $email = sanitize_input($_POST['email']);
    $mob = sanitize_input($_POST['mob']);
    $btype = sanitize_input($_POST['btype']);
    $mcondition = sanitize_input($_POST['mcondition']);
    $uname = sanitize_input($_POST['uname']);
    $password = sanitize_input($_POST['password']);
    $cpassword = sanitize_input($_POST['cpassword']);

    // Check if passwords match
    if ($password != $cpassword) {
        echo "<script>alert('Passwords do not match'); window.location='registration.php';</script>";
        exit; // Prevent further execution
    }

    // Hash the passwords
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $hashed_cpassword = password_hash($cpassword, PASSWORD_DEFAULT);

    // Insert data into the users table
    $query_user = "INSERT INTO users (name, email, mobno, uname, password, cpassword) 
                   VALUES ('$fullname', '$email', '$mob', '$uname', '$hashed_password', '$hashed_cpassword')";
    $query_user_executed = $conn->query($query_user);

    // Retrieve the user ID of the inserted record
    $user_id = $conn->insert_id;

    // Insert data into the donor table
    $query_donor = "INSERT INTO donor (uid, age, bloodtype, Mhistory) 
                    VALUES ('$user_id', '$age', '$btype', '$mcondition')";
    $query_donor_executed = $conn->query($query_donor);

    // Check if both queries were successful
    if ($query_user_executed && $query_donor_executed) {
        echo "<script>alert('Registered successfully!'); window.location='login.php';</script>";
        exit; // Prevent further execution
    } else {
        echo "Error: " . $query_user . "<br>" . $conn->error;
        echo "Error: " . $query_donor . "<br>" . $conn->error;
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor Registration Form</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <section class="form-02-main">
        <div class="container">
            <div class="col-md-12">
                <div class="_lk_de">
                    <div class="form-03-main">
                        <div class="logo">
                            <img src="assets/images/lo.PNG">
                            <h1 class="fs-4 card-title fw-bold mb-4 register-heading">Register</h1>
                        </div>
                        <form id="registrationForm" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" onsubmit="return validateForm()">
                            <div class="form-group">
                                <input type="text" name="fullname" class="form-control _ge_de_ol" placeholder="Full Name" required aria-required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" name="age" class="form-control _ge_de_ol" placeholder="age" required aria-required="true">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control _ge_de_ol" placeholder="Email" required aria-required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" name="mob" class="form-control _ge_de_ol" placeholder="Mobile No" required aria-required="true">
                            </div>
                            <div class="form-group">
                                <select name="btype" class="form-control _ge_de_ol" required aria-required="true">
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
                            </div>
                            <div class="form-group">
                                <textarea class="form-control _ge_de_ol" placeholder="Medihistory" rows="5" name="mcondition"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="text" name="uname" class="form-control _ge_de_ol" placeholder="Enter UserName" required aria-required="true">
                            </div>
                            <div class="form-group">
                                <input type="password" id="password" name="password" class="form-control _ge_de_ol" placeholder="Password" required aria-required="true">
                            </div>
                            <div class="form-group">
                                <input type="password" id="cpassword" name="cpassword" class="form-control _ge_de_ol" placeholder="Confirm Password" required aria-required="true">
                                <div id="passwordMatchError" style="display:none;color:red;">Passwords do not match</div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="_btn_04">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function validateForm() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("cpassword").value;
            if (password != confirmPassword) {
                document.getElementById("passwordMatchError").style.display = "block";
                return false;
            }
            return true;
        }
    </script>
</body>
</html>

