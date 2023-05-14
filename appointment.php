<!-- BACK-END -->
<?php

session_start();

include("config.php");
if (isset($_POST["submit"])) {
    $Name = $_POST['name'];
    $Phone = $_POST['phone'];
    $Date = $_POST['date'];
    $Time = $_POST['time'];
    $Adhaar = $_POST['adhaar'];
    $doctor = $_POST['doctor'];
    $error = array();

    // if (empty($Name) or empty($Phone) or empty($Date) or empty($Time) or empty($Adhaar)) {
    //     array_push($error, "All Fields Are Required");
    // }
    $sq = "SELECT * FROM appointment WHERE doctor = '$doctor'";
    $result = mysqli_query($conn, $sq); 
    $num = mysqli_num_rows($result);

    $sq1 = "SELECT * FROM appointment WHERE time = '$Time'";
    $result1 = mysqli_query($conn, $sq1);
    $num1 = mysqli_num_rows($result1);
    if (($Phone < 10)) {
        array_push($error, "Please Enter Valid Number");
    }
    if (($Adhaar < 12)) {
        array_push($error, "Please Enter Valid Adhaar Number");
    }
    elseif($num >= 10)
    {
        $message[] = 'slot no avilable';

    }
    elseif($num1 >= 1)
    {
        
        $message[] = 'slot not avilable';


    }
    




    else {
        $sql = "INSERT INTO appointment (name, phone, date, time, adhaar, doctor) VALUES ('$Name','$Phone','$Date','$Time','$Adhaar','$doctor')";
        mysqli_query($conn, $sql);
        // echo "Booking Successfully";
        $message[] = 'Booking Successfully';
    }

}


?>

<!-- HEADER -->
<?php
include('include/header.php');
?>

<!-- APPOINT_WRAPPER -->
<div class="appoint_wrapper">
    <!-- CONTAINER -->
    <div class="container">
        <!-- SECTION -->
        <section id="appointment-page">
            <!-- FORM -->
            <form class="form" method="POST" action="appointment.php">
                <!-- FORM-HEADING -->
                <div class="form-heading">
                    <h1>Book Appointment</h1>
                </div>
                <!-- TEXT -->
                <div>
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter Your Name" required>
                </div>
                <!-- PHONE -->
                <div>
                    <label for="phone">Phone No</label>
                    <input type="number" name="phone" placeholder="Enter Your Phone No" required>
                </div>
                <!-- DATE -->
                <div>
                    <label for="date">Appointment Date</label>
                    <input type="date" name="date" min="<?PHP echo date('Y-m-d') ?>" required>

                </div>
                <!-- TIME -->
                <div>
                    <label for="time">Appointment Time</label>
                    <input type="time" name="time" min="09:00" max="12:00" required>
                </div>
                <!-- ADHAAR -->
                <div>
                    <label for="adhaar">Aadhaar Number</label>
                    <input type="number" name="adhaar" placeholder="Enter Your Adhaar No" required>
                </div>
                <!-- DOCTOR -->
                <div>
                    <label for="doctor">Doctor Name 👨‍⚕️</label>
                    <select class="doctor" type="text" name="doctor" placeholder="Enter Your Adhaar No" required>
                        <option value="Kiran">Kiran<br>Acharya</option>
                        <option value="Sunil">SUNIL<br>AGRAWAL</option>
                        <option value="Bharat">BHARAT<br>PATEL</option>
                        <option value="Neha">NEHA<br>SHAH</option>
                        <option value="Ram">RAM<br>TAINWALA</option>
                        <option value="Ritu">RITU<br>JAIN</option>
                        <option value="Samir">SAMIR<br>PARIKH</option>
                        <option value="Varsha">VARSHA<br>HARIYANI</option>
                        <option value="Vishal">VISHAL<br>BALDUA</option>
                        <option value="Ramesh">RAMESH<br>YADAV</option>
                    </select>
                </div>

                <?php
                if (isset($message)) {
                    foreach ($message as $message) {
                        echo '
                        <div class="message" style="text-align: center; margin-bottom: 10px;">
                        <span style="color:#000; ">' . $message . '</span>
                        </div>
                        ';
                    }
                }
                ?>
                <br><br>
                <!-- BUTTON -->
                <button class="btn" type="submit" name="submit" formaction="appointment.php">Book</button>
            </form>
        </section>
        <!-- BACK-BUTTON -->
        <div class="back">
            <a href="service.php"><button>Back To Service Page<br></button></a>
            <div class="icons">
                <a href="index.php"><span class="icon"><ion-icon name="arrow-forward-outline"></span></ion-icon></a>
            </div>
        </div>
    </div>
</div>
<?php
include('include/script.php')
    ?>