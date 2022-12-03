<?php
$conn = new mysqli("localhost", "root", "", "health");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
if (isset($_POST["submit1"])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $pno = $_POST['pno'];
    $addr = $_POST['addr'];
    $email = $_POST['emai'];
    $uname = $_POST['uname'];
    $pword = $_POST['pwd'];
    $query = "select * from patient_credentials where Username='$uname' ";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        echo "<script>alert('Username Is Already Registered!!');
        window.location.replace('reg4.html');
        </script>";
    } else {
        $status="Approved";
        $newuser = "INSERT INTO `patient_credentials`(`First Name`, `Last Name`, `Gender`, `Phone No`, `Email`, `Address`, `Username`, `Password`,`Status`) VALUES ('$fname','$lname','$gender','$pno','$addr','$email','$uname','$pword','$status')";
        if (mysqli_query($conn, $newuser)) {

            // header('Location:index.html');
            echo "<script>alert('Registered suessfully !!');
        window.location.replace('appointment.html');
        </script>";
        } else {
            echo 'query error: ' . mysqli_error($conn);
        }
    }
}