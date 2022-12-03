<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table,
    td,
    th {
        border: 3px solid black;
        border-collapse: collapse;
    }
    </style>
</head>
<?php

$conn2 = mysqli_connect('localhost', 'root', '', 'health');

// Check connection
if ($conn2->connect_error) {
    die("Connection failed: " . $conn2->connect_error);
}
// echo "Connected successfully";
if (isset($_POST["submit1"])) {

    // $sql3= 'SELECT `TOTAL CLASS` FROM `MAT4001` WHERE 1';

    // $result2= mysqli_query($conn2,$sql3);
    // $attn2=mysqli_fetch_all($result2,MYSQLI_ASSOC);
    // $sql4 = "UPDATE `MAT4001` SET `TOTAL CLASS`=`TOTAL CLASS`+1";
    // $result2 = mysqli_query($conn2, $sql4);
    $sql5 = "SELECT  `Username`,  `Status` FROM `doctor_credentials`";
    $result5 = mysqli_query($conn2, $sql5);
    // $attn5 = mysqli_fetch_all($result5, MYSQLI_ASSOC);

    // while($attn5 as $attnd5) {
    while ($attnd5 = mysqli_fetch_array($result5)) {
        // $num=$attnd2["TOTAL CLASS"]+1;
        // $sql4="UPDATE `MAT4001` SET `TOTAL CLASS`='$num' WHERE `USERID` = '$attnd2[];";
        if ($_POST[$attnd5['Username']] == 'Blocked') {
            $sql6 = "UPDATE `doctor_credentials` SET `Status`='Blocked'  WHERE `Username` = '" . $attnd5['Username'] . "'";
            $result6 = mysqli_query($conn2, $sql6);
            // $attn6 = mysqli_fetch_all($result6, MYSQLI_ASSOC);
            // echo "<script>alert('Saved Successfully!!');
            // window.location.replace('doctor.php');
            // </script>";
        }
        if ($_POST[$attnd5['Username']] == 'Delete') {
            $sql6 = "DELETE FROM `doctor_credentials` WHERE `Username` = '" . $attnd5['Username'] . "'";
            $result6 = mysqli_query($conn2, $sql6);
            // $attn6 = mysqli_fetch_all($result6, MYSQLI_ASSOC);
            // echo "<script>alert('Saved Successfully!!');
            // window.location.replace('doctor.php');
            // </script>";
        }
        if ($_POST[$attnd5['Username']] == 'Approv') {
            $sql7 = "UPDATE `doctor_credentials` SET `Status`='Approved'  WHERE `Username` = '" . $attnd5['Username'] . "'";
            $result7 = mysqli_query($conn2, $sql7);
            // $attn7 = mysqli_fetch_all($result7, MYSQLI_ASSOC);
        }
    }
    // header('Location:index8.html');
}

?>
<body>
    <table>
        <h1>Hi</h1>
        <tr>
            <th>First Name</th>
            <th>First Name</th>
            <th>First Name</th>
            <th>First Name</th>
            <th>First Name</th>
            <th>First Name</th>
            <th>First Name</th>
            <th>First Name</th>
            <th>First Name</th>
            <th>First Name</th>

        </tr>
        <?php
        //database connection
        // $conn = mysqli_connect('localhost', 'root', '', 'health');
        // if (!$conn) {
        //     // echo 'Connection error: ' . mysqli_connect_error();
        //     print "Connection Error";
        // } else {
        //     // echo 'Connection Sucessful';
        //     // print "Database Connection successful";
        // }
        // $sql = 'SELECT * FROM doctor_credentials';
        // $result = mysqli_query($conn, $sql);
        // $attn = mysqli_fetch_all($result, MYSQLI_ASSOC);
        // // print_r($attn);
        // // while($row = $result->fetch_assoc())
        // // {
        // //     echo $attn["Course Name"];
        // // }

        // foreach ($attn as $attnd) {
        //     echo "<tr>
        //             <td>" . $attnd["First Name"] . "</td>
        //             <td>" . $attnd["Last Name"] . "</td>
        //             <td>" . $attnd["Gender"] . "</td>
        //             <td>" . $attnd["Phone No"] . "</td>
        //             <td>" . $attnd["Email"] . "</td>
        //             <td>" . $attnd["Designation"] . "</td>
        //             <td>" . $attnd["Department"] . "</td>
        //             <td>" . $attnd["Location"] . "</td>
        //             <td>" . $attnd["Username"] . "</td>
        //             <td>" . $attnd["Password"] . "</td>


        //           </tr>";
        //     // echo $attnd["Course Code"];
        //     // <td>" .$attnd["Attendence Percent"] . "</td>
        // }


        ?>
    </table>
</body>

</html> -->
<!-- <td>" . $attnd["ATTENDED CLASS"] * 100 / $attnd["TOTAL CLASS"] . "</td> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://kit.fontawesome.com/78d75312e3.js">
    <link rel="stylesheet" href="style9.css">
</head>

<body>
    <div>
        <table class="header" style="width: 100%;">
            <tr class="tr1">
                <td class="td" style="width: 10%; padding-right: 1em; padding-left: 1em;"><img src="images/logo.png"
                        alt="No Image" height="75" width="150"></td>
                <td style="width: 50%; padding-left: 1em;">
                    <table>
                        <tr>
                            <td style="padding: 1em;" class="hover">
                                <a href="#pname" style="text-decoration: none;">
                                    <span class="align"><i class="fas fa-home home"></i> Home</span>
                                </a>
                            </td>
                            <td style="padding: 1em;" class="hover">
                                <a href="About_Us_Page.html" style="text-decoration: none;">
                                    <span class="align"><i class="fas fa-align-left about"></i> About Us</span>
                                </a>
                            </td>
                            <td style="padding: 1em;" class="hover">
                                <a href="Our_Team_Menu.html" target="_blank" style="text-decoration: none;">
                                    <span class="align"><i class="fas fa-users team"></i> Our Team</span>
                                </a>
                            </td>
                            <td style="padding: 1em;" class="hover">
                                <a href="Contact_US_Page.html" style="text-decoration: none;">
                                    <span class="align"><i class="fas fa-headset contact"></i> Contact Us</span>
                                </a>
                            </td>
                        </tr>
                    </table>
                </td>
                <td style="width: 40%; padding-left: 14.5em;">
                    <table>
                        <tr>
                            <!-- <td style="padding-right: 0.8em;"><button class="btn"><img src="download4.png" alt="" height="21px" width="14px"></button></td> -->
                            <td style="padding-right: 0.8em;" class="hover1"><a
                                    href="https://www.google.com/maps/place/Vellore+Institute+of+Technology+-+VIT+Chennai/@12.8406462,80.1512396,17z/data=!3m1!4b1!4m5!3m4!1s0x3a5259af8e491f67:0x944b42131b757d2d!8m2!3d12.840641!4d80.1534283"
                                    target="_blank" class="iconbtn fas fa-location-dot"></a></td>
                            <td><a href="#pname"><button class="button2 button1"><span style="font-weight: bold;">BOOK
                                            APPOINTMENT</span></button></a></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <br><br>
        <form id="form1" class="form" action="" method="post">
            <h1>Doctor Details</h1>
            <div id="view_table">

                <table class="doct" style="margin-left: auto; margin-right: auto;">
                    <tr>
                        <th class="doct">First Name</th>
                        <th class="doct">Last Name</th>
                        <th class="doct">Gender</th>
                        <th class="doct">Mob No</th>
                        <th class="doct">Email</th>
                        <th class="doct">Designation</th>
                        <th class="doct">Department</th>
                        <th class="doct">Location</th>
                        <th class="doct">Username</th>
                        <th class="doct">Status</th>
                        <th class="doct">Edit</th>
                    </tr>
                    <?php
                    //database connection
                    $conn = mysqli_connect('localhost', 'root', '', 'health');
                    if (!$conn) {
                        // echo 'Connection error: ' . mysqli_connect_error();
                        print "Connection Error";
                    } else {
                        // echo 'Connection Sucessful';
                        // print "Database Connection successful";
                    }
                    $sql = 'SELECT * FROM doctor_credentials';
                    $result = mysqli_query($conn, $sql);
                    $attn = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    // print_r($attn);
                    // while($row = $result->fetch_assoc())
                    // {
                    //     echo $attn["Course Name"];
                    // }

                    foreach ($attn as $attnd) {
                        echo "<tr>
                    <td class='doct'>" . $attnd["First Name"] . "</td>
                    <td class='doct'>" . $attnd["Last Name"] . "</td>
                    <td class='doct'>" . $attnd["Gender"] . "</td>
                    <td class='doct'>" . $attnd["Phone No"] . "</td>
                    <td class='doct'>" . $attnd["Email"] . "</td>
                    <td class='doct'>" . $attnd["Designation"] . "</td>
                    <td class='doct'>" . $attnd["Department"] . "</td>
                    <td class='doct'>" . $attnd["Location"] . "</td>
                    <td class='doct'>" . $attnd["Username"] . "</td>
                    <td class='doct'>" . $attnd["Status"] . "</td>
                    <td>
                    <select name='" . $attnd["Username"] . "' >
                    <option value=''><p>Select</p></option>
                        <option value='Approv'><p>Approved</p></option>
                        <option value='Blocked'><p>Blocked</p></option>
                        <option value='Delete'><p>Delete</p></option>
                    </select>
                    </td>

                    
                  </tr>";
                        // echo $attnd["Course Code"];
                        // <td>" .$attnd["Attendence Percent"] . "</td>
                    }


                    ?>
                    <!-- <tr>
                        <td colspan="11" stayle="padding:30px; margin-left:10em;"><input type="submit" name="submit1"
                                value="save"></td>
                    </tr> -->
                </table>
                <!-- <input type="submit" name="submit1" value="save"> -->
            </div>
            <div style="display: grid;height:25px;width: 50px;text-align:center;position:absolute;padding-left: 580px;">
                <input type="submit" name="submit1" class="input button" value="Save">
            </div>
        </form>
        <div class="side-menu">
            <div class="toggle-btn fas fa-chevron-left"></div>
            <a href="#">
                <i class="fab fa-facebook-f"></i>
                Facebook
            </a>

            <a href="#">
                <i class="fab fa-twitter"></i>
                Twitter
            </a>

            <a href="#">
                <i class="fab fa-youtube"></i>
                Youtube
            </a>

            <a href="#">
                <i class="fab fa-instagram"></i>
                Instagram
            </a>

            <!-- <a href="#">
            <i class="fab fa-discord"></i>
            Discord
          </a> -->
        </div>
        <script>
        $(".toggle-btn").click(function() {
            $(".side-menu").toggleClass("active");
            $(this).toggleClass("fa-chevron-right");
        });
        </script>
    </div>
    </div>
    <div>
        <footer id="footer">
            <div class="footer-container">
                <div class="left-col">
                    <img src="images/logo.png" alt="Error loading Image" class="logo" />
                    <div class="social-media">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <p class="rights-text">© 2022 Created By Life Wave All Rights Reserved.</p>
                </div>

                <div class="right-col">
                    <h1>Our Newsletter</h1>
                    <div class="border"></div>
                    <p>Enter Your Email to get our news and updates.</p>
                    <form action="" class="newsletter-form">
                        <input type="text" class="txtb" placeholder="Enter Your Email" />
                        <input type="submit" class="btn" value="Submit" />
                    </form>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>