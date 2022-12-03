<?php
$conn = new mysqli("localhost", "root", "", "health");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
if (isset($_POST["submit1"])) {
    $type = $_POST['login'];
    $uname = $_POST['uname'];
    $pword = $_POST['pword'];
    $queryp = "select * from patient_credentials where Username='$uname' and  Password='$pword'";
    $queryd = "select * from doctor_credentials where Username='$uname' and  Password='$pword'";
    $querya = "select * from admin_credentials where Username='$uname' and  Password='$pword'";
    if ($type == "Admin") {
        $result = mysqli_query($conn, $querya);
    }
    if ($type == "Doctor") {
        $result = mysqli_query($conn, $queryd);
    }
    if ($type == "Patient") {
        $result = mysqli_query($conn, $queryp);
    }
    // $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        // echo "Login sucessful";
        header('Location:appointment.html');
        // if ($type == "Admin") {
        //     $result = mysqli_query($conn, $querya);
        // }
        // if ($type == "Doctor") {
        //     $result = mysqli_query($conn, $queryd);
        // }
        // if ($type == "Patient") {
        //     header('Location:appointment.html');
        // }
        //     session_start();
        //     $cookie_name = "user";
        //     $cookie_value = $uname;
        //     setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
        //     if (!isset($_COOKIE[$cookie_name])) {
        //         echo "Cookie named '" . $cookie_name . "' is not set!";
        //     } else {
        //         date_default_timezone_set("Asia/Kolkata");
        //         $dt = date("h:i:sa");
        //         echo '<script type="text/JavaScript"> 
        //   alert("Cookie Is Set For ' . $_COOKIE[$cookie_name] . ' For 30 Days At Time ' . $dt . ' "); 
        //   alert(" ' . $uname . ' ,Your Session Is Started");
        //    window.location.replace("success.html");
        //   </script>';
        //     }
    } else {
        // echo "Login unsucessful";
        // header('Location:unsuccessful.php');
        echo "<script>alert('Invalid Credentials!!');
        window.location.replace('index8.html');
        </script>";
    }
    // header('Location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>