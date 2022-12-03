<?php
if (isset($_POST["submit1"])) {
    $cho=$_POST["login"];
    if ($cho == "Doctor") {
        header('Location:doctor.php');
    }
    if ($cho == "Patient") {
        header('Location:patient.php');
    }
    if ($cho == "Appointment") {
        header('Location:appointment_view.php');
    }
}

?>

