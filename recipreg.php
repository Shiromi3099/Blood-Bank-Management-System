<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    // Escape user inputs for security
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mob = mysqli_real_escape_string($conn, $_POST['mob']);
    $btype = mysqli_real_escape_string($conn, $_POST['btype']);
    $mcondition = mysqli_real_escape_string($conn, $_POST['mcondition']);
    $Srequirements = mysqli_real_escape_string($conn, $_POST['Srequirements']);
    $uname = mysqli_real_escape_string($conn, $_POST['uname']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

    // Hash passwords
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $hashed_cpassword = password_hash($cpassword, PASSWORD_DEFAULT);
    
    // Insert data into users table
    $sql = "INSERT INTO users (name, email, mobno, uname, password, cpassword)
    VALUES ('$fullname', '$email', '$mob', '$uname', '$hashed_password', '$hashed_cpassword')";

    if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id;
        // Insert data into recipient table
        $sql2 = "INSERT INTO recipient (uid, btype_required, mcondition, srequirement)
        VALUES ('$last_id', '$btype', '$mcondition', '$Srequirements')";
        if ($conn->query($sql2) === TRUE) {
            echo "<script>alert('User registered successfully'); window.location.href = 'login.php';</script>";
        } else {
            echo "Error: " . $sql2 . "<br>" . $conn->error;
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
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
                                <textarea class="form-control _ge_de_ol" placeholder="Medical condition" rows="5" name="mcondition"></textarea>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control _ge_de_ol" placeholder="Specific Requirements" rows="5" name="Srequirements"></textarea>
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
