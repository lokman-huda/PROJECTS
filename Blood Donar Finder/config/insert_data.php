<?php
require_once('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize input to prevent XSS attacks
    $full_name = htmlspecialchars($_POST['full-name'] ?? '');
    $blood_group = htmlspecialchars($_POST['blood-group'] ?? '');
    $gender = htmlspecialchars($_POST['gender'] ?? '');  
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $birthday = htmlspecialchars($_POST['birthday'] ?? '');
    $last_donation = htmlspecialchars($_POST['last-donation'] ?? '');
    $division = htmlspecialchars($_POST['division'] ?? '');
    $district = htmlspecialchars($_POST['district'] ?? '');
    $police_station = htmlspecialchars($_POST['police-station'] ?? '');

    // Ensure your variables are sanitized
    $full_name = mysqli_real_escape_string($conn, $full_name);
    $blood_group = mysqli_real_escape_string($conn, $blood_group);
    $gender = mysqli_real_escape_string($conn, $gender);
    $phone = mysqli_real_escape_string($conn, $phone);
    $birthday = mysqli_real_escape_string($conn, $birthday);
    $last_donation= mysqli_real_escape_string($conn, $last_donation);
    $division = mysqli_real_escape_string($conn, $division);
    $district = mysqli_real_escape_string($conn, $district);
    $police_station = mysqli_real_escape_string($conn, $police_station);

    // Construct the SQL query
    $sql = "INSERT INTO USERS (full_name, blood_group, gender, phone, birthday, last_donation, division, district, police_station) 
                     VALUES ('$full_name', '$blood_group', '$gender', '$phone', '$birthday', '$last_donation', '$division', '$district', '$police_station')";


    // Execute the query
    $insert = mysqli_query($conn, $sql);

    // Check for success
    if ($insert) {
        // echo "<block>Registration Successful<block>";
        header("Location: /Blood/index.php");
       
    }
    
    else {
        echo "Error: " . mysqli_error($conn); // Output detailed error message
    }
}
?>
